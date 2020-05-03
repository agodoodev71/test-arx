# Swagger\Client\ViewsPermissionsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewsPermissionsGetPermissionByView**](ViewsPermissionsApi.md#viewsPermissionsGetPermissionByView) | **GET** /api/ViewsPermissions/{viewId} | This call returns all permissions for a view
[**viewsPermissionsWritePermissionByView**](ViewsPermissionsApi.md#viewsPermissionsWritePermissionByView) | **PUT** /api/ViewsPermissions/{viewId} | This call writes permissions for a view
[**viewsPermissionsWritePermissionByView_0**](ViewsPermissionsApi.md#viewsPermissionsWritePermissionByView_0) | **POST** /api/ViewsPermissions/{viewId} | This call writes permissions for a view


# **viewsPermissionsGetPermissionByView**
> \Swagger\Client\Model\PermissionsDTO viewsPermissionsGetPermissionByView($view_id)

This call returns all permissions for a view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view_id = "view_id_example"; // string | View identifier

try {
    $result = $apiInstance->viewsPermissionsGetPermissionByView($view_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsPermissionsApi->viewsPermissionsGetPermissionByView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view_id** | **string**| View identifier |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsPermissionsWritePermissionByView**
> viewsPermissionsWritePermissionByView($view_id, $permissions)

This call writes permissions for a view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view_id = "view_id_example"; // string | View identifier
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | Permissions to set

try {
    $apiInstance->viewsPermissionsWritePermissionByView($view_id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling ViewsPermissionsApi->viewsPermissionsWritePermissionByView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view_id** | **string**| View identifier |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| Permissions to set |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsPermissionsWritePermissionByView_0**
> viewsPermissionsWritePermissionByView_0($view_id, $permissions)

This call writes permissions for a view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view_id = "view_id_example"; // string | View identifier
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | Permissions to set

try {
    $apiInstance->viewsPermissionsWritePermissionByView_0($view_id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling ViewsPermissionsApi->viewsPermissionsWritePermissionByView_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view_id** | **string**| View identifier |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| Permissions to set |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

