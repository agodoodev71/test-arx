# Swagger\Client\PasswordManagerApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passwordManagerChangePassword**](PasswordManagerApi.md#passwordManagerChangePassword) | **POST** /api/PasswordManager/ChangePassword | This call changes the password of connected user
[**passwordManagerChangePasswordUnAuthorize**](PasswordManagerApi.md#passwordManagerChangePasswordUnAuthorize) | **POST** /api/PasswordManager/ChangePasswordUnAuthorize | This call changes the password of connected user
[**passwordManagerGet**](PasswordManagerApi.md#passwordManagerGet) | **GET** /api/PasswordManager/ChangePasswordConstraints | This call returns the change password options
[**passwordManagerGetPasswordRetrieveMode**](PasswordManagerApi.md#passwordManagerGetPasswordRetrieveMode) | **GET** /api/PasswordManager/PasswordRetrieveMode | This call returns the user password retrieve mode
[**passwordManagerRetrievePassword**](PasswordManagerApi.md#passwordManagerRetrievePassword) | **POST** /api/PasswordManager/RetrievePassword | This call retrieves user password according to server configuration


# **passwordManagerChangePassword**
> passwordManagerChangePassword($password_request)

This call changes the password of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_request = new \Swagger\Client\Model\ChangePasswordRequestDTO(); // \Swagger\Client\Model\ChangePasswordRequestDTO | Password request to change

try {
    $apiInstance->passwordManagerChangePassword($password_request);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagerApi->passwordManagerChangePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_request** | [**\Swagger\Client\Model\ChangePasswordRequestDTO**](../Model/ChangePasswordRequestDTO.md)| Password request to change |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordManagerChangePasswordUnAuthorize**
> passwordManagerChangePasswordUnAuthorize($password_request)

This call changes the password of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_request = new \Swagger\Client\Model\ChangePasswordRequestUnAuthorizeDTO(); // \Swagger\Client\Model\ChangePasswordRequestUnAuthorizeDTO | Password request to change

try {
    $apiInstance->passwordManagerChangePasswordUnAuthorize($password_request);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagerApi->passwordManagerChangePasswordUnAuthorize: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_request** | [**\Swagger\Client\Model\ChangePasswordRequestUnAuthorizeDTO**](../Model/ChangePasswordRequestUnAuthorizeDTO.md)| Password request to change |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordManagerGet**
> object passwordManagerGet()

This call returns the change password options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->passwordManagerGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagerApi->passwordManagerGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordManagerGetPasswordRetrieveMode**
> string passwordManagerGetPasswordRetrieveMode()

This call returns the user password retrieve mode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->passwordManagerGetPasswordRetrieveMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagerApi->passwordManagerGetPasswordRetrieveMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passwordManagerRetrievePassword**
> string passwordManagerRetrievePassword($retrieve_password_request)

This call retrieves user password according to server configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PasswordManagerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retrieve_password_request = new \Swagger\Client\Model\RetrievePasswordRequestDTO(); // \Swagger\Client\Model\RetrievePasswordRequestDTO | Retrieve password option

try {
    $result = $apiInstance->passwordManagerRetrievePassword($retrieve_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagerApi->passwordManagerRetrievePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retrieve_password_request** | [**\Swagger\Client\Model\RetrievePasswordRequestDTO**](../Model/RetrievePasswordRequestDTO.md)| Retrieve password option |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

