# Swagger\Client\ElementApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**elementGetByElementType**](ElementApi.md#elementGetByElementType) | **GET** /api/LayoutListElements/{elementType} | This call returns all possible single element that can be used for the specific element type


# **elementGetByElementType**
> \Swagger\Client\Model\KeyValueElementDto[] elementGetByElementType($element_type)

This call returns all possible single element that can be used for the specific element type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ElementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type = 56; // int | Kind of elements that the call should return

try {
    $result = $apiInstance->elementGetByElementType($element_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElementApi->elementGetByElementType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **element_type** | **int**| Kind of elements that the call should return |

### Return type

[**\Swagger\Client\Model\KeyValueElementDto[]**](../Model/KeyValueElementDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

