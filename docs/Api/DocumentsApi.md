# Swagger\Client\DocumentsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsCanWrite**](DocumentsApi.md#documentsCanWrite) | **POST** /api/Documents/{docnumber}/canWrite | This call returns if the user can write the file.
[**documentsCanWriteForTask**](DocumentsApi.md#documentsCanWriteForTask) | **POST** /api/Documents/forTask/{processDocId}/{taskWorkId}/canWrite | This call returns if the user can write the document under workflow process.
[**documentsExportMassiveForProfile**](DocumentsApi.md#documentsExportMassiveForProfile) | **POST** /api/Documents/ExportMassive | This call start new export procedure
[**documentsExportMassiveForProfile_0**](DocumentsApi.md#documentsExportMassiveForProfile_0) | **POST** /api/Documents/ExportMassiveProcessDoc | This call start new export procedure for processdoc
[**documentsGetDocumentByRevisionId**](DocumentsApi.md#documentsGetDocumentByRevisionId) | **GET** /api/Documents/byRevision/{revisionId} | This call returns the document associated to a specified revision
[**documentsGetExtractP7M**](DocumentsApi.md#documentsGetExtractP7M) | **GET** /api/Documents/{id}/extract | This call returns the file, contained in the signature, associated with the profile
[**documentsGetExtractedDocumentByRevisionId**](DocumentsApi.md#documentsGetExtractedDocumentByRevisionId) | **GET** /api/Documents/extractByRevision/{revisionId} | This call returns the document associated to a specified revision (extracted from cryptographic envelopes)
[**documentsGetExtractedForProfile**](DocumentsApi.md#documentsGetExtractedForProfile) | **GET** /api/Documents/extract/{id} | This call returns the file associated with a specified profile (extracted from cryptographic envelopes)
[**documentsGetExtractedForTask**](DocumentsApi.md#documentsGetExtractedForTask) | **GET** /api/Documents/extractForTask/{processDocId}/{taskWorkId} | This call returns the file associated with a taskwork and a document in process (extracted from cryptographic envelopes)
[**documentsGetExtractedForTaskAttachement**](DocumentsApi.md#documentsGetExtractedForTaskAttachement) | **GET** /api/Documents/extractTaskattachments/{id} | This call returns the file associated with the task attachment (extracted from cryptographic envelopes)
[**documentsGetExtractedProfileAttachment**](DocumentsApi.md#documentsGetExtractedProfileAttachment) | **GET** /api/Documents/extractProfileAttachment/{id} | This call retrieve a file for an external profile attachment (extracted from cryptographic envelopes)
[**documentsGetExtractedProfileAttachmentRevision**](DocumentsApi.md#documentsGetExtractedProfileAttachmentRevision) | **GET** /api/Documents/extractProfileAttachment/{attachmentId}/revisions/{attachmentRevisionId} | This call retrieve the attachemnt file by its revision (extracted from cryptographic envelopes)
[**documentsGetForExternalAttachment**](DocumentsApi.md#documentsGetForExternalAttachment) | **GET** /api/Documents/profileAttachment/{id} | This call retrieve a file for an external profile attachment
[**documentsGetForProcessAttachement**](DocumentsApi.md#documentsGetForProcessAttachement) | **GET** /api/Documents/processattachments/{processId}/{attachementid} | This call returns the file associated with the attachment into in a process workflow
[**documentsGetForProcessDocument**](DocumentsApi.md#documentsGetForProcessDocument) | **GET** /api/Documents/processdocument/{processId}/{processdocid} | This call returns the file associated with the document process into in a process workflow
[**documentsGetForProfile**](DocumentsApi.md#documentsGetForProfile) | **GET** /api/Documents/{id} | This call returns the file associated with a specified profile
[**documentsGetForTask**](DocumentsApi.md#documentsGetForTask) | **GET** /api/Documents/ForTask/{processDocId}/{taskWorkId} | This call returns the file associated with a taskwork and a document in process
[**documentsGetForTaskAttachement**](DocumentsApi.md#documentsGetForTaskAttachement) | **GET** /api/Documents/taskattachments/{id} | This call returns the file associated with the task attachment
[**documentsGetForTaskHasDocument**](DocumentsApi.md#documentsGetForTaskHasDocument) | **GET** /api/Documents/ForTask/HasDocument/{processDocId} | This call returns if the document process has a associated file
[**documentsGetForTaskReadOnly**](DocumentsApi.md#documentsGetForTaskReadOnly) | **GET** /api/Documents/ForTaskReadOnly/{processDocId}/{taskWorkId} | This call returns the file associated with a taskwork and a document in process, for read-only management
[**documentsGetHasDocumentForProfile**](DocumentsApi.md#documentsGetHasDocumentForProfile) | **GET** /api/Documents/HasDocument/{id} | This call returns if the profile has a associated file
[**documentsGetRevisionDocumentById**](DocumentsApi.md#documentsGetRevisionDocumentById) | **GET** /api/Documents/profileAttachment/{attachmentId}/revisions/{revisionId} | This call retrieve the attachemnt file by its revision
[**documentsSetDocument**](DocumentsApi.md#documentsSetDocument) | **POST** /api/Documents/{docNumber}/{cacheId} | This call update a file associated to a profile


# **documentsCanWrite**
> documentsCanWrite($docnumber)

This call returns if the user can write the file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $apiInstance->documentsCanWrite($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsCanWrite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsCanWriteForTask**
> documentsCanWriteForTask($process_doc_id, $task_work_id)

This call returns if the user can write the document under workflow process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process
$task_work_id = 56; // int | Identifier of taskwork

try {
    $apiInstance->documentsCanWriteForTask($process_doc_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsCanWriteForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of document process |
 **task_work_id** | **int**| Identifier of taskwork |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsExportMassiveForProfile**
> \SplFileObject documentsExportMassiveForProfile($export_massive_for_profile_request)

This call start new export procedure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_massive_for_profile_request = new \Swagger\Client\Model\ExportMassiveForProfileRequestDTO(); // \Swagger\Client\Model\ExportMassiveForProfileRequestDTO | Request for export procedure

try {
    $result = $apiInstance->documentsExportMassiveForProfile($export_massive_for_profile_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsExportMassiveForProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_massive_for_profile_request** | [**\Swagger\Client\Model\ExportMassiveForProfileRequestDTO**](../Model/ExportMassiveForProfileRequestDTO.md)| Request for export procedure |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsExportMassiveForProfile_0**
> \SplFileObject documentsExportMassiveForProfile_0($export_massive_for_process_doc_request)

This call start new export procedure for processdoc

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$export_massive_for_process_doc_request = new \Swagger\Client\Model\ExportMassiveForProcessDocRequestDTO(); // \Swagger\Client\Model\ExportMassiveForProcessDocRequestDTO | Request for export procedure

try {
    $result = $apiInstance->documentsExportMassiveForProfile_0($export_massive_for_process_doc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsExportMassiveForProfile_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_massive_for_process_doc_request** | [**\Swagger\Client\Model\ExportMassiveForProcessDocRequestDTO**](../Model/ExportMassiveForProcessDocRequestDTO.md)| Request for export procedure |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetDocumentByRevisionId**
> \SplFileObject documentsGetDocumentByRevisionId($revision_id, $for_view)

This call returns the document associated to a specified revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revision_id = 56; // int | Identifier of revision
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetDocumentByRevisionId($revision_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetDocumentByRevisionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **revision_id** | **int**| Identifier of revision |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractP7M**
> \SplFileObject documentsGetExtractP7M($id)

This call returns the file, contained in the signature, associated with the profile

This method is deprecated. Use {id}/{forView} instead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document Identifier

try {
    $result = $apiInstance->documentsGetExtractP7M($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractP7M: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document Identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractedDocumentByRevisionId**
> \SplFileObject documentsGetExtractedDocumentByRevisionId($revision_id)

This call returns the document associated to a specified revision (extracted from cryptographic envelopes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revision_id = 56; // int | Identifier of revision

try {
    $result = $apiInstance->documentsGetExtractedDocumentByRevisionId($revision_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractedDocumentByRevisionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **revision_id** | **int**| Identifier of revision |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractedForProfile**
> \SplFileObject documentsGetExtractedForProfile($id)

This call returns the file associated with a specified profile (extracted from cryptographic envelopes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document Identifier

try {
    $result = $apiInstance->documentsGetExtractedForProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractedForProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document Identifier |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractedForTask**
> \SplFileObject documentsGetExtractedForTask($process_doc_id, $task_work_id)

This call returns the file associated with a taskwork and a document in process (extracted from cryptographic envelopes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process
$task_work_id = 56; // int | Identifier of taskwork

try {
    $result = $apiInstance->documentsGetExtractedForTask($process_doc_id, $task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractedForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of document process |
 **task_work_id** | **int**| Identifier of taskwork |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractedForTaskAttachement**
> \SplFileObject documentsGetExtractedForTaskAttachement($id)

This call returns the file associated with the task attachment (extracted from cryptographic envelopes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of task attachment

try {
    $result = $apiInstance->documentsGetExtractedForTaskAttachement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractedForTaskAttachement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of task attachment |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractedProfileAttachment**
> \SplFileObject documentsGetExtractedProfileAttachment($id)

This call retrieve a file for an external profile attachment (extracted from cryptographic envelopes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of attachment

try {
    $result = $apiInstance->documentsGetExtractedProfileAttachment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractedProfileAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of attachment |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetExtractedProfileAttachmentRevision**
> \SplFileObject documentsGetExtractedProfileAttachmentRevision($attachment_id, $attachment_revision_id)

This call retrieve the attachemnt file by its revision (extracted from cryptographic envelopes)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of attachment
$attachment_revision_id = 56; // int | Identifier of attachment revision

try {
    $result = $apiInstance->documentsGetExtractedProfileAttachmentRevision($attachment_id, $attachment_revision_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetExtractedProfileAttachmentRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Identifier of attachment |
 **attachment_revision_id** | **int**| Identifier of attachment revision |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetForExternalAttachment**
> \SplFileObject documentsGetForExternalAttachment($id, $for_view)

This call retrieve a file for an external profile attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of attachment
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForExternalAttachment($id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForExternalAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of attachment |
 **for_view** | **bool**| Cryptographic envelope removed and stylesheet applied if available | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetForProcessAttachement**
> \SplFileObject documentsGetForProcessAttachement($attachementid, $process_id, $for_view)

This call returns the file associated with the attachment into in a process workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachementid = 56; // int | Identifier of attachment
$process_id = 56; // int | Identifier of process
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForProcessAttachement($attachementid, $process_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForProcessAttachement: ', $e->getMessage(), PHP_EOL;
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

# **documentsGetForProcessDocument**
> \SplFileObject documentsGetForProcessDocument($processdocid, $process_id, $for_view)

This call returns the file associated with the document process into in a process workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processdocid = 56; // int | Identifier of document process
$process_id = 56; // int | Identifier of process workflow
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForProcessDocument($processdocid, $process_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForProcessDocument: ', $e->getMessage(), PHP_EOL;
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

# **documentsGetForProfile**
> \SplFileObject documentsGetForProfile($id, $for_view)

This call returns the file associated with a specified profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document Identifier
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForProfile($id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForProfile: ', $e->getMessage(), PHP_EOL;
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

# **documentsGetForTask**
> \SplFileObject documentsGetForTask($process_doc_id, $task_work_id, $for_view)

This call returns the file associated with a taskwork and a document in process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process
$task_work_id = 56; // int | Identifier of taskwork
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForTask($process_doc_id, $task_work_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForTask: ', $e->getMessage(), PHP_EOL;
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

# **documentsGetForTaskAttachement**
> \SplFileObject documentsGetForTaskAttachement($id, $for_view)

This call returns the file associated with the task attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of task attachment
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForTaskAttachement($id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForTaskAttachement: ', $e->getMessage(), PHP_EOL;
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

# **documentsGetForTaskHasDocument**
> bool documentsGetForTaskHasDocument($process_doc_id)

This call returns if the document process has a associated file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process

try {
    $result = $apiInstance->documentsGetForTaskHasDocument($process_doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForTaskHasDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of document process |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetForTaskReadOnly**
> \SplFileObject documentsGetForTaskReadOnly($process_doc_id, $task_work_id, $for_view)

This call returns the file associated with a taskwork and a document in process, for read-only management

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of document process
$task_work_id = 56; // int | Identifier of taskwork
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetForTaskReadOnly($process_doc_id, $task_work_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetForTaskReadOnly: ', $e->getMessage(), PHP_EOL;
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

# **documentsGetHasDocumentForProfile**
> bool documentsGetHasDocumentForProfile($id)

This call returns if the profile has a associated file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Document Identifier

try {
    $result = $apiInstance->documentsGetHasDocumentForProfile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetHasDocumentForProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsGetRevisionDocumentById**
> \SplFileObject documentsGetRevisionDocumentById($attachment_id, $revision_id, $for_view)

This call retrieve the attachemnt file by its revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of attachment
$revision_id = 56; // int | Revision Number
$for_view = true; // bool | Cryptographic envelope removed and stylesheet applied if available

try {
    $result = $apiInstance->documentsGetRevisionDocumentById($attachment_id, $revision_id, $for_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetRevisionDocumentById: ', $e->getMessage(), PHP_EOL;
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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsSetDocument**
> documentsSetDocument($cache_id, $doc_number)

This call update a file associated to a profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cache_id = "cache_id_example"; // string | Identifier of cache
$doc_number = 56; // int | Document Identifier

try {
    $apiInstance->documentsSetDocument($cache_id, $doc_number);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsSetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cache_id** | **string**| Identifier of cache |
 **doc_number** | **int**| Document Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

