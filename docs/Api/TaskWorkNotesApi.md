# Swagger\Client\TaskWorkNotesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkNotesDeleteNote**](TaskWorkNotesApi.md#taskWorkNotesDeleteNote) | **DELETE** /api/TaskNotes/{taskWorkNoteId} | This call deletes a process note
[**taskWorkNotesGetByProcessId**](TaskWorkNotesApi.md#taskWorkNotesGetByProcessId) | **GET** /api/TaskNotes/byProcessId/{processId} | This call returns all notes in a process
[**taskWorkNotesInsertNewNote**](TaskWorkNotesApi.md#taskWorkNotesInsertNewNote) | **POST** /api/TaskNotes/taskWorkId/{taskWorkId} | This call adds a new note to a process
[**taskWorkNotesUpdateNote**](TaskWorkNotesApi.md#taskWorkNotesUpdateNote) | **PUT** /api/TaskNotes/{taskWorkNoteId} | This call updates a process note


# **taskWorkNotesDeleteNote**
> taskWorkNotesDeleteNote($task_work_note_id)

This call deletes a process note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_note_id = 56; // int | Note identifier

try {
    $apiInstance->taskWorkNotesDeleteNote($task_work_note_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkNotesApi->taskWorkNotesDeleteNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_note_id** | **int**| Note identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkNotesGetByProcessId**
> \Swagger\Client\Model\TaskWorkNoteDTO[] taskWorkNotesGetByProcessId($process_id)

This call returns all notes in a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->taskWorkNotesGetByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkNotesApi->taskWorkNotesGetByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\TaskWorkNoteDTO[]**](../Model/TaskWorkNoteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkNotesInsertNewNote**
> \Swagger\Client\Model\TaskWorkNoteDTO taskWorkNotesInsertNewNote($task_work_id, $note)

This call adds a new note to a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier
$note = new \Swagger\Client\Model\TaskWorkNoteDTO(); // \Swagger\Client\Model\TaskWorkNoteDTO | Note to add

try {
    $result = $apiInstance->taskWorkNotesInsertNewNote($task_work_id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkNotesApi->taskWorkNotesInsertNewNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |
 **note** | [**\Swagger\Client\Model\TaskWorkNoteDTO**](../Model/TaskWorkNoteDTO.md)| Note to add |

### Return type

[**\Swagger\Client\Model\TaskWorkNoteDTO**](../Model/TaskWorkNoteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkNotesUpdateNote**
> \Swagger\Client\Model\TaskWorkNoteDTO taskWorkNotesUpdateNote($task_work_note_id, $note)

This call updates a process note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_note_id = 56; // int | Taskwork identifier
$note = new \Swagger\Client\Model\TaskWorkNoteDTO(); // \Swagger\Client\Model\TaskWorkNoteDTO | Note to update

try {
    $result = $apiInstance->taskWorkNotesUpdateNote($task_work_note_id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkNotesApi->taskWorkNotesUpdateNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_note_id** | **int**| Taskwork identifier |
 **note** | [**\Swagger\Client\Model\TaskWorkNoteDTO**](../Model/TaskWorkNoteDTO.md)| Note to update |

### Return type

[**\Swagger\Client\Model\TaskWorkNoteDTO**](../Model/TaskWorkNoteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

