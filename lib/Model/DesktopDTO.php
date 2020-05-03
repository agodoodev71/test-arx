<?php
/**
 * DesktopDTO
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
 * DesktopDTO Class Doc Comment
 *
 * @category Class
 * @description Class of user desktop information
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DesktopDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DesktopDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'masks' => '\Swagger\Client\Model\MaskDTO[]',
        'quick_searches' => '\Swagger\Client\Model\FindDTO[]',
        'profiles' => '\Swagger\Client\Model\ProfileForDesktopDTO[]',
        'views' => '\Swagger\Client\Model\ViewDTO[]',
        'models' => '\Swagger\Client\Model\ModelDTO[]',
        'folders' => '\Swagger\Client\Model\FolderDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'masks' => null,
        'quick_searches' => null,
        'profiles' => null,
        'views' => null,
        'models' => null,
        'folders' => null
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
        'masks' => 'masks',
        'quick_searches' => 'quickSearches',
        'profiles' => 'profiles',
        'views' => 'views',
        'models' => 'models',
        'folders' => 'folders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'masks' => 'setMasks',
        'quick_searches' => 'setQuickSearches',
        'profiles' => 'setProfiles',
        'views' => 'setViews',
        'models' => 'setModels',
        'folders' => 'setFolders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'masks' => 'getMasks',
        'quick_searches' => 'getQuickSearches',
        'profiles' => 'getProfiles',
        'views' => 'getViews',
        'models' => 'getModels',
        'folders' => 'getFolders'
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
        $this->container['masks'] = isset($data['masks']) ? $data['masks'] : null;
        $this->container['quick_searches'] = isset($data['quick_searches']) ? $data['quick_searches'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['models'] = isset($data['models']) ? $data['models'] : null;
        $this->container['folders'] = isset($data['folders']) ? $data['folders'] : null;
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
     * Gets masks
     *
     * @return \Swagger\Client\Model\MaskDTO[]
     */
    public function getMasks()
    {
        return $this->container['masks'];
    }

    /**
     * Sets masks
     *
     * @param \Swagger\Client\Model\MaskDTO[] $masks List of Masks
     *
     * @return $this
     */
    public function setMasks($masks)
    {
        $this->container['masks'] = $masks;

        return $this;
    }

    /**
     * Gets quick_searches
     *
     * @return \Swagger\Client\Model\FindDTO[]
     */
    public function getQuickSearches()
    {
        return $this->container['quick_searches'];
    }

    /**
     * Sets quick_searches
     *
     * @param \Swagger\Client\Model\FindDTO[] $quick_searches List of Quick Search
     *
     * @return $this
     */
    public function setQuickSearches($quick_searches)
    {
        $this->container['quick_searches'] = $quick_searches;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \Swagger\Client\Model\ProfileForDesktopDTO[]
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \Swagger\Client\Model\ProfileForDesktopDTO[] $profiles List of Documents
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

        return $this;
    }

    /**
     * Gets views
     *
     * @return \Swagger\Client\Model\ViewDTO[]
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param \Swagger\Client\Model\ViewDTO[] $views List of Views
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets models
     *
     * @return \Swagger\Client\Model\ModelDTO[]
     */
    public function getModels()
    {
        return $this->container['models'];
    }

    /**
     * Sets models
     *
     * @param \Swagger\Client\Model\ModelDTO[] $models List of Models
     *
     * @return $this
     */
    public function setModels($models)
    {
        $this->container['models'] = $models;

        return $this;
    }

    /**
     * Gets folders
     *
     * @return \Swagger\Client\Model\FolderDTO[]
     */
    public function getFolders()
    {
        return $this->container['folders'];
    }

    /**
     * Sets folders
     *
     * @param \Swagger\Client\Model\FolderDTO[] $folders List of Folders
     *
     * @return $this
     */
    public function setFolders($folders)
    {
        $this->container['folders'] = $folders;

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


