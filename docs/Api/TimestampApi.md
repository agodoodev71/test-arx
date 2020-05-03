# Swagger\Client\TimestampApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timestampApplyTimestamp**](TimestampApi.md#timestampApplyTimestamp) | **POST** /api/Timestamps/ApplyTimestamp | This call applies a timestamp
[**timestampDeleteTsa**](TimestampApi.md#timestampDeleteTsa) | **DELETE** /api/Timestamps/{id} | This call deletes a timestamp account
[**timestampGetTsa**](TimestampApi.md#timestampGetTsa) | **GET** /api/Timestamps/{id} | This call returns a specific timestamp account
[**timestampGetTsaList**](TimestampApi.md#timestampGetTsaList) | **GET** /api/Timestamps | This call returns the timestamp list
[**timestampGetTsaProtocolList**](TimestampApi.md#timestampGetTsaProtocolList) | **GET** /api/Timestamps/TsaProtocolList | This call returns the timestamp account protocol list
[**timestampInsertTsa**](TimestampApi.md#timestampInsertTsa) | **POST** /api/Timestamps | This call inserts a new timestamp account
[**timestampTestTsa**](TimestampApi.md#timestampTestTsa) | **POST** /api/Timestamps/TestTsa/{id} | This call tests timestamp account
[**timestampUpdateTsa**](TimestampApi.md#timestampUpdateTsa) | **PUT** /api/Timestamps/{id} | This call updates a given timestamp account


# **timestampApplyTimestamp**
> \Swagger\Client\Model\TimestampResponseDTO timestampApplyTimestamp($timestamp_request)

This call applies a timestamp

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timestamp_request = new \Swagger\Client\Model\TimestampRequestDTO(); // \Swagger\Client\Model\TimestampRequestDTO | Timestamp information to apply

try {
    $result = $apiInstance->timestampApplyTimestamp($timestamp_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampApplyTimestamp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **timestamp_request** | [**\Swagger\Client\Model\TimestampRequestDTO**](../Model/TimestampRequestDTO.md)| Timestamp information to apply |

### Return type

[**\Swagger\Client\Model\TimestampResponseDTO**](../Model/TimestampResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampDeleteTsa**
> timestampDeleteTsa($id)

This call deletes a timestamp account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier

try {
    $apiInstance->timestampDeleteTsa($id);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampDeleteTsa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampGetTsa**
> \Swagger\Client\Model\TsaDTO timestampGetTsa($id)

This call returns a specific timestamp account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier

try {
    $result = $apiInstance->timestampGetTsa($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampGetTsa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier |

### Return type

[**\Swagger\Client\Model\TsaDTO**](../Model/TsaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampGetTsaList**
> \Swagger\Client\Model\TsaDTO[] timestampGetTsaList()

This call returns the timestamp list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->timestampGetTsaList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampGetTsaList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TsaDTO[]**](../Model/TsaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampGetTsaProtocolList**
> \Swagger\Client\Model\TsaProtocolDTO[] timestampGetTsaProtocolList()

This call returns the timestamp account protocol list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->timestampGetTsaProtocolList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampGetTsaProtocolList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TsaProtocolDTO[]**](../Model/TsaProtocolDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampInsertTsa**
> \Swagger\Client\Model\TsaDTO timestampInsertTsa($tsa_insert)

This call inserts a new timestamp account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tsa_insert = new \Swagger\Client\Model\TsaInsertDTO(); // \Swagger\Client\Model\TsaInsertDTO | Timestamp information to insert

try {
    $result = $apiInstance->timestampInsertTsa($tsa_insert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampInsertTsa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tsa_insert** | [**\Swagger\Client\Model\TsaInsertDTO**](../Model/TsaInsertDTO.md)| Timestamp information to insert |

### Return type

[**\Swagger\Client\Model\TsaDTO**](../Model/TsaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampTestTsa**
> timestampTestTsa($id)

This call tests timestamp account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier

try {
    $apiInstance->timestampTestTsa($id);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampTestTsa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timestampUpdateTsa**
> \Swagger\Client\Model\TsaDTO timestampUpdateTsa($id, $tsa_update)

This call updates a given timestamp account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TimestampApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier
$tsa_update = new \Swagger\Client\Model\TsaUpdateDTO(); // \Swagger\Client\Model\TsaUpdateDTO | Timestamp information to update

try {
    $result = $apiInstance->timestampUpdateTsa($id, $tsa_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimestampApi->timestampUpdateTsa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier |
 **tsa_update** | [**\Swagger\Client\Model\TsaUpdateDTO**](../Model/TsaUpdateDTO.md)| Timestamp information to update |

### Return type

[**\Swagger\Client\Model\TsaDTO**](../Model/TsaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

