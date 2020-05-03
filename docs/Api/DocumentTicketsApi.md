# Swagger\Client\DocumentTicketsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentTicketsGetDocumentByRevisionId**](DocumentTicketsApi.md#documentTicketsGetDocumentByRevisionId) | **GET** /api/DocumentTickets/ticketByRevision/{revisionId} | This call returns the ticket for downloading a document associated to a specified revision
[**documentTicketsGetForExternalAttachment**](DocumentTicketsApi.md#documentTicketsGetForExternalAttachment) | **GET** /api/DocumentTickets/ticketProfileAttachment/{id} | This call retrieve a ticket for downloading a file for an external profile attachment
[**documentTicketsGetForProcessAttachement**](DocumentTicketsApi.md#documentTicketsGetForProcessAttachement) | **GET** /api/DocumentTickets/ticketProcessattachments/{processId}/{attachementid} | This call returns the ticket for downloading a file associated with the attachment into in a process workflow
[**documentTicketsGetForProcessDocument**](DocumentTicketsApi.md#documentTicketsGetForProcessDocument) | **GET** /api/DocumentTickets/ticketProcessdocument/{processId}/{processdocid} | This call returns the ticket for downloading a file associated with the document process into in a process workflow
[**documentTicketsGetForProfile**](DocumentTicketsApi.md#documentTicketsGetForProfile) | **GET** /api/DocumentTickets/ticket/{id} | This call returns the ticket for downloading a file associated with a specified profile
[**documentTicketsGetForTask**](DocumentTicketsApi.md#documentTicketsGetForTask) | **GET** /api/DocumentTickets/ticketForTask/{processDocId}/{taskWorkId} | This call returns the ticket for downloading a file associated with a taskwork and a document in process
[**documentTicketsGetForTaskAttachement**](DocumentTicketsApi.md#documentTicketsGetForTaskAttachement) | **GET** /api/DocumentTickets/ticketTaskattachments/{id} | This call returns the ticket for downloading a file associated with the task attachment
[**documentTicketsGetForTaskReadOnly**](DocumentTicketsApi.md#documentTicketsGetForTaskReadOnly) | **GET** /api/DocumentTickets/ticketForTaskReadOnly/{processDocId}/{taskWorkId} | This call returns the ticket for downloading a file associated with a taskwork and a document in process, for read-only management
[**documentTicketsGetRevisionDocumentById**](DocumentTicketsApi.md#documentTicketsGetRevisionDocumentById) | **GET** /api/DocumentTickets/ticketProfileAttachment/{attachmentId}/revisions/{revisionId} | This call retrieve the ticket for downloading an attachemnt file by its revision


# **documentTicketsGetDocumentByRevisionId**
> string documentTicketsGetDocumentByRevisionId($revision_id, $for_view)

This call returns the ticket for downloading a document associated to a specified revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revision_id = 56; // int | Identifier of revision
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetDocumentByRevisionId($revision_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetDocumentByRevisionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **revision_id** | **int**| Identifier of revision |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForExternalAttachment**
> string documentTicketsGetForExternalAttachment($id, $for_view)

This call retrieve a ticket for downloading a file for an external profile attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of attachment
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForExternalAttachment($id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForExternalAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of attachment |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForProcessAttachement**
> \SplFileObject documentTicketsGetForProcessAttachement($attachementid, $process_id, $for_view)

This call returns the ticket for downloading a file associated with the attachment into in a process workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachementid = 56; // int | Identifier of attachment
$process_id = 56; // int | Identifier of process
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForProcessAttachement($attachementid, $process_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForProcessAttachement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachementid** | **int**| Identifier of attachment |
 **process_id** | **int**| Identifier of process |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForProcessDocument**
> \SplFileObject documentTicketsGetForProcessDocument($processdocid, $process_id, $for_view)

This call returns the ticket for downloading a file associated with the document process into in a process workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processdocid = 56; // int | Identifier of document process
$process_id = 56; // int | Identifier of process workflow
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForProcessDocument($processdocid, $process_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForProcessDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processdocid** | **int**| Identifier of document process |
 **process_id** | **int**| Identifier of process workflow |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForProfile**
> \SplFileObject documentTicketsGetForProfile($id, $for_view)

This call returns the ticket for downloading a file associated with a specified profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document Identifier
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForProfile($id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document Identifier |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForTask**
> \SplFileObject documentTicketsGetForTask($process_doc_id, $task_work_id, $for_view)

This call returns the ticket for downloading a file associated with a taskwork and a document in process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process
$task_work_id = 56; // int | Identifier of taskwork
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForTask($process_doc_id, $task_work_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of document process |
 **task_work_id** | **int**| Identifier of taskwork |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForTaskAttachement**
> \SplFileObject documentTicketsGetForTaskAttachement($id, $for_view)

This call returns the ticket for downloading a file associated with the task attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of task attachment
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForTaskAttachement($id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForTaskAttachement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of task attachment |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetForTaskReadOnly**
> \SplFileObject documentTicketsGetForTaskReadOnly($process_doc_id, $task_work_id, $for_view)

This call returns the ticket for downloading a file associated with a taskwork and a document in process, for read-only management

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process
$task_work_id = 56; // int | Identifier of taskwork
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetForTaskReadOnly($process_doc_id, $task_work_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetForTaskReadOnly: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of document process |
 **task_work_id** | **int**| Identifier of taskwork |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTicketsGetRevisionDocumentById**
> string documentTicketsGetRevisionDocumentById($attachment_id, $revision_id, $for_view)

This call retrieve the ticket for downloading an attachemnt file by its revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of attachment
$revision_id = 56; // int | Revision Number
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentTicketsGetRevisionDocumentById($attachment_id, $revision_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTicketsApi->documentTicketsGetRevisionDocumentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Identifier of attachment |
 **revision_id** | **int**| Revision Number |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

