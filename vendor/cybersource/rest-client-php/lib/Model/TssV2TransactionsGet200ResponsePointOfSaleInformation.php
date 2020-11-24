<?php
/**
 * TssV2TransactionsGet200ResponsePointOfSaleInformation
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
 * TssV2TransactionsGet200ResponsePointOfSaleInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TssV2TransactionsGet200ResponsePointOfSaleInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'tssV2TransactionsGet200Response_pointOfSaleInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminalId' => 'string',
        'entryMode' => 'string',
        'terminalCapability' => 'int',
        'emv' => '\CyberSource\Model\Ptsv2paymentsidreversalsPointOfSaleInformationEmv'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminalId' => null,
        'entryMode' => null,
        'terminalCapability' => null,
        'emv' => null
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
        'terminalId' => 'terminalId',
        'entryMode' => 'entryMode',
        'terminalCapability' => 'terminalCapability',
        'emv' => 'emv'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'terminalId' => 'setTerminalId',
        'entryMode' => 'setEntryMode',
        'terminalCapability' => 'setTerminalCapability',
        'emv' => 'setEmv'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'terminalId' => 'getTerminalId',
        'entryMode' => 'getEntryMode',
        'terminalCapability' => 'getTerminalCapability',
        'emv' => 'getEmv'
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
        $this->container['terminalId'] = isset($data['terminalId']) ? $data['terminalId'] : null;
        $this->container['entryMode'] = isset($data['entryMode']) ? $data['entryMode'] : null;
        $this->container['terminalCapability'] = isset($data['terminalCapability']) ? $data['terminalCapability'] : null;
        $this->container['emv'] = isset($data['emv']) ? $data['emv'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['terminalId']) && (strlen($this->container['terminalId']) > 8)) {
            $invalid_properties[] = "invalid value for 'terminalId', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['entryMode']) && (strlen($this->container['entryMode']) > 11)) {
            $invalid_properties[] = "invalid value for 'entryMode', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['terminalCapability']) && ($this->container['terminalCapability'] > 5)) {
            $invalid_properties[] = "invalid value for 'terminalCapability', must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['terminalCapability']) && ($this->container['terminalCapability'] < 1)) {
            $invalid_properties[] = "invalid value for 'terminalCapability', must be bigger than or equal to 1.";
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

        if (strlen($this->container['terminalId']) > 8) {
            return false;
        }
        if (strlen($this->container['entryMode']) > 11) {
            return false;
        }
        if ($this->container['terminalCapability'] > 5) {
            return false;
        }
        if ($this->container['terminalCapability'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets terminalId
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminalId'];
    }

    /**
     * Sets terminalId
     * @param string $terminalId Identifier for the terminal at your retail location. You can define this value yourself, but consult the processor for requirements.  #### CyberSource through VisaNet A list of all possible values is stored in your CyberSource account. If terminal ID validation is enabled for your CyberSource account, the value you send for this field is validated against the list each time you include the field in a request. To enable or disable terminal ID validation, contact CyberSource Customer Support.  When you do not include this field in a request, CyberSource uses the default value that is defined in your CyberSource account.  #### FDC Nashville Global To have your account configured to support this field, contact CyberSource Customer Support. This value must be a value that FDC Nashville Global issued to you.  #### For Payouts This field is applicable for CyberSource through VisaNet.  #### GPX Identifier for the terminal at your retail location. A list of all possible values is stored in your account. If terminal ID validation is enabled for your account, the value you send for this field is validated against the list each time you include the field in a request. To enable or disable terminal ID validation, contact customer support.  When you do not include this field in a request, the default value that is defined in your account is used.  Optional for authorizations.  #### Used by **Authorization** Optional for the following processors. When you do not include this field in a request, the default value that is defined in your account is used.   - American Express Direct   - Credit Mutuel-CIC   - FDC Nashville Global   - SIX - Chase Paymentech Solutions: Optional field. If you include this field in your request, you must also include `pointOfSaleInformation.catLevel`. - FDMS Nashville: The default value that is defined in your account is used. - GPX - OmniPay Direct: Optional field.  For the following processors, this field is not used. - GPN - JCN Gateway - RBS WorldPay Atlanta - TSYS Acquiring Solutions - Worldpay VAP  #### Card Present reply Terminal identifier assigned by the acquirer. This value must be printed on the receipt.
     * @return $this
     */
    public function setTerminalId($terminalId)
    {
        if (!is_null($terminalId) && (strlen($terminalId) > 8)) {
            throw new \InvalidArgumentException('invalid length for $terminalId when calling TssV2TransactionsGet200ResponsePointOfSaleInformation., must be smaller than or equal to 8.');
        }

        $this->container['terminalId'] = $terminalId;

        return $this;
    }

    /**
     * Gets entryMode
     * @return string
     */
    public function getEntryMode()
    {
        return $this->container['entryMode'];
    }

    /**
     * Sets entryMode
     * @param string $entryMode Method of entering payment card information into the POS terminal. Possible values:   - `contact`: Read from direct contact with chip card.  - `contactless`: Read from a contactless interface using chip data.  - `keyed`: Manually keyed into POS terminal. This value is not supported on OmniPay Direct.  - `msd`: Read from a contactless interface using magnetic stripe data (MSD). This value is not supported on OmniPay Direct.  - `swiped`: Read from credit card magnetic stripe.  The `contact`, `contactless`, and `msd` values are supported only for EMV transactions.  #### Used by **Authorization** Required field.  #### Card Present Card present information about EMV applies only to credit card processing and PIN debit processing. All other card present information applies only to credit card processing.  #### PIN debit Required for a PIN debit purchase and a PIN debit credit request.
     * @return $this
     */
    public function setEntryMode($entryMode)
    {
        if (!is_null($entryMode) && (strlen($entryMode) > 11)) {
            throw new \InvalidArgumentException('invalid length for $entryMode when calling TssV2TransactionsGet200ResponsePointOfSaleInformation., must be smaller than or equal to 11.');
        }

        $this->container['entryMode'] = $entryMode;

        return $this;
    }

    /**
     * Gets terminalCapability
     * @return int
     */
    public function getTerminalCapability()
    {
        return $this->container['terminalCapability'];
    }

    /**
     * Sets terminalCapability
     * @param int $terminalCapability POS terminal’s capability. Possible values:   - `1`: Terminal has a magnetic stripe reader only.  - `2`: Terminal has a magnetic stripe reader and manual entry capability.  - `3`: Terminal has manual entry capability only.  - `4`: Terminal can read chip cards.  - `5`: Terminal can read contactless chip cards; cannot use contact to read chip cards.  For an EMV transaction, the value of this field must be `4` or `5`.  #### PIN debit Required for PIN debit purchase and PIN debit credit request.  #### Used by **Authorization** Required for the following processors: - American Express Direct - Chase Paymentech Solutions - Credit Mutuel-CIC - FDC Nashville Global - FDMS Nashville - OmniPay Direct - SIX - Worldpay VAP  Optional for the following processors: - CyberSource through VisaNet - GPN - GPX - JCN Gateway - RBS WorldPay Atlanta - TSYS Acquiring Solutions
     * @return $this
     */
    public function setTerminalCapability($terminalCapability)
    {

        if (!is_null($terminalCapability) && ($terminalCapability > 5)) {
            throw new \InvalidArgumentException('invalid value for $terminalCapability when calling TssV2TransactionsGet200ResponsePointOfSaleInformation., must be smaller than or equal to 5.');
        }
        if (!is_null($terminalCapability) && ($terminalCapability < 1)) {
            throw new \InvalidArgumentException('invalid value for $terminalCapability when calling TssV2TransactionsGet200ResponsePointOfSaleInformation., must be bigger than or equal to 1.');
        }

        $this->container['terminalCapability'] = $terminalCapability;

        return $this;
    }

    /**
     * Gets emv
     * @return \CyberSource\Model\Ptsv2paymentsidreversalsPointOfSaleInformationEmv
     */
    public function getEmv()
    {
        return $this->container['emv'];
    }

    /**
     * Sets emv
     * @param \CyberSource\Model\Ptsv2paymentsidreversalsPointOfSaleInformationEmv $emv
     * @return $this
     */
    public function setEmv($emv)
    {
        $this->container['emv'] = $emv;

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

