<?php
/**
 * AddressBookDTO
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
 * AddressBookDTO Class Doc Comment
 *
 * @category Class
 * @description Class of the adress book item
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressBookDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddressBookDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'business_name' => 'string',
        'fax' => 'string',
        'address' => 'string',
        'location' => 'string',
        'postal_code' => 'string',
        'province' => 'string',
        'country' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'cell_phone' => 'string',
        'state' => 'int',
        'type' => 'int',
        'address_book_category_id' => 'int',
        'business_unit' => 'string',
        'class' => 'string',
        'fiscal_code' => 'string',
        'vat_number' => 'string',
        'priority' => 'int',
        'address_book_business_unit_code' => 'string',
        'address_book_note' => 'string',
        'external_code' => 'string',
        'additional_fields' => '\Swagger\Client\Model\AdditionalConcreteFields',
        'contacts' => '\Swagger\Client\Model\ContactDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'business_name' => null,
        'fax' => null,
        'address' => null,
        'location' => null,
        'postal_code' => null,
        'province' => null,
        'country' => null,
        'email' => null,
        'phone_number' => null,
        'cell_phone' => null,
        'state' => 'int32',
        'type' => 'int32',
        'address_book_category_id' => 'int32',
        'business_unit' => null,
        'class' => null,
        'fiscal_code' => null,
        'vat_number' => null,
        'priority' => 'int32',
        'address_book_business_unit_code' => null,
        'address_book_note' => null,
        'external_code' => null,
        'additional_fields' => null,
        'contacts' => null
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
        'business_name' => 'businessName',
        'fax' => 'fax',
        'address' => 'address',
        'location' => 'location',
        'postal_code' => 'postalCode',
        'province' => 'province',
        'country' => 'country',
        'email' => 'email',
        'phone_number' => 'phoneNumber',
        'cell_phone' => 'cellPhone',
        'state' => 'state',
        'type' => 'type',
        'address_book_category_id' => 'addressBookCategoryId',
        'business_unit' => 'businessUnit',
        'class' => 'class',
        'fiscal_code' => 'fiscalCode',
        'vat_number' => 'vatNumber',
        'priority' => 'priority',
        'address_book_business_unit_code' => 'addressBookBusinessUnitCode',
        'address_book_note' => 'addressBookNote',
        'external_code' => 'externalCode',
        'additional_fields' => 'additionalFields',
        'contacts' => 'contacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'business_name' => 'setBusinessName',
        'fax' => 'setFax',
        'address' => 'setAddress',
        'location' => 'setLocation',
        'postal_code' => 'setPostalCode',
        'province' => 'setProvince',
        'country' => 'setCountry',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'cell_phone' => 'setCellPhone',
        'state' => 'setState',
        'type' => 'setType',
        'address_book_category_id' => 'setAddressBookCategoryId',
        'business_unit' => 'setBusinessUnit',
        'class' => 'setClass',
        'fiscal_code' => 'setFiscalCode',
        'vat_number' => 'setVatNumber',
        'priority' => 'setPriority',
        'address_book_business_unit_code' => 'setAddressBookBusinessUnitCode',
        'address_book_note' => 'setAddressBookNote',
        'external_code' => 'setExternalCode',
        'additional_fields' => 'setAdditionalFields',
        'contacts' => 'setContacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'business_name' => 'getBusinessName',
        'fax' => 'getFax',
        'address' => 'getAddress',
        'location' => 'getLocation',
        'postal_code' => 'getPostalCode',
        'province' => 'getProvince',
        'country' => 'getCountry',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'cell_phone' => 'getCellPhone',
        'state' => 'getState',
        'type' => 'getType',
        'address_book_category_id' => 'getAddressBookCategoryId',
        'business_unit' => 'getBusinessUnit',
        'class' => 'getClass',
        'fiscal_code' => 'getFiscalCode',
        'vat_number' => 'getVatNumber',
        'priority' => 'getPriority',
        'address_book_business_unit_code' => 'getAddressBookBusinessUnitCode',
        'address_book_note' => 'getAddressBookNote',
        'external_code' => 'getExternalCode',
        'additional_fields' => 'getAdditionalFields',
        'contacts' => 'getContacts'
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
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['cell_phone'] = isset($data['cell_phone']) ? $data['cell_phone'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['address_book_category_id'] = isset($data['address_book_category_id']) ? $data['address_book_category_id'] : null;
        $this->container['business_unit'] = isset($data['business_unit']) ? $data['business_unit'] : null;
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['fiscal_code'] = isset($data['fiscal_code']) ? $data['fiscal_code'] : null;
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['address_book_business_unit_code'] = isset($data['address_book_business_unit_code']) ? $data['address_book_business_unit_code'] : null;
        $this->container['address_book_note'] = isset($data['address_book_note']) ? $data['address_book_note'] : null;
        $this->container['external_code'] = isset($data['external_code']) ? $data['external_code'] : null;
        $this->container['additional_fields'] = isset($data['additional_fields']) ? $data['additional_fields'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
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
     * @param int $id Unique identifier of the address book
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name Business name
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax Fax number
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address Address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string $province Province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Enail address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string $phone_number Phone number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets cell_phone
     *
     * @return string
     */
    public function getCellPhone()
    {
        return $this->container['cell_phone'];
    }

    /**
     * Sets cell_phone
     *
     * @param string $cell_phone Call phone number
     *
     * @return $this
     */
    public function setCellPhone($cell_phone)
    {
        $this->container['cell_phone'] = $cell_phone;

        return $this;
    }

    /**
     * Gets state
     *
     * @return int
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param int $state Possible values:  0: Active  1: NotActive
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Possible values:  0: User  1: Group  2: Business
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address_book_category_id
     *
     * @return int
     */
    public function getAddressBookCategoryId()
    {
        return $this->container['address_book_category_id'];
    }

    /**
     * Sets address_book_category_id
     *
     * @param int $address_book_category_id Unique identifier of the category
     *
     * @return $this
     */
    public function setAddressBookCategoryId($address_book_category_id)
    {
        $this->container['address_book_category_id'] = $address_book_category_id;

        return $this;
    }

    /**
     * Gets business_unit
     *
     * @return string
     */
    public function getBusinessUnit()
    {
        return $this->container['business_unit'];
    }

    /**
     * Sets business_unit
     *
     * @param string $business_unit BusinessUnit code
     *
     * @return $this
     */
    public function setBusinessUnit($business_unit)
    {
        $this->container['business_unit'] = $business_unit;

        return $this;
    }

    /**
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class Class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets fiscal_code
     *
     * @return string
     */
    public function getFiscalCode()
    {
        return $this->container['fiscal_code'];
    }

    /**
     * Sets fiscal_code
     *
     * @param string $fiscal_code Fiscal Code
     *
     * @return $this
     */
    public function setFiscalCode($fiscal_code)
    {
        $this->container['fiscal_code'] = $fiscal_code;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number Partita Iva
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority Possible values:  0: NoSend  1: Fax  2: Email  3: Fax_Email  4: Email_Fax  5: Fax_Plus_Mail  6: Print
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets address_book_business_unit_code
     *
     * @return string
     */
    public function getAddressBookBusinessUnitCode()
    {
        return $this->container['address_book_business_unit_code'];
    }

    /**
     * Sets address_book_business_unit_code
     *
     * @param string $address_book_business_unit_code Business Unit code for not internal user
     *
     * @return $this
     */
    public function setAddressBookBusinessUnitCode($address_book_business_unit_code)
    {
        $this->container['address_book_business_unit_code'] = $address_book_business_unit_code;

        return $this;
    }

    /**
     * Gets address_book_note
     *
     * @return string
     */
    public function getAddressBookNote()
    {
        return $this->container['address_book_note'];
    }

    /**
     * Sets address_book_note
     *
     * @param string $address_book_note Note
     *
     * @return $this
     */
    public function setAddressBookNote($address_book_note)
    {
        $this->container['address_book_note'] = $address_book_note;

        return $this;
    }

    /**
     * Gets external_code
     *
     * @return string
     */
    public function getExternalCode()
    {
        return $this->container['external_code'];
    }

    /**
     * Sets external_code
     *
     * @param string $external_code External Code
     *
     * @return $this
     */
    public function setExternalCode($external_code)
    {
        $this->container['external_code'] = $external_code;

        return $this;
    }

    /**
     * Gets additional_fields
     *
     * @return \Swagger\Client\Model\AdditionalConcreteFields
     */
    public function getAdditionalFields()
    {
        return $this->container['additional_fields'];
    }

    /**
     * Sets additional_fields
     *
     * @param \Swagger\Client\Model\AdditionalConcreteFields $additional_fields Additional fields
     *
     * @return $this
     */
    public function setAdditionalFields($additional_fields)
    {
        $this->container['additional_fields'] = $additional_fields;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \Swagger\Client\Model\ContactDTO[]
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \Swagger\Client\Model\ContactDTO[] $contacts Contacts
     *
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

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


