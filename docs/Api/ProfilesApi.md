# Swagger\Client\ProfilesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilesArchiveMonitoredFolderFileFromBufferAutomatic**](ProfilesApi.md#profilesArchiveMonitoredFolderFileFromBufferAutomatic) | **POST** /api/Profiles/formonitoredfolder/{bufferId} | This call insert new profile from automatic monitored folder file
[**profilesDeleteIdErpById**](ProfilesApi.md#profilesDeleteIdErpById) | **DELETE** /api/Profiles/iderp/byId/{id} | This call deletes association between Docnumber and IdErp
[**profilesDeleteProfile**](ProfilesApi.md#profilesDeleteProfile) | **DELETE** /api/Profiles/{docNumber} | This call deletes a document
[**profilesGet**](ProfilesApi.md#profilesGet) | **GET** /api/Profiles/detail/{docNumber} | This call returns the mask schema of a document
[**profilesGetAdditionalByClasse**](ProfilesApi.md#profilesGetAdditionalByClasse) | **GET** /api/Profiles/Additional/{tipoUno}/{tipoDue}/{tipoTre} | This call returns the list of the additional field for archiving by the given business unit and document class (including groups)
[**profilesGetAdditionalByClasseOld**](ProfilesApi.md#profilesGetAdditionalByClasseOld) | **GET** /api/Profiles/Additional/{tipoUno}/{tipoDue}/{tipoTre}/{aoo} | This call returns the list of the additional field for archiving by the given business unit and document class (including groups)
[**profilesGetByDocumentType**](ProfilesApi.md#profilesGetByDocumentType) | **POST** /api/Profiles/bydocumenttype | This call allows the retrieval of the default profile for archiving by given document type
[**profilesGetByIdErp**](ProfilesApi.md#profilesGetByIdErp) | **GET** /api/Profiles/detail/byIdErp/{iderp} | This call returns the mask schema of documents by idErp
[**profilesGetByIdErp_0**](ProfilesApi.md#profilesGetByIdErp_0) | **POST** /api/Profiles/detail/byIdErp | This call returns the mask schema of documents by idErp
[**profilesGetDocnumberIdErpAssociationByDocnumber**](ProfilesApi.md#profilesGetDocnumberIdErpAssociationByDocnumber) | **GET** /api/Profiles/iderp/byDocnumber/{docnumber} | this call returns all association with idErps for a specific docnumber
[**profilesGetDocnumberIdErpAssociationByIdErp**](ProfilesApi.md#profilesGetDocnumberIdErpAssociationByIdErp) | **GET** /api/Profiles/iderp/byIdErp/{idErp} | this call returns all association with docnumbers for a specific idErp
[**profilesGetDocnumberIdErpAssociationByIdErp_0**](ProfilesApi.md#profilesGetDocnumberIdErpAssociationByIdErp_0) | **POST** /api/Profiles/iderp/byIdErp | this call returns all association with docnumbers for a specific idErp
[**profilesGetFiltersForArchive**](ProfilesApi.md#profilesGetFiltersForArchive) | **POST** /api/Profiles/Filters | This call returns the list of filter avaible for a specific additional field
[**profilesGetForBarcode**](ProfilesApi.md#profilesGetForBarcode) | **GET** /api/Profiles/forbarcode | This call allows the retrieval of the default profile for archiving barcode
[**profilesGetForClone**](ProfilesApi.md#profilesGetForClone) | **GET** /api/Profiles/clone/{docNumber}/{includefile} | This call clones a document
[**profilesGetForTask**](ProfilesApi.md#profilesGetForTask) | **GET** /api/Profiles/detail/{docNumber}/task/{taskId} | This call returns the mask schema of a document in a taskwork
[**profilesGetForTask_0**](ProfilesApi.md#profilesGetForTask_0) | **GET** /api/Profiles/detail/{docNumber}/task/{taskId}/{switched} | This call returns the mask schema of a document in a taskwork
[**profilesGetFormulaForArchive**](ProfilesApi.md#profilesGetFormulaForArchive) | **POST** /api/Profiles/Formula | This call returns the result of a formula given the array of fields of profile and their value
[**profilesGetSchema**](ProfilesApi.md#profilesGetSchema) | **GET** /api/Profiles/{docNumber}/schema/{switched} | This call returns the edit schema of a document
[**profilesGetSchema_0**](ProfilesApi.md#profilesGetSchema_0) | **GET** /api/Profiles/formonitoredfolder/{bufferId} | This call returns the edit schema of a document from a file for a monitored folder
[**profilesGetValuesForArchive**](ProfilesApi.md#profilesGetValuesForArchive) | **POST** /api/Profiles/Values | This call returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile
[**profilesGet_0**](ProfilesApi.md#profilesGet_0) | **GET** /api/Profiles | This call allows the retrieval of the default profile for archiving
[**profilesInsertIdErp**](ProfilesApi.md#profilesInsertIdErp) | **POST** /api/Profiles/iderp | This call insert new association between Docnumber and IdErp
[**profilesLockProfile**](ProfilesApi.md#profilesLockProfile) | **POST** /api/Profiles/lock/{docNumber} | This call checks if a profile is lock
[**profilesLockProfile_0**](ProfilesApi.md#profilesLockProfile_0) | **POST** /api/Profiles/lock/{docNumber}/taskid/{taskId} | This call checks if a profile is lock
[**profilesPost**](ProfilesApi.md#profilesPost) | **POST** /api/Profiles | This call inserts a new profile
[**profilesPostForBarcode**](ProfilesApi.md#profilesPostForBarcode) | **POST** /api/Profiles/forbarcode | This call allows the insertion of new profile for barcode purpose
[**profilesPut**](ProfilesApi.md#profilesPut) | **PUT** /api/Profiles/{docnumber} | This call updates an existent profile
[**profilesUnLockProfile**](ProfilesApi.md#profilesUnLockProfile) | **POST** /api/Profiles/unlock/{docNumber} | This call checks if a profile is not lock
[**profilesUnLockProfile_0**](ProfilesApi.md#profilesUnLockProfile_0) | **POST** /api/Profiles/unlock/{docNumber}/taskid/{taskid} | This call checks if a profile is not lock
[**profilesValidateForArchive**](ProfilesApi.md#profilesValidateForArchive) | **POST** /api/Profiles/Validation | This call returns the result of a validation given the array of fields of profile and their value


# **profilesArchiveMonitoredFolderFileFromBufferAutomatic**
> profilesArchiveMonitoredFolderFileFromBufferAutomatic($buffer_id)

This call insert new profile from automatic monitored folder file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buffer_id = "buffer_id_example"; // string | File from monitored folder in buffer

try {
    $apiInstance->profilesArchiveMonitoredFolderFileFromBufferAutomatic($buffer_id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesArchiveMonitoredFolderFileFromBufferAutomatic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buffer_id** | **string**| File from monitored folder in buffer |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesDeleteIdErpById**
> profilesDeleteIdErpById($id)

This call deletes association between Docnumber and IdErp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Association id for External Id and profile to delete

try {
    $apiInstance->profilesDeleteIdErpById($id);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesDeleteIdErpById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Association id for External Id and profile to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesDeleteProfile**
> profilesDeleteProfile($doc_number)

This call deletes a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identfier to delete

try {
    $apiInstance->profilesDeleteProfile($doc_number);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesDeleteProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identfier to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGet**
> \Swagger\Client\Model\EditProfileSchemaDTO profilesGet($doc_number)

This call returns the mask schema of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier

try {
    $result = $apiInstance->profilesGet($doc_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |

### Return type

[**\Swagger\Client\Model\EditProfileSchemaDTO**](../Model/EditProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetAdditionalByClasse**
> \Swagger\Client\Model\FieldBaseDTO[] profilesGetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo)

This call returns the list of the additional field for archiving by the given business unit and document class (including groups)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipo_uno = 56; // int | Document Type Identifier of first level
$tipo_due = 56; // int | DocumentType Identifier of second level
$tipo_tre = 56; // int | DocumentType Identifier of third level
$aoo = "aoo_example"; // string | Business unit code

try {
    $result = $apiInstance->profilesGetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetAdditionalByClasse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_uno** | **int**| Document Type Identifier of first level |
 **tipo_due** | **int**| DocumentType Identifier of second level |
 **tipo_tre** | **int**| DocumentType Identifier of third level |
 **aoo** | **string**| Business unit code | [optional]

### Return type

[**\Swagger\Client\Model\FieldBaseDTO[]**](../Model/FieldBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetAdditionalByClasseOld**
> \Swagger\Client\Model\FieldBaseDTO[] profilesGetAdditionalByClasseOld($tipo_uno, $tipo_due, $tipo_tre, $aoo)

This call returns the list of the additional field for archiving by the given business unit and document class (including groups)

This method is deprecated. Use /api/Profiles/Additional/{tipoUno}/{tipoDue}/{tipoTre}?aoo={aoo}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipo_uno = 56; // int | Document Type Identifier of first level
$tipo_due = 56; // int | DocumentType Identifier of second level
$tipo_tre = 56; // int | DocumentType Identifier of third level
$aoo = "aoo_example"; // string | Business unit code

try {
    $result = $apiInstance->profilesGetAdditionalByClasseOld($tipo_uno, $tipo_due, $tipo_tre, $aoo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetAdditionalByClasseOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_uno** | **int**| Document Type Identifier of first level |
 **tipo_due** | **int**| DocumentType Identifier of second level |
 **tipo_tre** | **int**| DocumentType Identifier of third level |
 **aoo** | **string**| Business unit code |

### Return type

[**\Swagger\Client\Model\FieldBaseDTO[]**](../Model/FieldBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetByDocumentType**
> \Swagger\Client\Model\MaskProfileSchemaDTO profilesGetByDocumentType($documenttypecode)

This call allows the retrieval of the default profile for archiving by given document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documenttypecode = new \Swagger\Client\Model\GetByDocumentTypeRequestDTO(); // \Swagger\Client\Model\GetByDocumentTypeRequestDTO | Document type code

try {
    $result = $apiInstance->profilesGetByDocumentType($documenttypecode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetByDocumentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **documenttypecode** | [**\Swagger\Client\Model\GetByDocumentTypeRequestDTO**](../Model/GetByDocumentTypeRequestDTO.md)| Document type code |

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetByIdErp**
> \Swagger\Client\Model\EditProfileSchemaDTO[] profilesGetByIdErp($iderp)

This call returns the mask schema of documents by idErp

Use detail/byIdErp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$iderp = "iderp_example"; // string | Document external Identifier

try {
    $result = $apiInstance->profilesGetByIdErp($iderp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetByIdErp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **iderp** | **string**| Document external Identifier |

### Return type

[**\Swagger\Client\Model\EditProfileSchemaDTO[]**](../Model/EditProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetByIdErp_0**
> \Swagger\Client\Model\EditProfileSchemaDTO[] profilesGetByIdErp_0($id_erp_dto)

This call returns the mask schema of documents by idErp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_erp_dto = new \Swagger\Client\Model\ByIdErpDto(); // \Swagger\Client\Model\ByIdErpDto | 

try {
    $result = $apiInstance->profilesGetByIdErp_0($id_erp_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetByIdErp_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_erp_dto** | [**\Swagger\Client\Model\ByIdErpDto**](../Model/ByIdErpDto.md)|  |

### Return type

[**\Swagger\Client\Model\EditProfileSchemaDTO[]**](../Model/EditProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetDocnumberIdErpAssociationByDocnumber**
> \Swagger\Client\Model\DocnumberIdErpAssociationDTO[] profilesGetDocnumberIdErpAssociationByDocnumber($docnumber)

this call returns all association with idErps for a specific docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Docnumber to search

try {
    $result = $apiInstance->profilesGetDocnumberIdErpAssociationByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetDocnumberIdErpAssociationByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Docnumber to search |

### Return type

[**\Swagger\Client\Model\DocnumberIdErpAssociationDTO[]**](../Model/DocnumberIdErpAssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetDocnumberIdErpAssociationByIdErp**
> \Swagger\Client\Model\DocnumberIdErpAssociationDTO[] profilesGetDocnumberIdErpAssociationByIdErp($id_erp)

this call returns all association with docnumbers for a specific idErp

Use iderp/byIdErp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_erp = "id_erp_example"; // string | IdErp to search

try {
    $result = $apiInstance->profilesGetDocnumberIdErpAssociationByIdErp($id_erp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetDocnumberIdErpAssociationByIdErp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_erp** | **string**| IdErp to search |

### Return type

[**\Swagger\Client\Model\DocnumberIdErpAssociationDTO[]**](../Model/DocnumberIdErpAssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetDocnumberIdErpAssociationByIdErp_0**
> \Swagger\Client\Model\DocnumberIdErpAssociationDTO[] profilesGetDocnumberIdErpAssociationByIdErp_0($id_erp_dto)

this call returns all association with docnumbers for a specific idErp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_erp_dto = new \Swagger\Client\Model\ByIdErpDto(); // \Swagger\Client\Model\ByIdErpDto | 

try {
    $result = $apiInstance->profilesGetDocnumberIdErpAssociationByIdErp_0($id_erp_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetDocnumberIdErpAssociationByIdErp_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_erp_dto** | [**\Swagger\Client\Model\ByIdErpDto**](../Model/ByIdErpDto.md)|  |

### Return type

[**\Swagger\Client\Model\DocnumberIdErpAssociationDTO[]**](../Model/DocnumberIdErpAssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetFiltersForArchive**
> \Swagger\Client\Model\FieldFilterDTO profilesGetFiltersForArchive($fieldcriteria)

This call returns the list of filter avaible for a specific additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesArchiveCriteriaDto(); // \Swagger\Client\Model\FieldValuesArchiveCriteriaDto | 

try {
    $result = $apiInstance->profilesGetFiltersForArchive($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetFiltersForArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldValuesArchiveCriteriaDto**](../Model/FieldValuesArchiveCriteriaDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FieldFilterDTO**](../Model/FieldFilterDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetForBarcode**
> \Swagger\Client\Model\MaskProfileSchemaDTO profilesGetForBarcode()

This call allows the retrieval of the default profile for archiving barcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->profilesGetForBarcode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetForBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetForClone**
> \Swagger\Client\Model\MaskProfileSchemaDTO profilesGetForClone($doc_number, $includefile)

This call clones a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$includefile = true; // bool | Specify if the clone operation must include file

try {
    $result = $apiInstance->profilesGetForClone($doc_number, $includefile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetForClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **includefile** | **bool**| Specify if the clone operation must include file |

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetForTask**
> \Swagger\Client\Model\EditProfileSchemaDTO profilesGetForTask($doc_number, $task_id)

This call returns the mask schema of a document in a taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$task_id = 56; // int | TaskWork Identifier

try {
    $result = $apiInstance->profilesGetForTask($doc_number, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **task_id** | **int**| TaskWork Identifier |

### Return type

[**\Swagger\Client\Model\EditProfileSchemaDTO**](../Model/EditProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetForTask_0**
> \Swagger\Client\Model\EditProfileSchemaDTO profilesGetForTask_0($doc_number, $task_id, $switched)

This call returns the mask schema of a document in a taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$task_id = 56; // int | TaskWork Identifier
$switched = true; // bool | 

try {
    $result = $apiInstance->profilesGetForTask_0($doc_number, $task_id, $switched);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetForTask_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **task_id** | **int**| TaskWork Identifier |
 **switched** | **bool**|  |

### Return type

[**\Swagger\Client\Model\EditProfileSchemaDTO**](../Model/EditProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetFormulaForArchive**
> string profilesGetFormulaForArchive($fieldcriteria)

This call returns the result of a formula given the array of fields of profile and their value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldFormulaCalculateArchiveCriteriaDto(); // \Swagger\Client\Model\FieldFormulaCalculateArchiveCriteriaDto | 

try {
    $result = $apiInstance->profilesGetFormulaForArchive($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetFormulaForArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldFormulaCalculateArchiveCriteriaDto**](../Model/FieldFormulaCalculateArchiveCriteriaDto.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetSchema**
> \Swagger\Client\Model\EditProfileSchemaDTO profilesGetSchema($doc_number, $switched)

This call returns the edit schema of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$switched = true; // bool | 

try {
    $result = $apiInstance->profilesGetSchema($doc_number, $switched);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **switched** | **bool**|  |

### Return type

[**\Swagger\Client\Model\EditProfileSchemaDTO**](../Model/EditProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetSchema_0**
> \Swagger\Client\Model\MaskProfileSchemaDTO profilesGetSchema_0($buffer_id)

This call returns the edit schema of a document from a file for a monitored folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buffer_id = "buffer_id_example"; // string | buffer Identifier

try {
    $result = $apiInstance->profilesGetSchema_0($buffer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetSchema_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buffer_id** | **string**| buffer Identifier |

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGetValuesForArchive**
> \Swagger\Client\Model\FieldValuesDTO profilesGetValuesForArchive($fieldcriteria)

This call returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesArchiveCriteriaDto(); // \Swagger\Client\Model\FieldValuesArchiveCriteriaDto | 

try {
    $result = $apiInstance->profilesGetValuesForArchive($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGetValuesForArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldValuesArchiveCriteriaDto**](../Model/FieldValuesArchiveCriteriaDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FieldValuesDTO**](../Model/FieldValuesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesGet_0**
> \Swagger\Client\Model\MaskProfileSchemaDTO profilesGet_0()

This call allows the retrieval of the default profile for archiving

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->profilesGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesInsertIdErp**
> profilesInsertIdErp($docnumber_id_erp_association)

This call insert new association between Docnumber and IdErp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber_id_erp_association = new \Swagger\Client\Model\DocnumberIdErpAssociationDTO(); // \Swagger\Client\Model\DocnumberIdErpAssociationDTO | Association DTO between Docnumber and External Id

try {
    $apiInstance->profilesInsertIdErp($docnumber_id_erp_association);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesInsertIdErp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber_id_erp_association** | [**\Swagger\Client\Model\DocnumberIdErpAssociationDTO**](../Model/DocnumberIdErpAssociationDTO.md)| Association DTO between Docnumber and External Id |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesLockProfile**
> bool profilesLockProfile($doc_number)

This call checks if a profile is lock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier

try {
    $result = $apiInstance->profilesLockProfile($doc_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesLockProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesLockProfile_0**
> bool profilesLockProfile_0($doc_number, $task_id)

This call checks if a profile is lock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$task_id = 56; // int | Id of task work

try {
    $result = $apiInstance->profilesLockProfile_0($doc_number, $task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesLockProfile_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **task_id** | **int**| Id of task work |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesPost**
> \Swagger\Client\Model\ProfileResultDTO profilesPost($profile)

This call inserts a new profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->profilesPost($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesPostForBarcode**
> \Swagger\Client\Model\ProfileResultDTO profilesPostForBarcode($profile)

This call allows the insertion of new profile for barcode purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->profilesPostForBarcode($profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesPostForBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesPut**
> profilesPut($docnumber, $profile)

This call updates an existent profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier to update
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $apiInstance->profilesPut($docnumber, $profile);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier to update |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesUnLockProfile**
> bool profilesUnLockProfile($doc_number)

This call checks if a profile is not lock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier

try {
    $result = $apiInstance->profilesUnLockProfile($doc_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesUnLockProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesUnLockProfile_0**
> bool profilesUnLockProfile_0($doc_number, $taskid)

This call checks if a profile is not lock

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | Document Identifier
$taskid = 56; // int | Id of the task work

try {
    $result = $apiInstance->profilesUnLockProfile_0($doc_number, $taskid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesUnLockProfile_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| Document Identifier |
 **taskid** | **int**| Id of the task work |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilesValidateForArchive**
> \Swagger\Client\Model\ValidationFieldResultDTO profilesValidateForArchive($fieldcriteria)

This call returns the result of a validation given the array of fields of profile and their value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValidationCalculateArchiveCriteriaDto(); // \Swagger\Client\Model\FieldValidationCalculateArchiveCriteriaDto | 

try {
    $result = $apiInstance->profilesValidateForArchive($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilesApi->profilesValidateForArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldValidationCalculateArchiveCriteriaDto**](../Model/FieldValidationCalculateArchiveCriteriaDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ValidationFieldResultDTO**](../Model/ValidationFieldResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

