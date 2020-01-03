<?php
/**
 * EventLogRequest
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
 * EventLogRequest Class Doc Comment
 *
 * @category Class
 * @description Request object for filtering event log
 * @package  CedricZiel\OpenAPI\BondoraPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EventLogRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'eventDateFrom' => '\DateTime',
        'eventDateTo' => '\DateTime',
        'eventType' => 'int',
        'ipAddress' => 'string',
        'pageSize' => 'int',
        'pageNr' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'eventDateFrom' => 'date-time',
        'eventDateTo' => 'date-time',
        'eventType' => 'int32',
        'ipAddress' => null,
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
        'eventDateFrom' => 'EventDateFrom',
        'eventDateTo' => 'EventDateTo',
        'eventType' => 'EventType',
        'ipAddress' => 'IpAddress',
        'pageSize' => 'PageSize',
        'pageNr' => 'PageNr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'eventDateFrom' => 'setEventDateFrom',
        'eventDateTo' => 'setEventDateTo',
        'eventType' => 'setEventType',
        'ipAddress' => 'setIpAddress',
        'pageSize' => 'setPageSize',
        'pageNr' => 'setPageNr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'eventDateFrom' => 'getEventDateFrom',
        'eventDateTo' => 'getEventDateTo',
        'eventType' => 'getEventType',
        'ipAddress' => 'getIpAddress',
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

    const EVENT_TYPE_1 = 1;
    const EVENT_TYPE_2 = 2;
    const EVENT_TYPE_3 = 3;
    const EVENT_TYPE_4 = 4;
    const EVENT_TYPE_5 = 5;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_1,
            self::EVENT_TYPE_2,
            self::EVENT_TYPE_3,
            self::EVENT_TYPE_4,
            self::EVENT_TYPE_5,
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
        $this->container['eventDateFrom'] = isset($data['eventDateFrom']) ? $data['eventDateFrom'] : null;
        $this->container['eventDateTo'] = isset($data['eventDateTo']) ? $data['eventDateTo'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
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

        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
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
     * Gets eventDateFrom
     *
     * @return \DateTime|null
     */
    public function getEventDateFrom()
    {
        return $this->container['eventDateFrom'];
    }

    /**
     * Sets eventDateFrom
     *
     * @param \DateTime|null $eventDateFrom Start datetime
     *
     * @return $this
     */
    public function setEventDateFrom($eventDateFrom)
    {
        $this->container['eventDateFrom'] = $eventDateFrom;

        return $this;
    }

    /**
     * Gets eventDateTo
     *
     * @return \DateTime|null
     */
    public function getEventDateTo()
    {
        return $this->container['eventDateTo'];
    }

    /**
     * Sets eventDateTo
     *
     * @param \DateTime|null $eventDateTo end datetime
     *
     * @return $this
     */
    public function setEventDateTo($eventDateTo)
    {
        $this->container['eventDateTo'] = $eventDateTo;

        return $this;
    }

    /**
     * Gets eventType
     *
     * @return int|null
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param int|null $eventType Event type
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($eventType) && !in_array($eventType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'eventType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['eventType'] = $eventType;

        return $this;
    }

    /**
     * Gets ipAddress
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     *
     * @param string|null $ipAddress IP address
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

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
            throw new \InvalidArgumentException('invalid value for $pageSize when calling EventLogRequest., must be smaller than or equal to 20000.');
        }
        if (!is_null($pageSize) && ($pageSize < 1)) {
            throw new \InvalidArgumentException('invalid value for $pageSize when calling EventLogRequest., must be bigger than or equal to 1.');
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
            throw new \InvalidArgumentException('invalid value for $pageNr when calling EventLogRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($pageNr) && ($pageNr < 1)) {
            throw new \InvalidArgumentException('invalid value for $pageNr when calling EventLogRequest., must be bigger than or equal to 1.');
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


