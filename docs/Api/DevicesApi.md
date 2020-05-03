# Swagger\Client\DevicesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**devicesGetDevices**](DevicesApi.md#devicesGetDevices) | **GET** /api/Devices/{type} | This call returns all devices defined for specified type


# **devicesGetDevices**
> \Swagger\Client\Model\DeviceDTO[] devicesGetDevices($type)

This call returns all devices defined for specified type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Possible values:  0: Conservazione  1: Outsourcing  2: ExternalEngine

try {
    $result = $apiInstance->devicesGetDevices($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->devicesGetDevices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| Possible values:  0: Conservazione  1: Outsourcing  2: ExternalEngine |

### Return type

[**\Swagger\Client\Model\DeviceDTO[]**](../Model/DeviceDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

