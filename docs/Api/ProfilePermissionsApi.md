# Swagger\Client\ProfilePermissionsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**profilePermissionsGetPermissionByDocNumber**](ProfilePermissionsApi.md#profilePermissionsGetPermissionByDocNumber) | **GET** /api/ProfilePermissions/{docnumber} | This call returns all additional or exclusive permissions by document identifier
[**profilePermissionsSetPermission**](ProfilePermissionsApi.md#profilePermissionsSetPermission) | **POST** /api/ProfilePermissions/{docnumber}/Permissions | This call save all additional or exclusive permissions


# **profilePermissionsGetPermissionByDocNumber**
> \Swagger\Client\Model\SingleProfilePermissionsDTO profilePermissionsGetPermissionByDocNumber($docnumber)

This call returns all additional or exclusive permissions by document identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilePermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier

try {
    $result = $apiInstance->profilePermissionsGetPermissionByDocNumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfilePermissionsApi->profilePermissionsGetPermissionByDocNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |

### Return type

[**\Swagger\Client\Model\SingleProfilePermissionsDTO**](../Model/SingleProfilePermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profilePermissionsSetPermission**
> profilePermissionsSetPermission($docnumber, $permissions)

This call save all additional or exclusive permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProfilePermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier
$permissions = new \Swagger\Client\Model\SingleProfilePermissionsDTO(); // \Swagger\Client\Model\SingleProfilePermissionsDTO | Permissions to save

try {
    $apiInstance->profilePermissionsSetPermission($docnumber, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling ProfilePermissionsApi->profilePermissionsSetPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |
 **permissions** | [**\Swagger\Client\Model\SingleProfilePermissionsDTO**](../Model/SingleProfilePermissionsDTO.md)| Permissions to save |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

