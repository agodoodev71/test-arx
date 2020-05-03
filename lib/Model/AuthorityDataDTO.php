<?php
/**
 * AuthorityDataDTO
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
 * AuthorityDataDTO Class Doc Comment
 *
 * @category Class
 * @description Class of the authority data
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthorityDataDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuthorityDataDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'doc_number' => 'int',
        'protocol' => 'string',
        'protocol_date' => '\DateTime',
        'office' => 'string',
        'person' => 'string',
        'shipping' => 'string',
        'your_referent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'doc_number' => 'int32',
        'protocol' => null,
        'protocol_date' => 'date-time',
        'office' => null,
        'person' => null,
        'shipping' => null,
        'your_referent' => null
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
        'id' => 'id',
        'doc_number' => 'docNumber',
        'protocol' => 'protocol',
        'protocol_date' => 'protocolDate',
        'office' => 'office',
        'person' => 'person',
        'shipping' => 'shipping',
        'your_referent' => 'yourReferent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'doc_number' => 'setDocNumber',
        'protocol' => 'setProtocol',
        'protocol_date' => 'setProtocolDate',
        'office' => 'setOffice',
        'person' => 'setPerson',
        'shipping' => 'setShipping',
        'your_referent' => 'setYourReferent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'doc_number' => 'getDocNumber',
        'protocol' => 'getProtocol',
        'protocol_date' => 'getProtocolDate',
        'office' => 'getOffice',
        'person' => 'getPerson',
        'shipping' => 'getShipping',
        'your_referent' => 'getYourReferent'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['doc_number'] = isset($data['doc_number']) ? $data['doc_number'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['protocol_date'] = isset($data['protocol_date']) ? $data['protocol_date'] : null;
        $this->container['office'] = isset($data['office']) ? $data['office'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['your_referent'] = isset($data['your_referent']) ? $data['your_referent'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Authority Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets doc_number
     *
     * @return int
     */
    public function getDocNumber()
    {
        return $this->container['doc_number'];
    }

    /**
     * Sets doc_number
     *
     * @param int $doc_number Document Identifier
     *
     * @return $this
     */
    public function setDocNumber($doc_number)
    {
        $this->container['doc_number'] = $doc_number;

        return $this;
    }

    /**
     * Gets protocol
     *
     * @return string
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string $protocol Protocol number
     *
     * @return $this
     */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets protocol_date
     *
     * @return \DateTime
     */
    public function getProtocolDate()
    {
        return $this->container['protocol_date'];
    }

    /**
     * Sets protocol_date
     *
     * @param \DateTime $protocol_date Protocol Date and time
     *
     * @return $this
     */
    public function setProtocolDate($protocol_date)
    {
        $this->container['protocol_date'] = $protocol_date;

        return $this;
    }

    /**
     * Gets office
     *
     * @return string
     */
    public function getOffice()
    {
        return $this->container['office'];
    }

    /**
     * Sets office
     *
     * @param string $office Office
     *
     * @return $this
     */
    public function setOffice($office)
    {
        $this->container['office'] = $office;

        return $this;
    }

    /**
     * Gets person
     *
     * @return string
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param string $person Reference person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return string
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param string $shipping Shipping address
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets your_referent
     *
     * @return string
     */
    public function getYourReferent()
    {
        return $this->container['your_referent'];
    }

    /**
     * Sets your_referent
     *
     * @param string $your_referent Referent
     *
     * @return $this
     */
    public function setYourReferent($your_referent)
    {
        $this->container['your_referent'] = $your_referent;

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


