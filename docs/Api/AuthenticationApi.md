# Swagger\Client\AuthenticationApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationGetAcecssTokenClaims**](AuthenticationApi.md#authenticationGetAcecssTokenClaims) | **GET** /api/Authentication/AcecssTokenClaims | This call returns the access token claims
[**authenticationGetLogonProviderInfo**](AuthenticationApi.md#authenticationGetLogonProviderInfo) | **GET** /api/Authentication/logonProvider/{id} | This call returns a specific logon provider by id
[**authenticationGetLogonProviderInfoList**](AuthenticationApi.md#authenticationGetLogonProviderInfoList) | **GET** /api/Authentication/logonProviderList | This call returns the logon provider list
[**authenticationGetLogonProviderRedirectUri**](AuthenticationApi.md#authenticationGetLogonProviderRedirectUri) | **POST** /api/Authentication/getLogonProviderRedirectUri | This call returns the provides logon redirect uri for implicit logon provider authentication
[**authenticationGetToken**](AuthenticationApi.md#authenticationGetToken) | **POST** /api/Authentication | This call returns a new authentication token for a authentication request
[**authenticationGetTokenArxAssistant**](AuthenticationApi.md#authenticationGetTokenArxAssistant) | **GET** /api/Authentication/getTokenArxAssistant | This call returns authentication token for Assistant
[**authenticationGetUserAuthenticationAccessTokenInfo**](AuthenticationApi.md#authenticationGetUserAuthenticationAccessTokenInfo) | **POST** /api/Authentication/getUserAuthenticationAccessTokenInfo | This call returns a decoded authentication token for user
[**authenticationGetWindowsLogonRedirectUri**](AuthenticationApi.md#authenticationGetWindowsLogonRedirectUri) | **POST** /api/Authentication/getWindowsLogonRedirectUri | This call returns the provides logon redirect uri for implicit windows authentication
[**authenticationPortalLogout**](AuthenticationApi.md#authenticationPortalLogout) | **POST** /api/Authentication/PortalLogout | Portal logout audit
[**authenticationRefresh**](AuthenticationApi.md#authenticationRefresh) | **POST** /api/Authentication/refreshtoken | This call returns a new authentication token by a refresh token string
[**authenticationRefreshAuthenticationAccessTokenInfo**](AuthenticationApi.md#authenticationRefreshAuthenticationAccessTokenInfo) | **POST** /api/Authentication/refreshUserAuthenticationAccessTokenInfo | This call refreshes and decodes authentication token for user


# **authenticationGetAcecssTokenClaims**
> \Swagger\Client\Model\ClaimInfoDTO[] authenticationGetAcecssTokenClaims()

This call returns the access token claims

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authenticationGetAcecssTokenClaims();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetAcecssTokenClaims: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ClaimInfoDTO[]**](../Model/ClaimInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetLogonProviderInfo**
> \Swagger\Client\Model\LogonProviderInfoDto authenticationGetLogonProviderInfo($id)

This call returns a specific logon provider by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Logon provider identifier

try {
    $result = $apiInstance->authenticationGetLogonProviderInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetLogonProviderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Logon provider identifier |

### Return type

[**\Swagger\Client\Model\LogonProviderInfoDto**](../Model/LogonProviderInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetLogonProviderInfoList**
> \Swagger\Client\Model\LogonProviderInfoDto[] authenticationGetLogonProviderInfoList()

This call returns the logon provider list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authenticationGetLogonProviderInfoList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetLogonProviderInfoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LogonProviderInfoDto[]**](../Model/LogonProviderInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetLogonProviderRedirectUri**
> \Swagger\Client\Model\AuthenticationTokenResponseDTO authenticationGetLogonProviderRedirectUri($authentication_token_implicit_request)

This call returns the provides logon redirect uri for implicit logon provider authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_token_implicit_request = new \Swagger\Client\Model\AuthenticationTokenImplicitRequestDTO(); // \Swagger\Client\Model\AuthenticationTokenImplicitRequestDTO | Token request for implicit authentication

try {
    $result = $apiInstance->authenticationGetLogonProviderRedirectUri($authentication_token_implicit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetLogonProviderRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_token_implicit_request** | [**\Swagger\Client\Model\AuthenticationTokenImplicitRequestDTO**](../Model/AuthenticationTokenImplicitRequestDTO.md)| Token request for implicit authentication |

### Return type

[**\Swagger\Client\Model\AuthenticationTokenResponseDTO**](../Model/AuthenticationTokenResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetToken**
> \Swagger\Client\Model\AuthenticationTokenDTO authenticationGetToken($authentication_token_request)

This call returns a new authentication token for a authentication request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_token_request = new \Swagger\Client\Model\AuthenticationTokenRequestDTO(); // \Swagger\Client\Model\AuthenticationTokenRequestDTO | Token request for authentication

try {
    $result = $apiInstance->authenticationGetToken($authentication_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_token_request** | [**\Swagger\Client\Model\AuthenticationTokenRequestDTO**](../Model/AuthenticationTokenRequestDTO.md)| Token request for authentication |

### Return type

[**\Swagger\Client\Model\AuthenticationTokenDTO**](../Model/AuthenticationTokenDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetTokenArxAssistant**
> \Swagger\Client\Model\AuthenticationTokenDTO authenticationGetTokenArxAssistant()

This call returns authentication token for Assistant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authenticationGetTokenArxAssistant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetTokenArxAssistant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AuthenticationTokenDTO**](../Model/AuthenticationTokenDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetUserAuthenticationAccessTokenInfo**
> \Swagger\Client\Model\AccessTokenInfoDTO authenticationGetUserAuthenticationAccessTokenInfo($authentication_token_request)

This call returns a decoded authentication token for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_token_request = new \Swagger\Client\Model\AuthenticationTokenRequestDTO(); // \Swagger\Client\Model\AuthenticationTokenRequestDTO | Token request for authentication

try {
    $result = $apiInstance->authenticationGetUserAuthenticationAccessTokenInfo($authentication_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetUserAuthenticationAccessTokenInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_token_request** | [**\Swagger\Client\Model\AuthenticationTokenRequestDTO**](../Model/AuthenticationTokenRequestDTO.md)| Token request for authentication |

### Return type

[**\Swagger\Client\Model\AccessTokenInfoDTO**](../Model/AccessTokenInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationGetWindowsLogonRedirectUri**
> \Swagger\Client\Model\AuthenticationTokenResponseDTO authenticationGetWindowsLogonRedirectUri($authentication_token_implicit_request_dto)

This call returns the provides logon redirect uri for implicit windows authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_token_implicit_request_dto = new \Swagger\Client\Model\AuthenticationTokenImplicitRequestDTO(); // \Swagger\Client\Model\AuthenticationTokenImplicitRequestDTO | Token request for implicit authentication

try {
    $result = $apiInstance->authenticationGetWindowsLogonRedirectUri($authentication_token_implicit_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationGetWindowsLogonRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_token_implicit_request_dto** | [**\Swagger\Client\Model\AuthenticationTokenImplicitRequestDTO**](../Model/AuthenticationTokenImplicitRequestDTO.md)| Token request for implicit authentication |

### Return type

[**\Swagger\Client\Model\AuthenticationTokenResponseDTO**](../Model/AuthenticationTokenResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationPortalLogout**
> authenticationPortalLogout($portal_logout_request)

Portal logout audit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$portal_logout_request = new \Swagger\Client\Model\PortalLogoutRequestDto(); // \Swagger\Client\Model\PortalLogoutRequestDto | 

try {
    $apiInstance->authenticationPortalLogout($portal_logout_request);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationPortalLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **portal_logout_request** | [**\Swagger\Client\Model\PortalLogoutRequestDto**](../Model/PortalLogoutRequestDto.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationRefresh**
> \Swagger\Client\Model\AuthenticationTokenDTO authenticationRefresh($refresh_token_request)

This call returns a new authentication token by a refresh token string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refresh_token_request = new \Swagger\Client\Model\RefreshTokenRequestDTO(); // \Swagger\Client\Model\RefreshTokenRequestDTO | Token request for authentication refresh

try {
    $result = $apiInstance->authenticationRefresh($refresh_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationRefresh: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_token_request** | [**\Swagger\Client\Model\RefreshTokenRequestDTO**](../Model/RefreshTokenRequestDTO.md)| Token request for authentication refresh |

### Return type

[**\Swagger\Client\Model\AuthenticationTokenDTO**](../Model/AuthenticationTokenDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **authenticationRefreshAuthenticationAccessTokenInfo**
> \Swagger\Client\Model\AccessTokenInfoDTO authenticationRefreshAuthenticationAccessTokenInfo($authentication_refresh_token_request)

This call refreshes and decodes authentication token for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authentication_refresh_token_request = new \Swagger\Client\Model\AuthenticationRefreshTokenRequestDTO(); // \Swagger\Client\Model\AuthenticationRefreshTokenRequestDTO | Authetication refresh token request

try {
    $result = $apiInstance->authenticationRefreshAuthenticationAccessTokenInfo($authentication_refresh_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticationRefreshAuthenticationAccessTokenInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authentication_refresh_token_request** | [**\Swagger\Client\Model\AuthenticationRefreshTokenRequestDTO**](../Model/AuthenticationRefreshTokenRequestDTO.md)| Authetication refresh token request |

### Return type

[**\Swagger\Client\Model\AccessTokenInfoDTO**](../Model/AccessTokenInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

