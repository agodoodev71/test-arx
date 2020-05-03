<?php
/**
 * DocToOcrDTO
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
 * DocToOcrDTO Class Doc Comment
 *
 * @category Class
 * @description Class of optical character recognition (OCR) on a document profile.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocToOcrDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocToOcrDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'docnumber' => 'int',
        'status' => 'int',
        'revision' => 'int',
        'ocr_date' => '\DateTime',
        'user' => 'int',
        'guid' => 'string',
        'num_attemps' => 'int',
        'error_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'docnumber' => 'int32',
        'status' => 'int32',
        'revision' => 'int32',
        'ocr_date' => 'date-time',
        'user' => 'int32',
        'guid' => null,
        'num_attemps' => 'int32',
        'error_message' => null
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
        'docnumber' => 'docnumber',
        'status' => 'status',
        'revision' => 'revision',
        'ocr_date' => 'ocrDate',
        'user' => 'user',
        'guid' => 'guid',
        'num_attemps' => 'numAttemps',
        'error_message' => 'errorMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'docnumber' => 'setDocnumber',
        'status' => 'setStatus',
        'revision' => 'setRevision',
        'ocr_date' => 'setOcrDate',
        'user' => 'setUser',
        'guid' => 'setGuid',
        'num_attemps' => 'setNumAttemps',
        'error_message' => 'setErrorMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'docnumber' => 'getDocnumber',
        'status' => 'getStatus',
        'revision' => 'getRevision',
        'ocr_date' => 'getOcrDate',
        'user' => 'getUser',
        'guid' => 'getGuid',
        'num_attemps' => 'getNumAttemps',
        'error_message' => 'getErrorMessage'
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
        $this->container['docnumber'] = isset($data['docnumber']) ? $data['docnumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['ocr_date'] = isset($data['ocr_date']) ? $data['ocr_date'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['num_attemps'] = isset($data['num_attemps']) ? $data['num_attemps'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
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
     * Gets docnumber
     *
     * @return int
     */
    public function getDocnumber()
    {
        return $this->container['docnumber'];
    }

    /**
     * Sets docnumber
     *
     * @param int $docnumber Document Identifier
     *
     * @return $this
     */
    public function setDocnumber($docnumber)
    {
        $this->container['docnumber'] = $docnumber;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Possible values:  1: Pending  2: Failed  3: Scheduled  4: Pending_Rev  5: Failed_Rev  6: Scheduled_Rev
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision Revision of document
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets ocr_date
     *
     * @return \DateTime
     */
    public function getOcrDate()
    {
        return $this->container['ocr_date'];
    }

    /**
     * Sets ocr_date
     *
     * @param \DateTime $ocr_date Schedule Date
     *
     * @return $this
     */
    public function setOcrDate($ocr_date)
    {
        $this->container['ocr_date'] = $ocr_date;

        return $this;
    }

    /**
     * Gets user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int $user User Identifier
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
     * Sets guid
     *
     * @param string $guid Identifier
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;

        return $this;
    }

    /**
     * Gets num_attemps
     *
     * @return int
     */
    public function getNumAttemps()
    {
        return $this->container['num_attemps'];
    }

    /**
     * Sets num_attemps
     *
     * @param int $num_attemps Number of Attempts
     *
     * @return $this
     */
    public function setNumAttemps($num_attemps)
    {
        $this->container['num_attemps'] = $num_attemps;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string $error_message Error Message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

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

