<?php
/**
 * ProfessionalRoleOperationDTO
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
 * ProfessionalRoleOperationDTO Class Doc Comment
 *
 * @category Class
 * @description Professional Role operation.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfessionalRoleOperationDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProfessionalRoleOperationDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'process_id' => 'int',
        'professional_role_id' => 'int',
        'user_id' => 'int',
        'user_complete_name' => 'string',
        'organization_chart_id' => 'int',
        'delegation_id' => 'int',
        'original_user_id' => 'int',
        'original_organization_chart_id' => 'int',
        'professional_role_name' => 'string',
        'exit_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'process_id' => 'int32',
        'professional_role_id' => 'int32',
        'user_id' => 'int32',
        'user_complete_name' => null,
        'organization_chart_id' => 'int32',
        'delegation_id' => 'int32',
        'original_user_id' => 'int32',
        'original_organization_chart_id' => 'int32',
        'professional_role_name' => null,
        'exit_code' => null
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
        'process_id' => 'processId',
        'professional_role_id' => 'professionalRoleId',
        'user_id' => 'userId',
        'user_complete_name' => 'userCompleteName',
        'organization_chart_id' => 'organizationChartId',
        'delegation_id' => 'delegationId',
        'original_user_id' => 'originalUserId',
        'original_organization_chart_id' => 'originalOrganizationChartId',
        'professional_role_name' => 'professionalRoleName',
        'exit_code' => 'exitCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'process_id' => 'setProcessId',
        'professional_role_id' => 'setProfessionalRoleId',
        'user_id' => 'setUserId',
        'user_complete_name' => 'setUserCompleteName',
        'organization_chart_id' => 'setOrganizationChartId',
        'delegation_id' => 'setDelegationId',
        'original_user_id' => 'setOriginalUserId',
        'original_organization_chart_id' => 'setOriginalOrganizationChartId',
        'professional_role_name' => 'setProfessionalRoleName',
        'exit_code' => 'setExitCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'process_id' => 'getProcessId',
        'professional_role_id' => 'getProfessionalRoleId',
        'user_id' => 'getUserId',
        'user_complete_name' => 'getUserCompleteName',
        'organization_chart_id' => 'getOrganizationChartId',
        'delegation_id' => 'getDelegationId',
        'original_user_id' => 'getOriginalUserId',
        'original_organization_chart_id' => 'getOriginalOrganizationChartId',
        'professional_role_name' => 'getProfessionalRoleName',
        'exit_code' => 'getExitCode'
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
        $this->container['process_id'] = isset($data['process_id']) ? $data['process_id'] : null;
        $this->container['professional_role_id'] = isset($data['professional_role_id']) ? $data['professional_role_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_complete_name'] = isset($data['user_complete_name']) ? $data['user_complete_name'] : null;
        $this->container['organization_chart_id'] = isset($data['organization_chart_id']) ? $data['organization_chart_id'] : null;
        $this->container['delegation_id'] = isset($data['delegation_id']) ? $data['delegation_id'] : null;
        $this->container['original_user_id'] = isset($data['original_user_id']) ? $data['original_user_id'] : null;
        $this->container['original_organization_chart_id'] = isset($data['original_organization_chart_id']) ? $data['original_organization_chart_id'] : null;
        $this->container['professional_role_name'] = isset($data['professional_role_name']) ? $data['professional_role_name'] : null;
        $this->container['exit_code'] = isset($data['exit_code']) ? $data['exit_code'] : null;
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
     * @param int $id Professional role operation id.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets process_id
     *
     * @return int
     */
    public function getProcessId()
    {
        return $this->container['process_id'];
    }

    /**
     * Sets process_id
     *
     * @param int $process_id Process Id.
     *
     * @return $this
     */
    public function setProcessId($process_id)
    {
        $this->container['process_id'] = $process_id;

        return $this;
    }

    /**
     * Gets professional_role_id
     *
     * @return int
     */
    public function getProfessionalRoleId()
    {
        return $this->container['professional_role_id'];
    }

    /**
     * Sets professional_role_id
     *
     * @param int $professional_role_id Professional Role Id
     *
     * @return $this
     */
    public function setProfessionalRoleId($professional_role_id)
    {
        $this->container['professional_role_id'] = $professional_role_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User Id.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_complete_name
     *
     * @return string
     */
    public function getUserCompleteName()
    {
        return $this->container['user_complete_name'];
    }

    /**
     * Sets user_complete_name
     *
     * @param string $user_complete_name User complete name.
     *
     * @return $this
     */
    public function setUserCompleteName($user_complete_name)
    {
        $this->container['user_complete_name'] = $user_complete_name;

        return $this;
    }

    /**
     * Gets organization_chart_id
     *
     * @return int
     */
    public function getOrganizationChartId()
    {
        return $this->container['organization_chart_id'];
    }

    /**
     * Sets organization_chart_id
     *
     * @param int $organization_chart_id Organization chart Id.
     *
     * @return $this
     */
    public function setOrganizationChartId($organization_chart_id)
    {
        $this->container['organization_chart_id'] = $organization_chart_id;

        return $this;
    }

    /**
     * Gets delegation_id
     *
     * @return int
     */
    public function getDelegationId()
    {
        return $this->container['delegation_id'];
    }

    /**
     * Sets delegation_id
     *
     * @param int $delegation_id Delegation Id.
     *
     * @return $this
     */
    public function setDelegationId($delegation_id)
    {
        $this->container['delegation_id'] = $delegation_id;

        return $this;
    }

    /**
     * Gets original_user_id
     *
     * @return int
     */
    public function getOriginalUserId()
    {
        return $this->container['original_user_id'];
    }

    /**
     * Sets original_user_id
     *
     * @param int $original_user_id Original user Id .
     *
     * @return $this
     */
    public function setOriginalUserId($original_user_id)
    {
        $this->container['original_user_id'] = $original_user_id;

        return $this;
    }

    /**
     * Gets original_organization_chart_id
     *
     * @return int
     */
    public function getOriginalOrganizationChartId()
    {
        return $this->container['original_organization_chart_id'];
    }

    /**
     * Sets original_organization_chart_id
     *
     * @param int $original_organization_chart_id Original user organization chart Id.
     *
     * @return $this
     */
    public function setOriginalOrganizationChartId($original_organization_chart_id)
    {
        $this->container['original_organization_chart_id'] = $original_organization_chart_id;

        return $this;
    }

    /**
     * Gets professional_role_name
     *
     * @return string
     */
    public function getProfessionalRoleName()
    {
        return $this->container['professional_role_name'];
    }

    /**
     * Sets professional_role_name
     *
     * @param string $professional_role_name Professional role name.
     *
     * @return $this
     */
    public function setProfessionalRoleName($professional_role_name)
    {
        $this->container['professional_role_name'] = $professional_role_name;

        return $this;
    }

    /**
     * Gets exit_code
     *
     * @return string
     */
    public function getExitCode()
    {
        return $this->container['exit_code'];
    }

    /**
     * Sets exit_code
     *
     * @param string $exit_code ExitCode related to this professional role in the task
     *
     * @return $this
     */
    public function setExitCode($exit_code)
    {
        $this->container['exit_code'] = $exit_code;

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

