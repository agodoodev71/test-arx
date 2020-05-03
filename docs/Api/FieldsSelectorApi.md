# Swagger\Client\FieldsSelectorApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fieldsSelectorGetForConfigureBarcodeTemplate**](FieldsSelectorApi.md#fieldsSelectorGetForConfigureBarcodeTemplate) | **GET** /api/FieldsSelector/ForConfigureBarcodeTemplate/byDocumenttype/{documentType}/{tipo2}/{tipo3} | This call returns the selector fields for barcode template associated with a specific document type


# **fieldsSelectorGetForConfigureBarcodeTemplate**
> \Swagger\Client\Model\FieldBaseForSelectDTO[] fieldsSelectorGetForConfigureBarcodeTemplate($document_type, $tipo2, $tipo3)

This call returns the selector fields for barcode template associated with a specific document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FieldsSelectorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document type of first level
$tipo2 = 56; // int | Document type of second level
$tipo3 = 56; // int | Document type of third level

try {
    $result = $apiInstance->fieldsSelectorGetForConfigureBarcodeTemplate($document_type, $tipo2, $tipo3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsSelectorApi->fieldsSelectorGetForConfigureBarcodeTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Document type of first level |
 **tipo2** | **int**| Document type of second level |
 **tipo3** | **int**| Document type of third level |

### Return type

[**\Swagger\Client\Model\FieldBaseForSelectDTO[]**](../Model/FieldBaseForSelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

