# Swagger\Client\AddressBookSearchV3Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressBookSearchV3GetSearch**](AddressBookSearchV3Api.md#addressBookSearchV3GetSearch) | **GET** /api/v3/AddressBookSearches/Search | This call returns a searchDTO object for search in addressbook
[**addressBookSearchV3GetSelect**](AddressBookSearchV3Api.md#addressBookSearchV3GetSelect) | **GET** /api/v3/AddressBookSearches/Select | This call returns a selectDTO object for search in addressbook
[**addressBookSearchV3PostSearch**](AddressBookSearchV3Api.md#addressBookSearchV3PostSearch) | **POST** /api/v3/AddressBookSearches | This call searches in address book with search and select DTO system.  This call could not be compatible with some programming language, in this case use the call api/AddressBookSearches


# **addressBookSearchV3GetSearch**
> \Swagger\Client\Model\AddressBookSearchConcreteDTO addressBookSearchV3GetSearch()

This call returns a searchDTO object for search in addressbook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookSearchV3GetSearch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookSearchV3Api->addressBookSearchV3GetSearch: ', $e->getMessage(), PHP_EOL;
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

# **addressBookSearchV3GetSelect**
> \Swagger\Client\Model\SelectDTO addressBookSearchV3GetSelect()

This call returns a selectDTO object for search in addressbook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookSearchV3GetSelect();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookSearchV3Api->addressBookSearchV3GetSelect: ', $e->getMessage(), PHP_EOL;
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

# **addressBookSearchV3PostSearch**
> object addressBookSearchV3PostSearch($search_criteria)

This call searches in address book with search and select DTO system.  This call could not be compatible with some programming language, in this case use the call api/AddressBookSearches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookSearchV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_criteria = new \Swagger\Client\Model\AddressBookSearchConcreteCriteriaDTO(); // \Swagger\Client\Model\AddressBookSearchConcreteCriteriaDTO | 

try {
    $result = $apiInstance->addressBookSearchV3PostSearch($search_criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookSearchV3Api->addressBookSearchV3PostSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria** | [**\Swagger\Client\Model\AddressBookSearchConcreteCriteriaDTO**](../Model/AddressBookSearchConcreteCriteriaDTO.md)|  |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

