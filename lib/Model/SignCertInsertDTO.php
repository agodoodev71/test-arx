<?php
/**
 * SignCertInsertDTO
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
 * SignCertInsertDTO Class Doc Comment
 *
 * @category Class
 * @description Class of signature certificate to insert
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignCertInsertDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignCertInsertDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cert_id' => 'string',
        'request_otp' => 'bool',
        'cert_description' => 'string',
        'delegante' => 'string',
        'cert_type' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cert_id' => null,
        'request_otp' => null,
        'cert_description' => null,
        'delegante' => null,
        'cert_type' => 'int32'
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
        'cert_id' => 'certId',
        'request_otp' => 'requestOtp',
        'cert_description' => 'certDescription',
        'delegante' => 'delegante',
        'cert_type' => 'certType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cert_id' => 'setCertId',
        'request_otp' => 'setRequestOtp',
        'cert_description' => 'setCertDescription',
        'delegante' => 'setDelegante',
        'cert_type' => 'setCertType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cert_id' => 'getCertId',
        'request_otp' => 'getRequestOtp',
        'cert_description' => 'getCertDescription',
        'delegante' => 'getDelegante',
        'cert_type' => 'getCertType'
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
        $this->container['cert_id'] = isset($data['cert_id']) ? $data['cert_id'] : null;
        $this->container['request_otp'] = isset($data['request_otp']) ? $data['request_otp'] : null;
        $this->container['cert_description'] = isset($data['cert_description']) ? $data['cert_description'] : null;
        $this->container['delegante'] = isset($data['delegante']) ? $data['delegante'] : null;
        $this->container['cert_type'] = isset($data['cert_type']) ? $data['cert_type'] : null;
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
     * Gets cert_id
     *
     * @return string
     */
    public function getCertId()
    {
        return $this->container['cert_id'];
    }

    /**
     * Sets cert_id
     *
     * @param string $cert_id Certificate Identifier
     *
     * @return $this
     */
    public function setCertId($cert_id)
    {
        $this->container['cert_id'] = $cert_id;

        return $this;
    }

    /**
     * Gets request_otp
     *
     * @return bool
     */
    public function getRequestOtp()
    {
        return $this->container['request_otp'];
    }

    /**
     * Sets request_otp
     *
     * @param bool $request_otp Request OTP
     *
     * @return $this
     */
    public function setRequestOtp($request_otp)
    {
        $this->container['request_otp'] = $request_otp;

        return $this;
    }

    /**
     * Gets cert_description
     *
     * @return string
     */
    public function getCertDescription()
    {
        return $this->container['cert_description'];
    }

    /**
     * Sets cert_description
     *
     * @param string $cert_description Certificate Description
     *
     * @return $this
     */
    public function setCertDescription($cert_description)
    {
        $this->container['cert_description'] = $cert_description;

        return $this;
    }

    /**
     * Gets delegante
     *
     * @return string
     */
    public function getDelegante()
    {
        return $this->container['delegante'];
    }

    /**
     * Sets delegante
     *
     * @param string $delegante Delegating
     *
     * @return $this
     */
    public function setDelegante($delegante)
    {
        $this->container['delegante'] = $delegante;

        return $this;
    }

    /**
     * Gets cert_type
     *
     * @return int
     */
    public function getCertType()
    {
        return $this->container['cert_type'];
    }

    /**
     * Sets cert_type
     *
     * @param int $cert_type Possible values:  0: Static  1: CoSign  2: RemoteTelecom  3: RemoteAruba
     *
     * @return $this
     */
    public function setCertType($cert_type)
    {
        $this->container['cert_type'] = $cert_type;

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


