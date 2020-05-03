# Swagger\Client\TaskWorkAttachmentsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkAttachmentsAddNewExternalAttachments**](TaskWorkAttachmentsApi.md#taskWorkAttachmentsAddNewExternalAttachments) | **POST** /api/TaskAttachments/bytaskwork/{taskWorkId}/external/{bufferId} | This call adds a new external attachment to a process
[**taskWorkAttachmentsAddNewInternalAttachments**](TaskWorkAttachmentsApi.md#taskWorkAttachmentsAddNewInternalAttachments) | **POST** /api/TaskAttachments/bytaskwork/{taskWorkId}/internal/{docnumber} | This call adds a new internal attachments to a process
[**taskWorkAttachmentsChangeToSendForTaskAttachments**](TaskWorkAttachmentsApi.md#taskWorkAttachmentsChangeToSendForTaskAttachments) | **PUT** /api/TaskAttachments/{attachmentId}/tosend/{tosend} | this call changes the value of the &#39;to send&#39; flag for an attachment
[**taskWorkAttachmentsDeleteTaskAttachementById**](TaskWorkAttachmentsApi.md#taskWorkAttachmentsDeleteTaskAttachementById) | **DELETE** /api/TaskAttachments/{attachmentId} | This call deletes a process attachment
[**taskWorkAttachmentsGetAttachmentsByProcessId**](TaskWorkAttachmentsApi.md#taskWorkAttachmentsGetAttachmentsByProcessId) | **GET** /api/TaskAttachments/byprocessid/{processId} | This call returns all attachments of a process


# **taskWorkAttachmentsAddNewExternalAttachments**
> taskWorkAttachmentsAddNewExternalAttachments($buffer_id, $task_work_id)

This call adds a new external attachment to a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buffer_id = "buffer_id_example"; // string | Identifier of the buffer file
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkAttachmentsAddNewExternalAttachments($buffer_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsApi->taskWorkAttachmentsAddNewExternalAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buffer_id** | **string**| Identifier of the buffer file |
 **task_work_id** | **int**| Taskwork identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkAttachmentsAddNewInternalAttachments**
> taskWorkAttachmentsAddNewInternalAttachments($docnumber, $task_work_id)

This call adds a new internal attachments to a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkAttachmentsAddNewInternalAttachments($docnumber, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsApi->taskWorkAttachmentsAddNewInternalAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |
 **task_work_id** | **int**| Taskwork identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkAttachmentsChangeToSendForTaskAttachments**
> taskWorkAttachmentsChangeToSendForTaskAttachments($attachment_id, $tosend)

this call changes the value of the 'to send' flag for an attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Attachment identifier
$tosend = true; // bool | Value of 'to send' flag

try {
    $apiInstance->taskWorkAttachmentsChangeToSendForTaskAttachments($attachment_id, $tosend);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsApi->taskWorkAttachmentsChangeToSendForTaskAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Attachment identifier |
 **tosend** | **bool**| Value of &#39;to send&#39; flag |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkAttachmentsDeleteTaskAttachementById**
> taskWorkAttachmentsDeleteTaskAttachementById($attachment_id)

This call deletes a process attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Attachment identifier

try {
    $apiInstance->taskWorkAttachmentsDeleteTaskAttachementById($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsApi->taskWorkAttachmentsDeleteTaskAttachementById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Attachment identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkAttachmentsGetAttachmentsByProcessId**
> \Swagger\Client\Model\RowSearchResult[] taskWorkAttachmentsGetAttachmentsByProcessId($process_id)

This call returns all attachments of a process

This method is deprecated. Use api/v2/TaskAttachments/byprocessid/{processId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->taskWorkAttachmentsGetAttachmentsByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsApi->taskWorkAttachmentsGetAttachmentsByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

