<?php
/**
 * FieldBaseForSearchDTO
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
 * FieldBaseForSearchDTO Class Doc Comment
 *
 * @category Class
 * @description Class of the additional field filter properties
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FieldBaseForSearchDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'className';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FieldBaseForSearchDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group_id' => 'int',
        'field_type' => 'int',
        'additional_field_type' => 'int',
        'default_operator' => 'int',
        'table_name' => 'string',
        'binder_field_id' => 'int',
        'multiple' => 'string',
        'name' => 'string',
        'external_id' => 'string',
        'description' => 'string',
        'order' => 'int',
        'data_source' => 'string',
        'required' => 'bool',
        'formula' => 'string',
        'class_name' => 'string',
        'locked' => 'bool',
        'combo_gruppi_id' => 'string',
        'dependency_fields' => '\Swagger\Client\Model\DependencyFieldItem[]',
        'associations' => 'map[string,string]',
        'is_additional' => 'bool',
        'visible' => 'bool',
        'predefined_profile_formula' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group_id' => 'int32',
        'field_type' => 'int32',
        'additional_field_type' => 'int32',
        'default_operator' => 'int32',
        'table_name' => null,
        'binder_field_id' => 'int32',
        'multiple' => null,
        'name' => null,
        'external_id' => null,
        'description' => null,
        'order' => 'int32',
        'data_source' => null,
        'required' => null,
        'formula' => null,
        'class_name' => null,
        'locked' => null,
        'combo_gruppi_id' => null,
        'dependency_fields' => null,
        'associations' => null,
        'is_additional' => null,
        'visible' => null,
        'predefined_profile_formula' => null
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
        'group_id' => 'groupId',
        'field_type' => 'fieldType',
        'additional_field_type' => 'additionalFieldType',
        'default_operator' => 'defaultOperator',
        'table_name' => 'tableName',
        'binder_field_id' => 'binderFieldId',
        'multiple' => 'multiple',
        'name' => 'name',
        'external_id' => 'externalId',
        'description' => 'description',
        'order' => 'order',
        'data_source' => 'dataSource',
        'required' => 'required',
        'formula' => 'formula',
        'class_name' => 'className',
        'locked' => 'locked',
        'combo_gruppi_id' => 'comboGruppiId',
        'dependency_fields' => 'dependencyFields',
        'associations' => 'associations',
        'is_additional' => 'isAdditional',
        'visible' => 'visible',
        'predefined_profile_formula' => 'predefinedProfileFormula'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_id' => 'setGroupId',
        'field_type' => 'setFieldType',
        'additional_field_type' => 'setAdditionalFieldType',
        'default_operator' => 'setDefaultOperator',
        'table_name' => 'setTableName',
        'binder_field_id' => 'setBinderFieldId',
        'multiple' => 'setMultiple',
        'name' => 'setName',
        'external_id' => 'setExternalId',
        'description' => 'setDescription',
        'order' => 'setOrder',
        'data_source' => 'setDataSource',
        'required' => 'setRequired',
        'formula' => 'setFormula',
        'class_name' => 'setClassName',
        'locked' => 'setLocked',
        'combo_gruppi_id' => 'setComboGruppiId',
        'dependency_fields' => 'setDependencyFields',
        'associations' => 'setAssociations',
        'is_additional' => 'setIsAdditional',
        'visible' => 'setVisible',
        'predefined_profile_formula' => 'setPredefinedProfileFormula'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_id' => 'getGroupId',
        'field_type' => 'getFieldType',
        'additional_field_type' => 'getAdditionalFieldType',
        'default_operator' => 'getDefaultOperator',
        'table_name' => 'getTableName',
        'binder_field_id' => 'getBinderFieldId',
        'multiple' => 'getMultiple',
        'name' => 'getName',
        'external_id' => 'getExternalId',
        'description' => 'getDescription',
        'order' => 'getOrder',
        'data_source' => 'getDataSource',
        'required' => 'getRequired',
        'formula' => 'getFormula',
        'class_name' => 'getClassName',
        'locked' => 'getLocked',
        'combo_gruppi_id' => 'getComboGruppiId',
        'dependency_fields' => 'getDependencyFields',
        'associations' => 'getAssociations',
        'is_additional' => 'getIsAdditional',
        'visible' => 'getVisible',
        'predefined_profile_formula' => 'getPredefinedProfileFormula'
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
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['additional_field_type'] = isset($data['additional_field_type']) ? $data['additional_field_type'] : null;
        $this->container['default_operator'] = isset($data['default_operator']) ? $data['default_operator'] : null;
        $this->container['table_name'] = isset($data['table_name']) ? $data['table_name'] : null;
        $this->container['binder_field_id'] = isset($data['binder_field_id']) ? $data['binder_field_id'] : null;
        $this->container['multiple'] = isset($data['multiple']) ? $data['multiple'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['data_source'] = isset($data['data_source']) ? $data['data_source'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
        $this->container['class_name'] = isset($data['class_name']) ? $data['class_name'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['combo_gruppi_id'] = isset($data['combo_gruppi_id']) ? $data['combo_gruppi_id'] : null;
        $this->container['dependency_fields'] = isset($data['dependency_fields']) ? $data['dependency_fields'] : null;
        $this->container['associations'] = isset($data['associations']) ? $data['associations'] : null;
        $this->container['is_additional'] = isset($data['is_additional']) ? $data['is_additional'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['predefined_profile_formula'] = isset($data['predefined_profile_formula']) ? $data['predefined_profile_formula'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('className', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['class_name'] === null) {
            $invalidProperties[] = "'class_name' can't be null";
        }
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

        if ($this->container['class_name'] === null) {
            return false;
        }
        return true;
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
     * Gets default_operator
     *
     * @return int
     */
    public function getDefaultOperator()
    {
        return $this->container['default_operator'];
    }

    /**
     * Sets default_operator
     *
     * @param int $default_operator Default Operator
     *
     * @return $this
     */
    public function setDefaultOperator($default_operator)
    {
        $this->container['default_operator'] = $default_operator;

        return $this;
    }

    /**
     * Gets table_name
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->container['table_name'];
    }

    /**
     * Sets table_name
     *
     * @param string $table_name Table name
     *
     * @return $this
     */
    public function setTableName($table_name)
    {
        $this->container['table_name'] = $table_name;

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
     * @param int $binder_field_id Binder Identifier
     *
     * @return $this
     */
    public function setBinderFieldId($binder_field_id)
    {
        $this->container['binder_field_id'] = $binder_field_id;

        return $this;
    }

    /**
     * Gets multiple
     *
     * @return string
     */
    public function getMultiple()
    {
        return $this->container['multiple'];
    }

    /**
     * Sets multiple
     *
     * @param string $multiple Multiple values
     *
     * @return $this
     */
    public function setMultiple($multiple)
    {
        $this->container['multiple'] = $multiple;

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
     * @param string $external_id External identifier
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Label
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order Order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return string
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param string $data_source DataSource identifier
     *
     * @return $this
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /**
     * Sets formula
     *
     * @param string $formula Formula
     *
     * @return $this
     */
    public function setFormula($formula)
    {
        $this->container['formula'] = $formula;

        return $this;
    }

    /**
     * Gets class_name
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->container['class_name'];
    }

    /**
     * Sets class_name
     *
     * @param string $class_name Name of class
     *
     * @return $this
     */
    public function setClassName($class_name)
    {
        $this->container['class_name'] = $class_name;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool $locked Locked in read-only
     *
     * @return $this
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets combo_gruppi_id
     *
     * @return string
     */
    public function getComboGruppiId()
    {
        return $this->container['combo_gruppi_id'];
    }

    /**
     * Sets combo_gruppi_id
     *
     * @param string $combo_gruppi_id Data Group Identifier
     *
     * @return $this
     */
    public function setComboGruppiId($combo_gruppi_id)
    {
        $this->container['combo_gruppi_id'] = $combo_gruppi_id;

        return $this;
    }

    /**
     * Gets dependency_fields
     *
     * @return \Swagger\Client\Model\DependencyFieldItem[]
     */
    public function getDependencyFields()
    {
        return $this->container['dependency_fields'];
    }

    /**
     * Sets dependency_fields
     *
     * @param \Swagger\Client\Model\DependencyFieldItem[] $dependency_fields List of dependent fields
     *
     * @return $this
     */
    public function setDependencyFields($dependency_fields)
    {
        $this->container['dependency_fields'] = $dependency_fields;

        return $this;
    }

    /**
     * Gets associations
     *
     * @return map[string,string]
     */
    public function getAssociations()
    {
        return $this->container['associations'];
    }

    /**
     * Sets associations
     *
     * @param map[string,string] $associations Associated fields
     *
     * @return $this
     */
    public function setAssociations($associations)
    {
        $this->container['associations'] = $associations;

        return $this;
    }

    /**
     * Gets is_additional
     *
     * @return bool
     */
    public function getIsAdditional()
    {
        return $this->container['is_additional'];
    }

    /**
     * Sets is_additional
     *
     * @param bool $is_additional Field type additional
     *
     * @return $this
     */
    public function setIsAdditional($is_additional)
    {
        $this->container['is_additional'] = $is_additional;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible Visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets predefined_profile_formula
     *
     * @return string
     */
    public function getPredefinedProfileFormula()
    {
        return $this->container['predefined_profile_formula'];
    }

    /**
     * Sets predefined_profile_formula
     *
     * @param string $predefined_profile_formula Formula in the context of predefined profile
     *
     * @return $this
     */
    public function setPredefinedProfileFormula($predefined_profile_formula)
    {
        $this->container['predefined_profile_formula'] = $predefined_profile_formula;

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


