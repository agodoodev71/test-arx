# Swagger\Client\ProcessAttachmentsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processAttachmentsInsertTaskAttachment**](ProcessAttachmentsApi.md#processAttachmentsInsertTaskAttachment) | **POST** /api/ProcessAttachments | This call inserts a new process attachment


# **processAttachmentsInsertTaskAttachment**
> processAttachmentsInsertTaskAttachment($request)

This call inserts a new process attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\ProcessAttachmentInsertDto(); // \Swagger\Client\Model\ProcessAttachmentInsertDto | Process Attachment information to insert

try {
    $apiInstance->processAttachmentsInsertTaskAttachment($request);
} catch (Exception $e) {
    echo 'Exception when calling ProcessAttachmentsApi->processAttachmentsInsertTaskAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\ProcessAttachmentInsertDto**](../Model/ProcessAttachmentInsertDto.md)| Process Attachment information to insert |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

