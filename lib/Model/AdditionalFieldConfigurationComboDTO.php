<?php
/**
 * AdditionalFieldConfigurationComboDTO
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
use \Swagger\Client\ObjectSerializer;

/**
 * AdditionalFieldConfigurationComboDTO Class Doc Comment
 *
 * @category Class
 * @description Class of the additional field \&quot;Combo\&quot;
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdditionalFieldConfigurationComboDTO extends FieldBaseDTO 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AdditionalFieldConfigurationComboDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'limit_to_list' => 'bool',
        'values' => 'string[]',
        'display_value' => 'string',
        'value' => 'string',
        'num_max_char' => 'int',
        'num_rows' => 'int',
        'additional_field_type' => 'int',
        'group_id' => 'int',
        'binder_field_id' => 'int',
        'task_work_variable_id' => 'int',
        'validation_type' => 'int',
        'validation_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'limit_to_list' => null,
        'values' => null,
        'display_value' => null,
        'value' => null,
        'num_max_char' => 'int32',
        'num_rows' => 'int32',
        'additional_field_type' => 'int32',
        'group_id' => 'int32',
        'binder_field_id' => 'int32',
        'task_work_variable_id' => 'int32',
        'validation_type' => 'int32',
        'validation_string' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'limit_to_list' => 'limitToList',
        'values' => 'values',
        'display_value' => 'displayValue',
        'value' => 'value',
        'num_max_char' => 'numMaxChar',
        'num_rows' => 'numRows',
        'additional_field_type' => 'additionalFieldType',
        'group_id' => 'groupId',
        'binder_field_id' => 'binderFieldId',
        'task_work_variable_id' => 'taskWorkVariableId',
        'validation_type' => 'validationType',
        'validation_string' => 'validationString'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'limit_to_list' => 'setLimitToList',
        'values' => 'setValues',
        'display_value' => 'setDisplayValue',
        'value' => 'setValue',
        'num_max_char' => 'setNumMaxChar',
        'num_rows' => 'setNumRows',
        'additional_field_type' => 'setAdditionalFieldType',
        'group_id' => 'setGroupId',
        'binder_field_id' => 'setBinderFieldId',
        'task_work_variable_id' => 'setTaskWorkVariableId',
        'validation_type' => 'setValidationType',
        'validation_string' => 'setValidationString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'limit_to_list' => 'getLimitToList',
        'values' => 'getValues',
        'display_value' => 'getDisplayValue',
        'value' => 'getValue',
        'num_max_char' => 'getNumMaxChar',
        'num_rows' => 'getNumRows',
        'additional_field_type' => 'getAdditionalFieldType',
        'group_id' => 'getGroupId',
        'binder_field_id' => 'getBinderFieldId',
        'task_work_variable_id' => 'getTaskWorkVariableId',
        'validation_type' => 'getValidationType',
        'validation_string' => 'getValidationString'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['limit_to_list'] = isset($data['limit_to_list']) ? $data['limit_to_list'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['display_value'] = isset($data['display_value']) ? $data['display_value'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['num_max_char'] = isset($data['num_max_char']) ? $data['num_max_char'] : null;
        $this->container['num_rows'] = isset($data['num_rows']) ? $data['num_rows'] : null;
        $this->container['additional_field_type'] = isset($data['additional_field_type']) ? $data['additional_field_type'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['binder_field_id'] = isset($data['binder_field_id']) ? $data['binder_field_id'] : null;
        $this->container['task_work_variable_id'] = isset($data['task_work_variable_id']) ? $data['task_work_variable_id'] : null;
        $this->container['validation_type'] = isset($data['validation_type']) ? $data['validation_type'] : null;
        $this->container['validation_string'] = isset($data['validation_string']) ? $data['validation_string'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets limit_to_list
     *
     * @return bool
     */
    public function getLimitToList()
    {
        return $this->container['limit_to_list'];
    }

    /**
     * Sets limit_to_list
     *
     * @param bool $limit_to_list Possible values ​​limited to the list
     *
     * @return $this
     */
    public function setLimitToList($limit_to_list)
    {
        $this->container['limit_to_list'] = $limit_to_list;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values List of possible fields
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets display_value
     *
     * @return string
     */
    public function getDisplayValue()
    {
        return $this->container['display_value'];
    }

    /**
     * Sets display_value
     *
     * @param string $display_value Value to display
     *
     * @return $this
     */
    public function setDisplayValue($display_value)
    {
        $this->container['display_value'] = $display_value;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets num_max_char
     *
     * @return int
     */
    public function getNumMaxChar()
    {
        return $this->container['num_max_char'];
    }

    /**
     * Sets num_max_char
     *
     * @param int $num_max_char Maximum number of characters
     *
     * @return $this
     */
    public function setNumMaxChar($num_max_char)
    {
        $this->container['num_max_char'] = $num_max_char;

        return $this;
    }

    /**
     * Gets num_rows
     *
     * @return int
     */
    public function getNumRows()
    {
        return $this->container['num_rows'];
    }

    /**
     * Sets num_rows
     *
     * @param int $num_rows Maximum number of rows
     *
     * @return $this
     */
    public function setNumRows($num_rows)
    {
        $this->container['num_rows'] = $num_rows;

        return $this;
    }

    /**
     * Gets additional_field_type
     *
     * @return int
     */
    public function getAdditionalFieldType()
    {
        return $this->container['additional_field_type'];
    }

    /**
     * Sets additional_field_type
     *
     * @param int $additional_field_type Possible values:  0: Textbox  1: Databox  2: Numeric  3: Combobox  4: TableBox  5: Checkbox  6: MultiValue  7: ClasseBox  8: Group  9: RubricaBox  10: TextArea
     *
     * @return $this
     */
    public function setAdditionalFieldType($additional_field_type)
    {
        $this->container['additional_field_type'] = $additional_field_type;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id Group Identifier
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets binder_field_id
     *
     * @return int
     */
    public function getBinderFieldId()
    {
        return $this->container['binder_field_id'];
    }

    /**
     * Sets binder_field_id
     *
     * @param int $binder_field_id Binder Field Identifier
     *
     * @return $this
     */
    public function setBinderFieldId($binder_field_id)
    {
        $this->container['binder_field_id'] = $binder_field_id;

        return $this;
    }

    /**
     * Gets task_work_variable_id
     *
     * @return int
     */
    public function getTaskWorkVariableId()
    {
        return $this->container['task_work_variable_id'];
    }

    /**
     * Sets task_work_variable_id
     *
     * @param int $task_work_variable_id Variable Identifier in taskword context
     *
     * @return $this
     */
    public function setTaskWorkVariableId($task_work_variable_id)
    {
        $this->container['task_work_variable_id'] = $task_work_variable_id;

        return $this;
    }

    /**
     * Gets validation_type
     *
     * @return int
     */
    public function getValidationType()
    {
        return $this->container['validation_type'];
    }

    /**
     * Sets validation_type
     *
     * @param int $validation_type Possible values:  0: None  1: Regex  2: Formula
     *
     * @return $this
     */
    public function setValidationType($validation_type)
    {
        $this->container['validation_type'] = $validation_type;

        return $this;
    }

    /**
     * Gets validation_string
     *
     * @return string
     */
    public function getValidationString()
    {
        return $this->container['validation_string'];
    }

    /**
     * Sets validation_string
     *
     * @param string $validation_string Validation string (regex or formula)
     *
     * @return $this
     */
    public function setValidationString($validation_string)
    {
        $this->container['validation_string'] = $validation_string;

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


