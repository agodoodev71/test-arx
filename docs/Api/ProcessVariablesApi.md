# Swagger\Client\ProcessVariablesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processVariablesGetFieldValuesByProcessVariable**](ProcessVariablesApi.md#processVariablesGetFieldValuesByProcessVariable) | **POST** /api/ProcessVariables/{processVariableId}/getDatasourceValues | This call returns the possibile values for a process variable in format list or table.
[**processVariablesGetFiltersByProcessVariables**](ProcessVariablesApi.md#processVariablesGetFiltersByProcessVariables) | **POST** /api/ProcessVariables/{processVariableId}/getFilters | This call returns the filter field associated woth a process variable
[**processVariablesSetProcessVariableValue**](ProcessVariablesApi.md#processVariablesSetProcessVariableValue) | **PUT** /api/ProcessVariables/{processId}/setValues | This call inserts the variables associated with the process
[**processVariablesValidateVariabile**](ProcessVariablesApi.md#processVariablesValidateVariabile) | **POST** /api/ProcessVariables/process/{processId}/validation | Validate the variable data update of a specific variable


# **processVariablesGetFieldValuesByProcessVariable**
> \Swagger\Client\Model\FieldValuesDTO processVariablesGetFieldValuesByProcessVariable($process_variable_id, $process_variables)

This call returns the possibile values for a process variable in format list or table.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_variable_id = 56; // int | Process variable identifier
$process_variables = new \Swagger\Client\Model\VariablesValuesCriteriaDTO(); // \Swagger\Client\Model\VariablesValuesCriteriaDTO | Actual values of the process variables (for value dependant query)

try {
    $result = $apiInstance->processVariablesGetFieldValuesByProcessVariable($process_variable_id, $process_variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessVariablesApi->processVariablesGetFieldValuesByProcessVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_variable_id** | **int**| Process variable identifier |
 **process_variables** | [**\Swagger\Client\Model\VariablesValuesCriteriaDTO**](../Model/VariablesValuesCriteriaDTO.md)| Actual values of the process variables (for value dependant query) |

### Return type

[**\Swagger\Client\Model\FieldValuesDTO**](../Model/FieldValuesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processVariablesGetFiltersByProcessVariables**
> \Swagger\Client\Model\FieldFilterConcreteDTO processVariablesGetFiltersByProcessVariables($process_variable_id, $process_variables)

This call returns the filter field associated woth a process variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_variable_id = 56; // int | Process variable identifier
$process_variables = new \Swagger\Client\Model\ProcessVariablesFieldsDTO(); // \Swagger\Client\Model\ProcessVariablesFieldsDTO | Variable fields information

try {
    $result = $apiInstance->processVariablesGetFiltersByProcessVariables($process_variable_id, $process_variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessVariablesApi->processVariablesGetFiltersByProcessVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_variable_id** | **int**| Process variable identifier |
 **process_variables** | [**\Swagger\Client\Model\ProcessVariablesFieldsDTO**](../Model/ProcessVariablesFieldsDTO.md)| Variable fields information |

### Return type

[**\Swagger\Client\Model\FieldFilterConcreteDTO**](../Model/FieldFilterConcreteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processVariablesSetProcessVariableValue**
> processVariablesSetProcessVariableValue($process_id, $process_variables)

This call inserts the variables associated with the process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process Identifier
$process_variables = new \Swagger\Client\Model\ProcessVariablesFieldsDTO(); // \Swagger\Client\Model\ProcessVariablesFieldsDTO | Variables information

try {
    $apiInstance->processVariablesSetProcessVariableValue($process_id, $process_variables);
} catch (Exception $e) {
    echo 'Exception when calling ProcessVariablesApi->processVariablesSetProcessVariableValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process Identifier |
 **process_variables** | [**\Swagger\Client\Model\ProcessVariablesFieldsDTO**](../Model/ProcessVariablesFieldsDTO.md)| Variables information |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processVariablesValidateVariabile**
> \Swagger\Client\Model\ValidationFieldResultDTO processVariablesValidateVariabile($process_id, $validation_data)

Validate the variable data update of a specific variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessVariablesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | The process instance id
$validation_data = new \Swagger\Client\Model\ProcessVariableValidationDTO(); // \Swagger\Client\Model\ProcessVariableValidationDTO | The validation data

try {
    $result = $apiInstance->processVariablesValidateVariabile($process_id, $validation_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessVariablesApi->processVariablesValidateVariabile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| The process instance id |
 **validation_data** | [**\Swagger\Client\Model\ProcessVariableValidationDTO**](../Model/ProcessVariableValidationDTO.md)| The validation data |

### Return type

[**\Swagger\Client\Model\ValidationFieldResultDTO**](../Model/ValidationFieldResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

