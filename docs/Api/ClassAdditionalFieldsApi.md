# Swagger\Client\ClassAdditionalFieldsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**classAdditionalFieldsAdditionalFieldClassComposeValues**](ClassAdditionalFieldsApi.md#classAdditionalFieldsAdditionalFieldClassComposeValues) | **POST** /api/ClassAdditionalFields/fieldclasscomposevalues/{fieldName}/{documentType}/{tipo2}/{tipo3} | This call retrieve the entire datasource for values in an class additional fields (the call compose columns based on call additional field configuration)
[**classAdditionalFieldsAdditionalFieldClassComposeValues_0**](ClassAdditionalFieldsApi.md#classAdditionalFieldsAdditionalFieldClassComposeValues_0) | **POST** /api/ClassAdditionalFields/fieldclasscomposevalues/{fieldName}/{documentTypeSystemId} | This call retrieve the entire datasource for values in an class additional fields (the call compose columns based on call additional field configuration)


# **classAdditionalFieldsAdditionalFieldClassComposeValues**
> \Swagger\Client\Model\RowSearchResult[] classAdditionalFieldsAdditionalFieldClassComposeValues($field_name, $document_type, $tipo2, $tipo3, $doc_numbers)

This call retrieve the entire datasource for values in an class additional fields (the call compose columns based on call additional field configuration)

This method is deprecated. Use api/v2/ClassAdditionalFields/fieldclasscomposevalues/{fieldName}/{documentType}/{tipo2}/{tipo3}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClassAdditionalFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_name = "field_name_example"; // string | Name of the additional field
$document_type = 56; // int | Document type of first level
$tipo2 = 56; // int | Document type of second level
$tipo3 = 56; // int | Document type of third level
$doc_numbers = array(new \Swagger\Client\Model\int[]()); // int[] | Documents Identifier in the additional field

try {
    $result = $apiInstance->classAdditionalFieldsAdditionalFieldClassComposeValues($field_name, $document_type, $tipo2, $tipo3, $doc_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassAdditionalFieldsApi->classAdditionalFieldsAdditionalFieldClassComposeValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| Name of the additional field |
 **document_type** | **int**| Document type of first level |
 **tipo2** | **int**| Document type of second level |
 **tipo3** | **int**| Document type of third level |
 **doc_numbers** | **int[]**| Documents Identifier in the additional field |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **classAdditionalFieldsAdditionalFieldClassComposeValues_0**
> \Swagger\Client\Model\RowSearchResult[] classAdditionalFieldsAdditionalFieldClassComposeValues_0($field_name, $document_type_system_id, $doc_numbers)

This call retrieve the entire datasource for values in an class additional fields (the call compose columns based on call additional field configuration)

This method is deprecated. Use api/v2/ClassAdditionalFields/fieldclasscomposevalues/{fieldName}/{documentTypeSystemId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ClassAdditionalFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_name = "field_name_example"; // string | Name of the additional field
$document_type_system_id = 56; // int | Document type
$doc_numbers = array(new \Swagger\Client\Model\int[]()); // int[] | Documents Identifier in the additional field

try {
    $result = $apiInstance->classAdditionalFieldsAdditionalFieldClassComposeValues_0($field_name, $document_type_system_id, $doc_numbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassAdditionalFieldsApi->classAdditionalFieldsAdditionalFieldClassComposeValues_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| Name of the additional field |
 **document_type_system_id** | **int**| Document type |
 **doc_numbers** | **int[]**| Documents Identifier in the additional field |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

