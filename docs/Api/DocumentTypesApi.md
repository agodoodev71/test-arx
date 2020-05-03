# Swagger\Client\DocumentTypesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentTypesGet**](DocumentTypesApi.md#documentTypesGet) | **GET** /api/DocumentTypes/{mode}/mode | This call returns the document types that the user can access
[**documentTypesGetBySystemId**](DocumentTypesApi.md#documentTypesGetBySystemId) | **GET** /api/DocumentTypes/{documentTypeId} | This call returns a specific document type
[**documentTypesGetOld**](DocumentTypesApi.md#documentTypesGetOld) | **GET** /api/DocumentTypes/{mode}/mode/{businessunitcode} | This call returns the document types that the user can access
[**documentTypesGetTree**](DocumentTypesApi.md#documentTypesGetTree) | **GET** /api/DocumentTypes/GetTree/{mode} | This call returns the document types that the user can access but in a preformatted tree with parent/child relationship
[**documentTypesGetTreeOld**](DocumentTypesApi.md#documentTypesGetTreeOld) | **GET** /api/DocumentTypes/GetTree/{mode}/{businessunitcode}/{forProtocol} | This call returns the document types that the user can access but in a preformatted tree with parent/child relationship


# **documentTypesGet**
> \Swagger\Client\Model\DocumentTypeBaseDTO[] documentTypesGet($mode, $business_unit_code)

This call returns the document types that the user can access

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mode = 56; // int | Possible values:  0: Archive  1: Search  2: EditProfile
$business_unit_code = "business_unit_code_example"; // string | Business Unit (optional)

try {
    $result = $apiInstance->documentTypesGet($mode, $business_unit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTypesApi->documentTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **int**| Possible values:  0: Archive  1: Search  2: EditProfile |
 **business_unit_code** | **string**| Business Unit (optional) | [optional]

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseDTO[]**](../Model/DocumentTypeBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTypesGetBySystemId**
> \Swagger\Client\Model\DocumentTypeBaseDTO documentTypesGetBySystemId($document_type_id)

This call returns a specific document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 56; // int | Document Type id

try {
    $result = $apiInstance->documentTypesGetBySystemId($document_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTypesApi->documentTypesGetBySystemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **int**| Document Type id |

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseDTO**](../Model/DocumentTypeBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTypesGetOld**
> \Swagger\Client\Model\DocumentTypeBaseDTO[] documentTypesGetOld($mode, $businessunitcode)

This call returns the document types that the user can access

This method is deprecated. Use /api/DocumentTypes/{mode}/mode?businessunitcode={businessunitcode}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mode = 56; // int | Possible values:  0: Archive  1: Search  2: EditProfile
$businessunitcode = "businessunitcode_example"; // string | Business Unit (optional)

try {
    $result = $apiInstance->documentTypesGetOld($mode, $businessunitcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTypesApi->documentTypesGetOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **int**| Possible values:  0: Archive  1: Search  2: EditProfile |
 **businessunitcode** | **string**| Business Unit (optional) |

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseDTO[]**](../Model/DocumentTypeBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTypesGetTree**
> \Swagger\Client\Model\DocumentTypeBaseTreeDTO documentTypesGetTree($mode, $businessunitcode)

This call returns the document types that the user can access but in a preformatted tree with parent/child relationship

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mode = 56; // int | Possible values:  0: Archive  1: Search  2: EditProfile
$businessunitcode = "businessunitcode_example"; // string | Business Unit (optional)

try {
    $result = $apiInstance->documentTypesGetTree($mode, $businessunitcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTypesApi->documentTypesGetTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **int**| Possible values:  0: Archive  1: Search  2: EditProfile |
 **businessunitcode** | **string**| Business Unit (optional) | [optional]

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseTreeDTO**](../Model/DocumentTypeBaseTreeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentTypesGetTreeOld**
> \Swagger\Client\Model\DocumentTypeBaseTreeDTO documentTypesGetTreeOld($mode, $businessunitcode, $for_protocol)

This call returns the document types that the user can access but in a preformatted tree with parent/child relationship

This method is deprecated. Use /api/DocumentTypes/GetTree/{mode}?businessunitcode={businessunitcode}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DocumentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mode = 56; // int | Possible values:  0: Archive  1: Search  2: EditProfile
$businessunitcode = "businessunitcode_example"; // string | Business Unit (optional)
$for_protocol = true; // bool | If the type is of Protocol (PA) (default false)

try {
    $result = $apiInstance->documentTypesGetTreeOld($mode, $businessunitcode, $for_protocol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentTypesApi->documentTypesGetTreeOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mode** | **int**| Possible values:  0: Archive  1: Search  2: EditProfile |
 **businessunitcode** | **string**| Business Unit (optional) |
 **for_protocol** | **bool**| If the type is of Protocol (PA) (default false) |

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseTreeDTO**](../Model/DocumentTypeBaseTreeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

