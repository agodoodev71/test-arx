# Swagger\Client\OptionsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**optionsGet**](OptionsApi.md#optionsGet) | **GET** /api/Options | This call returns the options for the connected user (aka: Configura-Generale)
[**optionsGetByArgomento**](OptionsApi.md#optionsGetByArgomento) | **GET** /api/Options/topic/{argument} | This call retrieves options by the given argument
[**optionsGetByArgomentoCampo**](OptionsApi.md#optionsGetByArgomentoCampo) | **GET** /api/Options/topicField/{argument}/{field} | This call returns options by the given argument and given field
[**optionsGetByArgomentoUtente**](OptionsApi.md#optionsGetByArgomentoUtente) | **GET** /api/Options/topicAndUser/{argument} | This call retrieves options by the given argument
[**optionsGetDocumentTypeViewMode**](OptionsApi.md#optionsGetDocumentTypeViewMode) | **GET** /api/Options/documenttypeviewmode | This call returns the option for display Document Type
[**optionsSetByArgomentoUtente**](OptionsApi.md#optionsSetByArgomentoUtente) | **PUT** /api/Options/topicAndUser | This call writes a option


# **optionsGet**
> \Swagger\Client\Model\UserOptionsDto optionsGet()

This call returns the options for the connected user (aka: Configura-Generale)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->optionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->optionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserOptionsDto**](../Model/UserOptionsDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optionsGetByArgomento**
> \Swagger\Client\Model\OptionsDTO[] optionsGetByArgomento($argument)

This call retrieves options by the given argument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$argument = "argument_example"; // string | Argument filter

try {
    $result = $apiInstance->optionsGetByArgomento($argument);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->optionsGetByArgomento: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **argument** | **string**| Argument filter |

### Return type

[**\Swagger\Client\Model\OptionsDTO[]**](../Model/OptionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optionsGetByArgomentoCampo**
> \Swagger\Client\Model\OptionsDTO[] optionsGetByArgomentoCampo($argument, $field)

This call returns options by the given argument and given field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$argument = "argument_example"; // string | Argument filter
$field = "field_example"; // string | Field filter

try {
    $result = $apiInstance->optionsGetByArgomentoCampo($argument, $field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->optionsGetByArgomentoCampo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **argument** | **string**| Argument filter |
 **field** | **string**| Field filter |

### Return type

[**\Swagger\Client\Model\OptionsDTO[]**](../Model/OptionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optionsGetByArgomentoUtente**
> \Swagger\Client\Model\OptionsDTO[] optionsGetByArgomentoUtente($argument)

This call retrieves options by the given argument

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$argument = "argument_example"; // string | Argument filter

try {
    $result = $apiInstance->optionsGetByArgomentoUtente($argument);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->optionsGetByArgomentoUtente: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **argument** | **string**| Argument filter |

### Return type

[**\Swagger\Client\Model\OptionsDTO[]**](../Model/OptionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optionsGetDocumentTypeViewMode**
> int optionsGetDocumentTypeViewMode()

This call returns the option for display Document Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->optionsGetDocumentTypeViewMode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->optionsGetDocumentTypeViewMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **optionsSetByArgomentoUtente**
> optionsSetByArgomentoUtente($request_dto)

This call writes a option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_dto = new \Swagger\Client\Model\OptionsRequestDTO(); // \Swagger\Client\Model\OptionsRequestDTO | Option information

try {
    $apiInstance->optionsSetByArgomentoUtente($request_dto);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->optionsSetByArgomentoUtente: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_dto** | [**\Swagger\Client\Model\OptionsRequestDTO**](../Model/OptionsRequestDTO.md)| Option information |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

