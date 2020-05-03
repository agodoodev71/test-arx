# Swagger\Client\SharingApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharingDeleteSharing**](SharingApi.md#sharingDeleteSharing) | **DELETE** /api/Sharing/{sharingId} | 
[**sharingGetOperations**](SharingApi.md#sharingGetOperations) | **GET** /api/Sharing/Operations/{sharingId} | 
[**sharingGetSharing**](SharingApi.md#sharingGetSharing) | **GET** /api/Sharing/ForUpdate/{sharingId} | 
[**sharingGetSharingForShow**](SharingApi.md#sharingGetSharingForShow) | **GET** /api/Sharing/{sharingId} | 
[**sharingGetSharings**](SharingApi.md#sharingGetSharings) | **GET** /api/Sharing | 
[**sharingGetSharingsByDocnumber**](SharingApi.md#sharingGetSharingsByDocnumber) | **GET** /api/Sharing/ByDocnumber/{docnumber} | 
[**sharingInsertSharing**](SharingApi.md#sharingInsertSharing) | **POST** /api/Sharing | 
[**sharingNewByBusinessUnitAndDocumentTypeId**](SharingApi.md#sharingNewByBusinessUnitAndDocumentTypeId) | **POST** /api/Sharing/NewByBusinessUnitAndDocumentType | 
[**sharingReprocessSharing**](SharingApi.md#sharingReprocessSharing) | **PUT** /api/Sharing/Reprocess/{sharingId} | 
[**sharingUpdateSharing**](SharingApi.md#sharingUpdateSharing) | **PUT** /api/Sharing | 
[**sharingUserConnectedIsConfigurationRole**](SharingApi.md#sharingUserConnectedIsConfigurationRole) | **GET** /api/Sharing/Permissions/IsConfigurationRole | 
[**sharingUserConnectedIsSharingManager**](SharingApi.md#sharingUserConnectedIsSharingManager) | **GET** /api/Sharing/Permissions/IsSharingManager | 


# **sharingDeleteSharing**
> sharingDeleteSharing($sharing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_id = "sharing_id_example"; // string | 

try {
    $apiInstance->sharingDeleteSharing($sharing_id);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingDeleteSharing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingGetOperations**
> \Swagger\Client\Model\SharingOperationDTO[] sharingGetOperations($sharing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_id = "sharing_id_example"; // string | 

try {
    $result = $apiInstance->sharingGetOperations($sharing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingGetOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SharingOperationDTO[]**](../Model/SharingOperationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingGetSharing**
> \Swagger\Client\Model\SharingDTO sharingGetSharing($sharing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_id = "sharing_id_example"; // string | 

try {
    $result = $apiInstance->sharingGetSharing($sharing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingGetSharing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingGetSharingForShow**
> \Swagger\Client\Model\SharingDTO sharingGetSharingForShow($sharing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_id = "sharing_id_example"; // string | 

try {
    $result = $apiInstance->sharingGetSharingForShow($sharing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingGetSharingForShow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingGetSharings**
> \Swagger\Client\Model\SharingDTO[] sharingGetSharings()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharingGetSharings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingGetSharings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SharingDTO[]**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingGetSharingsByDocnumber**
> \Swagger\Client\Model\SharingDTO[] sharingGetSharingsByDocnumber($docnumber)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 

try {
    $result = $apiInstance->sharingGetSharingsByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingGetSharingsByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |

### Return type

[**\Swagger\Client\Model\SharingDTO[]**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingInsertSharing**
> \Swagger\Client\Model\SharingDTO sharingInsertSharing($sharing)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing = new \Swagger\Client\Model\SharingDTO(); // \Swagger\Client\Model\SharingDTO | 

try {
    $result = $apiInstance->sharingInsertSharing($sharing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingInsertSharing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing** | [**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingNewByBusinessUnitAndDocumentTypeId**
> \Swagger\Client\Model\SharingDTO sharingNewByBusinessUnitAndDocumentTypeId($sharing_request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_request = new \Swagger\Client\Model\GetNewSharingRequestDTO(); // \Swagger\Client\Model\GetNewSharingRequestDTO | 

try {
    $result = $apiInstance->sharingNewByBusinessUnitAndDocumentTypeId($sharing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingNewByBusinessUnitAndDocumentTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_request** | [**\Swagger\Client\Model\GetNewSharingRequestDTO**](../Model/GetNewSharingRequestDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingReprocessSharing**
> \Swagger\Client\Model\SharingDTO sharingReprocessSharing($sharing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing_id = "sharing_id_example"; // string | 

try {
    $result = $apiInstance->sharingReprocessSharing($sharing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingReprocessSharing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingUpdateSharing**
> \Swagger\Client\Model\SharingDTO sharingUpdateSharing($sharing)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sharing = new \Swagger\Client\Model\SharingDTO(); // \Swagger\Client\Model\SharingDTO | 

try {
    $result = $apiInstance->sharingUpdateSharing($sharing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingUpdateSharing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sharing** | [**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SharingDTO**](../Model/SharingDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharingUserConnectedIsConfigurationRole**
> bool sharingUserConnectedIsConfigurationRole()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharingUserConnectedIsConfigurationRole();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingUserConnectedIsConfigurationRole: ', $e->getMessage(), PHP_EOL;
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

# **sharingUserConnectedIsSharingManager**
> bool sharingUserConnectedIsSharingManager()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SharingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->sharingUserConnectedIsSharingManager();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharingApi->sharingUserConnectedIsSharingManager: ', $e->getMessage(), PHP_EOL;
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

