# Swagger\Client\StatesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**statesGet**](StatesApi.md#statesGet) | **GET** /api/States/{documentTypeId} | This call returns all the states defined in Arxivar by the given document type
[**statesGetByDocNumber**](StatesApi.md#statesGetByDocNumber) | **GET** /api/States/bydocnumber/{docnumber} | This call returns the document states for a document
[**statesGet_0**](StatesApi.md#statesGet_0) | **GET** /api/States | This call returns all the document states in ARXivar


# **statesGet**
> \Swagger\Client\Model\StateBaseDto[] statesGet($document_type_id)

This call returns all the states defined in Arxivar by the given document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 56; // int | Document Type Identifier

try {
    $result = $apiInstance->statesGet($document_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **int**| Document Type Identifier |

### Return type

[**\Swagger\Client\Model\StateBaseDto[]**](../Model/StateBaseDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesGetByDocNumber**
> \Swagger\Client\Model\StateBaseDto statesGetByDocNumber($docnumber)

This call returns the document states for a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $result = $apiInstance->statesGetByDocNumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesGetByDocNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |

### Return type

[**\Swagger\Client\Model\StateBaseDto**](../Model/StateBaseDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statesGet_0**
> \Swagger\Client\Model\StateBaseDto[] statesGet_0()

This call returns all the document states in ARXivar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->statesGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatesApi->statesGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StateBaseDto[]**](../Model/StateBaseDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

