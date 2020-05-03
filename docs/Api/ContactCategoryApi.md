# Swagger\Client\ContactCategoryApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactCategoryDeleteCategories**](ContactCategoryApi.md#contactCategoryDeleteCategories) | **DELETE** /api/ContactCategory/{contactCategoryId} | This call adds new contact category
[**contactCategoryGetCategories**](ContactCategoryApi.md#contactCategoryGetCategories) | **GET** /api/ContactCategory | This call returns all the contact categories available
[**contactCategoryInsertCategories**](ContactCategoryApi.md#contactCategoryInsertCategories) | **POST** /api/ContactCategory | This call adds new contact category


# **contactCategoryDeleteCategories**
> contactCategoryDeleteCategories($contact_category_id)

This call adds new contact category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_category_id = 56; // int | 

try {
    $apiInstance->contactCategoryDeleteCategories($contact_category_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactCategoryApi->contactCategoryDeleteCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_category_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCategoryGetCategories**
> \Swagger\Client\Model\ContactCategoryDTO[] contactCategoryGetCategories()

This call returns all the contact categories available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contactCategoryGetCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactCategoryApi->contactCategoryGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ContactCategoryDTO[]**](../Model/ContactCategoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactCategoryInsertCategories**
> contactCategoryInsertCategories($contact_category_dto)

This call adds new contact category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ContactCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_category_dto = new \Swagger\Client\Model\ContactCategoryDTO(); // \Swagger\Client\Model\ContactCategoryDTO | 

try {
    $apiInstance->contactCategoryInsertCategories($contact_category_dto);
} catch (Exception $e) {
    echo 'Exception when calling ContactCategoryApi->contactCategoryInsertCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_category_dto** | [**\Swagger\Client\Model\ContactCategoryDTO**](../Model/ContactCategoryDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

