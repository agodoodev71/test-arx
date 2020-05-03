<?php
/**
 * AccessTokenInfoDTO
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
 * AccessTokenInfoDTO Class Doc Comment
 *
 * @category Class
 * @description Class of access token
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessTokenInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccessTokenInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_token' => 'string',
        'refresh_token_token' => 'string',
        'token_type' => 'string',
        'auth_property_list' => '\Swagger\Client\Model\AuthPropertyInfoDTO[]',
        'expires_utc' => '\DateTime',
        'issued_utc' => '\DateTime',
        'is_persistent' => 'bool',
        'claim_info_list' => '\Swagger\Client\Model\ClaimInfoDTO[]',
        'arx_user_must_change_password' => 'bool',
        'error' => '\Swagger\Client\Model\MessageErrorDTO'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_token' => null,
        'refresh_token_token' => null,
        'token_type' => null,
        'auth_property_list' => null,
        'expires_utc' => 'date-time',
        'issued_utc' => 'date-time',
        'is_persistent' => null,
        'claim_info_list' => null,
        'arx_user_must_change_password' => null,
        'error' => null
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
        'access_token' => 'accessToken',
        'refresh_token_token' => 'refreshTokenToken',
        'token_type' => 'tokenType',
        'auth_property_list' => 'authPropertyList',
        'expires_utc' => 'expiresUtc',
        'issued_utc' => 'issuedUtc',
        'is_persistent' => 'isPersistent',
        'claim_info_list' => 'claimInfoList',
        'arx_user_must_change_password' => 'arxUserMustChangePassword',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_token' => 'setAccessToken',
        'refresh_token_token' => 'setRefreshTokenToken',
        'token_type' => 'setTokenType',
        'auth_property_list' => 'setAuthPropertyList',
        'expires_utc' => 'setExpiresUtc',
        'issued_utc' => 'setIssuedUtc',
        'is_persistent' => 'setIsPersistent',
        'claim_info_list' => 'setClaimInfoList',
        'arx_user_must_change_password' => 'setArxUserMustChangePassword',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_token' => 'getAccessToken',
        'refresh_token_token' => 'getRefreshTokenToken',
        'token_type' => 'getTokenType',
        'auth_property_list' => 'getAuthPropertyList',
        'expires_utc' => 'getExpiresUtc',
        'issued_utc' => 'getIssuedUtc',
        'is_persistent' => 'getIsPersistent',
        'claim_info_list' => 'getClaimInfoList',
        'arx_user_must_change_password' => 'getArxUserMustChangePassword',
        'error' => 'getError'
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
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['refresh_token_token'] = isset($data['refresh_token_token']) ? $data['refresh_token_token'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['auth_property_list'] = isset($data['auth_property_list']) ? $data['auth_property_list'] : null;
        $this->container['expires_utc'] = isset($data['expires_utc']) ? $data['expires_utc'] : null;
        $this->container['issued_utc'] = isset($data['issued_utc']) ? $data['issued_utc'] : null;
        $this->container['is_persistent'] = isset($data['is_persistent']) ? $data['is_persistent'] : null;
        $this->container['claim_info_list'] = isset($data['claim_info_list']) ? $data['claim_info_list'] : null;
        $this->container['arx_user_must_change_password'] = isset($data['arx_user_must_change_password']) ? $data['arx_user_must_change_password'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
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
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token Access Token
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets refresh_token_token
     *
     * @return string
     */
    public function getRefreshTokenToken()
    {
        return $this->container['refresh_token_token'];
    }

    /**
     * Sets refresh_token_token
     *
     * @param string $refresh_token_token Refresh Token
     *
     * @return $this
     */
    public function setRefreshTokenToken($refresh_token_token)
    {
        $this->container['refresh_token_token'] = $refresh_token_token;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type Token Type
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets auth_property_list
     *
     * @return \Swagger\Client\Model\AuthPropertyInfoDTO[]
     */
    public function getAuthPropertyList()
    {
        return $this->container['auth_property_list'];
    }

    /**
     * Sets auth_property_list
     *
     * @param \Swagger\Client\Model\AuthPropertyInfoDTO[] $auth_property_list Properties
     *
     * @return $this
     */
    public function setAuthPropertyList($auth_property_list)
    {
        $this->container['auth_property_list'] = $auth_property_list;

        return $this;
    }

    /**
     * Gets expires_utc
     *
     * @return \DateTime
     */
    public function getExpiresUtc()
    {
        return $this->container['expires_utc'];
    }

    /**
     * Sets expires_utc
     *
     * @param \DateTime $expires_utc Expires
     *
     * @return $this
     */
    public function setExpiresUtc($expires_utc)
    {
        $this->container['expires_utc'] = $expires_utc;

        return $this;
    }

    /**
     * Gets issued_utc
     *
     * @return \DateTime
     */
    public function getIssuedUtc()
    {
        return $this->container['issued_utc'];
    }

    /**
     * Sets issued_utc
     *
     * @param \DateTime $issued_utc Issued
     *
     * @return $this
     */
    public function setIssuedUtc($issued_utc)
    {
        $this->container['issued_utc'] = $issued_utc;

        return $this;
    }

    /**
     * Gets is_persistent
     *
     * @return bool
     */
    public function getIsPersistent()
    {
        return $this->container['is_persistent'];
    }

    /**
     * Sets is_persistent
     *
     * @param bool $is_persistent Authentication Persistent
     *
     * @return $this
     */
    public function setIsPersistent($is_persistent)
    {
        $this->container['is_persistent'] = $is_persistent;

        return $this;
    }

    /**
     * Gets claim_info_list
     *
     * @return \Swagger\Client\Model\ClaimInfoDTO[]
     */
    public function getClaimInfoList()
    {
        return $this->container['claim_info_list'];
    }

    /**
     * Sets claim_info_list
     *
     * @param \Swagger\Client\Model\ClaimInfoDTO[] $claim_info_list Claims
     *
     * @return $this
     */
    public function setClaimInfoList($claim_info_list)
    {
        $this->container['claim_info_list'] = $claim_info_list;

        return $this;
    }

    /**
     * Gets arx_user_must_change_password
     *
     * @return bool
     */
    public function getArxUserMustChangePassword()
    {
        return $this->container['arx_user_must_change_password'];
    }

    /**
     * Sets arx_user_must_change_password
     *
     * @param bool $arx_user_must_change_password Passeord Change
     *
     * @return $this
     */
    public function setArxUserMustChangePassword($arx_user_must_change_password)
    {
        $this->container['arx_user_must_change_password'] = $arx_user_must_change_password;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \Swagger\Client\Model\MessageErrorDTO
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \Swagger\Client\Model\MessageErrorDTO $error Error Message
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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


