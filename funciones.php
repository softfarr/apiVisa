<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php

    // Initialization of constant data
    // Try with your own credentaials
    // Get Key ID, Secret Key and Merchant Id from EBC portal
    $request_host = "apitest.cybersource.com";
    $merchant_id = "softfarr";
    $merchant_key_id = "906adf20-2200-4fee-b249-04fe1e36fc8e";
    $merchant_secret_key = "qzjjKoikt2oxvF0I9LeM6zlQg76l3ZLAFuHup2x+m4U=";

    function getScreenDataToJson(array $POST)
    {
        $json = "
            {
            \"clientReferenceInformation\": {
                \"code\": \"" . (isset($_POST['code']) ? $_POST['code'] : '') . "\"
            },
            \"paymentInformation\": {
                \"card\": {
                    \"number\": \"" . (isset($_POST['number']) ? $_POST['number'] : '') . "\",
                    \"expirationMonth\": \"" . (isset($_POST['expirationMonth']) ? $_POST['expirationMonth'] : '') . "\",
                    \"expirationYear\": \"" . (isset($_POST['expirationYear']) ? $_POST['expirationYear'] : '') . "\"
                }
            },
            \"orderInformation\": {
                \"amountDetails\": {
                    \"totalAmount\": \"" . (isset($_POST['totalAmount']) ? $_POST['totalAmount'] : '') . "\",
                    \"currency\": \"" . (isset($_POST['currency']) ? $_POST['currency'] : '') . "\"
                },
                \"billTo\": {
                    \"firstName\": \"" . (isset($_POST['firstName']) ? $_POST['firstName'] : '') . "\",
                    \"lastName\": \"" . (isset($_POST['lastName']) ? $_POST['lastName'] : '') . "\",
                    \"address1\": \"" . (isset($_POST['address1']) ? $_POST['address1'] : '') . "\",
                    \"locality\": \"" . (isset($_POST['locality']) ? $_POST['locality'] : '') . "\",
                    \"administrativeArea\": \"" . (isset($_POST['administrativeArea']) ? $_POST['administrativeArea'] : '') . "\",
                    \"postalCode\": \"" . (isset($_POST['postalCode']) ? $_POST['postalCode'] : '') . "\",
                    \"country\": \"" . (isset($_POST['country']) ? $_POST['country'] : '') . "\",
                    \"email\": \"" . (isset($_POST['email']) ? $_POST['email'] : '') . "\",
                    \"phoneNumber\": \"" . (isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '') . "\"
                }
            }
            }
            ";
        return $json;
    }

    require_once __DIR__ . DIRECTORY_SEPARATOR . '../vendor/autoload.php';

    // Function to parse response headers
    // ref/credit: http://php.net/manual/en/function.http-parse-headers.php#112986
    function httpParseHeaders($raw_headers)
    {
        $headers = [];
        $key = '';
        foreach (explode("\n", $raw_headers) as $h) {
            $h = explode(':', $h, 2);
            if (isset($h[1])) {
                if (!isset($headers[$h[0]])) {
                    $headers[$h[0]] = trim($h[1]);
                } elseif (is_array($headers[$h[0]])) {
                    $headers[$h[0]] = array_merge($headers[$h[0]], [trim($h[1])]);
                } else {
                    $headers[$h[0]] = array_merge([$headers[$h[0]]], [trim($h[1])]);
                }
                $key = $h[0];
            } else {
                if (substr($h[0], 0, 1) === "\t") {
                    $headers[$key] .= "\r\n\t" . trim($h[0]);
                } elseif (!$key) {
                    $headers[0] = trim($h[0]);
                }
                trim($h[0]);
            }
        }
        return $headers;
    }

    // Function used to generate the digest for the given payload
    function GenerateDigest($requestPayload)
    {
        $utf8EncodedString = utf8_encode($requestPayload);
        $digestEncode = hash("sha256", $utf8EncodedString, true);
        return base64_encode($digestEncode);
    }

    // Function to generate the HTTP Signature
    // param: resourcePath - denotes the resource being accessed
    // param: httpMethod - denotes the HTTP verb
    // param: currentDate - stores the current timestamp
    function GetHttpSignature($resourcePath, $httpMethod, $currentDate)
    {
        global $payload;
        global $merchant_id;
        global $request_host;
        global $merchant_secret_key;
        global $merchant_key_id;

        $digest = "";

        if ($httpMethod == "get") {
            $signatureString = "host: " . $request_host . "\ndate: " . $currentDate . "\n(request-target): " . $httpMethod . " " . $resourcePath . "\nv-c-merchant-id: " . $merchant_id;
            $headerString = "host date (request-target) v-c-merchant-id";
        } else if ($httpMethod == "post") {
            //Get digest data        
            $digest = GenerateDigest($payload);

            $signatureString = "host: " . $request_host . "\ndate: " . $currentDate . "\n(request-target): " . $httpMethod . " " . $resourcePath . "\ndigest: SHA-256=" . $digest . "\nv-c-merchant-id: " . $merchant_id;
            $headerString = "host date (request-target) digest v-c-merchant-id";
        }

        $signatureByteString = utf8_encode($signatureString);
        $decodeKey = base64_decode($merchant_secret_key);
        $signature = base64_encode(hash_hmac("sha256", $signatureByteString, $decodeKey, true));
        $signatureHeader = array(
            'keyid="' . $merchant_key_id . '"',
            'algorithm="HmacSHA256"',
            'headers="' . $headerString . '"',
            'signature="' . $signature . '"'
        );

        $signatureToken = "Signature:" . implode(", ", $signatureHeader);

        $host = "Host:" . $request_host;
        $vcMerchant = "v-c-merchant-id:" . $merchant_id;
        $headers = array(
            $vcMerchant,
            $signatureToken,
            $host,
            'Date:' . $currentDate
        );

        if ($httpMethod == "post") {
            $digestArray = array("Digest: SHA-256=" . $digest);
            $headers = array_merge($headers, $digestArray);
            echo "\t" . $digestArray[0] . PHP_EOL . "<br>";
        }

        echo "\t" . $signatureToken . PHP_EOL . "<br>";

        return $headers;
    }

    // HTTP POST request
    function ProcessPost()
    {
        global $payload;
        global $request_host;
        global $merchant_id;

        $resource = "/pts/v2/payments/";
        $method = "post";
        $statusCode = -1;
        $url = "https://" . $request_host . $resource;

        $resource = utf8_encode($resource);

        $date = date("D, d M Y G:i:s ") . "GMT";

        $signatureString = "";

        $headerParams = [];
        $headers = [];

        $headerParams['Accept'] = 'application/hal+json;charset=utf-8';
        $headerParams['Content-Type'] = 'application/json;charset=utf-8';

        foreach ($headerParams as $key => $val) {
            $headers[] = "$key: $val";
        }

        echo "\n -- RequestURL -- " . PHP_EOL . "<br>";
        echo "\tURL : " . $url . "<br>";
        echo "\n -- HTTP Headers -- " . PHP_EOL . "<br>";
        echo "\tContent-Type : " . 'application/json;charset=utf-8' . PHP_EOL . "<br>";
        echo "\tv-c-merchant-id : " . $merchant_id . PHP_EOL . "<br>";
        echo "\tDate : " . $date . PHP_EOL . "<br>";
        echo "\tHost : " . $request_host . PHP_EOL . "<br>";

        $authHeaders = GetHttpSignature($resource, $method, $date);
        $headerParams = array_merge($headers, $authHeaders);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headerParams);

        curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cybersourceRestSamplesPhp/Resources/cacert.pem');

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_HEADER, 1);

        curl_setopt($curl, CURLOPT_VERBOSE, 0);

        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0");

        $response = curl_exec($curl);
        // echo $response."<br>";
        // echo json_encode($response)."<br>";
        // var_dump($response);

        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_header = httpParseHeaders(substr($response, 0, $http_header_size));
        $http_body = substr($response, $http_header_size);
        $response_info = curl_getinfo($curl);

        if ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
            $statusCode = 0;
            $data = json_decode($http_body);
            echo "<br>" . "\n -- STATUS -- " . $data['status'] . "<br>";
            var_dump($http_body);
            var_dump($data);
            if (json_last_error() > 0) {
                $data = $http_body;
            }
        }

        echo "\n -- Response Message -- " . PHP_EOL . "<br>";
        echo "\tResponse Code :" . strval($response_info['http_code']) . PHP_EOL . "<br>";
        echo "\tv-c-correlation-id :" . $http_header['v-c-correlation-id'] . PHP_EOL . "<br>";
        echo "\tResponse Data :\n" . "<br>";
        //   var_dump(strval($http_body));
        echo PHP_EOL . PHP_EOL . "<br>";

        return $statusCode;
    }

    // HTTP POST request
    function ProcessPostReversal()
    {
        global $payload;
        global $request_host;
        global $merchant_id;
        $id=$_POST['id'];
        $code=$_POST['code'];
        $totalAmount=$_POST['totalAmount'];

        $payload="
        {
            \"clientReferenceInformation\": {
                \"code\": \"".$code."\"
            },
            \"reversalInformation\": {
                \"amountDetails\": {
                    \"totalAmount\": \"".$totalAmount."\"
                },
                \"reason\": \"testing\"
            }
        }
        ";

        $resource = "/pts/v2/payments/".$id."/reversals/";
        $method = "post";
        $statusCode = -1;
        $url = "https://" . $request_host . $resource;

        $resource = utf8_encode($resource);

        $date = date("D, d M Y G:i:s ") . "GMT";

        $signatureString = "";

        $headerParams = [];
        $headers = [];

        $headerParams['Accept'] = 'application/hal+json;charset=utf-8';
        $headerParams['Content-Type'] = 'application/json;charset=utf-8';

        foreach ($headerParams as $key => $val) {
            $headers[] = "$key: $val";
        }

        echo "\n -- RequestURL -- " . PHP_EOL . "<br>";
        echo "\tURL : " . $url . "<br>";
        echo "\n -- HTTP Headers -- " . PHP_EOL . "<br>";
        echo "\tContent-Type : " . 'application/json;charset=utf-8' . PHP_EOL . "<br>";
        echo "\tv-c-merchant-id : " . $merchant_id . PHP_EOL . "<br>";
        echo "\tDate : " . $date . PHP_EOL . "<br>";
        echo "\tHost : " . $request_host . PHP_EOL . "<br>";

        $authHeaders = GetHttpSignature($resource, $method, $date);
        $headerParams = array_merge($headers, $authHeaders);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headerParams);

        curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cybersourceRestSamplesPhp/Resources/cacert.pem');

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_HEADER, 1);

        curl_setopt($curl, CURLOPT_VERBOSE, 0);

        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0");

        $response = curl_exec($curl);
        // echo $response."<br>";
        // echo json_encode($response)."<br>";
        // var_dump($response);

        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_header = httpParseHeaders(substr($response, 0, $http_header_size));
        $http_body = substr($response, $http_header_size);
        $response_info = curl_getinfo($curl);

        if ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
            $statusCode = 0;
            $data = json_decode($http_body);
            echo "<br>" . "\n -- STATUS -- " . $data['status'] . "<br>";
            var_dump($http_body);
            var_dump($data);
            if (json_last_error() > 0) {
                $data = $http_body;
            }
        }

        echo "\n -- Response Message -- " . PHP_EOL . "<br>";
        echo "\tResponse Code :" . strval($response_info['http_code']) . PHP_EOL . "<br>";
        echo "\tv-c-correlation-id :" . $http_header['v-c-correlation-id'] . PHP_EOL . "<br>";
        echo "\tResponse Data :\n" . "<br>";
        //   var_dump(strval($http_body));
        echo PHP_EOL . PHP_EOL . "<br>";

        return $statusCode;
    }

    // HTTP GET request
    function ProcessGet()
    {
        global $request_host;
        global $merchant_id;
        $dateGmtStr = date("Y-m-d") . "T00:00:00Z";
        $dateGmtEnd = date("Y-m-d") . "T23:59:59Z";

        $resource = '/reporting/v3/reports?organizationId=' . $merchant_id . '&startTime=' . $dateGmtStr . '&endTime=' . $dateGmtEnd . '&timeQueryType=executedTime&reportMimeType=application/xml&';
        $method = "get";
        $statusCode = -1;
        $url = "https://" . $request_host . $resource;

        $resource = utf8_encode($resource);

        $date = date("D, d M Y G:i:s ") . "GMT";

        $signatureString = "";

        $headerParams = [];
        $headers = [];

        $headerParams['Accept'] = 'application/hal+json;charset=utf-8';
        $headerParams['Content-Type'] = 'application/json;charset=utf-8';

        foreach ($headerParams as $key => $val) {
            $headers[] = "$key: $val";
        }

        echo "\n -- RequestURL -- " . PHP_EOL . "<br>";
        echo "\tURL : " . $url . "<br>";
        echo "\n -- HTTP Headers -- " . PHP_EOL . "<br>";
        echo "\tContent-Type : " . 'application/json;charset=utf-8' . PHP_EOL . "<br>";
        echo "\tv-c-merchant-id : " . $merchant_id . PHP_EOL . "<br>";
        echo "\tDate : " . $date . PHP_EOL . "<br>";
        echo "\tHost : " . $request_host . PHP_EOL . "<br>";

        $authHeaders = GetHttpSignature($resource, $method, $date);
        $headerParams = array_merge($headers, $authHeaders);

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headerParams);

        curl_setopt($curl, CURLOPT_CAINFO, __DIR__ . DIRECTORY_SEPARATOR . 'cybersourceRestSamplesPhp/Resources/cacert.pem');

        curl_setopt($curl, CURLOPT_URL, $url);

        curl_setopt($curl, CURLOPT_HEADER, 1);

        curl_setopt($curl, CURLOPT_VERBOSE, 0);

        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0");

        $response = curl_exec($curl);

        echo $response . "<br>";
        // var_dump($response);

        $http_header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $http_header = httpParseHeaders(substr($response, 0, $http_header_size));
        $http_body = substr($response, $http_header_size);
        $response_info = curl_getinfo($curl);

        if ($response_info['http_code'] >= 200 && $response_info['http_code'] <= 299) {
            $statusCode = 0;
            $data = json_decode($http_body);
            if (json_last_error() > 0) {
                $data = $http_body;
            }
        }

        echo "\n -- Response Message -- " . PHP_EOL . "<br>";
        echo "\tResponse Code :" . strval($response_info['http_code']) . PHP_EOL . "<br>";
        echo "\tv-c-correlation-id :" . $http_header['v-c-correlation-id'] . PHP_EOL . "<br>";
        echo "\tResponse Data :\n" . "<br>";
        //   var_dump(strval($http_body));
        echo PHP_EOL . PHP_EOL . "<br>";

        return $statusCode;
    }

    function simpleAuthorization()
    {
        // HTTP POST REQUEST
        echo "\n\nSample 1: POST call - CyberSource Payments API - HTTP POST Payment request" . "<br>";
        $statusCode = ProcessPost();

        if ($statusCode == 0) {
            echo "STATUS : SUCCESS (HTTP Status = " . strval($statusCode) . ")" . "<br>" . "<br>";
            echo "Please, get login in https://ebctest.cybersource.com/ebc2/ with your credentials and";
            echo " in Transactions section, look for " . (isset($_POST['code']) ? '(' . $_POST['code'] . ')' : '') . " status' transaction";

            //   // HTTP GET REQUEST
            //   echo "\n\nSample 2: GET call - CyberSource Reporting API - HTTP GET Reporting request"."<br>";
            //   $statusCode = ProcessGet();

            //   if ($statusCode == 0)
            //       echo "STATUS : SUCCESS (HTTP Status = " . strval($statusCode) . ")"."<br>"."<br>";
            //   else
            //       echo "STATUS : ERROR (HTTP Status = " . strval($statusCode) . ")"."<br>"."<br>";
        } else
            echo "STATUS : ERROR (HTTP Status = " . strval($statusCode) . ")" . "<br>" . "<br>";
    }

    function authorizationReversal()
    {
        // HTTP POST REQUEST
        echo "\n\nSample 1: POST call - CyberSource Payments API - HTTP POST Payment request" . "<br>";
        $statusCode = ProcessPostReversal();

        if ($statusCode == 0) {
            echo "STATUS : SUCCESS (HTTP Status = " . strval($statusCode) . ")" . "<br>" . "<br>";
            echo "Please, get login in https://ebctest.cybersource.com/ebc2/ with your credentials and";
            echo " in Transactions section, look for " . (isset($_POST['code']) ? '(' . $_POST['code'] . ')' : '') . " status' transaction";

            //   // HTTP GET REQUEST
            //   echo "\n\nSample 2: GET call - CyberSource Reporting API - HTTP GET Reporting request"."<br>";
            //   $statusCode = ProcessGet();

            //   if ($statusCode == 0)
            //       echo "STATUS : SUCCESS (HTTP Status = " . strval($statusCode) . ")"."<br>"."<br>";
            //   else
            //       echo "STATUS : ERROR (HTTP Status = " . strval($statusCode) . ")"."<br>"."<br>";
        } else
            echo "STATUS : ERROR (HTTP Status = " . strval($statusCode) . ")" . "<br>" . "<br>";
     }

    ?>
    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

</body>

</html>