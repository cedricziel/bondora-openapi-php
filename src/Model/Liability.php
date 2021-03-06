<?php
/**
 * Liability
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
 * Liability Class Doc Comment
 *
 * @category Class
 * @description Borrower&#39;s liability
 * @package  CedricZiel\OpenAPI\BondoraPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Liability implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Liability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isRefinanced' => 'bool',
        'typeOfLiability' => 'int',
        'creditor' => 'string',
        'monthlyPayment' => 'double',
        'outstanding' => 'double',
        'collateralType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'isRefinanced' => null,
        'typeOfLiability' => 'int32',
        'creditor' => null,
        'monthlyPayment' => 'double',
        'outstanding' => 'double',
        'collateralType' => 'int32'
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
        'isRefinanced' => 'IsRefinanced',
        'typeOfLiability' => 'TypeOfLiability',
        'creditor' => 'Creditor',
        'monthlyPayment' => 'MonthlyPayment',
        'outstanding' => 'Outstanding',
        'collateralType' => 'CollateralType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isRefinanced' => 'setIsRefinanced',
        'typeOfLiability' => 'setTypeOfLiability',
        'creditor' => 'setCreditor',
        'monthlyPayment' => 'setMonthlyPayment',
        'outstanding' => 'setOutstanding',
        'collateralType' => 'setCollateralType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isRefinanced' => 'getIsRefinanced',
        'typeOfLiability' => 'getTypeOfLiability',
        'creditor' => 'getCreditor',
        'monthlyPayment' => 'getMonthlyPayment',
        'outstanding' => 'getOutstanding',
        'collateralType' => 'getCollateralType'
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

    const TYPE_OF_LIABILITY_0 = 0;
    const TYPE_OF_LIABILITY_1 = 1;
    const TYPE_OF_LIABILITY_2 = 2;
    const TYPE_OF_LIABILITY_3 = 3;
    const TYPE_OF_LIABILITY_4 = 4;
    const TYPE_OF_LIABILITY_5 = 5;
    const TYPE_OF_LIABILITY_6 = 6;
    const TYPE_OF_LIABILITY_7 = 7;
    const TYPE_OF_LIABILITY_101 = 101;
    const TYPE_OF_LIABILITY_102 = 102;
    const TYPE_OF_LIABILITY_103 = 103;
    const TYPE_OF_LIABILITY_104 = 104;
    const TYPE_OF_LIABILITY_105 = 105;
    const TYPE_OF_LIABILITY_106 = 106;
    const TYPE_OF_LIABILITY_107 = 107;
    const TYPE_OF_LIABILITY_MINUS_1 = -1;
    const COLLATERAL_TYPE_0 = 0;
    const COLLATERAL_TYPE_1 = 1;
    const COLLATERAL_TYPE_2 = 2;
    const COLLATERAL_TYPE_3 = 3;
    const COLLATERAL_TYPE_4 = 4;
    const COLLATERAL_TYPE_5 = 5;
    const COLLATERAL_TYPE_6 = 6;
    const COLLATERAL_TYPE_7 = 7;
    const COLLATERAL_TYPE_MINUS_1 = -1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeOfLiabilityAllowableValues()
    {
        return [
            self::TYPE_OF_LIABILITY_0,
            self::TYPE_OF_LIABILITY_1,
            self::TYPE_OF_LIABILITY_2,
            self::TYPE_OF_LIABILITY_3,
            self::TYPE_OF_LIABILITY_4,
            self::TYPE_OF_LIABILITY_5,
            self::TYPE_OF_LIABILITY_6,
            self::TYPE_OF_LIABILITY_7,
            self::TYPE_OF_LIABILITY_101,
            self::TYPE_OF_LIABILITY_102,
            self::TYPE_OF_LIABILITY_103,
            self::TYPE_OF_LIABILITY_104,
            self::TYPE_OF_LIABILITY_105,
            self::TYPE_OF_LIABILITY_106,
            self::TYPE_OF_LIABILITY_107,
            self::TYPE_OF_LIABILITY_MINUS_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCollateralTypeAllowableValues()
    {
        return [
            self::COLLATERAL_TYPE_0,
            self::COLLATERAL_TYPE_1,
            self::COLLATERAL_TYPE_2,
            self::COLLATERAL_TYPE_3,
            self::COLLATERAL_TYPE_4,
            self::COLLATERAL_TYPE_5,
            self::COLLATERAL_TYPE_6,
            self::COLLATERAL_TYPE_7,
            self::COLLATERAL_TYPE_MINUS_1,
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
        $this->container['isRefinanced'] = isset($data['isRefinanced']) ? $data['isRefinanced'] : null;
        $this->container['typeOfLiability'] = isset($data['typeOfLiability']) ? $data['typeOfLiability'] : null;
        $this->container['creditor'] = isset($data['creditor']) ? $data['creditor'] : null;
        $this->container['monthlyPayment'] = isset($data['monthlyPayment']) ? $data['monthlyPayment'] : null;
        $this->container['outstanding'] = isset($data['outstanding']) ? $data['outstanding'] : null;
        $this->container['collateralType'] = isset($data['collateralType']) ? $data['collateralType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeOfLiabilityAllowableValues();
        if (!is_null($this->container['typeOfLiability']) && !in_array($this->container['typeOfLiability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'typeOfLiability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCollateralTypeAllowableValues();
        if (!is_null($this->container['collateralType']) && !in_array($this->container['collateralType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'collateralType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets isRefinanced
     *
     * @return bool|null
     */
    public function getIsRefinanced()
    {
        return $this->container['isRefinanced'];
    }

    /**
     * Sets isRefinanced
     *
     * @param bool|null $isRefinanced Is refinanced              <para>Only Value for new Auctions since 1st of june 2017 is false</para>
     *
     * @return $this
     */
    public function setIsRefinanced($isRefinanced)
    {
        $this->container['isRefinanced'] = $isRefinanced;

        return $this;
    }

    /**
     * Gets typeOfLiability
     *
     * @return int|null
     */
    public function getTypeOfLiability()
    {
        return $this->container['typeOfLiability'];
    }

    /**
     * Sets typeOfLiability
     *
     * @param int|null $typeOfLiability Type of liability              <para>Only Value for new Auctions since 1st of june 2017 is -1 (NotUsed)</para>
     *
     * @return $this
     */
    public function setTypeOfLiability($typeOfLiability)
    {
        $allowedValues = $this->getTypeOfLiabilityAllowableValues();
        if (!is_null($typeOfLiability) && !in_array($typeOfLiability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'typeOfLiability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['typeOfLiability'] = $typeOfLiability;

        return $this;
    }

    /**
     * Gets creditor
     *
     * @return string|null
     */
    public function getCreditor()
    {
        return $this->container['creditor'];
    }

    /**
     * Sets creditor
     *
     * @param string|null $creditor Creditor
     *
     * @return $this
     */
    public function setCreditor($creditor)
    {
        $this->container['creditor'] = $creditor;

        return $this;
    }

    /**
     * Gets monthlyPayment
     *
     * @return double|null
     */
    public function getMonthlyPayment()
    {
        return $this->container['monthlyPayment'];
    }

    /**
     * Sets monthlyPayment
     *
     * @param double|null $monthlyPayment Monthly payment
     *
     * @return $this
     */
    public function setMonthlyPayment($monthlyPayment)
    {
        $this->container['monthlyPayment'] = $monthlyPayment;

        return $this;
    }

    /**
     * Gets outstanding
     *
     * @return double|null
     */
    public function getOutstanding()
    {
        return $this->container['outstanding'];
    }

    /**
     * Sets outstanding
     *
     * @param double|null $outstanding Outstanding              <para>Only Value for new Auctions since 1st of june 2017 is NULL</para>
     *
     * @return $this
     */
    public function setOutstanding($outstanding)
    {
        $this->container['outstanding'] = $outstanding;

        return $this;
    }

    /**
     * Gets collateralType
     *
     * @return int|null
     */
    public function getCollateralType()
    {
        return $this->container['collateralType'];
    }

    /**
     * Sets collateralType
     *
     * @param int|null $collateralType Type of collateral              <para>Only Value for new Auctions since 1st of june 2017 is -1 (NotUsed)</para>
     *
     * @return $this
     */
    public function setCollateralType($collateralType)
    {
        $allowedValues = $this->getCollateralTypeAllowableValues();
        if (!is_null($collateralType) && !in_array($collateralType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'collateralType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['collateralType'] = $collateralType;

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


