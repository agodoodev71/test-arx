# Swagger\Client\GlobalSearchV3Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**globalSearchV3GetFullIndexSearch**](GlobalSearchV3Api.md#globalSearchV3GetFullIndexSearch) | **GET** /api/v3/GlobalSearches/search/{searchFilter} | This call returns the result of a search in full index.  This call could not be compatible with some programming language, in this case use the call api/GlobalSearches/search/{searchFilter&#x3D;searchFilter}
[**globalSearchV3GetFullIndexSearch_0**](GlobalSearchV3Api.md#globalSearchV3GetFullIndexSearch_0) | **POST** /api/v3/GlobalSearches/search | This call returns the result of a search in full index.  This call could not be compatible with some programming language, in this case use the call api/GlobalSearches/search
[**globalSearchV3GlobalSearch**](GlobalSearchV3Api.md#globalSearchV3GlobalSearch) | **GET** /api/v3/GlobalSearches/{searchFilter} | This call returns all elements match the given filter


# **globalSearchV3GetFullIndexSearch**
> object globalSearchV3GetFullIndexSearch($search_filter)

This call returns the result of a search in full index.  This call could not be compatible with some programming language, in this case use the call api/GlobalSearches/search/{searchFilter=searchFilter}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GlobalSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_filter = "search_filter_example"; // string | Filter to be applied to the search

try {
    $result = $apiInstance->globalSearchV3GetFullIndexSearch($search_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchV3Api->globalSearchV3GetFullIndexSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_filter** | **string**| Filter to be applied to the search |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **globalSearchV3GetFullIndexSearch_0**
> object globalSearchV3GetFullIndexSearch_0($fullindexsearchrequestdto)

This call returns the result of a search in full index.  This call could not be compatible with some programming language, in this case use the call api/GlobalSearches/search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GlobalSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fullindexsearchrequestdto = new \Swagger\Client\Model\FullIndexSearchRequestDto(); // \Swagger\Client\Model\FullIndexSearchRequestDto | 

try {
    $result = $apiInstance->globalSearchV3GetFullIndexSearch_0($fullindexsearchrequestdto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchV3Api->globalSearchV3GetFullIndexSearch_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullindexsearchrequestdto** | [**\Swagger\Client\Model\FullIndexSearchRequestDto**](../Model/FullIndexSearchRequestDto.md)|  | [optional]

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **globalSearchV3GlobalSearch**
> \Swagger\Client\Model\GenericItemDTO[] globalSearchV3GlobalSearch($search_filter)

This call returns all elements match the given filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GlobalSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_filter = "search_filter_example"; // string | Filter to be applied to the search

try {
    $result = $apiInstance->globalSearchV3GlobalSearch($search_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalSearchV3Api->globalSearchV3GlobalSearch: ', $e->getMessage(), PHP_EOL;
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

