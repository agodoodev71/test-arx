<?php
/**
 * FieldValuesSearchCriteriaDto
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
 * FieldValuesSearchCriteriaDto Class Doc Comment
 *
 * @category Class
 * @description Criteria for all the call that retrieve information about additional field values or additional field filters
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FieldValuesSearchCriteriaDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FieldValuesSearchCriteriaDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'search_filter_dto' => '\Swagger\Client\Model\SearchDTO',
        'field_name' => 'string',
        'filter_value' => 'string',
        'filter_id' => 'string',
        'filters' => '\Swagger\Client\Model\FieldBaseForSearchDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'search_filter_dto' => null,
        'field_name' => null,
        'filter_value' => null,
        'filter_id' => null,
        'filters' => null
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
        'search_filter_dto' => 'searchFilterDto',
        'field_name' => 'fieldName',
        'filter_value' => 'filterValue',
        'filter_id' => 'filterId',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_filter_dto' => 'setSearchFilterDto',
        'field_name' => 'setFieldName',
        'filter_value' => 'setFilterValue',
        'filter_id' => 'setFilterId',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_filter_dto' => 'getSearchFilterDto',
        'field_name' => 'getFieldName',
        'filter_value' => 'getFilterValue',
        'filter_id' => 'getFilterId',
        'filters' => 'getFilters'
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
        $this->container['search_filter_dto'] = isset($data['search_filter_dto']) ? $data['search_filter_dto'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['filter_value'] = isset($data['filter_value']) ? $data['filter_value'] : null;
        $this->container['filter_id'] = isset($data['filter_id']) ? $data['filter_id'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
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
     * Gets search_filter_dto
     *
     * @return \Swagger\Client\Model\SearchDTO
     */
    public function getSearchFilterDto()
    {
        return $this->container['search_filter_dto'];
    }

    /**
     * Sets search_filter_dto
     *
     * @param \Swagger\Client\Model\SearchDTO $search_filter_dto Filter for search
     *
     * @return $this
     */
    public function setSearchFilterDto($search_filter_dto)
    {
        $this->container['search_filter_dto'] = $search_filter_dto;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Field Name
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets filter_value
     *
     * @return string
     */
    public function getFilterValue()
    {
        return $this->container['filter_value'];
    }

    /**
     * Sets filter_value
     *
     * @param string $filter_value Filter Value
     *
     * @return $this
     */
    public function setFilterValue($filter_value)
    {
        $this->container['filter_value'] = $filter_value;

        return $this;
    }

    /**
     * Gets filter_id
     *
     * @return string
     */
    public function getFilterId()
    {
        return $this->container['filter_id'];
    }

    /**
     * Sets filter_id
     *
     * @param string $filter_id Filter Identifier
     *
     * @return $this
     */
    public function setFilterId($filter_id)
    {
        $this->container['filter_id'] = $filter_id;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Swagger\Client\Model\FieldBaseForSearchDTO[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Swagger\Client\Model\FieldBaseForSearchDTO[] $filters Filter Fields
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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


