<?php
/**
 * MyAccountBalance
 *
 * PHP version 5
 *
 * @category Class
 * @package  CedricZiel\OpenAPI\BondoraPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bondora API V1
 *
 * Bondora API version 1
 *
 * The version of the OpenAPI document: v1
 * Contact: investor@bondora.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CedricZiel\OpenAPI\BondoraPHP\Model;

use \ArrayAccess;
use \CedricZiel\OpenAPI\BondoraPHP\ObjectSerializer;

/**
 * MyAccountBalance Class Doc Comment
 *
 * @category Class
 * @description My account balance information
 * @package  CedricZiel\OpenAPI\BondoraPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MyAccountBalance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MyAccountBalance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance' => 'double',
        'reserved' => 'double',
        'bidRequestAmount' => 'double',
        'totalAvailable' => 'double',
        'goGrowAccounts' => '\CedricZiel\OpenAPI\BondoraPHP\Model\GoGrowAccount[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'balance' => 'double',
        'reserved' => 'double',
        'bidRequestAmount' => 'double',
        'totalAvailable' => 'double',
        'goGrowAccounts' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'balance' => 'Balance',
        'reserved' => 'Reserved',
        'bidRequestAmount' => 'BidRequestAmount',
        'totalAvailable' => 'TotalAvailable',
        'goGrowAccounts' => 'GoGrowAccounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'reserved' => 'setReserved',
        'bidRequestAmount' => 'setBidRequestAmount',
        'totalAvailable' => 'setTotalAvailable',
        'goGrowAccounts' => 'setGoGrowAccounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'reserved' => 'getReserved',
        'bidRequestAmount' => 'getBidRequestAmount',
        'totalAvailable' => 'getTotalAvailable',
        'goGrowAccounts' => 'getGoGrowAccounts'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['reserved'] = isset($data['reserved']) ? $data['reserved'] : null;
        $this->container['bidRequestAmount'] = isset($data['bidRequestAmount']) ? $data['bidRequestAmount'] : null;
        $this->container['totalAvailable'] = isset($data['totalAvailable']) ? $data['totalAvailable'] : null;
        $this->container['goGrowAccounts'] = isset($data['goGrowAccounts']) ? $data['goGrowAccounts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets balance
     *
     * @return double|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double|null $balance Account balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets reserved
     *
     * @return double|null
     */
    public function getReserved()
    {
        return $this->container['reserved'];
    }

    /**
     * Sets reserved
     *
     * @param double|null $reserved Account reserved amount
     *
     * @return $this
     */
    public function setReserved($reserved)
    {
        $this->container['reserved'] = $reserved;

        return $this;
    }

    /**
     * Gets bidRequestAmount
     *
     * @return double|null
     */
    public function getBidRequestAmount()
    {
        return $this->container['bidRequestAmount'];
    }

    /**
     * Sets bidRequestAmount
     *
     * @param double|null $bidRequestAmount Api pending auction bid request amount
     *
     * @return $this
     */
    public function setBidRequestAmount($bidRequestAmount)
    {
        $this->container['bidRequestAmount'] = $bidRequestAmount;

        return $this;
    }

    /**
     * Gets totalAvailable
     *
     * @return double|null
     */
    public function getTotalAvailable()
    {
        return $this->container['totalAvailable'];
    }

    /**
     * Sets totalAvailable
     *
     * @param double|null $totalAvailable Available balance
     *
     * @return $this
     */
    public function setTotalAvailable($totalAvailable)
    {
        $this->container['totalAvailable'] = $totalAvailable;

        return $this;
    }

    /**
     * Gets goGrowAccounts
     *
     * @return \CedricZiel\OpenAPI\BondoraPHP\Model\GoGrowAccount[]|null
     */
    public function getGoGrowAccounts()
    {
        return $this->container['goGrowAccounts'];
    }

    /**
     * Sets goGrowAccounts
     *
     * @param \CedricZiel\OpenAPI\BondoraPHP\Model\GoGrowAccount[]|null $goGrowAccounts List of Go and Grow accounts
     *
     * @return $this
     */
    public function setGoGrowAccounts($goGrowAccounts)
    {
        $this->container['goGrowAccounts'] = $goGrowAccounts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


