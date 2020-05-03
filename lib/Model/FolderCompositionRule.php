<?php
/**
 * FolderCompositionRule
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
 * FolderCompositionRule Class Doc Comment
 *
 * @category Class
 * @description Class of rule of folder
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FolderCompositionRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FolderCompositionRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'folder_id' => 'int',
        'user_id' => 'int',
        'parse_mode' => 'int',
        'character' => 'string',
        'creation_date_time' => '\DateTime',
        'composition_rule_details' => '\Swagger\Client\Model\FolderCompositionRuleDetail[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'folder_id' => 'int32',
        'user_id' => 'int32',
        'parse_mode' => 'int32',
        'character' => null,
        'creation_date_time' => 'date-time',
        'composition_rule_details' => null
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
        'folder_id' => 'folderId',
        'user_id' => 'userId',
        'parse_mode' => 'parseMode',
        'character' => 'character',
        'creation_date_time' => 'creationDateTime',
        'composition_rule_details' => 'compositionRuleDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'folder_id' => 'setFolderId',
        'user_id' => 'setUserId',
        'parse_mode' => 'setParseMode',
        'character' => 'setCharacter',
        'creation_date_time' => 'setCreationDateTime',
        'composition_rule_details' => 'setCompositionRuleDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'folder_id' => 'getFolderId',
        'user_id' => 'getUserId',
        'parse_mode' => 'getParseMode',
        'character' => 'getCharacter',
        'creation_date_time' => 'getCreationDateTime',
        'composition_rule_details' => 'getCompositionRuleDetails'
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
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['parse_mode'] = isset($data['parse_mode']) ? $data['parse_mode'] : null;
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['creation_date_time'] = isset($data['creation_date_time']) ? $data['creation_date_time'] : null;
        $this->container['composition_rule_details'] = isset($data['composition_rule_details']) ? $data['composition_rule_details'] : null;
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
     * @param int $id Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return int
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param int $folder_id Folder Identifier
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

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
     * @param int $user_id User Identifier
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets parse_mode
     *
     * @return int
     */
    public function getParseMode()
    {
        return $this->container['parse_mode'];
    }

    /**
     * Sets parse_mode
     *
     * @param int $parse_mode Possible values:  0: ByPosition  1: BySeparator  2: None
     *
     * @return $this
     */
    public function setParseMode($parse_mode)
    {
        $this->container['parse_mode'] = $parse_mode;

        return $this;
    }

    /**
     * Gets character
     *
     * @return string
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param string $character Character Separator
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets creation_date_time
     *
     * @return \DateTime
     */
    public function getCreationDateTime()
    {
        return $this->container['creation_date_time'];
    }

    /**
     * Sets creation_date_time
     *
     * @param \DateTime $creation_date_time Creation Date
     *
     * @return $this
     */
    public function setCreationDateTime($creation_date_time)
    {
        $this->container['creation_date_time'] = $creation_date_time;

        return $this;
    }

    /**
     * Gets composition_rule_details
     *
     * @return \Swagger\Client\Model\FolderCompositionRuleDetail[]
     */
    public function getCompositionRuleDetails()
    {
        return $this->container['composition_rule_details'];
    }

    /**
     * Sets composition_rule_details
     *
     * @param \Swagger\Client\Model\FolderCompositionRuleDetail[] $composition_rule_details Details
     *
     * @return $this
     */
    public function setCompositionRuleDetails($composition_rule_details)
    {
        $this->container['composition_rule_details'] = $composition_rule_details;

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


