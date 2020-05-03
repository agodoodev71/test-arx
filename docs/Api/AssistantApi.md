# Swagger\Client\AssistantApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assistantBufferInsertForMonitoredFolder**](AssistantApi.md#assistantBufferInsertForMonitoredFolder) | **POST** /api/Assistant/BufferInsertForMonitoredFolder/{bufferId} | This call notifies the specified user that a document has been added to buffer from monitored folder
[**assistantDetected**](AssistantApi.md#assistantDetected) | **GET** /api/Assistant | This call notifies the specified user that the assistant is active
[**assistantNotifyProcessDocChange**](AssistantApi.md#assistantNotifyProcessDocChange) | **PUT** /api/Assistant/UpdateProcessDoc/{processDocId}/TaskWork/{taskWorkId} | This call notifies the specified user that a document has changed
[**assistantNotifyProfileChange**](AssistantApi.md#assistantNotifyProfileChange) | **PUT** /api/Assistant/UpdateProfile/{docNumber} | This call notifies the specified user that a document has changed
[**assistantScanComplete**](AssistantApi.md#assistantScanComplete) | **POST** /api/Assistant/ScanResult/{connectionId} | This call notifies the specified user that a document has scanned


# **assistantBufferInsertForMonitoredFolder**
> assistantBufferInsertForMonitoredFolder($buffer_id)

This call notifies the specified user that a document has been added to buffer from monitored folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buffer_id = "buffer_id_example"; // string | Result information to scan

try {
    $apiInstance->assistantBufferInsertForMonitoredFolder($buffer_id);
} catch (Exception $e) {
    echo 'Exception when calling AssistantApi->assistantBufferInsertForMonitoredFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buffer_id** | **string**| Result information to scan |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assistantDetected**
> assistantDetected($connection_id, $version)

This call notifies the specified user that the assistant is active

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_id = "connection_id_example"; // string | Connection identifier
$version = "version_example"; // string | Version

try {
    $apiInstance->assistantDetected($connection_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling AssistantApi->assistantDetected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_id** | **string**| Connection identifier |
 **version** | **string**| Version | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assistantNotifyProcessDocChange**
> assistantNotifyProcessDocChange($process_doc_id, $task_work_id)

This call notifies the specified user that a document has changed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Process document identifier
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->assistantNotifyProcessDocChange($process_doc_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling AssistantApi->assistantNotifyProcessDocChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Process document identifier |
 **task_work_id** | **int**| Taskwork identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assistantNotifyProfileChange**
> assistantNotifyProfileChange($doc_number)

This call notifies the specified user that a document has changed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document identifier

try {
    $apiInstance->assistantNotifyProfileChange($doc_number);
} catch (Exception $e) {
    echo 'Exception when calling AssistantApi->assistantNotifyProfileChange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assistantScanComplete**
> assistantScanComplete($connection_id, $scan_result_dto)

This call notifies the specified user that a document has scanned

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssistantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_id = "connection_id_example"; // string | Connection identifier
$scan_result_dto = new \Swagger\Client\Model\ScanResultDto(); // \Swagger\Client\Model\ScanResultDto | Result information to scan

try {
    $apiInstance->assistantScanComplete($connection_id, $scan_result_dto);
} catch (Exception $e) {
    echo 'Exception when calling AssistantApi->assistantScanComplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_id** | **string**| Connection identifier |
 **scan_result_dto** | [**\Swagger\Client\Model\ScanResultDto**](../Model/ScanResultDto.md)| Result information to scan |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

