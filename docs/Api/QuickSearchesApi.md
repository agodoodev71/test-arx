# Swagger\Client\QuickSearchesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quickSearchesChangeShowFields**](QuickSearchesApi.md#quickSearchesChangeShowFields) | **GET** /api/QuickSearches/showFields/{quickSearchId}/{showFields} | This call changes the flag that enable show of the search fields
[**quickSearchesDeleteQuickSearchById**](QuickSearchesApi.md#quickSearchesDeleteQuickSearchById) | **DELETE** /api/QuickSearches/{quickSearchId} | This call deletes a quick search
[**quickSearchesGetQuickSearch**](QuickSearchesApi.md#quickSearchesGetQuickSearch) | **GET** /api/QuickSearches | This call returns all quick search
[**quickSearchesGetQuickSearchById**](QuickSearchesApi.md#quickSearchesGetQuickSearchById) | **GET** /api/QuickSearches/{quickSearchId} | Thi call returns a quick search by its id
[**quickSearchesPost**](QuickSearchesApi.md#quickSearchesPost) | **POST** /api/QuickSearches | This call adds a new quinck search
[**quickSearchesPut**](QuickSearchesApi.md#quickSearchesPut) | **PUT** /api/QuickSearches/{quickSearchId} | This call updates a quick search
[**quickSearchesRename**](QuickSearchesApi.md#quickSearchesRename) | **PUT** /api/QuickSearches/rename | This call renames a quick search


# **quickSearchesChangeShowFields**
> quickSearchesChangeShowFields($quick_search_id, $show_fields)

This call changes the flag that enable show of the search fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier
$show_fields = true; // bool | Value for the flag

try {
    $apiInstance->quickSearchesChangeShowFields($quick_search_id, $show_fields);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesChangeShowFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_id** | **string**| Quick search identifier |
 **show_fields** | **bool**| Value for the flag |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesDeleteQuickSearchById**
> quickSearchesDeleteQuickSearchById($quick_search_id)

This call deletes a quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier

try {
    $apiInstance->quickSearchesDeleteQuickSearchById($quick_search_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesDeleteQuickSearchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_id** | **string**| Quick search identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesGetQuickSearch**
> \Swagger\Client\Model\FindDTO[] quickSearchesGetQuickSearch()

This call returns all quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->quickSearchesGetQuickSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesGetQuickSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\FindDTO[]**](../Model/FindDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesGetQuickSearchById**
> \Swagger\Client\Model\SimpleQuickSearchDto quickSearchesGetQuickSearchById($quick_search_id)

Thi call returns a quick search by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier

try {
    $result = $apiInstance->quickSearchesGetQuickSearchById($quick_search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesGetQuickSearchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_id** | **string**| Quick search identifier |

### Return type

[**\Swagger\Client\Model\SimpleQuickSearchDto**](../Model/SimpleQuickSearchDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesPost**
> string quickSearchesPost($criteria)

This call adds a new quinck search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteria = new \Swagger\Client\Model\SimpleQuickSearchDto(); // \Swagger\Client\Model\SimpleQuickSearchDto | 

try {
    $result = $apiInstance->quickSearchesPost($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria** | [**\Swagger\Client\Model\SimpleQuickSearchDto**](../Model/SimpleQuickSearchDto.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesPut**
> string quickSearchesPut($quick_search_id, $criteria)

This call updates a quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier
$criteria = new \Swagger\Client\Model\SimpleQuickSearchDto(); // \Swagger\Client\Model\SimpleQuickSearchDto | 

try {
    $result = $apiInstance->quickSearchesPut($quick_search_id, $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_id** | **string**| Quick search identifier |
 **criteria** | [**\Swagger\Client\Model\SimpleQuickSearchDto**](../Model/SimpleQuickSearchDto.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesRename**
> quickSearchesRename($quick_search_renamed)

This call renames a quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_renamed = new \Swagger\Client\Model\RenamedQuickSearchDto(); // \Swagger\Client\Model\RenamedQuickSearchDto | Information to update

try {
    $apiInstance->quickSearchesRename($quick_search_renamed);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesApi->quickSearchesRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_renamed** | [**\Swagger\Client\Model\RenamedQuickSearchDto**](../Model/RenamedQuickSearchDto.md)| Information to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

