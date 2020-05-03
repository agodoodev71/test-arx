# Swagger\Client\RelationsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**relationsDeleteByDocNumberFromDocNumberTo**](RelationsApi.md#relationsDeleteByDocNumberFromDocNumberTo) | **DELETE** /api/Relations/{fromDocnumber}/{toDocnumber} | This call deletes a criteria by from and to profiles
[**relationsGetById**](RelationsApi.md#relationsGetById) | **POST** /api/Relations | This call returns a relation by docnumber relation by exploring method
[**relationsInsertNewRelation**](RelationsApi.md#relationsInsertNewRelation) | **POST** /api/Relations/Insert | This call adds a new Relation
[**relationsRecalculateRelation**](RelationsApi.md#relationsRecalculateRelation) | **POST** /api/Relations/{docnumber} | This call recalculate the relations of a document


# **relationsDeleteByDocNumberFromDocNumberTo**
> relationsDeleteByDocNumberFromDocNumberTo($from_docnumber, $to_docnumber)

This call deletes a criteria by from and to profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_docnumber = 56; // int | Document identifier of the \"from\" profile
$to_docnumber = 56; // int | Document identifier of the \"to\" profile

try {
    $apiInstance->relationsDeleteByDocNumberFromDocNumberTo($from_docnumber, $to_docnumber);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsDeleteByDocNumberFromDocNumberTo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_docnumber** | **int**| Document identifier of the \&quot;from\&quot; profile |
 **to_docnumber** | **int**| Document identifier of the \&quot;to\&quot; profile |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationsGetById**
> \Swagger\Client\Model\RelationExploredDTO relationsGetById($criteria)

This call returns a relation by docnumber relation by exploring method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteria = new \Swagger\Client\Model\RelationCriteriaDTO(); // \Swagger\Client\Model\RelationCriteriaDTO | Relation search criteria

try {
    $result = $apiInstance->relationsGetById($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria** | [**\Swagger\Client\Model\RelationCriteriaDTO**](../Model/RelationCriteriaDTO.md)| Relation search criteria |

### Return type

[**\Swagger\Client\Model\RelationExploredDTO**](../Model/RelationExploredDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationsInsertNewRelation**
> relationsInsertNewRelation($relation_insert_dto)

This call adds a new Relation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$relation_insert_dto = new \Swagger\Client\Model\RelationInsertDTO(); // \Swagger\Client\Model\RelationInsertDTO | Relation to insert

try {
    $apiInstance->relationsInsertNewRelation($relation_insert_dto);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsInsertNewRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **relation_insert_dto** | [**\Swagger\Client\Model\RelationInsertDTO**](../Model/RelationInsertDTO.md)| Relation to insert |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **relationsRecalculateRelation**
> relationsRecalculateRelation($docnumber)

This call recalculate the relations of a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RelationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $apiInstance->relationsRecalculateRelation($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling RelationsApi->relationsRecalculateRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

