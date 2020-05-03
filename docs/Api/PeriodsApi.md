# Swagger\Client\PeriodsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**periodsGetPeriods**](PeriodsApi.md#periodsGetPeriods) | **GET** /api/Periods | This call returns all periods defined for electronic storage in Arxivar


# **periodsGetPeriods**
> \Swagger\Client\Model\PeriodDTO[] periodsGetPeriods()

This call returns all periods defined for electronic storage in Arxivar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PeriodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->periodsGetPeriods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeriodsApi->periodsGetPeriods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PeriodDTO[]**](../Model/PeriodDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

