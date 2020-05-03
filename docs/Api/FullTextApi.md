# Swagger\Client\FullTextApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fullTextGetByDocnumber**](FullTextApi.md#fullTextGetByDocnumber) | **GET** /api/FullText/{docnumber} | This method return the texts contained in specified document
[**fullTextInsertByDocnumber**](FullTextApi.md#fullTextInsertByDocnumber) | **POST** /api/FullText/{docnumber} | This method insert the texts in specific document
[**fullTextUpdateByDocnumber**](FullTextApi.md#fullTextUpdateByDocnumber) | **PUT** /api/FullText/{docnumber} | This method update the texts in specific document by ocr


# **fullTextGetByDocnumber**
> \Swagger\Client\Model\FullTextDTO[] fullTextGetByDocnumber($docnumber)

This method return the texts contained in specified document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FullTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The identifier of the document

try {
    $result = $apiInstance->fullTextGetByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FullTextApi->fullTextGetByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| The identifier of the document |

### Return type

[**\Swagger\Client\Model\FullTextDTO[]**](../Model/FullTextDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fullTextInsertByDocnumber**
> fullTextInsertByDocnumber($docnumber, $text)

This method insert the texts in specific document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FullTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The document identifier
$text = "text_example"; // string | The text of the document

try {
    $apiInstance->fullTextInsertByDocnumber($docnumber, $text);
} catch (Exception $e) {
    echo 'Exception when calling FullTextApi->fullTextInsertByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| The document identifier |
 **text** | **string**| The text of the document |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fullTextUpdateByDocnumber**
> fullTextUpdateByDocnumber($docnumber, $text)

This method update the texts in specific document by ocr

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FullTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The document idenfier
$text = "text_example"; // string | The text of the document

try {
    $apiInstance->fullTextUpdateByDocnumber($docnumber, $text);
} catch (Exception $e) {
    echo 'Exception when calling FullTextApi->fullTextUpdateByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| The document idenfier |
 **text** | **string**| The text of the document |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

