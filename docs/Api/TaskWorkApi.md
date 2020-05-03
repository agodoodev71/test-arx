# Swagger\Client\TaskWorkApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkActivateTaskwork**](TaskWorkApi.md#taskWorkActivateTaskwork) | **PUT** /api/TaskWork/{taskWorkId}/Activate | This call returns a taskwork if active
[**taskWorkAutoAssign**](TaskWorkApi.md#taskWorkAutoAssign) | **POST** /api/TaskWork/autoassign/{taskworkId} | This call autoassigns the taskwork
[**taskWorkCanFinalizeTaskByIds**](TaskWorkApi.md#taskWorkCanFinalizeTaskByIds) | **POST** /api/TaskWork/canfinalize | This call returns if is possible to close task work list
[**taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword**](TaskWorkApi.md#taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword) | **POST** /api/TaskWork/canfinalizebyexitcodeandpassword | This call returns if is possible to close task work list by exit code and password
[**taskWorkDeleteTaskWorkById**](TaskWorkApi.md#taskWorkDeleteTaskWorkById) | **DELETE** /api/TaskWork/{taskWorkId} | This call deletes the task
[**taskWorkFinalizeTaskByIdsAndExitCodeAndPassword**](TaskWorkApi.md#taskWorkFinalizeTaskByIdsAndExitCodeAndPassword) | **POST** /api/TaskWork/finalize | This call closes a task work list
[**taskWorkGetActiveTaskWork**](TaskWorkApi.md#taskWorkGetActiveTaskWork) | **POST** /api/TaskWork/actives/{docnumber} | This call executes a task search and return taskwork active for the user on a specific document
[**taskWorkGetDefaultSelect**](TaskWorkApi.md#taskWorkGetDefaultSelect) | **GET** /api/TaskWork/defaultselect | This call provides default select for tasklist search
[**taskWorkGetDocumentsByProcessId**](TaskWorkApi.md#taskWorkGetDocumentsByProcessId) | **POST** /api/TaskWork/documents/{processId} | This call returns the task documents
[**taskWorkGetDocumentsFilenameByProcessId**](TaskWorkApi.md#taskWorkGetDocumentsFilenameByProcessId) | **GET** /api/TaskWork/documents/filenames/{processId} | 
[**taskWorkGetExitCodesByTaskWorkIds**](TaskWorkApi.md#taskWorkGetExitCodesByTaskWorkIds) | **POST** /api/TaskWork/exitcodes | This call returns all possible exit code for taskWorks list
[**taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation**](TaskWorkApi.md#taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation) | **GET** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/maskprofileSchema | This call returns a document schema for a mask insert document taskWork operation
[**taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation**](TaskWorkApi.md#taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation) | **GET** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/modelprofileSchema | This call returns a profile schema for a model insert document taskWork operation
[**taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation**](TaskWorkApi.md#taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation) | **GET** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/standardprofileSchema | This call returns a profile schema for a standard insert document taskWork operation
[**taskWorkGetTaskWorkById**](TaskWorkApi.md#taskWorkGetTaskWorkById) | **GET** /api/TaskWork/{taskWorkId} | This call returns the task
[**taskWorkGetTaskWorkForAutoAssign**](TaskWorkApi.md#taskWorkGetTaskWorkForAutoAssign) | **GET** /api/TaskWork/autoassignlist/{docnumber} | This call returns all autoassigned taskwork associated with a document
[**taskWorkGetTasks**](TaskWorkApi.md#taskWorkGetTasks) | **POST** /api/TaskWork | This call executes a task search and return taskwork active for the user and the given workflows ids (with all revisions)
[**taskWorkReassignTaskById**](TaskWorkApi.md#taskWorkReassignTaskById) | **POST** /api/TaskWork/reassign/{taskworkid} | This call reassigns a task to selected users
[**taskWorkReassignUsersTaskById**](TaskWorkApi.md#taskWorkReassignUsersTaskById) | **GET** /api/TaskWork/reassignusers/{taskworkid} | This call reassigns a task to selected users
[**taskWorkSetProfileForTaskWorkBySelectionDocumentOperation**](TaskWorkApi.md#taskWorkSetProfileForTaskWorkBySelectionDocumentOperation) | **PUT** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/byselection | This call adds a profile to process for a selection document taskwork operation
[**taskWorkSetProfileForTaskWorkMaskDocumentOperation**](TaskWorkApi.md#taskWorkSetProfileForTaskWorkMaskDocumentOperation) | **POST** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/bymask | This call profiles a new document for a mask insert document taskwork operation
[**taskWorkSetProfileForTaskWorkModelDocumentOperation**](TaskWorkApi.md#taskWorkSetProfileForTaskWorkModelDocumentOperation) | **POST** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/bymodel | This call profiles a new document for a model insert document taskwork operation
[**taskWorkSetProfileForTaskWorkStandardDocumentOperation**](TaskWorkApi.md#taskWorkSetProfileForTaskWorkStandardDocumentOperation) | **POST** /api/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/bystandard | This call profiles a new document for a standard insert document taskwork operation
[**taskWorkSetTaskPriority**](TaskWorkApi.md#taskWorkSetTaskPriority) | **PUT** /api/TaskWork/priority/{priority} | This call sets the tasks priority
[**taskWorkSetTaskRead**](TaskWorkApi.md#taskWorkSetTaskRead) | **PUT** /api/TaskWork/read | This call sets the task as read
[**taskWorkSetTaskUnRead**](TaskWorkApi.md#taskWorkSetTaskUnRead) | **PUT** /api/TaskWork/unread | This call sets the tasks as unread
[**taskWorkTaskWorkTakeCharge**](TaskWorkApi.md#taskWorkTaskWorkTakeCharge) | **PUT** /api/TaskWork/{taskWorkId}/TakeCharge | This call takes charge of a taskwork


# **taskWorkActivateTaskwork**
> \Swagger\Client\Model\TaskWorkDTO taskWorkActivateTaskwork($task_work_id)

This call returns a taskwork if active

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkActivateTaskwork($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkActivateTaskwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |

### Return type

[**\Swagger\Client\Model\TaskWorkDTO**](../Model/TaskWorkDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkAutoAssign**
> taskWorkAutoAssign($taskwork_id)

This call autoassigns the taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskwork_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkAutoAssign($taskwork_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkAutoAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskwork_id** | **int**| Taskwork identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkCanFinalizeTaskByIds**
> \Swagger\Client\Model\CloseEligibleResult[] taskWorkCanFinalizeTaskByIds($taskworkids)

This call returns if is possible to close task work list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskworkids = array(new \Swagger\Client\Model\int[]()); // int[] | List of taskwork identifier

try {
    $result = $apiInstance->taskWorkCanFinalizeTaskByIds($taskworkids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkCanFinalizeTaskByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskworkids** | **int[]**| List of taskwork identifier |

### Return type

[**\Swagger\Client\Model\CloseEligibleResult[]**](../Model/CloseEligibleResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword**
> \Swagger\Client\Model\CloseEligibleResult[] taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword($close_request)

This call returns if is possible to close task work list by exit code and password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$close_request = new \Swagger\Client\Model\TaskWorkCloseRequest(); // \Swagger\Client\Model\TaskWorkCloseRequest | Taskwork information

try {
    $result = $apiInstance->taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword($close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkCanFinalizeTaskByIdsAndExitCodeAndPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **close_request** | [**\Swagger\Client\Model\TaskWorkCloseRequest**](../Model/TaskWorkCloseRequest.md)| Taskwork information |

### Return type

[**\Swagger\Client\Model\CloseEligibleResult[]**](../Model/CloseEligibleResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkDeleteTaskWorkById**
> taskWorkDeleteTaskWorkById($task_work_id)

This call deletes the task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkDeleteTaskWorkById($task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkDeleteTaskWorkById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkFinalizeTaskByIdsAndExitCodeAndPassword**
> taskWorkFinalizeTaskByIdsAndExitCodeAndPassword($close_request)

This call closes a task work list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$close_request = new \Swagger\Client\Model\TaskWorkCloseRequest(); // \Swagger\Client\Model\TaskWorkCloseRequest | Taskwork information

try {
    $apiInstance->taskWorkFinalizeTaskByIdsAndExitCodeAndPassword($close_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkFinalizeTaskByIdsAndExitCodeAndPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **close_request** | [**\Swagger\Client\Model\TaskWorkCloseRequest**](../Model/TaskWorkCloseRequest.md)| Taskwork information |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetActiveTaskWork**
> \Swagger\Client\Model\RowSearchResult[] taskWorkGetActiveTaskWork($select, $docnumber)

This call executes a task search and return taskwork active for the user on a specific document

Use the resource on api/v2/TaskWork/actives/{docnumber}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Selection Fields
$docnumber = 56; // int | Document Identifier

try {
    $result = $apiInstance->taskWorkGetActiveTaskWork($select, $docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetActiveTaskWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Selection Fields |
 **docnumber** | **int**| Document Identifier |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetDefaultSelect**
> \Swagger\Client\Model\SelectDTO taskWorkGetDefaultSelect()

This call provides default select for tasklist search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taskWorkGetDefaultSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetDefaultSelect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetDocumentsByProcessId**
> \Swagger\Client\Model\RowSearchResult[] taskWorkGetDocumentsByProcessId($process_id, $select)

This call returns the task documents

Use the resource on api/v2/TaskWork/documents/{processId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Field select configuration

try {
    $result = $apiInstance->taskWorkGetDocumentsByProcessId($process_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetDocumentsByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Field select configuration |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetDocumentsFilenameByProcessId**
> \Swagger\Client\Model\KeyValueElementDto[] taskWorkGetDocumentsFilenameByProcessId($process_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | 

try {
    $result = $apiInstance->taskWorkGetDocumentsFilenameByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetDocumentsFilenameByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\KeyValueElementDto[]**](../Model/KeyValueElementDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetExitCodesByTaskWorkIds**
> \Swagger\Client\Model\TaskExitCodeDTO[] taskWorkGetExitCodesByTaskWorkIds($task_work_ids)

This call returns all possible exit code for taskWorks list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of taskwork identifier

try {
    $result = $apiInstance->taskWorkGetExitCodesByTaskWorkIds($task_work_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetExitCodesByTaskWorkIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_ids** | **int[]**| List of taskwork identifier |

### Return type

[**\Swagger\Client\Model\TaskExitCodeDTO[]**](../Model/TaskExitCodeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation**
> \Swagger\Client\Model\MaskProfileSchemaDTO taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id)

This call returns a document schema for a mask insert document taskWork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation

try {
    $result = $apiInstance->taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetProfileSchemaForTaskWorkMaskDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |
 **task_work_document_operation_id** | **string**| Id of the operation |

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation**
> \Swagger\Client\Model\ModelProfileSchemaDTO taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id)

This call returns a profile schema for a model insert document taskWork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation

try {
    $result = $apiInstance->taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetProfileSchemaForTaskWorkModelDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |
 **task_work_document_operation_id** | **string**| Id of the operation |

### Return type

[**\Swagger\Client\Model\ModelProfileSchemaDTO**](../Model/ModelProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation**
> \Swagger\Client\Model\MaskProfileSchemaDTO taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id)

This call returns a profile schema for a standard insert document taskWork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation

try {
    $result = $apiInstance->taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetProfileSchemaForTaskWorkStandardDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |
 **task_work_document_operation_id** | **string**| Id of the operation |

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetTaskWorkById**
> \Swagger\Client\Model\TaskWorkDTO taskWorkGetTaskWorkById($task_work_id)

This call returns the task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkGetTaskWorkById($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetTaskWorkById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |

### Return type

[**\Swagger\Client\Model\TaskWorkDTO**](../Model/TaskWorkDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetTaskWorkForAutoAssign**
> \Swagger\Client\Model\TaskWorkDTO[] taskWorkGetTaskWorkForAutoAssign($docnumber)

This call returns all autoassigned taskwork associated with a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->taskWorkGetTaskWorkForAutoAssign($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetTaskWorkForAutoAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

[**\Swagger\Client\Model\TaskWorkDTO[]**](../Model/TaskWorkDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkGetTasks**
> \Swagger\Client\Model\RowSearchResult[] taskWorkGetTasks($request)

This call executes a task search and return taskwork active for the user and the given workflows ids (with all revisions)

Use the resource on api/v2/TaskWork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TaskWorkRequestDTO(); // \Swagger\Client\Model\TaskWorkRequestDTO | The request object that defines select parte and workflows ids, if workflows ids is null or empty returns all taskWork for the user

try {
    $result = $apiInstance->taskWorkGetTasks($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkGetTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TaskWorkRequestDTO**](../Model/TaskWorkRequestDTO.md)| The request object that defines select parte and workflows ids, if workflows ids is null or empty returns all taskWork for the user |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkReassignTaskById**
> taskWorkReassignTaskById($taskworkid, $reassign_request)

This call reassigns a task to selected users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskworkid = 56; // int | Taskwork identifier
$reassign_request = new \Swagger\Client\Model\TaskWorkReassignRequest(); // \Swagger\Client\Model\TaskWorkReassignRequest | Information for re assign operation request

try {
    $apiInstance->taskWorkReassignTaskById($taskworkid, $reassign_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkReassignTaskById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskworkid** | **int**| Taskwork identifier |
 **reassign_request** | [**\Swagger\Client\Model\TaskWorkReassignRequest**](../Model/TaskWorkReassignRequest.md)| Information for re assign operation request |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkReassignUsersTaskById**
> \Swagger\Client\Model\UserCompleteDTO[] taskWorkReassignUsersTaskById($taskworkid)

This call reassigns a task to selected users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskworkid = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkReassignUsersTaskById($taskworkid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkReassignUsersTaskById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskworkid** | **int**| Taskwork identifier |

### Return type

[**\Swagger\Client\Model\UserCompleteDTO[]**](../Model/UserCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetProfileForTaskWorkBySelectionDocumentOperation**
> taskWorkSetProfileForTaskWorkBySelectionDocumentOperation($task_work_id, $task_work_document_operation_id, $docnumbers)

This call adds a profile to process for a selection document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | List of document identifier to add

try {
    $apiInstance->taskWorkSetProfileForTaskWorkBySelectionDocumentOperation($task_work_id, $task_work_document_operation_id, $docnumbers);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetProfileForTaskWorkBySelectionDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifie |
 **task_work_document_operation_id** | **string**| Id of the operation |
 **docnumbers** | **int[]**| List of document identifier to add |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetProfileForTaskWorkMaskDocumentOperation**
> \Swagger\Client\Model\ProfileResultDTO taskWorkSetProfileForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id, $profile)

This call profiles a new document for a mask insert document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->taskWorkSetProfileForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetProfileForTaskWorkMaskDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifie |
 **task_work_document_operation_id** | **string**| Id of the operation |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetProfileForTaskWorkModelDocumentOperation**
> \Swagger\Client\Model\ProfileResultDTO taskWorkSetProfileForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id, $profile)

This call profiles a new document for a model insert document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->taskWorkSetProfileForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetProfileForTaskWorkModelDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifie |
 **task_work_document_operation_id** | **string**| Id of the operation |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetProfileForTaskWorkStandardDocumentOperation**
> \Swagger\Client\Model\ProfileResultDTO taskWorkSetProfileForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id, $profile)

This call profiles a new document for a standard insert document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->taskWorkSetProfileForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetProfileForTaskWorkStandardDocumentOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifie |
 **task_work_document_operation_id** | **string**| Id of the operation |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetTaskPriority**
> int taskWorkSetTaskPriority($task_ids, $priority)

This call sets the tasks priority

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of task identifier
$priority = 56; // int | Priority

try {
    $result = $apiInstance->taskWorkSetTaskPriority($task_ids, $priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetTaskPriority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_ids** | **int[]**| List of task identifier |
 **priority** | **int**| Priority |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetTaskRead**
> int taskWorkSetTaskRead($taskid)

This call sets the task as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskid = array(new \Swagger\Client\Model\int[]()); // int[] | Task Identifier

try {
    $result = $apiInstance->taskWorkSetTaskRead($taskid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetTaskRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskid** | **int[]**| Task Identifier |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkSetTaskUnRead**
> int taskWorkSetTaskUnRead($task_ids)

This call sets the tasks as unread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of task identifier

try {
    $result = $apiInstance->taskWorkSetTaskUnRead($task_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkSetTaskUnRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_ids** | **int[]**| List of task identifier |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkTaskWorkTakeCharge**
> taskWorkTaskWorkTakeCharge($task_work_id)

This call takes charge of a taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkTaskWorkTakeCharge($task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkApi->taskWorkTaskWorkTakeCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

