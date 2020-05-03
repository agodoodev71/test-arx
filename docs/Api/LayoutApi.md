# Swagger\Client\LayoutApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**layoutDelete**](LayoutApi.md#layoutDelete) | **DELETE** /api/Layout/{layoutId} | This call delete an existent layout
[**layoutGetById**](LayoutApi.md#layoutGetById) | **GET** /api/Layout/{id} | This call returns the single layout by the given id
[**layoutGetByTask**](LayoutApi.md#layoutGetByTask) | **GET** /api/Layout/Task/{taskWorkId}/{usingtype} | This call returns the layout for the given user, the given type and the given utilization
[**layoutGetByType**](LayoutApi.md#layoutGetByType) | **GET** /api/Layout/Type/{type} | This call returns all layout of the specified type
[**layoutGetByUser**](LayoutApi.md#layoutGetByUser) | **GET** /api/Layout/User/{userId}/{usingtype}/{layouttype} | This call returns the layout for the given user, the given type and the given utilization
[**layoutPost**](LayoutApi.md#layoutPost) | **POST** /api/Layout | This call save a new layout
[**layoutPut**](LayoutApi.md#layoutPut) | **PUT** /api/Layout/{id} | This call update a layout
[**layoutPutChangeOrder**](LayoutApi.md#layoutPutChangeOrder) | **PUT** /api/Layout/{layoutId}/{order} | This call changes the layout order for a given layout


# **layoutDelete**
> layoutDelete($layout_id)

This call delete an existent layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout_id = 56; // int | Id of the layout to be deleted

try {
    $apiInstance->layoutDelete($layout_id);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout_id** | **int**| Id of the layout to be deleted |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutGetById**
> \Swagger\Client\Model\LayoutDTO layoutGetById($id)

This call returns the single layout by the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Id of the wanted layout

try {
    $result = $apiInstance->layoutGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the wanted layout |

### Return type

[**\Swagger\Client\Model\LayoutDTO**](../Model/LayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutGetByTask**
> \Swagger\Client\Model\LayoutDTO layoutGetByTask($task_work_id, $usingtype)

This call returns the layout for the given user, the given type and the given utilization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | TaskWorkId
$usingtype = 56; // int | Possible values:  2: Computer  4: Tablet  8: Smartphone

try {
    $result = $apiInstance->layoutGetByTask($task_work_id, $usingtype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutGetByTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| TaskWorkId |
 **usingtype** | **int**| Possible values:  2: Computer  4: Tablet  8: Smartphone |

### Return type

[**\Swagger\Client\Model\LayoutDTO**](../Model/LayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutGetByType**
> \Swagger\Client\Model\LayoutDTO[] layoutGetByType($type)

This call returns all layout of the specified type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Possible values:  1: DesktopMenu  2: CommandsPanel

try {
    $result = $apiInstance->layoutGetByType($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutGetByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| Possible values:  1: DesktopMenu  2: CommandsPanel |

### Return type

[**\Swagger\Client\Model\LayoutDTO[]**](../Model/LayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutGetByUser**
> \Swagger\Client\Model\LayoutDTO layoutGetByUser($user_id, $usingtype, $layouttype)

This call returns the layout for the given user, the given type and the given utilization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | User Id
$usingtype = 56; // int | Possible values:  2: Computer  4: Tablet  8: Smartphone
$layouttype = 56; // int | Possible values:  1: DesktopMenu  2: CommandsPanel

try {
    $result = $apiInstance->layoutGetByUser($user_id, $usingtype, $layouttype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutGetByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| User Id |
 **usingtype** | **int**| Possible values:  2: Computer  4: Tablet  8: Smartphone |
 **layouttype** | **int**| Possible values:  1: DesktopMenu  2: CommandsPanel |

### Return type

[**\Swagger\Client\Model\LayoutDTO**](../Model/LayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutPost**
> \Swagger\Client\Model\LayoutDTO layoutPost($layout)

This call save a new layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout = new \Swagger\Client\Model\LayoutDTO(); // \Swagger\Client\Model\LayoutDTO | Layout to be saved

try {
    $result = $apiInstance->layoutPost($layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout** | [**\Swagger\Client\Model\LayoutDTO**](../Model/LayoutDTO.md)| Layout to be saved |

### Return type

[**\Swagger\Client\Model\LayoutDTO**](../Model/LayoutDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutPut**
> layoutPut($id, $layout)

This call update a layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | id of the wanted layout
$layout = new \Swagger\Client\Model\LayoutDTO(); // \Swagger\Client\Model\LayoutDTO | New version of layout

try {
    $apiInstance->layoutPut($id, $layout);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the wanted layout |
 **layout** | [**\Swagger\Client\Model\LayoutDTO**](../Model/LayoutDTO.md)| New version of layout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **layoutPutChangeOrder**
> layoutPutChangeOrder($layout_id, $order)

This call changes the layout order for a given layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\LayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout_id = 56; // int | Id of the layout
$order = 56; // int | new order index for the given layout

try {
    $apiInstance->layoutPutChangeOrder($layout_id, $order);
} catch (Exception $e) {
    echo 'Exception when calling LayoutApi->layoutPutChangeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout_id** | **int**| Id of the layout |
 **order** | **int**| new order index for the given layout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

