# Swagger\Client\DocToOcrApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**docToOcrDocToOcrQueue**](DocToOcrApi.md#docToOcrDocToOcrQueue) | **POST** /api/DocToOcr/{docnumber} | This method enqueue document to ocr
[**docToOcrGetByDocnumber**](DocToOcrApi.md#docToOcrGetByDocnumber) | **GET** /api/DocToOcr/{docnumber} | This method return the texts containedin specified document


# **docToOcrDocToOcrQueue**
> docToOcrDocToOcrQueue($docnumber)

This method enqueue document to ocr

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocToOcrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $apiInstance->docToOcrDocToOcrQueue($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling DocToOcrApi->docToOcrDocToOcrQueue: ', $e->getMessage(), PHP_EOL;
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

# **docToOcrGetByDocnumber**
> \Swagger\Client\Model\DocToOcrDTO[] docToOcrGetByDocnumber($docnumber)

This method return the texts containedin specified document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocToOcrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $result = $apiInstance->docToOcrGetByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocToOcrApi->docToOcrGetByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |

### Return type

[**\Swagger\Client\Model\DocToOcrDTO[]**](../Model/DocToOcrDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

