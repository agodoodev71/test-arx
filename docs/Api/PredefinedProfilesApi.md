# Swagger\Client\PredefinedProfilesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**predefinedProfilesClone**](PredefinedProfilesApi.md#predefinedProfilesClone) | **POST** /api/PredefinedProfiles/{predefinedProfileId}/clone | This call clones a predefined profile
[**predefinedProfilesDeletePredefinedProfile**](PredefinedProfilesApi.md#predefinedProfilesDeletePredefinedProfile) | **DELETE** /api/PredefinedProfiles/{predefinedProfileId} | This call deletes a predefined profile
[**predefinedProfilesGet**](PredefinedProfilesApi.md#predefinedProfilesGet) | **GET** /api/PredefinedProfiles | This call returns all the predefined profiles
[**predefinedProfilesGetById**](PredefinedProfilesApi.md#predefinedProfilesGetById) | **GET** /api/PredefinedProfiles/{predefinedProfileId} | This call returns a predefined profile by its id
[**predefinedProfilesGetNew**](PredefinedProfilesApi.md#predefinedProfilesGetNew) | **GET** /api/PredefinedProfiles/new | This call returns a new predefined profile template
[**predefinedProfilesGetProfileSchemaByPredefinedProfileId**](PredefinedProfilesApi.md#predefinedProfilesGetProfileSchemaByPredefinedProfileId) | **POST** /api/PredefinedProfiles/{predefinedProfileId}/profileSchema | This call returns the profile schema by a predefined profile
[**predefinedProfilesPermissionsById**](PredefinedProfilesApi.md#predefinedProfilesPermissionsById) | **GET** /api/PredefinedProfiles/{predefinedProfileId}/Permissions | This call returns the permissions for a predefiend profile
[**predefinedProfilesUpdatePredefinedProfile**](PredefinedProfilesApi.md#predefinedProfilesUpdatePredefinedProfile) | **PUT** /api/PredefinedProfiles/{predefinedProfileId} | This call updates a predefined profile
[**predefinedProfilesWritePermissionsById**](PredefinedProfilesApi.md#predefinedProfilesWritePermissionsById) | **POST** /api/PredefinedProfiles/{predefinedProfileId}/Permissions | This call updates permissions for a predefined profile
[**predefinedProfilesWritePredefinedProfile**](PredefinedProfilesApi.md#predefinedProfilesWritePredefinedProfile) | **POST** /api/PredefinedProfiles | This call creates a predefined profile


# **predefinedProfilesClone**
> predefinedProfilesClone($predefined_profile_id, $name)

This call clones a predefined profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier to clone
$name = "name_example"; // string | Name of the cloned predefined profile

try {
    $apiInstance->predefinedProfilesClone($predefined_profile_id, $name);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier to clone |
 **name** | **string**| Name of the cloned predefined profile |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesDeletePredefinedProfile**
> predefinedProfilesDeletePredefinedProfile($predefined_profile_id)

This call deletes a predefined profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier

try {
    $apiInstance->predefinedProfilesDeletePredefinedProfile($predefined_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesDeletePredefinedProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesGet**
> \Swagger\Client\Model\PredefinedProfileDTO[] predefinedProfilesGet()

This call returns all the predefined profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->predefinedProfilesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PredefinedProfileDTO[]**](../Model/PredefinedProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesGetById**
> \Swagger\Client\Model\PredefinedProfileDTO predefinedProfilesGetById($predefined_profile_id)

This call returns a predefined profile by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier

try {
    $result = $apiInstance->predefinedProfilesGetById($predefined_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier |

### Return type

[**\Swagger\Client\Model\PredefinedProfileDTO**](../Model/PredefinedProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesGetNew**
> \Swagger\Client\Model\PredefinedProfileDTO predefinedProfilesGetNew()

This call returns a new predefined profile template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->predefinedProfilesGetNew();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesGetNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\PredefinedProfileDTO**](../Model/PredefinedProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesGetProfileSchemaByPredefinedProfileId**
> \Swagger\Client\Model\PredefinedProfileSchemaDTO predefinedProfilesGetProfileSchemaByPredefinedProfileId($predefined_profile_id, $profile)

This call returns the profile schema by a predefined profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->predefinedProfilesGetProfileSchemaByPredefinedProfileId($predefined_profile_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesGetProfileSchemaByPredefinedProfileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PredefinedProfileSchemaDTO**](../Model/PredefinedProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesPermissionsById**
> \Swagger\Client\Model\PermissionsDTO predefinedProfilesPermissionsById($predefined_profile_id)

This call returns the permissions for a predefiend profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier

try {
    $result = $apiInstance->predefinedProfilesPermissionsById($predefined_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesPermissionsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesUpdatePredefinedProfile**
> predefinedProfilesUpdatePredefinedProfile($predefined_profile_id, $predefinedprofiledto)

This call updates a predefined profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier
$predefinedprofiledto = new \Swagger\Client\Model\PredefinedProfileDTO(); // \Swagger\Client\Model\PredefinedProfileDTO | 

try {
    $apiInstance->predefinedProfilesUpdatePredefinedProfile($predefined_profile_id, $predefinedprofiledto);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesUpdatePredefinedProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier |
 **predefinedprofiledto** | [**\Swagger\Client\Model\PredefinedProfileDTO**](../Model/PredefinedProfileDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesWritePermissionsById**
> predefinedProfilesWritePermissionsById($predefined_profile_id, $permissions)

This call updates permissions for a predefined profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefined_profile_id = 56; // int | Predefined profile identifier
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | Permissions to update

try {
    $apiInstance->predefinedProfilesWritePermissionsById($predefined_profile_id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesWritePermissionsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefined_profile_id** | **int**| Predefined profile identifier |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| Permissions to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **predefinedProfilesWritePredefinedProfile**
> predefinedProfilesWritePredefinedProfile($predefinedprofiledto)

This call creates a predefined profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\PredefinedProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$predefinedprofiledto = new \Swagger\Client\Model\PredefinedProfileDTO(); // \Swagger\Client\Model\PredefinedProfileDTO | 

try {
    $apiInstance->predefinedProfilesWritePredefinedProfile($predefinedprofiledto);
} catch (Exception $e) {
    echo 'Exception when calling PredefinedProfilesApi->predefinedProfilesWritePredefinedProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **predefinedprofiledto** | [**\Swagger\Client\Model\PredefinedProfileDTO**](../Model/PredefinedProfileDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

