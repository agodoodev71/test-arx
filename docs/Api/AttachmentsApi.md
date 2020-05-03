# Swagger\Client\AttachmentsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentsAttachmentRevisionByRevision**](AttachmentsApi.md#attachmentsAttachmentRevisionByRevision) | **POST** /api/Attachments/{attachmentId}/Revisions/{revisionId} | This call adds a revision for the attachment by a existent revision
[**attachmentsConvertoToPrincipalDocument**](AttachmentsApi.md#attachmentsConvertoToPrincipalDocument) | **POST** /api/Attachments/{attachmentId}/convertToPrincipal | This call converts an attachment file to the profile file
[**attachmentsDelete**](AttachmentsApi.md#attachmentsDelete) | **DELETE** /api/Attachments/{id} | This call deletes an attachment by its identifier
[**attachmentsDeleteRevision**](AttachmentsApi.md#attachmentsDeleteRevision) | **DELETE** /api/Attachments/Revisions/{revisionId} | This call deletes revision by its identifier
[**attachmentsGetByDocnumber**](AttachmentsApi.md#attachmentsGetByDocnumber) | **GET** /api/Attachments/docnumber/{docnumber} | This call retrieves all the attachments of a profile
[**attachmentsGetByDocnumberForGrid**](AttachmentsApi.md#attachmentsGetByDocnumberForGrid) | **GET** /api/Attachments/docnumber/{docnumber}/grid | This call returns the data for external and internal attachement of a profile
[**attachmentsGetById**](AttachmentsApi.md#attachmentsGetById) | **GET** /api/Attachments/{id} | This call returns the attachment by its identifier
[**attachmentsGetRevisionsByAttachmentId**](AttachmentsApi.md#attachmentsGetRevisionsByAttachmentId) | **GET** /api/Attachments/{attachmentId}/Revisions | This call retrieves the list of the revisions of an attachment
[**attachmentsInsertExternal**](AttachmentsApi.md#attachmentsInsertExternal) | **POST** /api/Attachments/InsertExternal/{bufferid}/{docnumber} | This call adds a new external attachment for a profile
[**attachmentsInsertInternal**](AttachmentsApi.md#attachmentsInsertInternal) | **POST** /api/Attachments/InsertInternal/{attachmentDocnumber}/{docnumber} | This call adds a new internal attachment for a profile
[**attachmentsPermissionsById**](AttachmentsApi.md#attachmentsPermissionsById) | **GET** /api/Attachments/{id}/Permissions | This call returns the permissions for an attachment
[**attachmentsPutAttachmentDocument**](AttachmentsApi.md#attachmentsPutAttachmentDocument) | **PUT** /api/Attachments/{attachmentId}/Document/{bufferId} | This call updates attachment file
[**attachmentsUpdate**](AttachmentsApi.md#attachmentsUpdate) | **PUT** /api/Attachments/{id} | This call updates a attachment by its identifier
[**attachmentsWritePermissionsById**](AttachmentsApi.md#attachmentsWritePermissionsById) | **POST** /api/Attachments/{id}/Permissions | This call updates permission of an attachment


# **attachmentsAttachmentRevisionByRevision**
> attachmentsAttachmentRevisionByRevision($attachment_id, $revision_id)

This call adds a revision for the attachment by a existent revision

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of the attachment
$revision_id = 56; // int | Identifier of the revision

try {
    $apiInstance->attachmentsAttachmentRevisionByRevision($attachment_id, $revision_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsAttachmentRevisionByRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Identifier of the attachment |
 **revision_id** | **int**| Identifier of the revision |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsConvertoToPrincipalDocument**
> attachmentsConvertoToPrincipalDocument($attachment_id)

This call converts an attachment file to the profile file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of the attachment

try {
    $apiInstance->attachmentsConvertoToPrincipalDocument($attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsConvertoToPrincipalDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Identifier of the attachment |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsDelete**
> attachmentsDelete($id)

This call deletes an attachment by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the attachment

try {
    $apiInstance->attachmentsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the attachment |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsDeleteRevision**
> attachmentsDeleteRevision($revision_id)

This call deletes revision by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$revision_id = 56; // int | Identifier of the revision

try {
    $apiInstance->attachmentsDeleteRevision($revision_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsDeleteRevision: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **revision_id** | **int**| Identifier of the revision |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetByDocnumber**
> \Swagger\Client\Model\AttachmentDTO[] attachmentsGetByDocnumber($docnumber)

This call retrieves all the attachments of a profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Identifier of the profile

try {
    $result = $apiInstance->attachmentsGetByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Identifier of the profile |

### Return type

[**\Swagger\Client\Model\AttachmentDTO[]**](../Model/AttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetByDocnumberForGrid**
> \Swagger\Client\Model\AttachmentsDataSourceDTO attachmentsGetByDocnumberForGrid($docnumber)

This call returns the data for external and internal attachement of a profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Identifier of the profile

try {
    $result = $apiInstance->attachmentsGetByDocnumberForGrid($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetByDocnumberForGrid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Identifier of the profile |

### Return type

[**\Swagger\Client\Model\AttachmentsDataSourceDTO**](../Model/AttachmentsDataSourceDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetById**
> \Swagger\Client\Model\AttachmentDTO attachmentsGetById($id)

This call returns the attachment by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the attachment

try {
    $result = $apiInstance->attachmentsGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the attachment |

### Return type

[**\Swagger\Client\Model\AttachmentDTO**](../Model/AttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsGetRevisionsByAttachmentId**
> \Swagger\Client\Model\AttachmentRevisionDTO[] attachmentsGetRevisionsByAttachmentId($attachment_id)

This call retrieves the list of the revisions of an attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of the attachment

try {
    $result = $apiInstance->attachmentsGetRevisionsByAttachmentId($attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsGetRevisionsByAttachmentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Identifier of the attachment |

### Return type

[**\Swagger\Client\Model\AttachmentRevisionDTO[]**](../Model/AttachmentRevisionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsInsertExternal**
> \Swagger\Client\Model\AttachmentDTO attachmentsInsertExternal($bufferid, $docnumber, $comment)

This call adds a new external attachment for a profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bufferid = "bufferid_example"; // string | Buffer Identifier of the file to attach
$docnumber = 56; // int | Identifier of the profile
$comment = "comment_example"; // string | Comment for the new attachment

try {
    $result = $apiInstance->attachmentsInsertExternal($bufferid, $docnumber, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsInsertExternal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bufferid** | **string**| Buffer Identifier of the file to attach |
 **docnumber** | **int**| Identifier of the profile |
 **comment** | **string**| Comment for the new attachment |

### Return type

[**\Swagger\Client\Model\AttachmentDTO**](../Model/AttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsInsertInternal**
> \Swagger\Client\Model\AttachmentDTO attachmentsInsertInternal($attachment_docnumber, $docnumber)

This call adds a new internal attachment for a profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_docnumber = 56; // int | Identifier of the attachment
$docnumber = 56; // int | Identifier of the profile

try {
    $result = $apiInstance->attachmentsInsertInternal($attachment_docnumber, $docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsInsertInternal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_docnumber** | **int**| Identifier of the attachment |
 **docnumber** | **int**| Identifier of the profile |

### Return type

[**\Swagger\Client\Model\AttachmentDTO**](../Model/AttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsPermissionsById**
> \Swagger\Client\Model\PermissionsDTO attachmentsPermissionsById($id)

This call returns the permissions for an attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the attachment

try {
    $result = $apiInstance->attachmentsPermissionsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsPermissionsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the attachment |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsPutAttachmentDocument**
> attachmentsPutAttachmentDocument($attachment_id, $buffer_id)

This call updates attachment file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 56; // int | Identifier of the attachment
$buffer_id = "buffer_id_example"; // string | Buffer Identifier of the file

try {
    $apiInstance->attachmentsPutAttachmentDocument($attachment_id, $buffer_id);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsPutAttachmentDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_id** | **int**| Identifier of the attachment |
 **buffer_id** | **string**| Buffer Identifier of the file |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsUpdate**
> attachmentsUpdate($id, $attachment)

This call updates a attachment by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the attachment
$attachment = new \Swagger\Client\Model\AttachmentDTO(); // \Swagger\Client\Model\AttachmentDTO | Object that indicates the attachment data to update

try {
    $apiInstance->attachmentsUpdate($id, $attachment);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the attachment |
 **attachment** | [**\Swagger\Client\Model\AttachmentDTO**](../Model/AttachmentDTO.md)| Object that indicates the attachment data to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachmentsWritePermissionsById**
> attachmentsWritePermissionsById($id, $permissions)

This call updates permission of an attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the attachment
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | Permission data to update

try {
    $apiInstance->attachmentsWritePermissionsById($id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsWritePermissionsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the attachment |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| Permission data to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

