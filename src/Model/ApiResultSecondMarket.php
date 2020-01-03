<?php
/**
 * ApiResultSecondMarket
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
 * ApiResultSecondMarket Class Doc Comment
 *
 * @category Class
 * @package  CedricZiel\OpenAPI\BondoraPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiResultSecondMarket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiResultSecondMarket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pageSize' => 'int',
        'pageNr' => 'int',
        'totalCount' => 'int',
        'count' => 'int',
        'payload' => '\CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketItem[]',
        'success' => 'bool',
        'errors' => '\CedricZiel\OpenAPI\BondoraPHP\Model\ApiError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pageSize' => 'int32',
        'pageNr' => 'int32',
        'totalCount' => 'int32',
        'count' => 'int32',
        'payload' => null,
        'success' => null,
        'errors' => null
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
        'pageSize' => 'PageSize',
        'pageNr' => 'PageNr',
        'totalCount' => 'TotalCount',
        'count' => 'Count',
        'payload' => 'Payload',
        'success' => 'Success',
        'errors' => 'Errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageSize' => 'setPageSize',
        'pageNr' => 'setPageNr',
        'totalCount' => 'setTotalCount',
        'count' => 'setCount',
        'payload' => 'setPayload',
        'success' => 'setSuccess',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageSize' => 'getPageSize',
        'pageNr' => 'getPageNr',
        'totalCount' => 'getTotalCount',
        'count' => 'getCount',
        'payload' => 'getPayload',
        'success' => 'getSuccess',
        'errors' => 'getErrors'
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
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNr'] = isset($data['pageNr']) ? $data['pageNr'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 0)) {
            $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['pageNr']) && ($this->container['pageNr'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'pageNr', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['pageNr']) && ($this->container['pageNr'] < 1)) {
            $invalidProperties[] = "invalid value for 'pageNr', must be bigger than or equal to 1.";
        }

        if ($this->container['totalCount'] === null) {
            $invalidProperties[] = "'totalCount' can't be null";
        }
        if (($this->container['totalCount'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['totalCount'] < 0)) {
            $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
        }

        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
        if (($this->container['count'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['count'] < 0)) {
            $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
        }

        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
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
     * @param int|null $pageSize Requested Max items in result
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {

        if (!is_null($pageSize) && ($pageSize > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $pageSize when calling ApiResultSecondMarket., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($pageSize) && ($pageSize < 0)) {
            throw new \InvalidArgumentException('invalid value for $pageSize when calling ApiResultSecondMarket., must be bigger than or equal to 0.');
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
     * @param int|null $pageNr Requested page nr
     *
     * @return $this
     */
    public function setPageNr($pageNr)
    {

        if (!is_null($pageNr) && ($pageNr > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $pageNr when calling ApiResultSecondMarket., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($pageNr) && ($pageNr < 1)) {
            throw new \InvalidArgumentException('invalid value for $pageNr when calling ApiResultSecondMarket., must be bigger than or equal to 1.');
        }

        $this->container['pageNr'] = $pageNr;

        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int $totalCount Total number of items found
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {

        if (($totalCount > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $totalCount when calling ApiResultSecondMarket., must be smaller than or equal to 2147483647.');
        }
        if (($totalCount < 0)) {
            throw new \InvalidArgumentException('invalid value for $totalCount when calling ApiResultSecondMarket., must be bigger than or equal to 0.');
        }

        $this->container['totalCount'] = $totalCount;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Number of items returned
     *
     * @return $this
     */
    public function setCount($count)
    {

        if (($count > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $count when calling ApiResultSecondMarket., must be smaller than or equal to 2147483647.');
        }
        if (($count < 0)) {
            throw new \InvalidArgumentException('invalid value for $count when calling ApiResultSecondMarket., must be bigger than or equal to 0.');
        }

        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketItem[]|null
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param \CedricZiel\OpenAPI\BondoraPHP\Model\SecondMarketItem[]|null $payload The payload of the response. Type depends on the API request.
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Indicates if the request was successfull or not.              true if the request was handled successfully, false otherwise.
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \CedricZiel\OpenAPI\BondoraPHP\Model\ApiError[]|null
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \CedricZiel\OpenAPI\BondoraPHP\Model\ApiError[]|null $errors Error(s) accociated with the API request.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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


