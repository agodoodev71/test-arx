# Swagger\Client\TaskWorkHistoryV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkHistoryV2GetHistoryByProcessId**](TaskWorkHistoryV2Api.md#taskWorkHistoryV2GetHistoryByProcessId) | **GET** /api/v2/TaskHistory/byProcessId/{processId} | This call returns the datasource of a process history.  This call could not be compatible with some programming language, in this case use the call api/TaskHistory/byProcessId/{processId}


# **taskWorkHistoryV2GetHistoryByProcessId**
> object taskWorkHistoryV2GetHistoryByProcessId($process_id)

This call returns the datasource of a process history.  This call could not be compatible with some programming language, in this case use the call api/TaskHistory/byProcessId/{processId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkHistoryV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->taskWorkHistoryV2GetHistoryByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkHistoryV2Api->taskWorkHistoryV2GetHistoryByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

