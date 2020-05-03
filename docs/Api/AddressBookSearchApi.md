# Swagger\Client\AddressBookSearchApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressBookSearchGetSearch**](AddressBookSearchApi.md#addressBookSearchGetSearch) | **GET** /api/AddressBookSearches/Search | This call returns a searchDTO object for search in addressbook
[**addressBookSearchGetSelect**](AddressBookSearchApi.md#addressBookSearchGetSelect) | **GET** /api/AddressBookSearches/Select | This call returns a selectDTO object for search in addressbook
[**addressBookSearchPostSearch**](AddressBookSearchApi.md#addressBookSearchPostSearch) | **POST** /api/AddressBookSearches | This call searches in address book with search and select DTO system


# **addressBookSearchGetSearch**
> \Swagger\Client\Model\AddressBookSearchConcreteDTO addressBookSearchGetSearch()

This call returns a searchDTO object for search in addressbook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookSearchGetSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookSearchApi->addressBookSearchGetSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AddressBookSearchConcreteDTO**](../Model/AddressBookSearchConcreteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookSearchGetSelect**
> \Swagger\Client\Model\SelectDTO addressBookSearchGetSelect()

This call returns a selectDTO object for search in addressbook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookSearchGetSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookSearchApi->addressBookSearchGetSelect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookSearchPostSearch**
> \Swagger\Client\Model\RowSearchResult[] addressBookSearchPostSearch($search_criteria)

This call searches in address book with search and select DTO system

This method is deprecated. Use api/v2/AddressBookSearches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookSearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_criteria = new \Swagger\Client\Model\AddressBookSearchConcreteCriteriaDTO(); // \Swagger\Client\Model\AddressBookSearchConcreteCriteriaDTO | 

try {
    $result = $apiInstance->addressBookSearchPostSearch($search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookSearchApi->addressBookSearchPostSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria** | [**\Swagger\Client\Model\AddressBookSearchConcreteCriteriaDTO**](../Model/AddressBookSearchConcreteCriteriaDTO.md)|  |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

