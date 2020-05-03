<?php
/**
 * QueueStateAggregationInfoDto
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
 * QueueStateAggregationInfoDto Class Doc Comment
 *
 * @category Class
 * @description Class of status for queue aggregation
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueueStateAggregationInfoDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueueStateAggregationInfoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'awaiting' => 'int',
        'enqueued' => 'int',
        'processing' => 'int',
        'scheduled' => 'int',
        'failed' => 'int',
        'succeded_ok' => 'int',
        'succeded_ko' => 'int',
        'deleted' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'awaiting' => 'int32',
        'enqueued' => 'int32',
        'processing' => 'int32',
        'scheduled' => 'int32',
        'failed' => 'int32',
        'succeded_ok' => 'int32',
        'succeded_ko' => 'int32',
        'deleted' => 'int32'
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
        'awaiting' => 'awaiting',
        'enqueued' => 'enqueued',
        'processing' => 'processing',
        'scheduled' => 'scheduled',
        'failed' => 'failed',
        'succeded_ok' => 'succededOk',
        'succeded_ko' => 'succededKo',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'awaiting' => 'setAwaiting',
        'enqueued' => 'setEnqueued',
        'processing' => 'setProcessing',
        'scheduled' => 'setScheduled',
        'failed' => 'setFailed',
        'succeded_ok' => 'setSuccededOk',
        'succeded_ko' => 'setSuccededKo',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'awaiting' => 'getAwaiting',
        'enqueued' => 'getEnqueued',
        'processing' => 'getProcessing',
        'scheduled' => 'getScheduled',
        'failed' => 'getFailed',
        'succeded_ok' => 'getSuccededOk',
        'succeded_ko' => 'getSuccededKo',
        'deleted' => 'getDeleted'
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
        $this->container['awaiting'] = isset($data['awaiting']) ? $data['awaiting'] : null;
        $this->container['enqueued'] = isset($data['enqueued']) ? $data['enqueued'] : null;
        $this->container['processing'] = isset($data['processing']) ? $data['processing'] : null;
        $this->container['scheduled'] = isset($data['scheduled']) ? $data['scheduled'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['succeded_ok'] = isset($data['succeded_ok']) ? $data['succeded_ok'] : null;
        $this->container['succeded_ko'] = isset($data['succeded_ko']) ? $data['succeded_ko'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
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
     * Gets awaiting
     *
     * @return int
     */
    public function getAwaiting()
    {
        return $this->container['awaiting'];
    }

    /**
     * Sets awaiting
     *
     * @param int $awaiting Wainting
     *
     * @return $this
     */
    public function setAwaiting($awaiting)
    {
        $this->container['awaiting'] = $awaiting;

        return $this;
    }

    /**
     * Gets enqueued
     *
     * @return int
     */
    public function getEnqueued()
    {
        return $this->container['enqueued'];
    }

    /**
     * Sets enqueued
     *
     * @param int $enqueued Enqueued
     *
     * @return $this
     */
    public function setEnqueued($enqueued)
    {
        $this->container['enqueued'] = $enqueued;

        return $this;
    }

    /**
     * Gets processing
     *
     * @return int
     */
    public function getProcessing()
    {
        return $this->container['processing'];
    }

    /**
     * Sets processing
     *
     * @param int $processing Processing
     *
     * @return $this
     */
    public function setProcessing($processing)
    {
        $this->container['processing'] = $processing;

        return $this;
    }

    /**
     * Gets scheduled
     *
     * @return int
     */
    public function getScheduled()
    {
        return $this->container['scheduled'];
    }

    /**
     * Sets scheduled
     *
     * @param int $scheduled Scheduled
     *
     * @return $this
     */
    public function setScheduled($scheduled)
    {
        $this->container['scheduled'] = $scheduled;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return int
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param int $failed Failed
     *
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets succeded_ok
     *
     * @return int
     */
    public function getSuccededOk()
    {
        return $this->container['succeded_ok'];
    }

    /**
     * Sets succeded_ok
     *
     * @param int $succeded_ok Successful
     *
     * @return $this
     */
    public function setSuccededOk($succeded_ok)
    {
        $this->container['succeded_ok'] = $succeded_ok;

        return $this;
    }

    /**
     * Gets succeded_ko
     *
     * @return int
     */
    public function getSuccededKo()
    {
        return $this->container['succeded_ko'];
    }

    /**
     * Sets succeded_ko
     *
     * @param int $succeded_ko Unsuccessful
     *
     * @return $this
     */
    public function setSuccededKo($succeded_ko)
    {
        $this->container['succeded_ko'] = $succeded_ko;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return int
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param int $deleted Deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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

