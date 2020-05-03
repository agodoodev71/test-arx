# Swagger\Client\TaskWorkInstructionsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkInstructionsGetInstructionsByTaskWorkId**](TaskWorkInstructionsApi.md#taskWorkInstructionsGetInstructionsByTaskWorkId) | **GET** /api/TaskInstructions/byTaskWorkId/{taskWorkId} | This call returns the instruction of taskwork


# **taskWorkInstructionsGetInstructionsByTaskWorkId**
> \Swagger\Client\Model\TaskWorkInstructionDTO taskWorkInstructionsGetInstructionsByTaskWorkId($task_work_id)

This call returns the instruction of taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkInstructionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkInstructionsGetInstructionsByTaskWorkId($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkInstructionsApi->taskWorkInstructionsGetInstructionsByTaskWorkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |

### Return type

[**\Swagger\Client\Model\TaskWorkInstructionDTO**](../Model/TaskWorkInstructionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

