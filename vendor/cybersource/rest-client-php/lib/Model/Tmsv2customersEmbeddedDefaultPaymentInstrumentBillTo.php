<?php
/**
 * Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tmsv2customers__embedded_defaultPaymentInstrument_billTo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'firstName' => 'string',
        'lastName' => 'string',
        'company' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'locality' => 'string',
        'administrativeArea' => 'string',
        'postalCode' => 'string',
        'country' => 'string',
        'email' => 'string',
        'phoneNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'firstName' => null,
        'lastName' => null,
        'company' => null,
        'address1' => null,
        'address2' => null,
        'locality' => null,
        'administrativeArea' => null,
        'postalCode' => null,
        'country' => null,
        'email' => null,
        'phoneNumber' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'firstName' => 'firstName',
        'lastName' => 'lastName',
        'company' => 'company',
        'address1' => 'address1',
        'address2' => 'address2',
        'locality' => 'locality',
        'administrativeArea' => 'administrativeArea',
        'postalCode' => 'postalCode',
        'country' => 'country',
        'email' => 'email',
        'phoneNumber' => 'phoneNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'lastName' => 'setLastName',
        'company' => 'setCompany',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'locality' => 'setLocality',
        'administrativeArea' => 'setAdministrativeArea',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'phoneNumber' => 'setPhoneNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'lastName' => 'getLastName',
        'company' => 'getCompany',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'locality' => 'getLocality',
        'administrativeArea' => 'getAdministrativeArea',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'phoneNumber' => 'getPhoneNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['administrativeArea'] = isset($data['administrativeArea']) ? $data['administrativeArea'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['firstName']) && (strlen($this->container['firstName']) > 60)) {
            $invalid_properties[] = "invalid value for 'firstName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['lastName']) && (strlen($this->container['lastName']) > 60)) {
            $invalid_properties[] = "invalid value for 'lastName', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['company']) && (strlen($this->container['company']) > 60)) {
            $invalid_properties[] = "invalid value for 'company', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 60)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['address2']) && (strlen($this->container['address2']) > 60)) {
            $invalid_properties[] = "invalid value for 'address2', the character length must be smaller than or equal to 60.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 50)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['administrativeArea']) && (strlen($this->container['administrativeArea']) > 20)) {
            $invalid_properties[] = "invalid value for 'administrativeArea', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 10)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 2)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['email']) && (strlen($this->container['email']) > 255)) {
            $invalid_properties[] = "invalid value for 'email', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['phoneNumber']) && (strlen($this->container['phoneNumber']) > 15)) {
            $invalid_properties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 15.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['firstName']) > 60) {
            return false;
        }
        if (strlen($this->container['lastName']) > 60) {
            return false;
        }
        if (strlen($this->container['company']) > 60) {
            return false;
        }
        if (strlen($this->container['address1']) > 60) {
            return false;
        }
        if (strlen($this->container['address2']) > 60) {
            return false;
        }
        if (strlen($this->container['locality']) > 50) {
            return false;
        }
        if (strlen($this->container['administrativeArea']) > 20) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 10) {
            return false;
        }
        if (strlen($this->container['country']) > 2) {
            return false;
        }
        if (strlen($this->container['email']) > 255) {
            return false;
        }
        if (strlen($this->container['phoneNumber']) > 15) {
            return false;
        }
        return true;
    }


    /**
     * Gets firstName
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     * @param string $firstName Customer’s first name. This name must be the same as the name on the card.
     * @return $this
     */
    public function setFirstName($firstName)
    {
        if (!is_null($firstName) && (strlen($firstName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $firstName when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 60.');
        }

        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     * @param string $lastName Customer’s last name. This name must be the same as the name on the card.
     * @return $this
     */
    public function setLastName($lastName)
    {
        if (!is_null($lastName) && (strlen($lastName) > 60)) {
            throw new \InvalidArgumentException('invalid length for $lastName when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 60.');
        }

        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Name of the customer’s company.
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (strlen($company) > 60)) {
            throw new \InvalidArgumentException('invalid length for $company when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 60.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 Payment card billing street address as it appears on the credit card issuer’s records.
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (strlen($address1) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 60.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Additional address information.
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (strlen($address2) > 60)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 60.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets locality
     * @return string
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     * @param string $locality Payment card billing city.
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 50)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 50.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets administrativeArea
     * @return string
     */
    public function getAdministrativeArea()
    {
        return $this->container['administrativeArea'];
    }

    /**
     * Sets administrativeArea
     * @param string $administrativeArea State or province of the billing address. Use the State, Province, and Territory Codes for the United States and Canada.
     * @return $this
     */
    public function setAdministrativeArea($administrativeArea)
    {
        if (!is_null($administrativeArea) && (strlen($administrativeArea) > 20)) {
            throw new \InvalidArgumentException('invalid length for $administrativeArea when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 20.');
        }

        $this->container['administrativeArea'] = $administrativeArea;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Postal code for the billing address. The postal code must consist of 5 to 9 digits.  When the billing country is the U.S., the 9-digit postal code must follow this format: [5 digits][dash][4 digits]  **Example** `12345-6789`  When the billing country is Canada, the 6-digit postal code must follow this format: [alpha][numeric][alpha][space][numeric][alpha][numeric]  **Example** `A1B 2C3`
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 10.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     * @param string $country Payment card billing country. Use the two-character ISO Standard Country Codes.
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Customer's email address, including the full domain name.
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (strlen($email) > 255)) {
            throw new \InvalidArgumentException('invalid length for $email when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 255.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber Customer’s phone number.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (strlen($phoneNumber) > 15)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling Tmsv2customersEmbeddedDefaultPaymentInstrumentBillTo., must be smaller than or equal to 15.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


