# Swagger\Client\BinderSearchApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**binderSearchGetProfilesByPratica**](BinderSearchApi.md#binderSearchGetProfilesByPratica) | **POST** /api/BinderSearches | This call returns all documents contained in a specific binder


# **binderSearchGetProfilesByPratica**
> \Swagger\Client\Model\RowSearchResult[] binderSearchGetProfilesByPratica($request)

This call returns all documents contained in a specific binder

This method is deprecated. Use api/v2/BinderSearches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BinderSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\BinderProfilesSearchRequestDTO(); // \Swagger\Client\Model\BinderProfilesSearchRequestDTO | The request object for the search

try {
    $result = $apiInstance->binderSearchGetProfilesByPratica($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderSearchApi->binderSearchGetProfilesByPratica: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\BinderProfilesSearchRequestDTO**](../Model/BinderProfilesSearchRequestDTO.md)| The request object for the search |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

