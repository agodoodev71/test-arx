# Swagger\Client\MonitoredFoldersApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**monitoredFoldersGetById**](MonitoredFoldersApi.md#monitoredFoldersGetById) | **GET** /api/MonitoredFolders/{monitoredFolderId} | This call returns the monitored folders by its id
[**monitoredFoldersGetByUserId**](MonitoredFoldersApi.md#monitoredFoldersGetByUserId) | **GET** /api/MonitoredFolders | This call returns all the monitored folders for a user
[**monitoredFoldersMonitoredFolderDelete**](MonitoredFoldersApi.md#monitoredFoldersMonitoredFolderDelete) | **DELETE** /api/MonitoredFolders/{monitoredFolderId} | This call deletes a monitored folder
[**monitoredFoldersMonitoredFolderInsert**](MonitoredFoldersApi.md#monitoredFoldersMonitoredFolderInsert) | **POST** /api/MonitoredFolders | This call insert new monitored folder for user
[**monitoredFoldersMonitoredFolderUpdate**](MonitoredFoldersApi.md#monitoredFoldersMonitoredFolderUpdate) | **PUT** /api/MonitoredFolders | This call updates a monitored folder


# **monitoredFoldersGetById**
> \Swagger\Client\Model\MonitoredFolderDTO monitoredFoldersGetById($monitored_folder_id)

This call returns the monitored folders by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folder_id = "monitored_folder_id_example"; // string | 

try {
    $result = $apiInstance->monitoredFoldersGetById($monitored_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersApi->monitoredFoldersGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folder_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MonitoredFolderDTO**](../Model/MonitoredFolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersGetByUserId**
> \Swagger\Client\Model\MonitoredFolderDTO[] monitoredFoldersGetByUserId()

This call returns all the monitored folders for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->monitoredFoldersGetByUserId();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersApi->monitoredFoldersGetByUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MonitoredFolderDTO[]**](../Model/MonitoredFolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersMonitoredFolderDelete**
> monitoredFoldersMonitoredFolderDelete($monitored_folder_id)

This call deletes a monitored folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folder_id = "monitored_folder_id_example"; // string | 

try {
    $apiInstance->monitoredFoldersMonitoredFolderDelete($monitored_folder_id);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersApi->monitoredFoldersMonitoredFolderDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folder_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersMonitoredFolderInsert**
> \Swagger\Client\Model\MonitoredFolderDTO monitoredFoldersMonitoredFolderInsert($monitored_folder)

This call insert new monitored folder for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folder = new \Swagger\Client\Model\MonitoredFolderDTO(); // \Swagger\Client\Model\MonitoredFolderDTO | 

try {
    $result = $apiInstance->monitoredFoldersMonitoredFolderInsert($monitored_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersApi->monitoredFoldersMonitoredFolderInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folder** | [**\Swagger\Client\Model\MonitoredFolderDTO**](../Model/MonitoredFolderDTO.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoredFolderDTO**](../Model/MonitoredFolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersMonitoredFolderUpdate**
> \Swagger\Client\Model\MonitoredFolderDTO monitoredFoldersMonitoredFolderUpdate($monitored_folder)

This call updates a monitored folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folder = new \Swagger\Client\Model\MonitoredFolderDTO(); // \Swagger\Client\Model\MonitoredFolderDTO | 

try {
    $result = $apiInstance->monitoredFoldersMonitoredFolderUpdate($monitored_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersApi->monitoredFoldersMonitoredFolderUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folder** | [**\Swagger\Client\Model\MonitoredFolderDTO**](../Model/MonitoredFolderDTO.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoredFolderDTO**](../Model/MonitoredFolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

