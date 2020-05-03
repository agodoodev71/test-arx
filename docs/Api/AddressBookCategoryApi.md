# Swagger\Client\AddressBookCategoryApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressBookCategoryDelete**](AddressBookCategoryApi.md#addressBookCategoryDelete) | **DELETE** /api/AddressBookCategory/{categoryId} | This call delete an addressbook category by its Id
[**addressBookCategoryGet**](AddressBookCategoryApi.md#addressBookCategoryGet) | **GET** /api/AddressBookCategory | This call returns all categories of address book
[**addressBookCategoryPost**](AddressBookCategoryApi.md#addressBookCategoryPost) | **POST** /api/AddressBookCategory | This call adds an addressbook category
[**addressBookCategoryPut**](AddressBookCategoryApi.md#addressBookCategoryPut) | **PUT** /api/AddressBookCategory | This call rename an addressbook category
[**addressBookCategoryPutDefault**](AddressBookCategoryApi.md#addressBookCategoryPutDefault) | **PUT** /api/AddressBookCategory/{addressBookCategoryId}/Default | This call saves the user default address book category


# **addressBookCategoryDelete**
> addressBookCategoryDelete($category_id)

This call delete an addressbook category by its Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | 

try {
    $apiInstance->addressBookCategoryDelete($category_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookCategoryApi->addressBookCategoryDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookCategoryGet**
> \Swagger\Client\Model\AddressBookCategoryDTO[] addressBookCategoryGet()

This call returns all categories of address book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookCategoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookCategoryApi->addressBookCategoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AddressBookCategoryDTO[]**](../Model/AddressBookCategoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookCategoryPost**
> addressBookCategoryPost($category)

This call adds an addressbook category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = new \Swagger\Client\Model\AddressBookCategoryDTO(); // \Swagger\Client\Model\AddressBookCategoryDTO | 

try {
    $apiInstance->addressBookCategoryPost($category);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookCategoryApi->addressBookCategoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\AddressBookCategoryDTO**](../Model/AddressBookCategoryDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookCategoryPut**
> addressBookCategoryPut($category)

This call rename an addressbook category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = new \Swagger\Client\Model\AddressBookCategoryDTO(); // \Swagger\Client\Model\AddressBookCategoryDTO | 

try {
    $apiInstance->addressBookCategoryPut($category);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookCategoryApi->addressBookCategoryPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | [**\Swagger\Client\Model\AddressBookCategoryDTO**](../Model/AddressBookCategoryDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookCategoryPutDefault**
> addressBookCategoryPutDefault($address_book_category_id)

This call saves the user default address book category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_category_id = 56; // int | Identifier of the address book category to set as default

try {
    $apiInstance->addressBookCategoryPutDefault($address_book_category_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookCategoryApi->addressBookCategoryPutDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_category_id** | **int**| Identifier of the address book category to set as default |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

