# Swagger\Client\RevisionsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**revisionsDelete**](RevisionsApi.md#revisionsDelete) | **DELETE** /api/Revisions/{revisionId} | This call deletes a revision
[**revisionsGetByDocnumber**](RevisionsApi.md#revisionsGetByDocnumber) | **GET** /api/Revisions/byDocnumber/{docnumber} | This call returns all revisions of a document
[**revisionsRevisionByRevision**](RevisionsApi.md#revisionsRevisionByRevision) | **POST** /api/Revisions/{docNumber}/{revision}/{option} | This call adds a revision from an existent revision of a document
[**revisionsRevisionByRevision_0**](RevisionsApi.md#revisionsRevisionByRevision_0) | **POST** /api/Revisions/task/{taskWorkId}/{processDocId}/{revision}/{option} | This call adds a revision from an existent revision of a profile in a task


# **revisionsDelete**
> revisionsDelete($revision_id)

This call deletes a revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revision_id = 56; // int | Revision Identifier

try {
    $apiInstance->revisionsDelete($revision_id);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **revision_id** | **int**| Revision Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revisionsGetByDocnumber**
> \Swagger\Client\Model\RevisionDTO[] revisionsGetByDocnumber($docnumber)

This call returns all revisions of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $result = $apiInstance->revisionsGetByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsGetByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |

### Return type

[**\Swagger\Client\Model\RevisionDTO[]**](../Model/RevisionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revisionsRevisionByRevision**
> revisionsRevisionByRevision($doc_number, $revision, $option)

This call adds a revision from an existent revision of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$revision = 56; // int | Revision number to start
$option = 56; // int | Advanced options

try {
    $apiInstance->revisionsRevisionByRevision($doc_number, $revision, $option);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsRevisionByRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **revision** | **int**| Revision number to start |
 **option** | **int**| Advanced options |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revisionsRevisionByRevision_0**
> revisionsRevisionByRevision_0($task_work_id, $process_doc_id, $revision, $option)

This call adds a revision from an existent revision of a profile in a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork Identifier
$process_doc_id = 56; // int | Process Document Identifier
$revision = 56; // int | Revision number to start
$option = 56; // int | Advanced options

try {
    $apiInstance->revisionsRevisionByRevision_0($task_work_id, $process_doc_id, $revision, $option);
} catch (Exception $e) {
    echo 'Exception when calling RevisionsApi->revisionsRevisionByRevision_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork Identifier |
 **process_doc_id** | **int**| Process Document Identifier |
 **revision** | **int**| Revision number to start |
 **option** | **int**| Advanced options |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

