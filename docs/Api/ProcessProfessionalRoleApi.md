# Swagger\Client\ProcessProfessionalRoleApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processProfessionalRoleGetUsersForProfessionalRoleSelection**](ProcessProfessionalRoleApi.md#processProfessionalRoleGetUsersForProfessionalRoleSelection) | **GET** /api/ProcessProfessionalRoleInfo/{professionalRoleId}/{processId} | This call returns the users associated with a professional role of process
[**processProfessionalRoleSetUsersForProfessionalRole**](ProcessProfessionalRoleApi.md#processProfessionalRoleSetUsersForProfessionalRole) | **POST** /api/ProcessProfessionalRoleInfo/{professionalRoleId}/{processId}/{userId} | This call inserts a new professional role associated with a process


# **processProfessionalRoleGetUsersForProfessionalRoleSelection**
> \Swagger\Client\Model\UserCompleteDTO[] processProfessionalRoleGetUsersForProfessionalRoleSelection($process_id, $professional_role_id)

This call returns the users associated with a professional role of process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessProfessionalRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process Identifier
$professional_role_id = 56; // int | Professional Role Idenfier

try {
    $result = $apiInstance->processProfessionalRoleGetUsersForProfessionalRoleSelection($process_id, $professional_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessProfessionalRoleApi->processProfessionalRoleGetUsersForProfessionalRoleSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process Identifier |
 **professional_role_id** | **int**| Professional Role Idenfier |

### Return type

[**\Swagger\Client\Model\UserCompleteDTO[]**](../Model/UserCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processProfessionalRoleSetUsersForProfessionalRole**
> processProfessionalRoleSetUsersForProfessionalRole($process_id, $professional_role_id, $user_id)

This call inserts a new professional role associated with a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessProfessionalRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process Identifier
$professional_role_id = 56; // int | Porfessional Role Idenfier
$user_id = 56; // int | User Identifier

try {
    $apiInstance->processProfessionalRoleSetUsersForProfessionalRole($process_id, $professional_role_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling ProcessProfessionalRoleApi->processProfessionalRoleSetUsersForProfessionalRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process Identifier |
 **professional_role_id** | **int**| Porfessional Role Idenfier |
 **user_id** | **int**| User Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

