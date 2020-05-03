# Swagger\Client\GlobalSearchApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**globalSearchGetFullIndexSearch**](GlobalSearchApi.md#globalSearchGetFullIndexSearch) | **GET** /api/GlobalSearches/search/{searchFilter} | This call returns the result of a search in full index
[**globalSearchGetFullIndexSearch_0**](GlobalSearchApi.md#globalSearchGetFullIndexSearch_0) | **POST** /api/GlobalSearches/search | This call returns the result of a search in full index
[**globalSearchGlobalSearch**](GlobalSearchApi.md#globalSearchGlobalSearch) | **GET** /api/GlobalSearches/{searchFilter} | This call returns all elements match the given filter


# **globalSearchGetFullIndexSearch**
> \Swagger\Client\Model\RowSearchResult[] globalSearchGetFullIndexSearch($search_filter)

This call returns the result of a search in full index

This method is deprecated. Use api/v3/GlobalSearches/search/{searchFilter=searchFilter}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GlobalSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_filter = "search_filter_example"; // string | Filter to be applied to the search

try {
    $result = $apiInstance->globalSearchGetFullIndexSearch($search_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchApi->globalSearchGetFullIndexSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_filter** | **string**| Filter to be applied to the search |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **globalSearchGetFullIndexSearch_0**
> \Swagger\Client\Model\RowSearchResult[] globalSearchGetFullIndexSearch_0($fullindexsearchrequestdto)

This call returns the result of a search in full index

This method is deprecated. Use api/v3/GlobalSearches/search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GlobalSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fullindexsearchrequestdto = new \Swagger\Client\Model\FullIndexSearchRequestDto(); // \Swagger\Client\Model\FullIndexSearchRequestDto | 

try {
    $result = $apiInstance->globalSearchGetFullIndexSearch_0($fullindexsearchrequestdto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchApi->globalSearchGetFullIndexSearch_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullindexsearchrequestdto** | [**\Swagger\Client\Model\FullIndexSearchRequestDto**](../Model/FullIndexSearchRequestDto.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **globalSearchGlobalSearch**
> \Swagger\Client\Model\GenericItemDTO[] globalSearchGlobalSearch($search_filter)

This call returns all elements match the given filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GlobalSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_filter = "search_filter_example"; // string | Filter to be applied to the search

try {
    $result = $apiInstance->globalSearchGlobalSearch($search_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchApi->globalSearchGlobalSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_filter** | **string**| Filter to be applied to the search |

### Return type

[**\Swagger\Client\Model\GenericItemDTO[]**](../Model/GenericItemDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

