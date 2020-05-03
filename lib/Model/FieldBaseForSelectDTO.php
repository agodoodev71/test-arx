<?php
/**
 * FieldBaseForSelectDTO
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
 * FieldBaseForSelectDTO Class Doc Comment
 *
 * @category Class
 * @description Class of field for select in search
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FieldBaseForSelectDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FieldBaseForSelectDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sql_select_field' => 'string',
        'to_calculate' => 'bool',
        'index' => 'int',
        'selected' => 'bool',
        'field_type' => 'int',
        'order_by' => '\Swagger\Client\Model\OrderBy',
        'external_id' => 'string',
        'label' => 'string',
        'name' => 'string',
        'user_selection_enabled' => 'bool',
        'user_selection_group' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sql_select_field' => null,
        'to_calculate' => null,
        'index' => 'int32',
        'selected' => null,
        'field_type' => 'int32',
        'order_by' => null,
        'external_id' => null,
        'label' => null,
        'name' => null,
        'user_selection_enabled' => null,
        'user_selection_group' => 'int32'
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
        'sql_select_field' => 'sqlSelectField',
        'to_calculate' => 'toCalculate',
        'index' => 'index',
        'selected' => 'selected',
        'field_type' => 'fieldType',
        'order_by' => 'orderBy',
        'external_id' => 'externalId',
        'label' => 'label',
        'name' => 'name',
        'user_selection_enabled' => 'userSelectionEnabled',
        'user_selection_group' => 'userSelectionGroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sql_select_field' => 'setSqlSelectField',
        'to_calculate' => 'setToCalculate',
        'index' => 'setIndex',
        'selected' => 'setSelected',
        'field_type' => 'setFieldType',
        'order_by' => 'setOrderBy',
        'external_id' => 'setExternalId',
        'label' => 'setLabel',
        'name' => 'setName',
        'user_selection_enabled' => 'setUserSelectionEnabled',
        'user_selection_group' => 'setUserSelectionGroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sql_select_field' => 'getSqlSelectField',
        'to_calculate' => 'getToCalculate',
        'index' => 'getIndex',
        'selected' => 'getSelected',
        'field_type' => 'getFieldType',
        'order_by' => 'getOrderBy',
        'external_id' => 'getExternalId',
        'label' => 'getLabel',
        'name' => 'getName',
        'user_selection_enabled' => 'getUserSelectionEnabled',
        'user_selection_group' => 'getUserSelectionGroup'
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
        $this->container['sql_select_field'] = isset($data['sql_select_field']) ? $data['sql_select_field'] : null;
        $this->container['to_calculate'] = isset($data['to_calculate']) ? $data['to_calculate'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['order_by'] = isset($data['order_by']) ? $data['order_by'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['user_selection_enabled'] = isset($data['user_selection_enabled']) ? $data['user_selection_enabled'] : null;
        $this->container['user_selection_group'] = isset($data['user_selection_group']) ? $data['user_selection_group'] : null;
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
     * Gets sql_select_field
     *
     * @return string
     */
    public function getSqlSelectField()
    {
        return $this->container['sql_select_field'];
    }

    /**
     * Sets sql_select_field
     *
     * @param string $sql_select_field Field in database
     *
     * @return $this
     */
    public function setSqlSelectField($sql_select_field)
    {
        $this->container['sql_select_field'] = $sql_select_field;

        return $this;
    }

    /**
     * Gets to_calculate
     *
     * @return bool
     */
    public function getToCalculate()
    {
        return $this->container['to_calculate'];
    }

    /**
     * Sets to_calculate
     *
     * @param bool $to_calculate Calculate
     *
     * @return $this
     */
    public function setToCalculate($to_calculate)
    {
        $this->container['to_calculate'] = $to_calculate;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Order
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets selected
     *
     * @return bool
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     *
     * @param bool $selected Selected
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return int
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param int $field_type Possible values:  0: Standard  1: Group  2: Additional
     *
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Swagger\Client\Model\OrderBy
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Swagger\Client\Model\OrderBy $order_by Order on the results of the search
     *
     * @return $this
     */
    public function setOrderBy($order_by)
    {
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id External Identifier
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets user_selection_enabled
     *
     * @return bool
     */
    public function getUserSelectionEnabled()
    {
        return $this->container['user_selection_enabled'];
    }

    /**
     * Sets user_selection_enabled
     *
     * @param bool $user_selection_enabled Enabled the selection
     *
     * @return $this
     */
    public function setUserSelectionEnabled($user_selection_enabled)
    {
        $this->container['user_selection_enabled'] = $user_selection_enabled;

        return $this;
    }

    /**
     * Gets user_selection_group
     *
     * @return int
     */
    public function getUserSelectionGroup()
    {
        return $this->container['user_selection_group'];
    }

    /**
     * Sets user_selection_group
     *
     * @param int $user_selection_group Possible values:  0: Icon  1: Standard  2: Additional
     *
     * @return $this
     */
    public function setUserSelectionGroup($user_selection_group)
    {
        $this->container['user_selection_group'] = $user_selection_group;

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


