<?php
/**
 * SearchConcreteDTO
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
 * SearchConcreteDTO Class Doc Comment
 *
 * @category Class
 * @description Class of search
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchConcreteDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchConcreteDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'da_a_and_or' => 'int',
        'contact_fields' => '\Swagger\Client\Model\FieldBaseForSearchContactDto[]',
        'aoo_field' => '\Swagger\Client\Model\FieldBaseForSearchAooDto',
        'document_type_field' => '\Swagger\Client\Model\FieldBaseForSearchDocumentTypeDto',
        'protocol_field' => '\Swagger\Client\Model\FieldBaseForSearchProtocolloDto',
        'conservation_field' => '\Swagger\Client\Model\FieldBaseForSearchConservazioneDto',
        'stamp_field' => '\Swagger\Client\Model\FieldBaseForSearchStampDto',
        'date_time_fields' => '\Swagger\Client\Model\FieldBaseForSearchDateTimeDto[]',
        'string_fields' => '\Swagger\Client\Model\FieldBaseForSearchStringDto[]',
        'int_fields' => '\Swagger\Client\Model\FieldBaseForSearchIntDto[]',
        'bool_fields' => '\Swagger\Client\Model\FieldBaseForSearchBoolDto[]',
        'double_fields' => '\Swagger\Client\Model\FieldBaseForSearchDoubleDto[]',
        'string_list_fields' => '\Swagger\Client\Model\FieldBaseForSearchListDto[]',
        'group_fields' => '\Swagger\Client\Model\FieldBaseForSearchDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'da_a_and_or' => 'int32',
        'contact_fields' => null,
        'aoo_field' => null,
        'document_type_field' => null,
        'protocol_field' => null,
        'conservation_field' => null,
        'stamp_field' => null,
        'date_time_fields' => null,
        'string_fields' => null,
        'int_fields' => null,
        'bool_fields' => null,
        'double_fields' => null,
        'string_list_fields' => null,
        'group_fields' => null
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
        'da_a_and_or' => 'daAAndOr',
        'contact_fields' => 'contactFields',
        'aoo_field' => 'aooField',
        'document_type_field' => 'documentTypeField',
        'protocol_field' => 'protocolField',
        'conservation_field' => 'conservationField',
        'stamp_field' => 'stampField',
        'date_time_fields' => 'dateTimeFields',
        'string_fields' => 'stringFields',
        'int_fields' => 'intFields',
        'bool_fields' => 'boolFields',
        'double_fields' => 'doubleFields',
        'string_list_fields' => 'stringListFields',
        'group_fields' => 'groupFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'da_a_and_or' => 'setDaAAndOr',
        'contact_fields' => 'setContactFields',
        'aoo_field' => 'setAooField',
        'document_type_field' => 'setDocumentTypeField',
        'protocol_field' => 'setProtocolField',
        'conservation_field' => 'setConservationField',
        'stamp_field' => 'setStampField',
        'date_time_fields' => 'setDateTimeFields',
        'string_fields' => 'setStringFields',
        'int_fields' => 'setIntFields',
        'bool_fields' => 'setBoolFields',
        'double_fields' => 'setDoubleFields',
        'string_list_fields' => 'setStringListFields',
        'group_fields' => 'setGroupFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'da_a_and_or' => 'getDaAAndOr',
        'contact_fields' => 'getContactFields',
        'aoo_field' => 'getAooField',
        'document_type_field' => 'getDocumentTypeField',
        'protocol_field' => 'getProtocolField',
        'conservation_field' => 'getConservationField',
        'stamp_field' => 'getStampField',
        'date_time_fields' => 'getDateTimeFields',
        'string_fields' => 'getStringFields',
        'int_fields' => 'getIntFields',
        'bool_fields' => 'getBoolFields',
        'double_fields' => 'getDoubleFields',
        'string_list_fields' => 'getStringListFields',
        'group_fields' => 'getGroupFields'
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
        $this->container['da_a_and_or'] = isset($data['da_a_and_or']) ? $data['da_a_and_or'] : null;
        $this->container['contact_fields'] = isset($data['contact_fields']) ? $data['contact_fields'] : null;
        $this->container['aoo_field'] = isset($data['aoo_field']) ? $data['aoo_field'] : null;
        $this->container['document_type_field'] = isset($data['document_type_field']) ? $data['document_type_field'] : null;
        $this->container['protocol_field'] = isset($data['protocol_field']) ? $data['protocol_field'] : null;
        $this->container['conservation_field'] = isset($data['conservation_field']) ? $data['conservation_field'] : null;
        $this->container['stamp_field'] = isset($data['stamp_field']) ? $data['stamp_field'] : null;
        $this->container['date_time_fields'] = isset($data['date_time_fields']) ? $data['date_time_fields'] : null;
        $this->container['string_fields'] = isset($data['string_fields']) ? $data['string_fields'] : null;
        $this->container['int_fields'] = isset($data['int_fields']) ? $data['int_fields'] : null;
        $this->container['bool_fields'] = isset($data['bool_fields']) ? $data['bool_fields'] : null;
        $this->container['double_fields'] = isset($data['double_fields']) ? $data['double_fields'] : null;
        $this->container['string_list_fields'] = isset($data['string_list_fields']) ? $data['string_list_fields'] : null;
        $this->container['group_fields'] = isset($data['group_fields']) ? $data['group_fields'] : null;
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
     * Gets da_a_and_or
     *
     * @return int
     */
    public function getDaAAndOr()
    {
        return $this->container['da_a_and_or'];
    }

    /**
     * Sets da_a_and_or
     *
     * @param int $da_a_and_or Possible values:  0: And  1: Or
     *
     * @return $this
     */
    public function setDaAAndOr($da_a_and_or)
    {
        $this->container['da_a_and_or'] = $da_a_and_or;

        return $this;
    }

    /**
     * Gets contact_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchContactDto[]
     */
    public function getContactFields()
    {
        return $this->container['contact_fields'];
    }

    /**
     * Sets contact_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchContactDto[] $contact_fields Contact Fields
     *
     * @return $this
     */
    public function setContactFields($contact_fields)
    {
        $this->container['contact_fields'] = $contact_fields;

        return $this;
    }

    /**
     * Gets aoo_field
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchAooDto
     */
    public function getAooField()
    {
        return $this->container['aoo_field'];
    }

    /**
     * Sets aoo_field
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchAooDto $aoo_field Business Unit
     *
     * @return $this
     */
    public function setAooField($aoo_field)
    {
        $this->container['aoo_field'] = $aoo_field;

        return $this;
    }

    /**
     * Gets document_type_field
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchDocumentTypeDto
     */
    public function getDocumentTypeField()
    {
        return $this->container['document_type_field'];
    }

    /**
     * Sets document_type_field
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchDocumentTypeDto $document_type_field Document Type
     *
     * @return $this
     */
    public function setDocumentTypeField($document_type_field)
    {
        $this->container['document_type_field'] = $document_type_field;

        return $this;
    }

    /**
     * Gets protocol_field
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchProtocolloDto
     */
    public function getProtocolField()
    {
        return $this->container['protocol_field'];
    }

    /**
     * Sets protocol_field
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchProtocolloDto $protocol_field Protocol
     *
     * @return $this
     */
    public function setProtocolField($protocol_field)
    {
        $this->container['protocol_field'] = $protocol_field;

        return $this;
    }

    /**
     * Gets conservation_field
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchConservazioneDto
     */
    public function getConservationField()
    {
        return $this->container['conservation_field'];
    }

    /**
     * Sets conservation_field
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchConservazioneDto $conservation_field Conservation
     *
     * @return $this
     */
    public function setConservationField($conservation_field)
    {
        $this->container['conservation_field'] = $conservation_field;

        return $this;
    }

    /**
     * Gets stamp_field
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchStampDto
     */
    public function getStampField()
    {
        return $this->container['stamp_field'];
    }

    /**
     * Sets stamp_field
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchStampDto $stamp_field Stamp
     *
     * @return $this
     */
    public function setStampField($stamp_field)
    {
        $this->container['stamp_field'] = $stamp_field;

        return $this;
    }

    /**
     * Gets date_time_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchDateTimeDto[]
     */
    public function getDateTimeFields()
    {
        return $this->container['date_time_fields'];
    }

    /**
     * Sets date_time_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchDateTimeDto[] $date_time_fields List of fields of type 'Datetime'
     *
     * @return $this
     */
    public function setDateTimeFields($date_time_fields)
    {
        $this->container['date_time_fields'] = $date_time_fields;

        return $this;
    }

    /**
     * Gets string_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchStringDto[]
     */
    public function getStringFields()
    {
        return $this->container['string_fields'];
    }

    /**
     * Sets string_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchStringDto[] $string_fields List of fields of type 'String'
     *
     * @return $this
     */
    public function setStringFields($string_fields)
    {
        $this->container['string_fields'] = $string_fields;

        return $this;
    }

    /**
     * Gets int_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchIntDto[]
     */
    public function getIntFields()
    {
        return $this->container['int_fields'];
    }

    /**
     * Sets int_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchIntDto[] $int_fields List of fields of type 'Integer'
     *
     * @return $this
     */
    public function setIntFields($int_fields)
    {
        $this->container['int_fields'] = $int_fields;

        return $this;
    }

    /**
     * Gets bool_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchBoolDto[]
     */
    public function getBoolFields()
    {
        return $this->container['bool_fields'];
    }

    /**
     * Sets bool_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchBoolDto[] $bool_fields List of fields of type 'Boolean'
     *
     * @return $this
     */
    public function setBoolFields($bool_fields)
    {
        $this->container['bool_fields'] = $bool_fields;

        return $this;
    }

    /**
     * Gets double_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchDoubleDto[]
     */
    public function getDoubleFields()
    {
        return $this->container['double_fields'];
    }

    /**
     * Sets double_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchDoubleDto[] $double_fields List of fields of type 'Decimal'
     *
     * @return $this
     */
    public function setDoubleFields($double_fields)
    {
        $this->container['double_fields'] = $double_fields;

        return $this;
    }

    /**
     * Gets string_list_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchListDto[]
     */
    public function getStringListFields()
    {
        return $this->container['string_list_fields'];
    }

    /**
     * Sets string_list_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchListDto[] $string_list_fields List of fields of type 'List'
     *
     * @return $this
     */
    public function setStringListFields($string_list_fields)
    {
        $this->container['string_list_fields'] = $string_list_fields;

        return $this;
    }

    /**
     * Gets group_fields
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchDTO[]
     */
    public function getGroupFields()
    {
        return $this->container['group_fields'];
    }

    /**
     * Sets group_fields
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchDTO[] $group_fields List of fields of type 'Group'
     *
     * @return $this
     */
    public function setGroupFields($group_fields)
    {
        $this->container['group_fields'] = $group_fields;

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


