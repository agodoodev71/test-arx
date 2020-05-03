# Swagger\Client\PluginsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pluginsPluginsGet**](PluginsApi.md#pluginsPluginsGet) | **GET** /api/Plugins/{pluginCode} | This call invokes a server plugin
[**pluginsPluginsList**](PluginsApi.md#pluginsPluginsList) | **GET** /api/Plugins/list | This call returns the server plugin list
[**pluginsPluginsPost**](PluginsApi.md#pluginsPluginsPost) | **POST** /api/Plugins/{pluginCode} | This call invokes a server plugin


# **pluginsPluginsGet**
> object pluginsPluginsGet($plugin_code)

This call invokes a server plugin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_code = "plugin_code_example"; // string | Identifier of plugin

try {
    $result = $apiInstance->pluginsPluginsGet($plugin_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPluginsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_code** | **string**| Identifier of plugin |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pluginsPluginsList**
> \Swagger\Client\Model\ServerPluginDto[] pluginsPluginsList()

This call returns the server plugin list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->pluginsPluginsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPluginsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ServerPluginDto[]**](../Model/ServerPluginDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pluginsPluginsPost**
> object pluginsPluginsPost($plugin_code, $parameters)

This call invokes a server plugin

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_code = "plugin_code_example"; // string | Identifier of plugin
$parameters = array(new \Swagger\Client\Model\KeyValuePairStringString()); // \Swagger\Client\Model\KeyValuePairStringString[] | Parameters

try {
    $result = $apiInstance->pluginsPluginsPost($plugin_code, $parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->pluginsPluginsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plugin_code** | **string**| Identifier of plugin |
 **parameters** | [**\Swagger\Client\Model\KeyValuePairStringString[]**](../Model/KeyValuePairStringString.md)| Parameters |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

