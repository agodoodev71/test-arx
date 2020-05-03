# Swagger\Client\MonitoredFoldersDetailsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**monitoredFoldersDetailsMonitoredFoldersDetailDelete**](MonitoredFoldersDetailsApi.md#monitoredFoldersDetailsMonitoredFoldersDetailDelete) | **DELETE** /api/MonitoredFoldersDetails/{monitoredFoldersDetailId} | This call deletes a monitored folders detail
[**monitoredFoldersDetailsMonitoredFoldersDetailDeleteByMonitoredFolderId**](MonitoredFoldersDetailsApi.md#monitoredFoldersDetailsMonitoredFoldersDetailDeleteByMonitoredFolderId) | **DELETE** /api/MonitoredFoldersDetails/bymonitoredfolder/{monitoredFoldersId} | This call deletes a monitored folders detail by monitored folder id
[**monitoredFoldersDetailsMonitoredFoldersDetailGetDataByDmMonitoredfolderId**](MonitoredFoldersDetailsApi.md#monitoredFoldersDetailsMonitoredFoldersDetailGetDataByDmMonitoredfolderId) | **GET** /api/MonitoredFoldersDetails/{monitoredFoldersId} | This call returns all the monitored folders details for a gover monitored folder id
[**monitoredFoldersDetailsMonitoredFoldersDetailInsert**](MonitoredFoldersDetailsApi.md#monitoredFoldersDetailsMonitoredFoldersDetailInsert) | **POST** /api/MonitoredFoldersDetails | This call insert new monitored folders detail


# **monitoredFoldersDetailsMonitoredFoldersDetailDelete**
> monitoredFoldersDetailsMonitoredFoldersDetailDelete($monitored_folders_detail_id)

This call deletes a monitored folders detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folders_detail_id = "monitored_folders_detail_id_example"; // string | 

try {
    $apiInstance->monitoredFoldersDetailsMonitoredFoldersDetailDelete($monitored_folders_detail_id);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersDetailsApi->monitoredFoldersDetailsMonitoredFoldersDetailDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folders_detail_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersDetailsMonitoredFoldersDetailDeleteByMonitoredFolderId**
> monitoredFoldersDetailsMonitoredFoldersDetailDeleteByMonitoredFolderId($monitored_folders_id)

This call deletes a monitored folders detail by monitored folder id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folders_id = "monitored_folders_id_example"; // string | 

try {
    $apiInstance->monitoredFoldersDetailsMonitoredFoldersDetailDeleteByMonitoredFolderId($monitored_folders_id);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersDetailsApi->monitoredFoldersDetailsMonitoredFoldersDetailDeleteByMonitoredFolderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folders_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersDetailsMonitoredFoldersDetailGetDataByDmMonitoredfolderId**
> \Swagger\Client\Model\MonitoredFolderDetailDTO[] monitoredFoldersDetailsMonitoredFoldersDetailGetDataByDmMonitoredfolderId($monitored_folders_id)

This call returns all the monitored folders details for a gover monitored folder id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folders_id = "monitored_folders_id_example"; // string | 

try {
    $result = $apiInstance->monitoredFoldersDetailsMonitoredFoldersDetailGetDataByDmMonitoredfolderId($monitored_folders_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersDetailsApi->monitoredFoldersDetailsMonitoredFoldersDetailGetDataByDmMonitoredfolderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folders_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\MonitoredFolderDetailDTO[]**](../Model/MonitoredFolderDetailDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoredFoldersDetailsMonitoredFoldersDetailInsert**
> \Swagger\Client\Model\MonitoredFolderDetailDTO monitoredFoldersDetailsMonitoredFoldersDetailInsert($monitored_folders_detail)

This call insert new monitored folders detail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MonitoredFoldersDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$monitored_folders_detail = new \Swagger\Client\Model\MonitoredFolderDetailDTO(); // \Swagger\Client\Model\MonitoredFolderDetailDTO | 

try {
    $result = $apiInstance->monitoredFoldersDetailsMonitoredFoldersDetailInsert($monitored_folders_detail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoredFoldersDetailsApi->monitoredFoldersDetailsMonitoredFoldersDetailInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **monitored_folders_detail** | [**\Swagger\Client\Model\MonitoredFolderDetailDTO**](../Model/MonitoredFolderDetailDTO.md)|  |

### Return type

[**\Swagger\Client\Model\MonitoredFolderDetailDTO**](../Model/MonitoredFolderDetailDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

