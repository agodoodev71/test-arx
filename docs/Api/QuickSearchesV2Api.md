# Swagger\Client\QuickSearchesV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quickSearchesV2ChangeShowFields**](QuickSearchesV2Api.md#quickSearchesV2ChangeShowFields) | **GET** /api/v2/QuickSearches/showFields/{quickSearchId}/{showFields} | This call changes the flag that enable show of the search fields
[**quickSearchesV2DeleteQuickSearchById**](QuickSearchesV2Api.md#quickSearchesV2DeleteQuickSearchById) | **DELETE** /api/v2/QuickSearches/{quickSearchId} | This call deletes a quick search
[**quickSearchesV2GetQuickSearch**](QuickSearchesV2Api.md#quickSearchesV2GetQuickSearch) | **GET** /api/v2/QuickSearches | This call returns all quick search
[**quickSearchesV2GetQuickSearchById**](QuickSearchesV2Api.md#quickSearchesV2GetQuickSearchById) | **GET** /api/v2/QuickSearches/{quickSearchId} | Thi call returns a quick search by its id
[**quickSearchesV2Post**](QuickSearchesV2Api.md#quickSearchesV2Post) | **POST** /api/v2/QuickSearches | This call adds a new quinck search
[**quickSearchesV2Put**](QuickSearchesV2Api.md#quickSearchesV2Put) | **PUT** /api/v2/QuickSearches/{quickSearchId} | This call updates a quick search
[**quickSearchesV2Rename**](QuickSearchesV2Api.md#quickSearchesV2Rename) | **PUT** /api/v2/QuickSearches/rename | This call renames a quick search


# **quickSearchesV2ChangeShowFields**
> quickSearchesV2ChangeShowFields($quick_search_id, $show_fields)

This call changes the flag that enable show of the search fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier
$show_fields = true; // bool | Value for the flag

try {
    $apiInstance->quickSearchesV2ChangeShowFields($quick_search_id, $show_fields);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2ChangeShowFields: ', $e->getMessage(), PHP_EOL;
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

# **quickSearchesV2DeleteQuickSearchById**
> quickSearchesV2DeleteQuickSearchById($quick_search_id)

This call deletes a quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier

try {
    $apiInstance->quickSearchesV2DeleteQuickSearchById($quick_search_id);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2DeleteQuickSearchById: ', $e->getMessage(), PHP_EOL;
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

# **quickSearchesV2GetQuickSearch**
> \Swagger\Client\Model\FindDTO[] quickSearchesV2GetQuickSearch()

This call returns all quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->quickSearchesV2GetQuickSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2GetQuickSearch: ', $e->getMessage(), PHP_EOL;
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

# **quickSearchesV2GetQuickSearchById**
> \Swagger\Client\Model\QuickSearchDto quickSearchesV2GetQuickSearchById($quick_search_id)

Thi call returns a quick search by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier

try {
    $result = $apiInstance->quickSearchesV2GetQuickSearchById($quick_search_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2GetQuickSearchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_id** | **string**| Quick search identifier |

### Return type

[**\Swagger\Client\Model\QuickSearchDto**](../Model/QuickSearchDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesV2Post**
> string quickSearchesV2Post($criteria)

This call adds a new quinck search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteria = new \Swagger\Client\Model\QuickSearchDto(); // \Swagger\Client\Model\QuickSearchDto | 

try {
    $result = $apiInstance->quickSearchesV2Post($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2Post: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria** | [**\Swagger\Client\Model\QuickSearchDto**](../Model/QuickSearchDto.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesV2Put**
> string quickSearchesV2Put($quick_search_id, $criteria)

This call updates a quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_id = "quick_search_id_example"; // string | Quick search identifier
$criteria = new \Swagger\Client\Model\QuickSearchDto(); // \Swagger\Client\Model\QuickSearchDto | 

try {
    $result = $apiInstance->quickSearchesV2Put($quick_search_id, $criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2Put: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quick_search_id** | **string**| Quick search identifier |
 **criteria** | [**\Swagger\Client\Model\QuickSearchDto**](../Model/QuickSearchDto.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSearchesV2Rename**
> quickSearchesV2Rename($quick_search_renamed)

This call renames a quick search

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QuickSearchesV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quick_search_renamed = new \Swagger\Client\Model\RenamedQuickSearchDto(); // \Swagger\Client\Model\RenamedQuickSearchDto | Information to update

try {
    $apiInstance->quickSearchesV2Rename($quick_search_renamed);
} catch (Exception $e) {
    echo 'Exception when calling QuickSearchesV2Api->quickSearchesV2Rename: ', $e->getMessage(), PHP_EOL;
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

