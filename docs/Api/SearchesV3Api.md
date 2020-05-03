# Swagger\Client\SearchesV3Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchesV3Delete**](SearchesV3Api.md#searchesV3Delete) | **DELETE** /api/v3/searches | This call delete the default search for the user
[**searchesV3Get**](SearchesV3Api.md#searchesV3Get) | **GET** /api/v3/searches | This call returns a default search according to the Arxivar system settings
[**searchesV3GetAdditionalByClasse**](SearchesV3Api.md#searchesV3GetAdditionalByClasse) | **GET** /api/v3/searches/Additional/{tipoUno}/{tipoDue}/{tipoTre} | This call returns the additional fields for search by the given document class and business unit
[**searchesV3GetEmpty**](SearchesV3Api.md#searchesV3GetEmpty) | **GET** /api/v3/searches/empty | This call returns an empty search according to the Arxivar system settings
[**searchesV3GetFiltersForSearch**](SearchesV3Api.md#searchesV3GetFiltersForSearch) | **POST** /api/v3/searches/Filters | This call returns the list of filter avaible for a specific additional field
[**searchesV3GetFormulaForSearch**](SearchesV3Api.md#searchesV3GetFormulaForSearch) | **POST** /api/v3/searches/Formula | this method return the result of a formula given the array of fields of profile and their value
[**searchesV3GetLastSearch**](SearchesV3Api.md#searchesV3GetLastSearch) | **GET** /api/v3/searches/lastsearch | This call returns a default search according to the Arxivar system settings
[**searchesV3GetSearchForClasseBox**](SearchesV3Api.md#searchesV3GetSearchForClasseBox) | **POST** /api/v3/searches/byclassadditionalfield/{additionalFieldName}/Search | This call returns a complete search object for search a profile for a additional field
[**searchesV3GetSelect**](SearchesV3Api.md#searchesV3GetSelect) | **GET** /api/v3/searches/Select | This call returns a default select according to the Arxivar system settings
[**searchesV3GetSelect_0**](SearchesV3Api.md#searchesV3GetSelect_0) | **GET** /api/v3/searches/Select/{documentType} | This call returns a new select dto by document type
[**searchesV3GetSelect_1**](SearchesV3Api.md#searchesV3GetSelect_1) | **GET** /api/v3/searches/Select/{documentType}/{tipo2}/{tipo3} | This call returns a new select dto by document type levels
[**searchesV3GetValuesForSearch**](SearchesV3Api.md#searchesV3GetValuesForSearch) | **POST** /api/v3/searches/Values | This method returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile
[**searchesV3LastDocuments**](SearchesV3Api.md#searchesV3LastDocuments) | **POST** /api/v3/searches/lastdocuments/{maxRows} | This call searches documents.  This call could not be compatible with some programming language, in this case use the call api/searches/lastdocuments/{maxRows}
[**searchesV3PostSearchMultiple**](SearchesV3Api.md#searchesV3PostSearchMultiple) | **POST** /api/v3/searches | This call searches documents.  This call could not be compatible with some programming language, in this case use the call api/searches
[**searchesV3PostSelect**](SearchesV3Api.md#searchesV3PostSelect) | **POST** /api/v3/searches/Select | This call saves the default select for the user
[**searchesV3ResetSelect**](SearchesV3Api.md#searchesV3ResetSelect) | **POST** /api/v3/searches/Reset | This call deletes a possible custom select for the user
[**searchesV3SetDefaultSearch**](SearchesV3Api.md#searchesV3SetDefaultSearch) | **POST** /api/v3/searches/defaultsearch | This call saves the default search for the user
[**searchesV3SetLastSearch**](SearchesV3Api.md#searchesV3SetLastSearch) | **POST** /api/v3/searches/lastsearch | This call saves the last search for the user


# **searchesV3Delete**
> searchesV3Delete()

This call delete the default search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchesV3Delete();
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3Delete: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3Get**
> \Swagger\Client\Model\SearchDTO[] searchesV3Get()

This call returns a default search according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV3Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3Get: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetAdditionalByClasse**
> \Swagger\Client\Model\FieldBaseForSearchDTO[] searchesV3GetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo)

This call returns the additional fields for search by the given document class and business unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
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
    $result = $apiInstance->searchesV3GetAdditionalByClasse($tipo_uno, $tipo_due, $tipo_tre, $aoo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetAdditionalByClasse: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetEmpty**
> \Swagger\Client\Model\SearchDTO searchesV3GetEmpty()

This call returns an empty search according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV3GetEmpty();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetEmpty: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetFiltersForSearch**
> \Swagger\Client\Model\FieldFilterDTO searchesV3GetFiltersForSearch($fieldcriteria)

This call returns the list of filter avaible for a specific additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesSearchCriteriaDto(); // \Swagger\Client\Model\FieldValuesSearchCriteriaDto | 

try {
    $result = $apiInstance->searchesV3GetFiltersForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetFiltersForSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetFormulaForSearch**
> string searchesV3GetFormulaForSearch($fieldcriteria)

this method return the result of a formula given the array of fields of profile and their value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldFormulaCalculateCriteriaDto(); // \Swagger\Client\Model\FieldFormulaCalculateCriteriaDto | 

try {
    $result = $apiInstance->searchesV3GetFormulaForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetFormulaForSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetLastSearch**
> \Swagger\Client\Model\SearchDTO[] searchesV3GetLastSearch()

This call returns a default search according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV3GetLastSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetLastSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetSearchForClasseBox**
> \Swagger\Client\Model\SearchDTO searchesV3GetSearchForClasseBox($additional_field_name, $profile)

This call returns a complete search object for search a profile for a additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_field_name = "additional_field_name_example"; // string | Additional field name
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->searchesV3GetSearchForClasseBox($additional_field_name, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetSearchForClasseBox: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetSelect**
> \Swagger\Client\Model\SelectDTO searchesV3GetSelect()

This call returns a default select according to the Arxivar system settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchesV3GetSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetSelect_0**
> \Swagger\Client\Model\SelectDTO searchesV3GetSelect_0($document_type)

This call returns a new select dto by document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document Type Identifier

try {
    $result = $apiInstance->searchesV3GetSelect_0($document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetSelect_0: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetSelect_1**
> \Swagger\Client\Model\SelectDTO searchesV3GetSelect_1($document_type, $tipo2, $tipo3)

This call returns a new select dto by document type levels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document type identifier of first level
$tipo2 = 56; // int | Document type identifier of second level
$tipo3 = 56; // int | Document type identifier of third level

try {
    $result = $apiInstance->searchesV3GetSelect_1($document_type, $tipo2, $tipo3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetSelect_1: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3GetValuesForSearch**
> \Swagger\Client\Model\FieldValuesDTO searchesV3GetValuesForSearch($fieldcriteria)

This method returns the possible values ​​for an external data source given the additional field code and the value of all other fields in profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fieldcriteria = new \Swagger\Client\Model\FieldValuesSearchCriteriaDto(); // \Swagger\Client\Model\FieldValuesSearchCriteriaDto | 

try {
    $result = $apiInstance->searchesV3GetValuesForSearch($fieldcriteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3GetValuesForSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3LastDocuments**
> object searchesV3LastDocuments($max_rows, $select_dto)

This call searches documents.  This call could not be compatible with some programming language, in this case use the call api/searches/lastdocuments/{maxRows}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$max_rows = 56; // int | Maximun items to search
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Object representing the select

try {
    $result = $apiInstance->searchesV3LastDocuments($max_rows, $select_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3LastDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_rows** | **int**| Maximun items to search |
 **select_dto** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Object representing the select |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesV3PostSearchMultiple**
> object searchesV3PostSearchMultiple($searchwebapimultipledto)

This call searches documents.  This call could not be compatible with some programming language, in this case use the call api/searches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapimultipledto = new \Swagger\Client\Model\SearchCriteriaMultipleDto(); // \Swagger\Client\Model\SearchCriteriaMultipleDto | 

try {
    $result = $apiInstance->searchesV3PostSearchMultiple($searchwebapimultipledto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3PostSearchMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchwebapimultipledto** | [**\Swagger\Client\Model\SearchCriteriaMultipleDto**](../Model/SearchCriteriaMultipleDto.md)|  | [optional]

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchesV3PostSelect**
> searchesV3PostSelect($select_dto)

This call saves the default select for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Object representing the select

try {
    $apiInstance->searchesV3PostSelect($select_dto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3PostSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3ResetSelect**
> searchesV3ResetSelect()

This call deletes a possible custom select for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->searchesV3ResetSelect();
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3ResetSelect: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3SetDefaultSearch**
> searchesV3SetDefaultSearch($searchwebapidto)

This call saves the default search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaMultipleDto(); // \Swagger\Client\Model\SearchCriteriaMultipleDto | 

try {
    $apiInstance->searchesV3SetDefaultSearch($searchwebapidto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3SetDefaultSearch: ', $e->getMessage(), PHP_EOL;
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

# **searchesV3SetLastSearch**
> searchesV3SetLastSearch($searchwebapidto)

This call saves the last search for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SearchesV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchwebapidto = new \Swagger\Client\Model\SearchCriteriaMultipleDto(); // \Swagger\Client\Model\SearchCriteriaMultipleDto | 

try {
    $apiInstance->searchesV3SetLastSearch($searchwebapidto);
} catch (Exception $e) {
    echo 'Exception when calling SearchesV3Api->searchesV3SetLastSearch: ', $e->getMessage(), PHP_EOL;
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

