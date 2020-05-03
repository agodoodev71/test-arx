# Swagger\Client\TaskLayoutApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskLayoutDeleteTaskLayout**](TaskLayoutApi.md#taskLayoutDeleteTaskLayout) | **DELETE** /api/TaskLayout/{tasklayoutid} | This call deletes a task layout by the id
[**taskLayoutGetTaskLayoutById**](TaskLayoutApi.md#taskLayoutGetTaskLayoutById) | **GET** /api/TaskLayout/{tasklayoutid} | This call returns the task layout by the task layout id
[**taskLayoutGetTaskLayoutByTaskWorkId**](TaskLayoutApi.md#taskLayoutGetTaskLayoutByTaskWorkId) | **GET** /api/TaskLayout/taskwork/{taskWorkId} | This call returns the task layout by the taskwork
[**taskLayoutGetTaskLayoutForUser**](TaskLayoutApi.md#taskLayoutGetTaskLayoutForUser) | **GET** /api/TaskLayout/foruser | This call returns the task layout for user default if exist
[**taskLayoutGetTaskLayouts**](TaskLayoutApi.md#taskLayoutGetTaskLayouts) | **GET** /api/TaskLayout | This call returns all task layouts configured
[**taskLayoutNewTaskLayout**](TaskLayoutApi.md#taskLayoutNewTaskLayout) | **POST** /api/TaskLayout | This call inserts a new task layout
[**taskLayoutUpdateTaskLayout**](TaskLayoutApi.md#taskLayoutUpdateTaskLayout) | **PUT** /api/TaskLayout | This call updates a task layout
[**taskLayoutUpdateTaskLayoutPriority**](TaskLayoutApi.md#taskLayoutUpdateTaskLayoutPriority) | **PUT** /api/TaskLayout/changepriority/{tasklayoutid}/{priority} | This call updates the priority of a task layout
[**taskLayoutWriteTaskLayoutForUser**](TaskLayoutApi.md#taskLayoutWriteTaskLayoutForUser) | **POST** /api/TaskLayout/foruser | This call inserts or updates personal task layout for user


# **taskLayoutDeleteTaskLayout**
> taskLayoutDeleteTaskLayout($tasklayoutid)

This call deletes a task layout by the id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tasklayoutid = 56; // int | Task layout identifier

try {
    $apiInstance->taskLayoutDeleteTaskLayout($tasklayoutid);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutDeleteTaskLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasklayoutid** | **int**| Task layout identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutGetTaskLayoutById**
> \Swagger\Client\Model\TaskLayoutDTO taskLayoutGetTaskLayoutById($tasklayoutid)

This call returns the task layout by the task layout id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tasklayoutid = 56; // int | Task Layout Identifier

try {
    $result = $apiInstance->taskLayoutGetTaskLayoutById($tasklayoutid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutGetTaskLayoutById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasklayoutid** | **int**| Task Layout Identifier |

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutGetTaskLayoutByTaskWorkId**
> \Swagger\Client\Model\TaskLayoutDTO taskLayoutGetTaskLayoutByTaskWorkId($task_work_id)

This call returns the task layout by the taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork Identifier

try {
    $result = $apiInstance->taskLayoutGetTaskLayoutByTaskWorkId($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutGetTaskLayoutByTaskWorkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork Identifier |

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutGetTaskLayoutForUser**
> \Swagger\Client\Model\TaskLayoutDTO taskLayoutGetTaskLayoutForUser()

This call returns the task layout for user default if exist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taskLayoutGetTaskLayoutForUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutGetTaskLayoutForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutGetTaskLayouts**
> \Swagger\Client\Model\TaskLayoutDTO[] taskLayoutGetTaskLayouts()

This call returns all task layouts configured

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taskLayoutGetTaskLayouts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutGetTaskLayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO[]**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutNewTaskLayout**
> \Swagger\Client\Model\TaskLayoutDTO taskLayoutNewTaskLayout($task_layout)

This call inserts a new task layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_layout = new \Swagger\Client\Model\TaskLayoutDTO(); // \Swagger\Client\Model\TaskLayoutDTO | Task layout information to insert

try {
    $result = $apiInstance->taskLayoutNewTaskLayout($task_layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutNewTaskLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_layout** | [**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)| Task layout information to insert |

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutUpdateTaskLayout**
> \Swagger\Client\Model\TaskLayoutDTO taskLayoutUpdateTaskLayout($task_layout)

This call updates a task layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_layout = new \Swagger\Client\Model\TaskLayoutDTO(); // \Swagger\Client\Model\TaskLayoutDTO | Task layout information to edit

try {
    $result = $apiInstance->taskLayoutUpdateTaskLayout($task_layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutUpdateTaskLayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_layout** | [**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)| Task layout information to edit |

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutUpdateTaskLayoutPriority**
> taskLayoutUpdateTaskLayoutPriority($tasklayoutid, $priority)

This call updates the priority of a task layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tasklayoutid = 56; // int | Task layout identifier
$priority = 56; // int | Priority to set

try {
    $apiInstance->taskLayoutUpdateTaskLayoutPriority($tasklayoutid, $priority);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutUpdateTaskLayoutPriority: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tasklayoutid** | **int**| Task layout identifier |
 **priority** | **int**| Priority to set |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskLayoutWriteTaskLayoutForUser**
> \Swagger\Client\Model\TaskLayoutDTO taskLayoutWriteTaskLayoutForUser($task_layout)

This call inserts or updates personal task layout for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_layout = new \Swagger\Client\Model\TaskLayoutDTO(); // \Swagger\Client\Model\TaskLayoutDTO | Task layout information to write

try {
    $result = $apiInstance->taskLayoutWriteTaskLayoutForUser($task_layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskLayoutApi->taskLayoutWriteTaskLayoutForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_layout** | [**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)| Task layout information to write |

### Return type

[**\Swagger\Client\Model\TaskLayoutDTO**](../Model/TaskLayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

