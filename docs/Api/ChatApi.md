# Swagger\Client\ChatApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatDeleteAvatar**](ChatApi.md#chatDeleteAvatar) | **DELETE** /api/Chat/avatar | Thi call delete the avatar for the user connected
[**chatGetAvatar**](ChatApi.md#chatGetAvatar) | **GET** /api/Chat/{id} | Call that returns the user avatar given his identifier
[**chatGetSettings**](ChatApi.md#chatGetSettings) | **GET** /api/Chat/settings | Call that returns the settings for the chat service
[**chatGetShareOptions**](ChatApi.md#chatGetShareOptions) | **POST** /api/Chat/ShareOptions | This call returns the share option by a share object
[**chatSetAvatar**](ChatApi.md#chatSetAvatar) | **PUT** /api/Chat/avatar | This call set the avatar for the user connected
[**chatSetSettings**](ChatApi.md#chatSetSettings) | **PUT** /api/Chat/settings | Call that save the settings for the chat service
[**chatShareObject**](ChatApi.md#chatShareObject) | **POST** /api/Chat/Share/{conversationid} | This call share an object to conversation


# **chatDeleteAvatar**
> chatDeleteAvatar()

Thi call delete the avatar for the user connected

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->chatDeleteAvatar();
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatDeleteAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatGetAvatar**
> object chatGetAvatar($id)

Call that returns the user avatar given his identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User identifier which you require avatar

try {
    $result = $apiInstance->chatGetAvatar($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatGetAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User identifier which you require avatar |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatGetSettings**
> \Swagger\Client\Model\ChatServiceSettingsDTO chatGetSettings()

Call that returns the settings for the chat service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->chatGetSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatGetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ChatServiceSettingsDTO**](../Model/ChatServiceSettingsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatGetShareOptions**
> \Swagger\Client\Model\ShareObjectOptionsDTO chatGetShareOptions($share_object)

This call returns the share option by a share object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$share_object = new \Swagger\Client\Model\ShareObjectBaseDTO(); // \Swagger\Client\Model\ShareObjectBaseDTO | Share data

try {
    $result = $apiInstance->chatGetShareOptions($share_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatGetShareOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **share_object** | [**\Swagger\Client\Model\ShareObjectBaseDTO**](../Model/ShareObjectBaseDTO.md)| Share data |

### Return type

[**\Swagger\Client\Model\ShareObjectOptionsDTO**](../Model/ShareObjectOptionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatSetAvatar**
> chatSetAvatar($request)

This call set the avatar for the user connected

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\SetAvatarRequestDto(); // \Swagger\Client\Model\SetAvatarRequestDto | SetAvatarRequestDto that contain the base64 avatar

try {
    $apiInstance->chatSetAvatar($request);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatSetAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SetAvatarRequestDto**](../Model/SetAvatarRequestDto.md)| SetAvatarRequestDto that contain the base64 avatar |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatSetSettings**
> chatSetSettings($chat_service_settings)

Call that save the settings for the chat service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chat_service_settings = new \Swagger\Client\Model\ChatServiceSettingsDTO(); // \Swagger\Client\Model\ChatServiceSettingsDTO | Settings of char service

try {
    $apiInstance->chatSetSettings($chat_service_settings);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatSetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chat_service_settings** | [**\Swagger\Client\Model\ChatServiceSettingsDTO**](../Model/ChatServiceSettingsDTO.md)| Settings of char service |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatShareObject**
> chatShareObject($conversationid, $share_object)

This call share an object to conversation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ChatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationid = 56; // int | Identifier of the conversation
$share_object = new \Swagger\Client\Model\ShareObjectDTO(); // \Swagger\Client\Model\ShareObjectDTO | Object to share

try {
    $apiInstance->chatShareObject($conversationid, $share_object);
} catch (Exception $e) {
    echo 'Exception when calling ChatApi->chatShareObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationid** | **int**| Identifier of the conversation |
 **share_object** | [**\Swagger\Client\Model\ShareObjectDTO**](../Model/ShareObjectDTO.md)| Object to share |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

