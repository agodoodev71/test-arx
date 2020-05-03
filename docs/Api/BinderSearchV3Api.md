# Swagger\Client\BinderSearchV3Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**binderSearchV3GetProfilesByPratica**](BinderSearchV3Api.md#binderSearchV3GetProfilesByPratica) | **POST** /api/v3/BinderSearches | This call returns all documents contained in a specific binder  This call could not be compatible with some programming language, in this case use the call \&quot;api/BinderSearches


# **binderSearchV3GetProfilesByPratica**
> object binderSearchV3GetProfilesByPratica($request)

This call returns all documents contained in a specific binder  This call could not be compatible with some programming language, in this case use the call \"api/BinderSearches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BinderSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\BinderProfilesSearchRequestDTO(); // \Swagger\Client\Model\BinderProfilesSearchRequestDTO | The request object for the search

try {
    $result = $apiInstance->binderSearchV3GetProfilesByPratica($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderSearchV3Api->binderSearchV3GetProfilesByPratica: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\BinderProfilesSearchRequestDTO**](../Model/BinderProfilesSearchRequestDTO.md)| The request object for the search |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

