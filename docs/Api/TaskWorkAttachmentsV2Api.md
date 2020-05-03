# Swagger\Client\TaskWorkAttachmentsV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkAttachmentsV2AddNewExternalAttachments**](TaskWorkAttachmentsV2Api.md#taskWorkAttachmentsV2AddNewExternalAttachments) | **POST** /api/v2/TaskAttachments/bytaskwork/{taskWorkId}/external/{bufferId} | This call adds a new external attachment to a process
[**taskWorkAttachmentsV2AddNewInternalAttachments**](TaskWorkAttachmentsV2Api.md#taskWorkAttachmentsV2AddNewInternalAttachments) | **POST** /api/v2/TaskAttachments/bytaskwork/{taskWorkId}/internal/{docnumber} | This call adds a new internal attachments to a process
[**taskWorkAttachmentsV2ChangeToSendForTaskAttachments**](TaskWorkAttachmentsV2Api.md#taskWorkAttachmentsV2ChangeToSendForTaskAttachments) | **PUT** /api/v2/TaskAttachments/{attachmentId}/tosend/{tosend} | this call changes the value of the &#39;to send&#39; flag for an attachment
[**taskWorkAttachmentsV2DeleteTaskAttachementById**](TaskWorkAttachmentsV2Api.md#taskWorkAttachmentsV2DeleteTaskAttachementById) | **DELETE** /api/v2/TaskAttachments/{attachmentId} | This call deletes a process attachment
[**taskWorkAttachmentsV2GetAttachmentsByProcessId**](TaskWorkAttachmentsV2Api.md#taskWorkAttachmentsV2GetAttachmentsByProcessId) | **GET** /api/v2/TaskAttachments/byprocessid/{processId} | This call returns all attachments of a process


# **taskWorkAttachmentsV2AddNewExternalAttachments**
> taskWorkAttachmentsV2AddNewExternalAttachments($buffer_id, $task_work_id)

This call adds a new external attachment to a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buffer_id = "buffer_id_example"; // string | Identifier of the buffer file
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkAttachmentsV2AddNewExternalAttachments($buffer_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsV2Api->taskWorkAttachmentsV2AddNewExternalAttachments: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkAttachmentsV2AddNewInternalAttachments**
> taskWorkAttachmentsV2AddNewInternalAttachments($docnumber, $task_work_id)

This call adds a new internal attachments to a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkAttachmentsV2AddNewInternalAttachments($docnumber, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsV2Api->taskWorkAttachmentsV2AddNewInternalAttachments: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkAttachmentsV2ChangeToSendForTaskAttachments**
> taskWorkAttachmentsV2ChangeToSendForTaskAttachments($attachment_id, $tosend)

this call changes the value of the 'to send' flag for an attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Attachment identifier
$tosend = true; // bool | Value of 'to send' flag

try {
    $apiInstance->taskWorkAttachmentsV2ChangeToSendForTaskAttachments($attachment_id, $tosend);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsV2Api->taskWorkAttachmentsV2ChangeToSendForTaskAttachments: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkAttachmentsV2DeleteTaskAttachementById**
> taskWorkAttachmentsV2DeleteTaskAttachementById($attachment_id)

This call deletes a process attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Attachment identifier

try {
    $apiInstance->taskWorkAttachmentsV2DeleteTaskAttachementById($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsV2Api->taskWorkAttachmentsV2DeleteTaskAttachementById: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkAttachmentsV2GetAttachmentsByProcessId**
> object taskWorkAttachmentsV2GetAttachmentsByProcessId($process_id)

This call returns all attachments of a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkAttachmentsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->taskWorkAttachmentsV2GetAttachmentsByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkAttachmentsV2Api->taskWorkAttachmentsV2GetAttachmentsByProcessId: ', $e->getMessage(), PHP_EOL;
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

