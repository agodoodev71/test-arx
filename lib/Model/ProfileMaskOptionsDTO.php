<?php
/**
 * ProfileMaskOptionsDTO
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
 * ProfileMaskOptionsDTO Class Doc Comment
 *
 * @category Class
 * @description Class of options associated with a profiling mask.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProfileMaskOptionsDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProfileMaskOptionsDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'show_notes' => 'bool',
        'show_attachments' => 'bool',
        'show_file_selection' => 'bool',
        'show_scanner_selection' => 'bool',
        'show_barcode_selection' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'show_notes' => null,
        'show_attachments' => null,
        'show_file_selection' => null,
        'show_scanner_selection' => null,
        'show_barcode_selection' => null
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
        'show_notes' => 'showNotes',
        'show_attachments' => 'showAttachments',
        'show_file_selection' => 'showFileSelection',
        'show_scanner_selection' => 'showScannerSelection',
        'show_barcode_selection' => 'showBarcodeSelection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'show_notes' => 'setShowNotes',
        'show_attachments' => 'setShowAttachments',
        'show_file_selection' => 'setShowFileSelection',
        'show_scanner_selection' => 'setShowScannerSelection',
        'show_barcode_selection' => 'setShowBarcodeSelection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'show_notes' => 'getShowNotes',
        'show_attachments' => 'getShowAttachments',
        'show_file_selection' => 'getShowFileSelection',
        'show_scanner_selection' => 'getShowScannerSelection',
        'show_barcode_selection' => 'getShowBarcodeSelection'
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
        $this->container['show_notes'] = isset($data['show_notes']) ? $data['show_notes'] : null;
        $this->container['show_attachments'] = isset($data['show_attachments']) ? $data['show_attachments'] : null;
        $this->container['show_file_selection'] = isset($data['show_file_selection']) ? $data['show_file_selection'] : null;
        $this->container['show_scanner_selection'] = isset($data['show_scanner_selection']) ? $data['show_scanner_selection'] : null;
        $this->container['show_barcode_selection'] = isset($data['show_barcode_selection']) ? $data['show_barcode_selection'] : null;
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
     * Gets show_notes
     *
     * @return bool
     */
    public function getShowNotes()
    {
        return $this->container['show_notes'];
    }

    /**
     * Sets show_notes
     *
     * @param bool $show_notes Show notes
     *
     * @return $this
     */
    public function setShowNotes($show_notes)
    {
        $this->container['show_notes'] = $show_notes;

        return $this;
    }

    /**
     * Gets show_attachments
     *
     * @return bool
     */
    public function getShowAttachments()
    {
        return $this->container['show_attachments'];
    }

    /**
     * Sets show_attachments
     *
     * @param bool $show_attachments Show attachments
     *
     * @return $this
     */
    public function setShowAttachments($show_attachments)
    {
        $this->container['show_attachments'] = $show_attachments;

        return $this;
    }

    /**
     * Gets show_file_selection
     *
     * @return bool
     */
    public function getShowFileSelection()
    {
        return $this->container['show_file_selection'];
    }

    /**
     * Sets show_file_selection
     *
     * @param bool $show_file_selection Show file selection
     *
     * @return $this
     */
    public function setShowFileSelection($show_file_selection)
    {
        $this->container['show_file_selection'] = $show_file_selection;

        return $this;
    }

    /**
     * Gets show_scanner_selection
     *
     * @return bool
     */
    public function getShowScannerSelection()
    {
        return $this->container['show_scanner_selection'];
    }

    /**
     * Sets show_scanner_selection
     *
     * @param bool $show_scanner_selection Show scanner selection
     *
     * @return $this
     */
    public function setShowScannerSelection($show_scanner_selection)
    {
        $this->container['show_scanner_selection'] = $show_scanner_selection;

        return $this;
    }

    /**
     * Gets show_barcode_selection
     *
     * @return bool
     */
    public function getShowBarcodeSelection()
    {
        return $this->container['show_barcode_selection'];
    }

    /**
     * Sets show_barcode_selection
     *
     * @param bool $show_barcode_selection Show barcode selection
     *
     * @return $this
     */
    public function setShowBarcodeSelection($show_barcode_selection)
    {
        $this->container['show_barcode_selection'] = $show_barcode_selection;

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


