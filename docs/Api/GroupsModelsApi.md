# Swagger\Client\GroupsModelsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupsModelsDeleteGroupModel**](GroupsModelsApi.md#groupsModelsDeleteGroupModel) | **DELETE** /api/ModelsGroups/{id} | This call deletes a group model
[**groupsModelsGetGroupsModels**](GroupsModelsApi.md#groupsModelsGetGroupsModels) | **GET** /api/ModelsGroups | This call returns the groups models on user connected
[**groupsModelsUpdateModel**](GroupsModelsApi.md#groupsModelsUpdateModel) | **PUT** /api/ModelsGroups/{id} | This call updates a model group
[**groupsModelsWriteGroupModel**](GroupsModelsApi.md#groupsModelsWriteGroupModel) | **POST** /api/ModelsGroups | This call adds new group model


# **groupsModelsDeleteGroupModel**
> groupsModelsDeleteGroupModel($id)

This call deletes a group model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GroupsModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the group model

try {
    $apiInstance->groupsModelsDeleteGroupModel($id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsModelsApi->groupsModelsDeleteGroupModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the group model |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsModelsGetGroupsModels**
> \Swagger\Client\Model\GroupModelDTO[] groupsModelsGetGroupsModels()

This call returns the groups models on user connected

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GroupsModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->groupsModelsGetGroupsModels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsModelsApi->groupsModelsGetGroupsModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GroupModelDTO[]**](../Model/GroupModelDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsModelsUpdateModel**
> groupsModelsUpdateModel($id, $group_model_name)

This call updates a model group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GroupsModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the group model
$group_model_name = "group_model_name_example"; // string | Name to update

try {
    $apiInstance->groupsModelsUpdateModel($id, $group_model_name);
} catch (Exception $e) {
    echo 'Exception when calling GroupsModelsApi->groupsModelsUpdateModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the group model |
 **group_model_name** | **string**| Name to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsModelsWriteGroupModel**
> groupsModelsWriteGroupModel($group_model_dto)

This call adds new group model

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\GroupsModelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_model_dto = new \Swagger\Client\Model\GroupModelDTO(); // \Swagger\Client\Model\GroupModelDTO | Data of group model

try {
    $apiInstance->groupsModelsWriteGroupModel($group_model_dto);
} catch (Exception $e) {
    echo 'Exception when calling GroupsModelsApi->groupsModelsWriteGroupModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_model_dto** | [**\Swagger\Client\Model\GroupModelDTO**](../Model/GroupModelDTO.md)| Data of group model |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

