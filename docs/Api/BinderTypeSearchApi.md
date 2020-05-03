# Swagger\Client\BinderTypeSearchApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**binderTypeSearchGetBindersByAdvancedSearch**](BinderTypeSearchApi.md#binderTypeSearchGetBindersByAdvancedSearch) | **POST** /api/BinderTypeSearches | This call returns binders by a given search object
[**binderTypeSearchGetSearchByBinderType**](BinderTypeSearchApi.md#binderTypeSearchGetSearchByBinderType) | **GET** /api/BinderTypeSearches/{binderTypeId} | This call returns a search object for a search by binder type


# **binderTypeSearchGetBindersByAdvancedSearch**
> \Swagger\Client\Model\BinderDTO[] binderTypeSearchGetBindersByAdvancedSearch($search)

This call returns binders by a given search object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BinderTypeSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = new \Swagger\Client\Model\SearchConcreteDTO(); // \Swagger\Client\Model\SearchConcreteDTO | The search object

try {
    $result = $apiInstance->binderTypeSearchGetBindersByAdvancedSearch($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderTypeSearchApi->binderTypeSearchGetBindersByAdvancedSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | [**\Swagger\Client\Model\SearchConcreteDTO**](../Model/SearchConcreteDTO.md)| The search object |

### Return type

[**\Swagger\Client\Model\BinderDTO[]**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **binderTypeSearchGetSearchByBinderType**
> \Swagger\Client\Model\SearchConcreteDTO binderTypeSearchGetSearchByBinderType($binder_type_id)

This call returns a search object for a search by binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BinderTypeSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_type_id = 56; // int | The identifier of the binder type

try {
    $result = $apiInstance->binderTypeSearchGetSearchByBinderType($binder_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderTypeSearchApi->binderTypeSearchGetSearchByBinderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_type_id** | **int**| The identifier of the binder type |

### Return type

[**\Swagger\Client\Model\SearchConcreteDTO**](../Model/SearchConcreteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

