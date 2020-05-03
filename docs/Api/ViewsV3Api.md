# Swagger\Client\ViewsV3Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewsV3DeleteView**](ViewsV3Api.md#viewsV3DeleteView) | **DELETE** /api/v3/Views/{id} | This call deletes the view
[**viewsV3GetResult**](ViewsV3Api.md#viewsV3GetResult) | **POST** /api/v3/Views | This call returns the results for the given view.  This call could not be compatible with some programming language, in this case use the call api/Views
[**viewsV3GetResultForTask**](ViewsV3Api.md#viewsV3GetResultForTask) | **POST** /api/v3/Views/task/{taskworkId}/operation/{operationId} | This call returns the results for the given view  This call could not be compatible with some programming language, in this case use the call api/Views/task/{taskworkId}/operation/{operationId}
[**viewsV3GetView**](ViewsV3Api.md#viewsV3GetView) | **GET** /api/v3/Views/{id} | This call returns the view with all information
[**viewsV3GetViewByTaskWorkOperationId**](ViewsV3Api.md#viewsV3GetViewByTaskWorkOperationId) | **GET** /api/v3/Views/task/{taskworkId}/operation/{operationId} | This call return the view configured on a task operation with all information
[**viewsV3GetViews**](ViewsV3Api.md#viewsV3GetViews) | **GET** /api/v3/Views | This call returns the list of views for the connected user


# **viewsV3DeleteView**
> viewsV3DeleteView($id)

This call deletes the view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->viewsV3DeleteView($id);
} catch (Exception $e) {
    echo 'Exception when calling ViewsV3Api->viewsV3DeleteView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsV3GetResult**
> object viewsV3GetResult($view)

This call returns the results for the given view.  This call could not be compatible with some programming language, in this case use the call api/Views

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view = new \Swagger\Client\Model\ViewDTO(); // \Swagger\Client\Model\ViewDTO | 

try {
    $result = $apiInstance->viewsV3GetResult($view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsV3Api->viewsV3GetResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view** | [**\Swagger\Client\Model\ViewDTO**](../Model/ViewDTO.md)|  | [optional]

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsV3GetResultForTask**
> object viewsV3GetResultForTask($taskwork_id, $operation_id, $view)

This call returns the results for the given view  This call could not be compatible with some programming language, in this case use the call api/Views/task/{taskworkId}/operation/{operationId}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskwork_id = 56; // int | 
$operation_id = "operation_id_example"; // string | 
$view = new \Swagger\Client\Model\ViewDTO(); // \Swagger\Client\Model\ViewDTO | 

try {
    $result = $apiInstance->viewsV3GetResultForTask($taskwork_id, $operation_id, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsV3Api->viewsV3GetResultForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskwork_id** | **int**|  |
 **operation_id** | **string**|  |
 **view** | [**\Swagger\Client\Model\ViewDTO**](../Model/ViewDTO.md)|  | [optional]

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsV3GetView**
> \Swagger\Client\Model\ViewDTO viewsV3GetView($id)

This call returns the view with all information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->viewsV3GetView($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsV3Api->viewsV3GetView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ViewDTO**](../Model/ViewDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsV3GetViewByTaskWorkOperationId**
> \Swagger\Client\Model\ViewDTO viewsV3GetViewByTaskWorkOperationId($taskwork_id, $operation_id)

This call return the view configured on a task operation with all information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$taskwork_id = 56; // int | The id of the task
$operation_id = "operation_id_example"; // string | The task operation id

try {
    $result = $apiInstance->viewsV3GetViewByTaskWorkOperationId($taskwork_id, $operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsV3Api->viewsV3GetViewByTaskWorkOperationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **taskwork_id** | **int**| The id of the task |
 **operation_id** | **string**| The task operation id |

### Return type

[**\Swagger\Client\Model\ViewDTO**](../Model/ViewDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsV3GetViews**
> \Swagger\Client\Model\ViewDTO[] viewsV3GetViews()

This call returns the list of views for the connected user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsV3Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->viewsV3GetViews();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsV3Api->viewsV3GetViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ViewDTO[]**](../Model/ViewDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

