# Swagger\Client\SearchesV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchesV2Delete**](SearchesV2Api.md#searchesV2Delete) | **DELETE** /api/v2/searches | This call delete the default search for the user
[**searchesV2Get**](SearchesV2Api.md#searchesV2Get) | **GET** /api/v2/searches | This call returns a default search according to the Arxivar system settings
[**searchesV2GetAdditionalByClasse**](SearchesV2Api.md#searchesV2GetAdditionalByClasse) | **GET** /api/v2/searches/Additional/{tipoUno}/{tipoDue}/{tipoTre} | This call returns the additional fields for search by the given document class and business unit
[**searchesV2GetEmpty**](SearchesV2Api.md#searchesV2GetEmpty) | **GET** /api/v2/searches/empty | This call returns an empty search according to the Arxivar system settings
[**searchesV2GetFiltersForSearch**](SearchesV2Api.md#searchesV2GetFiltersForSearch) | **POST** /api/v2/searches/Filters | This call returns the list of filter avaible for a specific additional field
[**searchesV2GetFormulaForSearch**](SearchesV2Api.md#searchesV2GetFormulaForSearch) | **POST** /api/v2/searches/Formula | this method return the result of a formula given the array of fields of profile and their value
[**searchesV2GetLastSearch**](SearchesV2Api.md#searchesV2GetLastSearch) | **GET** /api/v2/searches/lastsearch | This call returns a default search according to the Arxivar system settings
[**searchesV2GetSearchForClasseBox**](SearchesV2Api.md#searchesV2GetSearchForClasseBox) | **POST** /api/v2/searches/byclassadditionalfield/{additionalFieldName}/Search | This call returns a complete search object for search a profile for a additional field
[**searchesV2GetSelect**](SearchesV2Api.md#searchesV2GetSelect) | **GET** /api/v2/searches/Select | This call returns a default select according to the Arxivar system settings
[**searchesV2GetSelect_0**](SearchesV2Api.md#searchesV2GetSelect_0) | **GET** /api/v2/searches/Select/{documentType} | This call returns a new select dto by document type
[**searchesV2GetSelect_1**](SearchesV2Api.md#searchesV2GetSelect_1) | **GET** /api/v2/searches/Select/{documentType}/{tipo2}/{tipo3} | This call returns a new select dto by document type levels
[**searchesV2GetValuesForSearch**](SearchesV2Api.md#searchesV2GetValuesForSearch) | **POST** /api/v2/searches/Values | This method returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile
[**searchesV2LastDocuments**](SearchesV2Api.md#searchesV2LastDocuments) | **POST** /api/v2/searches/lastdocuments/{maxRows} | This call searches documents
[**searchesV2PostSearchMultiple**](SearchesV2Api.md#searchesV2PostSearchMultiple) | **POST** /api/v2/searches | This call searches documents
[**searchesV2PostSelect**](SearchesV2Api.md#searchesV2PostSelect) | **POST** /api/v2/searches/Select | This call saves the default select for the user
[**searchesV2ResetSelect**](SearchesV2Api.md#searchesV2ResetSelect) | **POST** /api/v2/searches/Reset | This call deletes a possible custom select for the user
[**searchesV2SetDefaultSearch**](SearchesV2Api.md#searchesV2SetDefaultSearch) | **POST** /api/v2/searches/defaultsearch | This call saves the default search for the user
[**searchesV2SetLastSearch**](SearchesV2Api.md#searchesV2SetLastSearch) | **POST** /api/v2/searches/lastsearch | This call saves the last search for the user


# **searchesV2Delete**
> searchesV2Delete()

This call delete the default search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchesV2Delete();
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2Delete: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2Get**
> \Swagger\Client\Model\SearchDTO[] searchesV2Get()

This call returns a default search according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchDTO[]**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesV2GetAdditionalByClasse**
> \Swagger\Client\Model\FieldBaseForSearchDTO[] searchesV2GetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo)

This call returns the additional fields for search by the given document class and business unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
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
    $result = $apiInstance->searchesV2GetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetAdditionalByClasse: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetEmpty**
> \Swagger\Client\Model\SearchDTO searchesV2GetEmpty()

This call returns an empty search according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV2GetEmpty();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetEmpty: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetFiltersForSearch**
> \Swagger\Client\Model\FieldFilterDTO searchesV2GetFiltersForSearch($fieldcriteria)

This call returns the list of filter avaible for a specific additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesSearchCriteriaDto(); // \Swagger\Client\Model\FieldValuesSearchCriteriaDto | 

try {
    $result = $apiInstance->searchesV2GetFiltersForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetFiltersForSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetFormulaForSearch**
> string searchesV2GetFormulaForSearch($fieldcriteria)

this method return the result of a formula given the array of fields of profile and their value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldFormulaCalculateCriteriaDto(); // \Swagger\Client\Model\FieldFormulaCalculateCriteriaDto | 

try {
    $result = $apiInstance->searchesV2GetFormulaForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetFormulaForSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetLastSearch**
> \Swagger\Client\Model\SearchDTO[] searchesV2GetLastSearch()

This call returns a default search according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV2GetLastSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetLastSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SearchDTO[]**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesV2GetSearchForClasseBox**
> \Swagger\Client\Model\SearchDTO searchesV2GetSearchForClasseBox($additional_field_name, $profile)

This call returns a complete search object for search a profile for a additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_field_name = "additional_field_name_example"; // string | Additional field name
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->searchesV2GetSearchForClasseBox($additional_field_name, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetSearchForClasseBox: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetSelect**
> \Swagger\Client\Model\SelectDTO searchesV2GetSelect()

This call returns a default select according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV2GetSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetSelect_0**
> \Swagger\Client\Model\SelectDTO searchesV2GetSelect_0($document_type)

This call returns a new select dto by document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document Type Identifier

try {
    $result = $apiInstance->searchesV2GetSelect_0($document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetSelect_0: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetSelect_1**
> \Swagger\Client\Model\SelectDTO searchesV2GetSelect_1($document_type, $tipo2, $tipo3)

This call returns a new select dto by document type levels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document type identifier of first level
$tipo2 = 56; // int | Document type identifier of second level
$tipo3 = 56; // int | Document type identifier of third level

try {
    $result = $apiInstance->searchesV2GetSelect_1($document_type, $tipo2, $tipo3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetSelect_1: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2GetValuesForSearch**
> \Swagger\Client\Model\FieldValuesDTO searchesV2GetValuesForSearch($fieldcriteria)

This method returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesSearchCriteriaDto(); // \Swagger\Client\Model\FieldValuesSearchCriteriaDto | 

try {
    $result = $apiInstance->searchesV2GetValuesForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2GetValuesForSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2LastDocuments**
> \Swagger\Client\Model\RowSearchResult[] searchesV2LastDocuments($max_rows, $select_dto)

This call searches documents

This method is deprecated. Use api/v3/searches/lastdocuments/{maxRows}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_rows = 56; // int | Maximun items to search
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Object representing the select

try {
    $result = $apiInstance->searchesV2LastDocuments($max_rows, $select_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2LastDocuments: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2PostSearchMultiple**
> \Swagger\Client\Model\RowSearchResult[] searchesV2PostSearchMultiple($searchwebapimultipledto)

This call searches documents

This method is deprecated. Use api/v3/searches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapimultipledto = new \Swagger\Client\Model\SearchCriteriaMultipleDto(); // \Swagger\Client\Model\SearchCriteriaMultipleDto | 

try {
    $result = $apiInstance->searchesV2PostSearchMultiple($searchwebapimultipledto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2PostSearchMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapimultipledto** | [**\Swagger\Client\Model\SearchCriteriaMultipleDto**](../Model/SearchCriteriaMultipleDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesV2PostSelect**
> searchesV2PostSelect($select_dto)

This call saves the default select for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Object representing the select

try {
    $apiInstance->searchesV2PostSelect($select_dto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2PostSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2ResetSelect**
> searchesV2ResetSelect()

This call deletes a possible custom select for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchesV2ResetSelect();
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2ResetSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesV2SetDefaultSearch**
> searchesV2SetDefaultSearch($searchwebapidto)

This call saves the default search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaMultipleDto(); // \Swagger\Client\Model\SearchCriteriaMultipleDto | 

try {
    $apiInstance->searchesV2SetDefaultSearch($searchwebapidto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2SetDefaultSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapidto** | [**\Swagger\Client\Model\SearchCriteriaMultipleDto**](../Model/SearchCriteriaMultipleDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesV2SetLastSearch**
> searchesV2SetLastSearch($searchwebapidto)

This call saves the last search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaMultipleDto(); // \Swagger\Client\Model\SearchCriteriaMultipleDto | 

try {
    $apiInstance->searchesV2SetLastSearch($searchwebapidto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV2Api->searchesV2SetLastSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapidto** | [**\Swagger\Client\Model\SearchCriteriaMultipleDto**](../Model/SearchCriteriaMultipleDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

