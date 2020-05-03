# Swagger\Client\ClientSettingsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientSettingsGetPluginSettings**](ClientSettingsApi.md#clientSettingsGetPluginSettings) | **GET** /api/Settings/plugin/{pluginId} | This call returns the settings of plugin
[**clientSettingsGetPluginUserSettings**](ClientSettingsApi.md#clientSettingsGetPluginUserSettings) | **POST** /api/Settings/pluginForUser | This call returns the plugin settings of connected user
[**clientSettingsGetSettings**](ClientSettingsApi.md#clientSettingsGetSettings) | **GET** /api/Settings/user | This call returns the settings of connected user
[**clientSettingsGetSystemSettings**](ClientSettingsApi.md#clientSettingsGetSystemSettings) | **GET** /api/Settings | This call returns the settings of system
[**clientSettingsGetWidgetSettings**](ClientSettingsApi.md#clientSettingsGetWidgetSettings) | **GET** /api/Settings/widget/{id}/{instanceId}/{desktopId} | This call returns the widget settings
[**clientSettingsGetWidgetUserSettings**](ClientSettingsApi.md#clientSettingsGetWidgetUserSettings) | **GET** /api/Settings/widgetForUser/{id}/{instanceId}/{desktopId} | This call returns the widget settings of connected user
[**clientSettingsUpdatePluginSetting**](ClientSettingsApi.md#clientSettingsUpdatePluginSetting) | **PUT** /api/Settings/plugin/{pluginId} | This call upade the setting of plugin
[**clientSettingsUpdatePluginUserSetting**](ClientSettingsApi.md#clientSettingsUpdatePluginUserSetting) | **PUT** /api/Settings/pluginForUser | This call upade the plugin settings of connected user
[**clientSettingsUpdateUserSetting**](ClientSettingsApi.md#clientSettingsUpdateUserSetting) | **PUT** /api/Settings/user | This call upade the setting of system
[**clientSettingsUpdateWidgetSetting**](ClientSettingsApi.md#clientSettingsUpdateWidgetSetting) | **PUT** /api/Settings/widget/{id}/{instanceId}/{desktopId} | This call upade the widget settings
[**clientSettingsUpdateWidgetUserSetting**](ClientSettingsApi.md#clientSettingsUpdateWidgetUserSetting) | **PUT** /api/Settings/widgetForUser/{id}/{instanceId}/{desktopId} | This call upade the widget settings of connected user


# **clientSettingsGetPluginSettings**
> object clientSettingsGetPluginSettings($plugin_id)

This call returns the settings of plugin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = "plugin_id_example"; // string | Identifier of plugin

try {
    $result = $apiInstance->clientSettingsGetPluginSettings($plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGetPluginSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **string**| Identifier of plugin |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsGetPluginUserSettings**
> object clientSettingsGetPluginUserSettings($plugin_request)

This call returns the plugin settings of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_request = new \Swagger\Client\Model\PluginSettingRequest(); // \Swagger\Client\Model\PluginSettingRequest | Request of plugin settings

try {
    $result = $apiInstance->clientSettingsGetPluginUserSettings($plugin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGetPluginUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_request** | [**\Swagger\Client\Model\PluginSettingRequest**](../Model/PluginSettingRequest.md)| Request of plugin settings |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsGetSettings**
> object clientSettingsGetSettings()

This call returns the settings of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clientSettingsGetSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGetSettings: ', $e->getMessage(), PHP_EOL;
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

# **clientSettingsGetSystemSettings**
> object clientSettingsGetSystemSettings()

This call returns the settings of system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->clientSettingsGetSystemSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGetSystemSettings: ', $e->getMessage(), PHP_EOL;
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

# **clientSettingsGetWidgetSettings**
> object clientSettingsGetWidgetSettings($id, $instance_id, $desktop_id)

This call returns the widget settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Widget identifier
$instance_id = "instance_id_example"; // string | Instance identifier
$desktop_id = 56; // int | Desktop identifier

try {
    $result = $apiInstance->clientSettingsGetWidgetSettings($id, $instance_id, $desktop_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGetWidgetSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Widget identifier |
 **instance_id** | **string**| Instance identifier |
 **desktop_id** | **int**| Desktop identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsGetWidgetUserSettings**
> object clientSettingsGetWidgetUserSettings($id, $instance_id, $desktop_id)

This call returns the widget settings of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Widget identifier
$instance_id = "instance_id_example"; // string | Instance identifier
$desktop_id = 56; // int | Desktop identifier

try {
    $result = $apiInstance->clientSettingsGetWidgetUserSettings($id, $instance_id, $desktop_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsGetWidgetUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Widget identifier |
 **instance_id** | **string**| Instance identifier |
 **desktop_id** | **int**| Desktop identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsUpdatePluginSetting**
> clientSettingsUpdatePluginSetting($plugin_id, $setting)

This call upade the setting of plugin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = "plugin_id_example"; // string | Identifier of plugin
$setting = new \stdClass; // object | Settings information to update

try {
    $apiInstance->clientSettingsUpdatePluginSetting($plugin_id, $setting);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsUpdatePluginSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_id** | **string**| Identifier of plugin |
 **setting** | **object**| Settings information to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsUpdatePluginUserSetting**
> clientSettingsUpdatePluginUserSetting($plugin_request)

This call upade the plugin settings of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_request = new \Swagger\Client\Model\PluginSettingRequest(); // \Swagger\Client\Model\PluginSettingRequest | Request of plugin settings

try {
    $apiInstance->clientSettingsUpdatePluginUserSetting($plugin_request);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsUpdatePluginUserSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_request** | [**\Swagger\Client\Model\PluginSettingRequest**](../Model/PluginSettingRequest.md)| Request of plugin settings |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsUpdateUserSetting**
> clientSettingsUpdateUserSetting($setting)

This call upade the setting of system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting = new \stdClass; // object | Settings information to update

try {
    $apiInstance->clientSettingsUpdateUserSetting($setting);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsUpdateUserSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting** | **object**| Settings information to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsUpdateWidgetSetting**
> clientSettingsUpdateWidgetSetting($id, $instance_id, $desktop_id, $user_settings)

This call upade the widget settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Widget identifier
$instance_id = "instance_id_example"; // string | Instance identifier
$desktop_id = 56; // int | Desktop identifier
$user_settings = new \stdClass; // object | Settings information to update

try {
    $apiInstance->clientSettingsUpdateWidgetSetting($id, $instance_id, $desktop_id, $user_settings);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsUpdateWidgetSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Widget identifier |
 **instance_id** | **string**| Instance identifier |
 **desktop_id** | **int**| Desktop identifier |
 **user_settings** | **object**| Settings information to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clientSettingsUpdateWidgetUserSetting**
> clientSettingsUpdateWidgetUserSetting($id, $instance_id, $desktop_id, $user_settings)

This call upade the widget settings of connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClientSettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Widget identifier
$instance_id = "instance_id_example"; // string | Instance identifier
$desktop_id = 56; // int | Desktop identifier
$user_settings = new \stdClass; // object | Settings information to update

try {
    $apiInstance->clientSettingsUpdateWidgetUserSetting($id, $instance_id, $desktop_id, $user_settings);
} catch (Exception $e) {
    echo 'Exception when calling ClientSettingsApi->clientSettingsUpdateWidgetUserSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Widget identifier |
 **instance_id** | **string**| Instance identifier |
 **desktop_id** | **int**| Desktop identifier |
 **user_settings** | **object**| Settings information to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

