<?php
/**
 * StockSplit
 *
 * PHP version 5
 *
 * @category Class
 * @package  EquiblesStocks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Stocks
 *
 * <h3>Rate limits</h3>                     Free subscriptions are subject to daily limits. To know how much requests you have left look at the following headers in the response.<br />                     1. <strong>x-ratelimit-limit</strong> - The total number of requests that you are allowed to make in a given period (hour/day)<br />                     2. <strong>x-ratelimit-remaining</strong> - The number of remaining requests that you can perform in the current period.<br />                     3. <strong>x-ratelimit-reset</strong> - The number of seconds until the current period resets.<br />                     <br />                     <br />                     You don't have an API key? <a href=\"https://www.equibles.com/api/pricing\" target=\"_blank\">Get one for free here.</a>
 *
 * OpenAPI spec version: v1
 * Contact: contact@equibles.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EquiblesStocks\Models;

use \ArrayAccess;
use \EquiblesStocks\ObjectSerializer;

/**
 * StockSplit Class Doc Comment
 *
 * @category Class
 * @package  EquiblesStocks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StockSplit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StockSplit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'executionDate' => '\DateTime',
'forFactor' => 'int',
'toFactor' => 'int',
'ratio' => 'double'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'executionDate' => 'date-time',
'forFactor' => 'int32',
'toFactor' => 'int32',
'ratio' => 'double'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'executionDate' => 'executionDate',
'forFactor' => 'forFactor',
'toFactor' => 'toFactor',
'ratio' => 'ratio'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'executionDate' => 'setExecutionDate',
'forFactor' => 'setForFactor',
'toFactor' => 'setToFactor',
'ratio' => 'setRatio'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'executionDate' => 'getExecutionDate',
'forFactor' => 'getForFactor',
'toFactor' => 'getToFactor',
'ratio' => 'getRatio'    ];

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
        return self::$swaggerModelName;
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
        $this->container['executionDate'] = isset($data['executionDate']) ? $data['executionDate'] : null;
        $this->container['forFactor'] = isset($data['forFactor']) ? $data['forFactor'] : null;
        $this->container['toFactor'] = isset($data['toFactor']) ? $data['toFactor'] : null;
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
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
     * Gets executionDate
     *
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->container['executionDate'];
    }

    /**
     * Sets executionDate
     *
     * @param \DateTime $executionDate executionDate
     *
     * @return $this
     */
    public function setExecutionDate($executionDate)
    {
        $this->container['executionDate'] = $executionDate;

        return $this;
    }

    /**
     * Gets forFactor
     *
     * @return int
     */
    public function getForFactor()
    {
        return $this->container['forFactor'];
    }

    /**
     * Sets forFactor
     *
     * @param int $forFactor forFactor
     *
     * @return $this
     */
    public function setForFactor($forFactor)
    {
        $this->container['forFactor'] = $forFactor;

        return $this;
    }

    /**
     * Gets toFactor
     *
     * @return int
     */
    public function getToFactor()
    {
        return $this->container['toFactor'];
    }

    /**
     * Sets toFactor
     *
     * @param int $toFactor toFactor
     *
     * @return $this
     */
    public function setToFactor($toFactor)
    {
        $this->container['toFactor'] = $toFactor;

        return $this;
    }

    /**
     * Gets ratio
     *
     * @return double
     */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
     * Sets ratio
     *
     * @param double $ratio ratio
     *
     * @return $this
     */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
