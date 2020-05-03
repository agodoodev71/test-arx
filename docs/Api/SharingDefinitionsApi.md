# Swagger\Client\SharingDefinitionsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharingDefinitionsGetNewSharingDefinition**](SharingDefinitionsApi.md#sharingDefinitionsGetNewSharingDefinition) | **GET** /api/SharingDefinitions/New | 
[**sharingDefinitionsGetSharingDefinitions**](SharingDefinitionsApi.md#sharingDefinitionsGetSharingDefinitions) | **GET** /api/SharingDefinitions | 
[**sharingDefinitionsGetSharingDefinitionsByDocumentTypeIdAndAooCode**](SharingDefinitionsApi.md#sharingDefinitionsGetSharingDefinitionsByDocumentTypeIdAndAooCode) | **POST** /api/SharingDefinitions/GetByAooAndDocumentType | 
[**sharingDefinitionsGetSharingDefinitionsById**](SharingDefinitionsApi.md#sharingDefinitionsGetSharingDefinitionsById) | **GET** /api/SharingDefinitions/ById/{sharingId} | 
[**sharingDefinitionsInsertSharingDefinition**](SharingDefinitionsApi.md#sharingDefinitionsInsertSharingDefinition) | **POST** /api/SharingDefinitions | 
[**sharingDefinitionsIsArxLinkConfigured**](SharingDefinitionsApi.md#sharingDefinitionsIsArxLinkConfigured) | **GET** /api/SharingDefinitions/IsConfigured | 
[**sharingDefinitionsSharingDefinitionDeleteById**](SharingDefinitionsApi.md#sharingDefinitionsSharingDefinitionDeleteById) | **DELETE** /api/SharingDefinitions/{sharingDefinitionId} | 
[**sharingDefinitionsUpdateSharingDefinition**](SharingDefinitionsApi.md#sharingDefinitionsUpdateSharingDefinition) | **PUT** /api/SharingDefinitions | 


# **sharingDefinitionsGetNewSharingDefinition**
> \Swagger\Client\Model\SharingDefinitionDTO sharingDefinitionsGetNewSharingDefinition()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharingDefinitionsGetNewSharingDefinition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsGetNewSharingDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SharingDefinitionDTO**](../Model/SharingDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsGetSharingDefinitions**
> \Swagger\Client\Model\SharingDefinitionDTO[] sharingDefinitionsGetSharingDefinitions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharingDefinitionsGetSharingDefinitions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsGetSharingDefinitions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SharingDefinitionDTO[]**](../Model/SharingDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsGetSharingDefinitionsByDocumentTypeIdAndAooCode**
> \Swagger\Client\Model\SharingDefinitionDTO sharingDefinitionsGetSharingDefinitionsByDocumentTypeIdAndAooCode($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\GetSharingDefinitionsByDocumentTypeIdAndAooCodeRequestDTO(); // \Swagger\Client\Model\GetSharingDefinitionsByDocumentTypeIdAndAooCodeRequestDTO | 

try {
    $result = $apiInstance->sharingDefinitionsGetSharingDefinitionsByDocumentTypeIdAndAooCode($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsGetSharingDefinitionsByDocumentTypeIdAndAooCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\GetSharingDefinitionsByDocumentTypeIdAndAooCodeRequestDTO**](../Model/GetSharingDefinitionsByDocumentTypeIdAndAooCodeRequestDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SharingDefinitionDTO**](../Model/SharingDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsGetSharingDefinitionsById**
> \Swagger\Client\Model\SharingDefinitionDTO sharingDefinitionsGetSharingDefinitionsById($sharing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_id = "sharing_id_example"; // string | 

try {
    $result = $apiInstance->sharingDefinitionsGetSharingDefinitionsById($sharing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsGetSharingDefinitionsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SharingDefinitionDTO**](../Model/SharingDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsInsertSharingDefinition**
> \Swagger\Client\Model\SharingDefinitionInsertResult sharingDefinitionsInsertSharingDefinition($sharing_definition)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_definition = new \Swagger\Client\Model\SharingDefinitionDTO(); // \Swagger\Client\Model\SharingDefinitionDTO | 

try {
    $result = $apiInstance->sharingDefinitionsInsertSharingDefinition($sharing_definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsInsertSharingDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_definition** | [**\Swagger\Client\Model\SharingDefinitionDTO**](../Model/SharingDefinitionDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SharingDefinitionInsertResult**](../Model/SharingDefinitionInsertResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsIsArxLinkConfigured**
> bool sharingDefinitionsIsArxLinkConfigured()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharingDefinitionsIsArxLinkConfigured();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsIsArxLinkConfigured: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsSharingDefinitionDeleteById**
> sharingDefinitionsSharingDefinitionDeleteById($sharing_definition_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_definition_id = "sharing_definition_id_example"; // string | 

try {
    $apiInstance->sharingDefinitionsSharingDefinitionDeleteById($sharing_definition_id);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsSharingDefinitionDeleteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_definition_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingDefinitionsUpdateSharingDefinition**
> \Swagger\Client\Model\SharingDefinitionInsertResult sharingDefinitionsUpdateSharingDefinition($sharing_definition)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_definition = new \Swagger\Client\Model\SharingDefinitionDTO(); // \Swagger\Client\Model\SharingDefinitionDTO | 

try {
    $result = $apiInstance->sharingDefinitionsUpdateSharingDefinition($sharing_definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingDefinitionsApi->sharingDefinitionsUpdateSharingDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_definition** | [**\Swagger\Client\Model\SharingDefinitionDTO**](../Model/SharingDefinitionDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SharingDefinitionInsertResult**](../Model/SharingDefinitionInsertResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

