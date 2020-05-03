<?php
/**
 * EditProfileOptionsDTO
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
 * EditProfileOptionsDTO Class Doc Comment
 *
 * @category Class
 * @description Class of options for editing profile
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EditProfileOptionsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EditProfileOptionsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_load_predefined_profile' => 'bool',
        'can_unlock_profile' => 'bool',
        'can_unlock_profile_message' => 'string',
        'can_switch' => 'bool',
        'allow_edit_pa_fields' => 'bool',
        'workflow_subjected' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_load_predefined_profile' => null,
        'can_unlock_profile' => null,
        'can_unlock_profile_message' => null,
        'can_switch' => null,
        'allow_edit_pa_fields' => null,
        'workflow_subjected' => null
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
        'can_load_predefined_profile' => 'canLoadPredefinedProfile',
        'can_unlock_profile' => 'canUnlockProfile',
        'can_unlock_profile_message' => 'canUnlockProfileMessage',
        'can_switch' => 'canSwitch',
        'allow_edit_pa_fields' => 'allowEditPaFields',
        'workflow_subjected' => 'workflowSubjected'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_load_predefined_profile' => 'setCanLoadPredefinedProfile',
        'can_unlock_profile' => 'setCanUnlockProfile',
        'can_unlock_profile_message' => 'setCanUnlockProfileMessage',
        'can_switch' => 'setCanSwitch',
        'allow_edit_pa_fields' => 'setAllowEditPaFields',
        'workflow_subjected' => 'setWorkflowSubjected'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_load_predefined_profile' => 'getCanLoadPredefinedProfile',
        'can_unlock_profile' => 'getCanUnlockProfile',
        'can_unlock_profile_message' => 'getCanUnlockProfileMessage',
        'can_switch' => 'getCanSwitch',
        'allow_edit_pa_fields' => 'getAllowEditPaFields',
        'workflow_subjected' => 'getWorkflowSubjected'
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
        $this->container['can_load_predefined_profile'] = isset($data['can_load_predefined_profile']) ? $data['can_load_predefined_profile'] : null;
        $this->container['can_unlock_profile'] = isset($data['can_unlock_profile']) ? $data['can_unlock_profile'] : null;
        $this->container['can_unlock_profile_message'] = isset($data['can_unlock_profile_message']) ? $data['can_unlock_profile_message'] : null;
        $this->container['can_switch'] = isset($data['can_switch']) ? $data['can_switch'] : null;
        $this->container['allow_edit_pa_fields'] = isset($data['allow_edit_pa_fields']) ? $data['allow_edit_pa_fields'] : null;
        $this->container['workflow_subjected'] = isset($data['workflow_subjected']) ? $data['workflow_subjected'] : null;
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
     * Gets can_load_predefined_profile
     *
     * @return bool
     */
    public function getCanLoadPredefinedProfile()
    {
        return $this->container['can_load_predefined_profile'];
    }

    /**
     * Sets can_load_predefined_profile
     *
     * @param bool $can_load_predefined_profile Load Predefined Profile
     *
     * @return $this
     */
    public function setCanLoadPredefinedProfile($can_load_predefined_profile)
    {
        $this->container['can_load_predefined_profile'] = $can_load_predefined_profile;

        return $this;
    }

    /**
     * Gets can_unlock_profile
     *
     * @return bool
     */
    public function getCanUnlockProfile()
    {
        return $this->container['can_unlock_profile'];
    }

    /**
     * Sets can_unlock_profile
     *
     * @param bool $can_unlock_profile Unlock Profile
     *
     * @return $this
     */
    public function setCanUnlockProfile($can_unlock_profile)
    {
        $this->container['can_unlock_profile'] = $can_unlock_profile;

        return $this;
    }

    /**
     * Gets can_unlock_profile_message
     *
     * @return string
     */
    public function getCanUnlockProfileMessage()
    {
        return $this->container['can_unlock_profile_message'];
    }

    /**
     * Sets can_unlock_profile_message
     *
     * @param string $can_unlock_profile_message Unlock Profile Message
     *
     * @return $this
     */
    public function setCanUnlockProfileMessage($can_unlock_profile_message)
    {
        $this->container['can_unlock_profile_message'] = $can_unlock_profile_message;

        return $this;
    }

    /**
     * Gets can_switch
     *
     * @return bool
     */
    public function getCanSwitch()
    {
        return $this->container['can_switch'];
    }

    /**
     * Sets can_switch
     *
     * @param bool $can_switch Enabled Switch
     *
     * @return $this
     */
    public function setCanSwitch($can_switch)
    {
        $this->container['can_switch'] = $can_switch;

        return $this;
    }

    /**
     * Gets allow_edit_pa_fields
     *
     * @return bool
     */
    public function getAllowEditPaFields()
    {
        return $this->container['allow_edit_pa_fields'];
    }

    /**
     * Sets allow_edit_pa_fields
     *
     * @param bool $allow_edit_pa_fields Editing fields of Public Amministration (PA) information
     *
     * @return $this
     */
    public function setAllowEditPaFields($allow_edit_pa_fields)
    {
        $this->container['allow_edit_pa_fields'] = $allow_edit_pa_fields;

        return $this;
    }

    /**
     * Gets workflow_subjected
     *
     * @return bool
     */
    public function getWorkflowSubjected()
    {
        return $this->container['workflow_subjected'];
    }

    /**
     * Sets workflow_subjected
     *
     * @param bool $workflow_subjected Workflow in progress
     *
     * @return $this
     */
    public function setWorkflowSubjected($workflow_subjected)
    {
        $this->container['workflow_subjected'] = $workflow_subjected;

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


