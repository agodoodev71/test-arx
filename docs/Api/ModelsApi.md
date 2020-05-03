# Swagger\Client\ModelsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**modelsCancelPostArchiveModelEdit**](ModelsApi.md#modelsCancelPostArchiveModelEdit) | **PUT** /api/Models/canceledit/{docnumber} | This call allows to cancel the editing of a document created by model profilation in order to generate the first revision of the document itself
[**modelsDelete**](ModelsApi.md#modelsDelete) | **DELETE** /api/Models/{id} | This call deletes a model
[**modelsGetForModelPreviewTemplate**](ModelsApi.md#modelsGetForModelPreviewTemplate) | **GET** /api/Models/previewTemplate/{id} | This call returns the template preview file for a model
[**modelsGetForModelTemplate**](ModelsApi.md#modelsGetForModelTemplate) | **GET** /api/Models/template/{modelId} | This call retrieves the template file for a model
[**modelsGetModelById**](ModelsApi.md#modelsGetModelById) | **GET** /api/Models/{id} | This call returns model
[**modelsGetModelsList**](ModelsApi.md#modelsGetModelsList) | **GET** /api/Models | This call allows the retrieval of the default profile for archiving
[**modelsGetPermission**](ModelsApi.md#modelsGetPermission) | **GET** /api/Models/{id}/Permissions | This call returns permissions of model
[**modelsGetProfileSchemaByModelId**](ModelsApi.md#modelsGetProfileSchemaByModelId) | **GET** /api/Models/{modelId}/profileSchema | This call returns a profile schema for a model
[**modelsInsertModel**](ModelsApi.md#modelsInsertModel) | **POST** /api/Models | This call inserts a model
[**modelsPost**](ModelsApi.md#modelsPost) | **POST** /api/Models/{modelId}/Profile | This call executes a new profiling by model
[**modelsSetPermission**](ModelsApi.md#modelsSetPermission) | **POST** /api/Models/{id}/Permissions | This call sets model&#39;s permissions
[**modelsUpdateModel**](ModelsApi.md#modelsUpdateModel) | **PUT** /api/Models/{id} | This call updates a model


# **modelsCancelPostArchiveModelEdit**
> modelsCancelPostArchiveModelEdit($docnumber)

This call allows to cancel the editing of a document created by model profilation in order to generate the first revision of the document itself

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $apiInstance->modelsCancelPostArchiveModelEdit($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsCancelPostArchiveModelEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsDelete**
> object modelsDelete($id)

This call deletes a model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Model Identifier

try {
    $result = $apiInstance->modelsDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Model Identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetForModelPreviewTemplate**
> object modelsGetForModelPreviewTemplate($id)

This call returns the template preview file for a model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Model Identifier

try {
    $result = $apiInstance->modelsGetForModelPreviewTemplate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsGetForModelPreviewTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Model Identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetForModelTemplate**
> object modelsGetForModelTemplate($model_id)

This call retrieves the template file for a model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Model Identifier

try {
    $result = $apiInstance->modelsGetForModelTemplate($model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsGetForModelTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_id** | **int**| Model Identifier |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetModelById**
> \Swagger\Client\Model\ModelConfigurationDTO modelsGetModelById($id)

This call returns model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Model Identifier

try {
    $result = $apiInstance->modelsGetModelById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsGetModelById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Model Identifier |

### Return type

[**\Swagger\Client\Model\ModelConfigurationDTO**](../Model/ModelConfigurationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetModelsList**
> \Swagger\Client\Model\ModelDTO[] modelsGetModelsList()

This call allows the retrieval of the default profile for archiving

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->modelsGetModelsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsGetModelsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ModelDTO[]**](../Model/ModelDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetPermission**
> \Swagger\Client\Model\PermissionsDTO modelsGetPermission($id)

This call returns permissions of model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Model Identifier

try {
    $result = $apiInstance->modelsGetPermission($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsGetPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Model Identifier |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsGetProfileSchemaByModelId**
> \Swagger\Client\Model\ModelProfileSchemaDTO modelsGetProfileSchemaByModelId($model_id)

This call returns a profile schema for a model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Model Identifier

try {
    $result = $apiInstance->modelsGetProfileSchemaByModelId($model_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsGetProfileSchemaByModelId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_id** | **int**| Model Identifier |

### Return type

[**\Swagger\Client\Model\ModelProfileSchemaDTO**](../Model/ModelProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsInsertModel**
> modelsInsertModel($model)

This call inserts a model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model = new \Swagger\Client\Model\ModelConfigurationDTO(); // \Swagger\Client\Model\ModelConfigurationDTO | 

try {
    $apiInstance->modelsInsertModel($model);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsInsertModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\ModelConfigurationDTO**](../Model/ModelConfigurationDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsPost**
> \Swagger\Client\Model\ProfileResultDTO modelsPost($model_id, $profile)

This call executes a new profiling by model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$model_id = 56; // int | Model Identifier
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->modelsPost($model_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model_id** | **int**| Model Identifier |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsSetPermission**
> modelsSetPermission($id, $permissions)

This call sets model's permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Model Identifier
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | Permissions data

try {
    $apiInstance->modelsSetPermission($id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsSetPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Model Identifier |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| Permissions data |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modelsUpdateModel**
> modelsUpdateModel($id, $model)

This call updates a model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Model Identifier
$model = new \Swagger\Client\Model\ModelConfigurationDTO(); // \Swagger\Client\Model\ModelConfigurationDTO | 

try {
    $apiInstance->modelsUpdateModel($id, $model);
} catch (Exception $e) {
    echo 'Exception when calling ModelsApi->modelsUpdateModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Model Identifier |
 **model** | [**\Swagger\Client\Model\ModelConfigurationDTO**](../Model/ModelConfigurationDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

