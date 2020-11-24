<?php
/**
 * PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination
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
 * PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_riskInformation_travel_lastDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'country' => 'string',
        'locality' => 'string',
        'latitude' => 'string',
        'longitude' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'country' => null,
        'locality' => null,
        'latitude' => null,
        'longitude' => null
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
        'country' => 'country',
        'locality' => 'locality',
        'latitude' => 'latitude',
        'longitude' => 'longitude'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'locality' => 'setLocality',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'locality' => 'getLocality',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude'
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
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 90)) {
            $invalid_properties[] = "invalid value for 'country', the character length must be smaller than or equal to 90.";
        }

        if (!is_null($this->container['locality']) && (strlen($this->container['locality']) > 90)) {
            $invalid_properties[] = "invalid value for 'locality', the character length must be smaller than or equal to 90.";
        }

        if (!is_null($this->container['latitude']) && (strlen($this->container['latitude']) > 10)) {
            $invalid_properties[] = "invalid value for 'latitude', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['longitude']) && (strlen($this->container['longitude']) > 10)) {
            $invalid_properties[] = "invalid value for 'longitude', the character length must be smaller than or equal to 10.";
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

        if (strlen($this->container['country']) > 90) {
            return false;
        }
        if (strlen($this->container['locality']) > 90) {
            return false;
        }
        if (strlen($this->container['latitude']) > 10) {
            return false;
        }
        if (strlen($this->container['longitude']) > 10) {
            return false;
        }
        return true;
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
     * @param string $country Country of last destination on the route.
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 90)) {
            throw new \InvalidArgumentException('invalid length for $country when calling PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination., must be smaller than or equal to 90.');
        }

        $this->container['country'] = $country;

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
     * @param string $locality City of last destination on the route.
     * @return $this
     */
    public function setLocality($locality)
    {
        if (!is_null($locality) && (strlen($locality) > 90)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination., must be smaller than or equal to 90.');
        }

        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets latitude
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     * @param string $latitude Latitude of last destination on the route.
     * @return $this
     */
    public function setLatitude($latitude)
    {
        if (!is_null($latitude) && (strlen($latitude) > 10)) {
            throw new \InvalidArgumentException('invalid length for $latitude when calling PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination., must be smaller than or equal to 10.');
        }

        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     * @param string $longitude Longitude of last destination on the route.
     * @return $this
     */
    public function setLongitude($longitude)
    {
        if (!is_null($longitude) && (strlen($longitude) > 10)) {
            throw new \InvalidArgumentException('invalid length for $longitude when calling PtsV2PaymentsPost201ResponseRiskInformationTravelLastDestination., must be smaller than or equal to 10.');
        }

        $this->container['longitude'] = $longitude;

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


