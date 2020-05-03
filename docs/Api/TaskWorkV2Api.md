# Swagger\Client\TaskWorkV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkV2ActivateTaskwork**](TaskWorkV2Api.md#taskWorkV2ActivateTaskwork) | **PUT** /api/v2/TaskWork/{taskWorkId}/Activate | This call returns a taskwork if active
[**taskWorkV2AutoAssign**](TaskWorkV2Api.md#taskWorkV2AutoAssign) | **POST** /api/v2/TaskWork/autoassign/{taskworkId} | This call autoassigns the taskwork
[**taskWorkV2CanFinalizeTaskByIds**](TaskWorkV2Api.md#taskWorkV2CanFinalizeTaskByIds) | **POST** /api/v2/TaskWork/canfinalize | This call returns if is possible to close task work list
[**taskWorkV2CanFinalizeTaskByIdsAndExitCodeAndPassword**](TaskWorkV2Api.md#taskWorkV2CanFinalizeTaskByIdsAndExitCodeAndPassword) | **POST** /api/v2/TaskWork/canfinalizebyexitcodeandpassword | This call returns if is possible to close task work list by exit code and password
[**taskWorkV2DeleteTaskWorkById**](TaskWorkV2Api.md#taskWorkV2DeleteTaskWorkById) | **DELETE** /api/v2/TaskWork/{taskWorkId} | This call deletes the task
[**taskWorkV2FinalizeTaskByIdsAndExitCodeAndPassword**](TaskWorkV2Api.md#taskWorkV2FinalizeTaskByIdsAndExitCodeAndPassword) | **POST** /api/v2/TaskWork/finalize | This call closes a task work list
[**taskWorkV2GetActiveTaskWork**](TaskWorkV2Api.md#taskWorkV2GetActiveTaskWork) | **POST** /api/v2/TaskWork/actives/{docnumber} | This call executes a task search and return taskwork active for the user on a specific document.  This call could not be compatible with some programming language, in this case use the call api/TaskWork/actives/{docnumber}
[**taskWorkV2GetDefaultSelect**](TaskWorkV2Api.md#taskWorkV2GetDefaultSelect) | **GET** /api/v2/TaskWork/defaultselect | This call provides default select for tasklist search
[**taskWorkV2GetDocumentsByProcessId**](TaskWorkV2Api.md#taskWorkV2GetDocumentsByProcessId) | **POST** /api/v2/TaskWork/documents/{processId} | This call returns the task documents.  This call could not be compatible with some programming language, in this case use the call api/TaskWork/documents/{processId}
[**taskWorkV2GetDocumentsFilenameByProcessId**](TaskWorkV2Api.md#taskWorkV2GetDocumentsFilenameByProcessId) | **GET** /api/v2/TaskWork/documents/filenames/{processId} | 
[**taskWorkV2GetExitCodesByTaskWorkIds**](TaskWorkV2Api.md#taskWorkV2GetExitCodesByTaskWorkIds) | **POST** /api/v2/TaskWork/exitcodes | This call returns all possible exit code for taskWorks list
[**taskWorkV2GetProfileSchemaForTaskWorkMaskDocumentOperation**](TaskWorkV2Api.md#taskWorkV2GetProfileSchemaForTaskWorkMaskDocumentOperation) | **GET** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/maskprofileSchema | This call returns a document schema for a mask insert document taskWork operation
[**taskWorkV2GetProfileSchemaForTaskWorkModelDocumentOperation**](TaskWorkV2Api.md#taskWorkV2GetProfileSchemaForTaskWorkModelDocumentOperation) | **GET** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/modelprofileSchema | This call returns a profile schema for a model insert document taskWork operation
[**taskWorkV2GetProfileSchemaForTaskWorkStandardDocumentOperation**](TaskWorkV2Api.md#taskWorkV2GetProfileSchemaForTaskWorkStandardDocumentOperation) | **GET** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/standardprofileSchema | This call returns a profile schema for a standard insert document taskWork operation
[**taskWorkV2GetTaskWorkById**](TaskWorkV2Api.md#taskWorkV2GetTaskWorkById) | **GET** /api/v2/TaskWork/{taskWorkId} | This call returns the task
[**taskWorkV2GetTaskWorkForAutoAssign**](TaskWorkV2Api.md#taskWorkV2GetTaskWorkForAutoAssign) | **GET** /api/v2/TaskWork/autoassignlist/{docnumber} | This call returns all autoassigned taskwork associated with a document
[**taskWorkV2GetTasks**](TaskWorkV2Api.md#taskWorkV2GetTasks) | **POST** /api/v2/TaskWork | This call executes a task search and return taskwork active for the user and the given workflows ids (with all revisions).  This call could not be compatible with some programming language, in this case use the call api/TaskWork
[**taskWorkV2ReassignTaskById**](TaskWorkV2Api.md#taskWorkV2ReassignTaskById) | **POST** /api/v2/TaskWork/reassign/{taskworkid} | This call reassigns a task to selected users
[**taskWorkV2ReassignUsersTaskById**](TaskWorkV2Api.md#taskWorkV2ReassignUsersTaskById) | **GET** /api/v2/TaskWork/reassignusers/{taskworkid} | This call reassigns a task to selected users
[**taskWorkV2SetProfileForTaskWorkBySelectionDocumentOperation**](TaskWorkV2Api.md#taskWorkV2SetProfileForTaskWorkBySelectionDocumentOperation) | **PUT** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/byselection | This call adds a profile to process for a selection document taskwork operation
[**taskWorkV2SetProfileForTaskWorkMaskDocumentOperation**](TaskWorkV2Api.md#taskWorkV2SetProfileForTaskWorkMaskDocumentOperation) | **POST** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/bymask | This call profiles a new document for a mask insert document taskwork operation
[**taskWorkV2SetProfileForTaskWorkModelDocumentOperation**](TaskWorkV2Api.md#taskWorkV2SetProfileForTaskWorkModelDocumentOperation) | **POST** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/bymodel | This call profiles a new document for a model insert document taskwork operation
[**taskWorkV2SetProfileForTaskWorkStandardDocumentOperation**](TaskWorkV2Api.md#taskWorkV2SetProfileForTaskWorkStandardDocumentOperation) | **POST** /api/v2/TaskWork/{taskWorkId}/documentsoperations/{taskWorkDocumentOperationId}/bystandard | This call profiles a new document for a standard insert document taskwork operation
[**taskWorkV2SetTaskPriority**](TaskWorkV2Api.md#taskWorkV2SetTaskPriority) | **PUT** /api/v2/TaskWork/priority/{priority} | This call sets the tasks priority
[**taskWorkV2SetTaskRead**](TaskWorkV2Api.md#taskWorkV2SetTaskRead) | **PUT** /api/v2/TaskWork/read | This call sets the task as read
[**taskWorkV2SetTaskUnRead**](TaskWorkV2Api.md#taskWorkV2SetTaskUnRead) | **PUT** /api/v2/TaskWork/unread | This call sets the tasks as unread
[**taskWorkV2TaskWorkTakeCharge**](TaskWorkV2Api.md#taskWorkV2TaskWorkTakeCharge) | **PUT** /api/v2/TaskWork/{taskWorkId}/TakeCharge | This call takes charge of a taskwork


# **taskWorkV2ActivateTaskwork**
> \Swagger\Client\Model\TaskWorkDTO taskWorkV2ActivateTaskwork($task_work_id)

This call returns a taskwork if active

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkV2ActivateTaskwork($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2ActivateTaskwork: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2AutoAssign**
> taskWorkV2AutoAssign($taskwork_id)

This call autoassigns the taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskwork_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkV2AutoAssign($taskwork_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2AutoAssign: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2CanFinalizeTaskByIds**
> \Swagger\Client\Model\CloseEligibleResult[] taskWorkV2CanFinalizeTaskByIds($taskworkids)

This call returns if is possible to close task work list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskworkids = array(new \Swagger\Client\Model\int[]()); // int[] | List of taskwork identifier

try {
    $result = $apiInstance->taskWorkV2CanFinalizeTaskByIds($taskworkids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2CanFinalizeTaskByIds: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2CanFinalizeTaskByIdsAndExitCodeAndPassword**
> \Swagger\Client\Model\CloseEligibleResult[] taskWorkV2CanFinalizeTaskByIdsAndExitCodeAndPassword($close_request)

This call returns if is possible to close task work list by exit code and password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$close_request = new \Swagger\Client\Model\TaskWorkCloseRequest(); // \Swagger\Client\Model\TaskWorkCloseRequest | Taskwork information

try {
    $result = $apiInstance->taskWorkV2CanFinalizeTaskByIdsAndExitCodeAndPassword($close_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2CanFinalizeTaskByIdsAndExitCodeAndPassword: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2DeleteTaskWorkById**
> taskWorkV2DeleteTaskWorkById($task_work_id)

This call deletes the task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkV2DeleteTaskWorkById($task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2DeleteTaskWorkById: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2FinalizeTaskByIdsAndExitCodeAndPassword**
> taskWorkV2FinalizeTaskByIdsAndExitCodeAndPassword($close_request)

This call closes a task work list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$close_request = new \Swagger\Client\Model\TaskWorkCloseRequest(); // \Swagger\Client\Model\TaskWorkCloseRequest | Taskwork information

try {
    $apiInstance->taskWorkV2FinalizeTaskByIdsAndExitCodeAndPassword($close_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2FinalizeTaskByIdsAndExitCodeAndPassword: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetActiveTaskWork**
> object taskWorkV2GetActiveTaskWork($select, $docnumber)

This call executes a task search and return taskwork active for the user on a specific document.  This call could not be compatible with some programming language, in this case use the call api/TaskWork/actives/{docnumber}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Selection Fields
$docnumber = 56; // int | Document Identifier

try {
    $result = $apiInstance->taskWorkV2GetActiveTaskWork($select, $docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetActiveTaskWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Selection Fields |
 **docnumber** | **int**| Document Identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkV2GetDefaultSelect**
> \Swagger\Client\Model\SelectDTO taskWorkV2GetDefaultSelect()

This call provides default select for tasklist search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taskWorkV2GetDefaultSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetDefaultSelect: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetDocumentsByProcessId**
> object taskWorkV2GetDocumentsByProcessId($process_id, $select)

This call returns the task documents.  This call could not be compatible with some programming language, in this case use the call api/TaskWork/documents/{processId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Field select configuration

try {
    $result = $apiInstance->taskWorkV2GetDocumentsByProcessId($process_id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetDocumentsByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Field select configuration |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkV2GetDocumentsFilenameByProcessId**
> \Swagger\Client\Model\KeyValueElementDto[] taskWorkV2GetDocumentsFilenameByProcessId($process_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | 

try {
    $result = $apiInstance->taskWorkV2GetDocumentsFilenameByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetDocumentsFilenameByProcessId: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetExitCodesByTaskWorkIds**
> \Swagger\Client\Model\TaskExitCodeDTO[] taskWorkV2GetExitCodesByTaskWorkIds($task_work_ids)

This call returns all possible exit code for taskWorks list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of taskwork identifier

try {
    $result = $apiInstance->taskWorkV2GetExitCodesByTaskWorkIds($task_work_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetExitCodesByTaskWorkIds: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetProfileSchemaForTaskWorkMaskDocumentOperation**
> \Swagger\Client\Model\MaskProfileSchemaDTO taskWorkV2GetProfileSchemaForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id)

This call returns a document schema for a mask insert document taskWork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation

try {
    $result = $apiInstance->taskWorkV2GetProfileSchemaForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetProfileSchemaForTaskWorkMaskDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetProfileSchemaForTaskWorkModelDocumentOperation**
> \Swagger\Client\Model\ModelProfileSchemaDTO taskWorkV2GetProfileSchemaForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id)

This call returns a profile schema for a model insert document taskWork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation

try {
    $result = $apiInstance->taskWorkV2GetProfileSchemaForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetProfileSchemaForTaskWorkModelDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetProfileSchemaForTaskWorkStandardDocumentOperation**
> \Swagger\Client\Model\MaskProfileSchemaDTO taskWorkV2GetProfileSchemaForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id)

This call returns a profile schema for a standard insert document taskWork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation

try {
    $result = $apiInstance->taskWorkV2GetProfileSchemaForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetProfileSchemaForTaskWorkStandardDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetTaskWorkById**
> \Swagger\Client\Model\TaskWorkDTO taskWorkV2GetTaskWorkById($task_work_id)

This call returns the task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkV2GetTaskWorkById($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetTaskWorkById: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetTaskWorkForAutoAssign**
> \Swagger\Client\Model\TaskWorkDTO[] taskWorkV2GetTaskWorkForAutoAssign($docnumber)

This call returns all autoassigned taskwork associated with a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->taskWorkV2GetTaskWorkForAutoAssign($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetTaskWorkForAutoAssign: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2GetTasks**
> object taskWorkV2GetTasks($request)

This call executes a task search and return taskwork active for the user and the given workflows ids (with all revisions).  This call could not be compatible with some programming language, in this case use the call api/TaskWork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TaskWorkRequestDTO(); // \Swagger\Client\Model\TaskWorkRequestDTO | The request object that defines select parte and workflows ids, if workflows ids is null or empty returns all taskWork for the user

try {
    $result = $apiInstance->taskWorkV2GetTasks($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2GetTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TaskWorkRequestDTO**](../Model/TaskWorkRequestDTO.md)| The request object that defines select parte and workflows ids, if workflows ids is null or empty returns all taskWork for the user |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkV2ReassignTaskById**
> taskWorkV2ReassignTaskById($taskworkid, $reassign_request)

This call reassigns a task to selected users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskworkid = 56; // int | Taskwork identifier
$reassign_request = new \Swagger\Client\Model\TaskWorkReassignRequest(); // \Swagger\Client\Model\TaskWorkReassignRequest | Information for re assign operation request

try {
    $apiInstance->taskWorkV2ReassignTaskById($taskworkid, $reassign_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2ReassignTaskById: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2ReassignUsersTaskById**
> \Swagger\Client\Model\UserCompleteDTO[] taskWorkV2ReassignUsersTaskById($taskworkid)

This call reassigns a task to selected users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskworkid = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkV2ReassignUsersTaskById($taskworkid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2ReassignUsersTaskById: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetProfileForTaskWorkBySelectionDocumentOperation**
> taskWorkV2SetProfileForTaskWorkBySelectionDocumentOperation($task_work_id, $task_work_document_operation_id, $docnumbers)

This call adds a profile to process for a selection document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | List of document identifier to add

try {
    $apiInstance->taskWorkV2SetProfileForTaskWorkBySelectionDocumentOperation($task_work_id, $task_work_document_operation_id, $docnumbers);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetProfileForTaskWorkBySelectionDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetProfileForTaskWorkMaskDocumentOperation**
> \Swagger\Client\Model\ProfileResultDTO taskWorkV2SetProfileForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id, $profile)

This call profiles a new document for a mask insert document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->taskWorkV2SetProfileForTaskWorkMaskDocumentOperation($task_work_id, $task_work_document_operation_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetProfileForTaskWorkMaskDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetProfileForTaskWorkModelDocumentOperation**
> \Swagger\Client\Model\ProfileResultDTO taskWorkV2SetProfileForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id, $profile)

This call profiles a new document for a model insert document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->taskWorkV2SetProfileForTaskWorkModelDocumentOperation($task_work_id, $task_work_document_operation_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetProfileForTaskWorkModelDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetProfileForTaskWorkStandardDocumentOperation**
> \Swagger\Client\Model\ProfileResultDTO taskWorkV2SetProfileForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id, $profile)

This call profiles a new document for a standard insert document taskwork operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifie
$task_work_document_operation_id = "task_work_document_operation_id_example"; // string | Id of the operation
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->taskWorkV2SetProfileForTaskWorkStandardDocumentOperation($task_work_id, $task_work_document_operation_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetProfileForTaskWorkStandardDocumentOperation: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetTaskPriority**
> int taskWorkV2SetTaskPriority($task_ids, $priority)

This call sets the tasks priority

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of task identifier
$priority = 56; // int | Priority

try {
    $result = $apiInstance->taskWorkV2SetTaskPriority($task_ids, $priority);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetTaskPriority: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetTaskRead**
> int taskWorkV2SetTaskRead($taskid)

This call sets the task as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskid = array(new \Swagger\Client\Model\int[]()); // int[] | Task Identifier

try {
    $result = $apiInstance->taskWorkV2SetTaskRead($taskid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetTaskRead: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2SetTaskUnRead**
> int taskWorkV2SetTaskUnRead($task_ids)

This call sets the tasks as unread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of task identifier

try {
    $result = $apiInstance->taskWorkV2SetTaskUnRead($task_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2SetTaskUnRead: ', $e->getMessage(), PHP_EOL;
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

# **taskWorkV2TaskWorkTakeCharge**
> taskWorkV2TaskWorkTakeCharge($task_work_id)

This call takes charge of a taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $apiInstance->taskWorkV2TaskWorkTakeCharge($task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkV2Api->taskWorkV2TaskWorkTakeCharge: ', $e->getMessage(), PHP_EOL;
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

