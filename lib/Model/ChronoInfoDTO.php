<?php
/**
 * ChronoInfoDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Abletech.Arxivar.Server.WebApi.Services
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ChronoInfoDTO Class Doc Comment
 *
 * @category Class
 * @description Class of Chrono information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChronoInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChronoInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chrono_id' => 'string',
        'chrono_name' => 'string',
        'intermediate_index' => 'int',
        'start_date' => '\DateTime',
        'stop_date' => '\DateTime',
        'duration' => 'int',
        'total_itermediate' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chrono_id' => null,
        'chrono_name' => null,
        'intermediate_index' => 'int32',
        'start_date' => 'date-time',
        'stop_date' => 'date-time',
        'duration' => 'int32',
        'total_itermediate' => 'int32'
    ];

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
        'chrono_id' => 'chronoId',
        'chrono_name' => 'chronoName',
        'intermediate_index' => 'intermediateIndex',
        'start_date' => 'startDate',
        'stop_date' => 'stopDate',
        'duration' => 'duration',
        'total_itermediate' => 'totalItermediate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chrono_id' => 'setChronoId',
        'chrono_name' => 'setChronoName',
        'intermediate_index' => 'setIntermediateIndex',
        'start_date' => 'setStartDate',
        'stop_date' => 'setStopDate',
        'duration' => 'setDuration',
        'total_itermediate' => 'setTotalItermediate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chrono_id' => 'getChronoId',
        'chrono_name' => 'getChronoName',
        'intermediate_index' => 'getIntermediateIndex',
        'start_date' => 'getStartDate',
        'stop_date' => 'getStopDate',
        'duration' => 'getDuration',
        'total_itermediate' => 'getTotalItermediate'
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
        $this->container['chrono_id'] = isset($data['chrono_id']) ? $data['chrono_id'] : null;
        $this->container['chrono_name'] = isset($data['chrono_name']) ? $data['chrono_name'] : null;
        $this->container['intermediate_index'] = isset($data['intermediate_index']) ? $data['intermediate_index'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['stop_date'] = isset($data['stop_date']) ? $data['stop_date'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['total_itermediate'] = isset($data['total_itermediate']) ? $data['total_itermediate'] : null;
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

        return true;
    }


    /**
     * Gets chrono_id
     *
     * @return string
     */
    public function getChronoId()
    {
        return $this->container['chrono_id'];
    }

    /**
     * Sets chrono_id
     *
     * @param string $chrono_id Identifier
     *
     * @return $this
     */
    public function setChronoId($chrono_id)
    {
        $this->container['chrono_id'] = $chrono_id;

        return $this;
    }

    /**
     * Gets chrono_name
     *
     * @return string
     */
    public function getChronoName()
    {
        return $this->container['chrono_name'];
    }

    /**
     * Sets chrono_name
     *
     * @param string $chrono_name Name
     *
     * @return $this
     */
    public function setChronoName($chrono_name)
    {
        $this->container['chrono_name'] = $chrono_name;

        return $this;
    }

    /**
     * Gets intermediate_index
     *
     * @return int
     */
    public function getIntermediateIndex()
    {
        return $this->container['intermediate_index'];
    }

    /**
     * Sets intermediate_index
     *
     * @param int $intermediate_index Index
     *
     * @return $this
     */
    public function setIntermediateIndex($intermediate_index)
    {
        $this->container['intermediate_index'] = $intermediate_index;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Start date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets stop_date
     *
     * @return \DateTime
     */
    public function getStopDate()
    {
        return $this->container['stop_date'];
    }

    /**
     * Sets stop_date
     *
     * @param \DateTime $stop_date End date
     *
     * @return $this
     */
    public function setStopDate($stop_date)
    {
        $this->container['stop_date'] = $stop_date;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets total_itermediate
     *
     * @return int
     */
    public function getTotalItermediate()
    {
        return $this->container['total_itermediate'];
    }

    /**
     * Sets total_itermediate
     *
     * @param int $total_itermediate Total Value
     *
     * @return $this
     */
    public function setTotalItermediate($total_itermediate)
    {
        $this->container['total_itermediate'] = $total_itermediate;

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


