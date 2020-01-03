<?php
/**
 * ApiBidSummariesRequest
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
 * ApiBidSummariesRequest Class Doc Comment
 *
 * @category Class
 * @description Request object for filtering api bids
 * @package  CedricZiel\OpenAPI\BondoraPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiBidSummariesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiBidSummariesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bidStatusCode' => 'int',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'pageSize' => 'int',
        'pageNr' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bidStatusCode' => 'int32',
        'startDate' => 'date-time',
        'endDate' => 'date-time',
        'pageSize' => 'int32',
        'pageNr' => 'int32'
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
        'bidStatusCode' => 'BidStatusCode',
        'startDate' => 'StartDate',
        'endDate' => 'EndDate',
        'pageSize' => 'PageSize',
        'pageNr' => 'PageNr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bidStatusCode' => 'setBidStatusCode',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'pageSize' => 'setPageSize',
        'pageNr' => 'setPageNr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bidStatusCode' => 'getBidStatusCode',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'pageSize' => 'getPageSize',
        'pageNr' => 'getPageNr'
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

    const BID_STATUS_CODE_0 = 0;
    const BID_STATUS_CODE_1 = 1;
    const BID_STATUS_CODE_2 = 2;
    const BID_STATUS_CODE_3 = 3;
    const BID_STATUS_CODE_4 = 4;
    const BID_STATUS_CODE_5 = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBidStatusCodeAllowableValues()
    {
        return [
            self::BID_STATUS_CODE_0,
            self::BID_STATUS_CODE_1,
            self::BID_STATUS_CODE_2,
            self::BID_STATUS_CODE_3,
            self::BID_STATUS_CODE_4,
            self::BID_STATUS_CODE_5,
        ];
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
        $this->container['bidStatusCode'] = isset($data['bidStatusCode']) ? $data['bidStatusCode'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNr'] = isset($data['pageNr']) ? $data['pageNr'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBidStatusCodeAllowableValues();
        if (!is_null($this->container['bidStatusCode']) && !in_array($this->container['bidStatusCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bidStatusCode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 20000)) {
            $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 20000.";
        }

        if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
            $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['pageNr']) && ($this->container['pageNr'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'pageNr', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['pageNr']) && ($this->container['pageNr'] < 1)) {
            $invalidProperties[] = "invalid value for 'pageNr', must be bigger than or equal to 1.";
        }

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
     * Gets bidStatusCode
     *
     * @return int|null
     */
    public function getBidStatusCode()
    {
        return $this->container['bidStatusCode'];
    }

    /**
     * Sets bidStatusCode
     *
     * @param int|null $bidStatusCode Bid status code
     *
     * @return $this
     */
    public function setBidStatusCode($bidStatusCode)
    {
        $allowedValues = $this->getBidStatusCodeAllowableValues();
        if (!is_null($bidStatusCode) && !in_array($bidStatusCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bidStatusCode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bidStatusCode'] = $bidStatusCode;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate Start date
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate End date
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize Max items in result, up to 20000
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {

        if (!is_null($pageSize) && ($pageSize > 20000)) {
            throw new \InvalidArgumentException('invalid value for $pageSize when calling ApiBidSummariesRequest., must be smaller than or equal to 20000.');
        }
        if (!is_null($pageSize) && ($pageSize < 1)) {
            throw new \InvalidArgumentException('invalid value for $pageSize when calling ApiBidSummariesRequest., must be bigger than or equal to 1.');
        }

        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets pageNr
     *
     * @return int|null
     */
    public function getPageNr()
    {
        return $this->container['pageNr'];
    }

    /**
     * Sets pageNr
     *
     * @param int|null $pageNr Result page nr
     *
     * @return $this
     */
    public function setPageNr($pageNr)
    {

        if (!is_null($pageNr) && ($pageNr > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $pageNr when calling ApiBidSummariesRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($pageNr) && ($pageNr < 1)) {
            throw new \InvalidArgumentException('invalid value for $pageNr when calling ApiBidSummariesRequest., must be bigger than or equal to 1.');
        }

        $this->container['pageNr'] = $pageNr;

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

