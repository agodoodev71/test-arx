# Swagger\Client\ViewsBuilderApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**viewsBuilderChangeShowFields**](ViewsBuilderApi.md#viewsBuilderChangeShowFields) | **PUT** /api/ViewsBuilder/showFields/{viewId}/{showFields} | This call updates &#39;show field&#39; in view execution
[**viewsBuilderEditView**](ViewsBuilderApi.md#viewsBuilderEditView) | **PUT** /api/ViewsBuilder | This call updates a view
[**viewsBuilderEditView_0**](ViewsBuilderApi.md#viewsBuilderEditView_0) | **POST** /api/ViewsBuilder | This call updates a view
[**viewsBuilderGetSearch**](ViewsBuilderApi.md#viewsBuilderGetSearch) | **GET** /api/ViewsBuilder/search/{documentType} | This call returns a new search by a document type
[**viewsBuilderGetSearch_0**](ViewsBuilderApi.md#viewsBuilderGetSearch_0) | **GET** /api/ViewsBuilder/search/{documentType}/{tipo2}/{tipo3} | This call returns a new search by a document type
[**viewsBuilderGetSelect**](ViewsBuilderApi.md#viewsBuilderGetSelect) | **GET** /api/ViewsBuilder/select/{documentType} | This call returns a new select by a document type
[**viewsBuilderGetSelect_0**](ViewsBuilderApi.md#viewsBuilderGetSelect_0) | **GET** /api/ViewsBuilder/select/{documentType}/{tipo2}/{tipo3} | This call returns a new select by a document type
[**viewsBuilderGetViewForEdit**](ViewsBuilderApi.md#viewsBuilderGetViewForEdit) | **GET** /api/ViewsBuilder/{viewId} | This call returns a view for edit purpose


# **viewsBuilderChangeShowFields**
> viewsBuilderChangeShowFields($view_id, $show_fields)

This call updates 'show field' in view execution

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view_id = "view_id_example"; // string | View identifier
$show_fields = true; // bool | Value for the flag

try {
    $apiInstance->viewsBuilderChangeShowFields($view_id, $show_fields);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderChangeShowFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view_id** | **string**| View identifier |
 **show_fields** | **bool**| Value for the flag |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderEditView**
> \Swagger\Client\Model\ViewEditDTO viewsBuilderEditView($viewedit)

This call updates a view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$viewedit = new \Swagger\Client\Model\ViewEditDTO(); // \Swagger\Client\Model\ViewEditDTO | 

try {
    $result = $apiInstance->viewsBuilderEditView($viewedit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderEditView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **viewedit** | [**\Swagger\Client\Model\ViewEditDTO**](../Model/ViewEditDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ViewEditDTO**](../Model/ViewEditDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderEditView_0**
> \Swagger\Client\Model\ViewEditDTO viewsBuilderEditView_0($viewedit)

This call updates a view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$viewedit = new \Swagger\Client\Model\ViewEditDTO(); // \Swagger\Client\Model\ViewEditDTO | 

try {
    $result = $apiInstance->viewsBuilderEditView_0($viewedit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderEditView_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **viewedit** | [**\Swagger\Client\Model\ViewEditDTO**](../Model/ViewEditDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ViewEditDTO**](../Model/ViewEditDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderGetSearch**
> \Swagger\Client\Model\SearchDTO viewsBuilderGetSearch($document_type)

This call returns a new search by a document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document type identifer

try {
    $result = $apiInstance->viewsBuilderGetSearch($document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderGetSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Document type identifer |

### Return type

[**\Swagger\Client\Model\SearchDTO**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderGetSearch_0**
> \Swagger\Client\Model\SearchDTO viewsBuilderGetSearch_0($document_type, $tipo2, $tipo3)

This call returns a new search by a document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Identifier of first level document type
$tipo2 = 56; // int | Identifier of secodn level document type
$tipo3 = 56; // int | Identifier of third level document type

try {
    $result = $apiInstance->viewsBuilderGetSearch_0($document_type, $tipo2, $tipo3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderGetSearch_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Identifier of first level document type |
 **tipo2** | **int**| Identifier of secodn level document type |
 **tipo3** | **int**| Identifier of third level document type |

### Return type

[**\Swagger\Client\Model\SearchDTO**](../Model/SearchDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderGetSelect**
> \Swagger\Client\Model\SelectDTO viewsBuilderGetSelect($document_type)

This call returns a new select by a document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Document type identifier

try {
    $result = $apiInstance->viewsBuilderGetSelect($document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderGetSelect: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Document type identifier |

### Return type

[**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderGetSelect_0**
> \Swagger\Client\Model\SelectDTO viewsBuilderGetSelect_0($document_type, $tipo2, $tipo3)

This call returns a new select by a document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | Identifier of first level document type
$tipo2 = 56; // int | Identifier of secodn level document type
$tipo3 = 56; // int | Identifier of third level document type

try {
    $result = $apiInstance->viewsBuilderGetSelect_0($document_type, $tipo2, $tipo3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderGetSelect_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**| Identifier of first level document type |
 **tipo2** | **int**| Identifier of secodn level document type |
 **tipo3** | **int**| Identifier of third level document type |

### Return type

[**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **viewsBuilderGetViewForEdit**
> \Swagger\Client\Model\ViewEditDTO viewsBuilderGetViewForEdit($view_id)

This call returns a view for edit purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ViewsBuilderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$view_id = "view_id_example"; // string | View identifier

try {
    $result = $apiInstance->viewsBuilderGetViewForEdit($view_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewsBuilderApi->viewsBuilderGetViewForEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **view_id** | **string**| View identifier |

### Return type

[**\Swagger\Client\Model\ViewEditDTO**](../Model/ViewEditDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

