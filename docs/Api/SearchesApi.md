# Swagger\Client\SearchesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchesDelete**](SearchesApi.md#searchesDelete) | **DELETE** /api/Searches | This call delete the default search for the user
[**searchesGet**](SearchesApi.md#searchesGet) | **GET** /api/Searches | This call returns a default search according to the Arxivar system settings
[**searchesGetAdditionalByClasse**](SearchesApi.md#searchesGetAdditionalByClasse) | **GET** /api/Searches/Additional/{tipoUno}/{tipoDue}/{tipoTre} | This call returns the additional fields for search by the given document class and business unit
[**searchesGetAdditionalByClasseOld**](SearchesApi.md#searchesGetAdditionalByClasseOld) | **GET** /api/Searches/Additional/{tipoUno}/{tipoDue}/{tipoTre}/{aoo} | This call returns the additional fields for search by the given document class and business unit
[**searchesGetFiltersForSearch**](SearchesApi.md#searchesGetFiltersForSearch) | **POST** /api/Searches/Filters | This call returns the list of filter avaible for a specific additional field
[**searchesGetFormulaForSearch**](SearchesApi.md#searchesGetFormulaForSearch) | **POST** /api/Searches/Formula | this method return the result of a formula given the array of fields of profile and their value
[**searchesGetLastSearch**](SearchesApi.md#searchesGetLastSearch) | **GET** /api/Searches/lastsearch | This call returns a default search according to the Arxivar system settings
[**searchesGetSearchForClasseBox**](SearchesApi.md#searchesGetSearchForClasseBox) | **POST** /api/Searches/byclassadditionalfield/{additionalFieldName}/Search | This call returns a complete search object for search a profile for a additional field
[**searchesGetSelect**](SearchesApi.md#searchesGetSelect) | **GET** /api/Searches/Select | This call returns a default select according to the Arxivar system settings
[**searchesGetSelect_0**](SearchesApi.md#searchesGetSelect_0) | **GET** /api/Searches/Select/{documentType} | This call returns a new select dto by document type
[**searchesGetSelect_1**](SearchesApi.md#searchesGetSelect_1) | **GET** /api/Searches/Select/{documentType}/{tipo2}/{tipo3} | This call returns a new select dto by document type levels
[**searchesGetValuesForSearch**](SearchesApi.md#searchesGetValuesForSearch) | **POST** /api/Searches/Values | This method returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile
[**searchesLastDocuments**](SearchesApi.md#searchesLastDocuments) | **POST** /api/Searches/lastdocuments/{maxRows} | This call searches documents
[**searchesPostSearch**](SearchesApi.md#searchesPostSearch) | **POST** /api/Searches | This call searches documents
[**searchesPostSelect**](SearchesApi.md#searchesPostSelect) | **POST** /api/Searches/Select | This call saves the default select for the user
[**searchesResetSelect**](SearchesApi.md#searchesResetSelect) | **POST** /api/Searches/Reset | This call deletes a possible custom select for the user
[**searchesSetDefaultSearch**](SearchesApi.md#searchesSetDefaultSearch) | **POST** /api/Searches/defaultsearch | This call saves the default search for the user
[**searchesSetLastSearch**](SearchesApi.md#searchesSetLastSearch) | **POST** /api/Searches/lastsearch | This call saves the last search for the user


# **searchesDelete**
> searchesDelete()

This call delete the default search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchesDelete();
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGet**
> \Swagger\Client\Model\SearchDTO searchesGet()

This call returns a default search according to the Arxivar system settings

This method is deprecated. Use /api/v3/Searches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchDTO**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetAdditionalByClasse**
> \Swagger\Client\Model\FieldBaseForSearchDTO[] searchesGetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo)

This call returns the additional fields for search by the given document class and business unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipo_uno = 56; // int | Document type identifier of first level
$tipo_due = 56; // int | Document type identifier of second level
$tipo_tre = 56; // int | Document type identifier of third level
$aoo = "aoo_example"; // string | Business unit code

try {
    $result = $apiInstance->searchesGetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetAdditionalByClasse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_uno** | **int**| Document type identifier of first level |
 **tipo_due** | **int**| Document type identifier of second level |
 **tipo_tre** | **int**| Document type identifier of third level |
 **aoo** | **string**| Business unit code | [optional]

### Return type

[**\Swagger\Client\Model\FieldBaseForSearchDTO[]**](../Model/FieldBaseForSearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetAdditionalByClasseOld**
> \Swagger\Client\Model\FieldBaseForSearchDTO[] searchesGetAdditionalByClasseOld($tipo_uno, $tipo_due, $tipo_tre, $aoo)

This call returns the additional fields for search by the given document class and business unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tipo_uno = 56; // int | Document type identifier of first level
$tipo_due = 56; // int | Document type identifier of second level
$tipo_tre = 56; // int | Document type identifier of third level
$aoo = "aoo_example"; // string | Business unit code

try {
    $result = $apiInstance->searchesGetAdditionalByClasseOld($tipo_uno, $tipo_due, $tipo_tre, $aoo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetAdditionalByClasseOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_uno** | **int**| Document type identifier of first level |
 **tipo_due** | **int**| Document type identifier of second level |
 **tipo_tre** | **int**| Document type identifier of third level |
 **aoo** | **string**| Business unit code |

### Return type

[**\Swagger\Client\Model\FieldBaseForSearchDTO[]**](../Model/FieldBaseForSearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetFiltersForSearch**
> \Swagger\Client\Model\FieldFilterDTO searchesGetFiltersForSearch($fieldcriteria)

This call returns the list of filter avaible for a specific additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesSearchCriteriaDto(); // \Swagger\Client\Model\FieldValuesSearchCriteriaDto | 

try {
    $result = $apiInstance->searchesGetFiltersForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetFiltersForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldValuesSearchCriteriaDto**](../Model/FieldValuesSearchCriteriaDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FieldFilterDTO**](../Model/FieldFilterDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetFormulaForSearch**
> string searchesGetFormulaForSearch($fieldcriteria)

this method return the result of a formula given the array of fields of profile and their value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldFormulaCalculateCriteriaDto(); // \Swagger\Client\Model\FieldFormulaCalculateCriteriaDto | 

try {
    $result = $apiInstance->searchesGetFormulaForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetFormulaForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldFormulaCalculateCriteriaDto**](../Model/FieldFormulaCalculateCriteriaDto.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetLastSearch**
> \Swagger\Client\Model\SearchDTO searchesGetLastSearch()

This call returns a default search according to the Arxivar system settings

This method is deprecated. Use /api/v3/Searches/lastsearch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesGetLastSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetLastSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchDTO**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetSearchForClasseBox**
> \Swagger\Client\Model\SearchDTO searchesGetSearchForClasseBox($additional_field_name, $profile)

This call returns a complete search object for search a profile for a additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_field_name = "additional_field_name_example"; // string | Additional field name
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->searchesGetSearchForClasseBox($additional_field_name, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetSearchForClasseBox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_field_name** | **string**| Additional field name |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SearchDTO**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetSelect**
> \Swagger\Client\Model\SelectDTO searchesGetSelect()

This call returns a default select according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesGetSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesGetSelect_0**
> \Swagger\Client\Model\SelectDTO searchesGetSelect_0($document_type)

This call returns a new select dto by document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document Type Identifier

try {
    $result = $apiInstance->searchesGetSelect_0($document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetSelect_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Document Type Identifier |

### Return type

[**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetSelect_1**
> \Swagger\Client\Model\SelectDTO searchesGetSelect_1($document_type, $tipo2, $tipo3)

This call returns a new select dto by document type levels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document type identifier of first level
$tipo2 = 56; // int | Document type identifier of second level
$tipo3 = 56; // int | Document type identifier of third level

try {
    $result = $apiInstance->searchesGetSelect_1($document_type, $tipo2, $tipo3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetSelect_1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Document type identifier of first level |
 **tipo2** | **int**| Document type identifier of second level |
 **tipo3** | **int**| Document type identifier of third level |

### Return type

[**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesGetValuesForSearch**
> \Swagger\Client\Model\FieldValuesDTO searchesGetValuesForSearch($fieldcriteria)

This method returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesSearchCriteriaDto(); // \Swagger\Client\Model\FieldValuesSearchCriteriaDto | 

try {
    $result = $apiInstance->searchesGetValuesForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesGetValuesForSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldcriteria** | [**\Swagger\Client\Model\FieldValuesSearchCriteriaDto**](../Model/FieldValuesSearchCriteriaDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\FieldValuesDTO**](../Model/FieldValuesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesLastDocuments**
> \Swagger\Client\Model\RowSearchResult[] searchesLastDocuments($max_rows, $select_dto)

This call searches documents

This method is deprecated. Use api/v3/Searches/lastdocuments/{maxRows}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_rows = 56; // int | Maximun items to search
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Object representing the select

try {
    $result = $apiInstance->searchesLastDocuments($max_rows, $select_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesLastDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_rows** | **int**| Maximun items to search |
 **select_dto** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Object representing the select |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesPostSearch**
> \Swagger\Client\Model\RowSearchResult[] searchesPostSearch($searchwebapidto)

This call searches documents

This method is deprecated. Use /api/v3/Searches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaDto(); // \Swagger\Client\Model\SearchCriteriaDto | 

try {
    $result = $apiInstance->searchesPostSearch($searchwebapidto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesPostSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapidto** | [**\Swagger\Client\Model\SearchCriteriaDto**](../Model/SearchCriteriaDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesPostSelect**
> searchesPostSelect($select_dto)

This call saves the default select for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Object representing the select

try {
    $apiInstance->searchesPostSelect($select_dto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesPostSelect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select_dto** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Object representing the select |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesResetSelect**
> searchesResetSelect()

This call deletes a possible custom select for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchesResetSelect();
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesResetSelect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesSetDefaultSearch**
> searchesSetDefaultSearch($searchwebapidto)

This call saves the default search for the user

This method is deprecated. Use /api/v3/Searches/defaultsearch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaDto(); // \Swagger\Client\Model\SearchCriteriaDto | 

try {
    $apiInstance->searchesSetDefaultSearch($searchwebapidto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesSetDefaultSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapidto** | [**\Swagger\Client\Model\SearchCriteriaDto**](../Model/SearchCriteriaDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesSetLastSearch**
> searchesSetLastSearch($searchwebapidto)

This call saves the last search for the user

This method is deprecated. Use /api/v3/Searches/lastsearch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaDto(); // \Swagger\Client\Model\SearchCriteriaDto | 

try {
    $apiInstance->searchesSetLastSearch($searchwebapidto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesApi->searchesSetLastSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapidto** | [**\Swagger\Client\Model\SearchCriteriaDto**](../Model/SearchCriteriaDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

