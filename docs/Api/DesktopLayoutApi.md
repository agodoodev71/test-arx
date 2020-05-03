# Swagger\Client\DesktopLayoutApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**desktopLayoutDelete**](DesktopLayoutApi.md#desktopLayoutDelete) | **DELETE** /api/DesktopLayout/{layoutId} | This call delete an existent layout
[**desktopLayoutGet**](DesktopLayoutApi.md#desktopLayoutGet) | **GET** /api/DesktopLayout | This call returns all layout
[**desktopLayoutGetById**](DesktopLayoutApi.md#desktopLayoutGetById) | **GET** /api/DesktopLayout/{id} | This call returns the single layout by the given id
[**desktopLayoutPost**](DesktopLayoutApi.md#desktopLayoutPost) | **POST** /api/DesktopLayout | This call save a new layout
[**desktopLayoutPut**](DesktopLayoutApi.md#desktopLayoutPut) | **PUT** /api/DesktopLayout/{id} | This call update a layout


# **desktopLayoutDelete**
> desktopLayoutDelete($layout_id)

This call delete an existent layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DesktopLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout_id = 56; // int | Identifier of the layout to be deleted

try {
    $apiInstance->desktopLayoutDelete($layout_id);
} catch (Exception $e) {
    echo 'Exception when calling DesktopLayoutApi->desktopLayoutDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout_id** | **int**| Identifier of the layout to be deleted |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **desktopLayoutGet**
> \Swagger\Client\Model\LayoutDesktopDTO[] desktopLayoutGet()

This call returns all layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DesktopLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->desktopLayoutGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesktopLayoutApi->desktopLayoutGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LayoutDesktopDTO[]**](../Model/LayoutDesktopDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **desktopLayoutGetById**
> \Swagger\Client\Model\LayoutDesktopDTO desktopLayoutGetById($id)

This call returns the single layout by the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DesktopLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the wanted layout

try {
    $result = $apiInstance->desktopLayoutGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesktopLayoutApi->desktopLayoutGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the wanted layout |

### Return type

[**\Swagger\Client\Model\LayoutDesktopDTO**](../Model/LayoutDesktopDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **desktopLayoutPost**
> \Swagger\Client\Model\LayoutDesktopDTO desktopLayoutPost($layout)

This call save a new layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DesktopLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$layout = new \Swagger\Client\Model\LayoutDesktopDTO(); // \Swagger\Client\Model\LayoutDesktopDTO | Layout to be saved

try {
    $result = $apiInstance->desktopLayoutPost($layout);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesktopLayoutApi->desktopLayoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **layout** | [**\Swagger\Client\Model\LayoutDesktopDTO**](../Model/LayoutDesktopDTO.md)| Layout to be saved |

### Return type

[**\Swagger\Client\Model\LayoutDesktopDTO**](../Model/LayoutDesktopDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **desktopLayoutPut**
> desktopLayoutPut($id, $layout)

This call update a layout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DesktopLayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the wanted layout
$layout = new \Swagger\Client\Model\LayoutDesktopDTO(); // \Swagger\Client\Model\LayoutDesktopDTO | New data of layout

try {
    $apiInstance->desktopLayoutPut($id, $layout);
} catch (Exception $e) {
    echo 'Exception when calling DesktopLayoutApi->desktopLayoutPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the wanted layout |
 **layout** | [**\Swagger\Client\Model\LayoutDesktopDTO**](../Model/LayoutDesktopDTO.md)| New data of layout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

