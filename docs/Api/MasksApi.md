# Swagger\Client\MasksApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**masksCloneMask**](MasksApi.md#masksCloneMask) | **POST** /api/Masks/{id}/Clone | This call clones a mask
[**masksDelete**](MasksApi.md#masksDelete) | **DELETE** /api/Masks/{id} | This call deletes a mask
[**masksGetById**](MasksApi.md#masksGetById) | **GET** /api/Masks/{id} | This call returns a mask by its identifier
[**masksGetDocumentTypesByMaskId**](MasksApi.md#masksGetDocumentTypesByMaskId) | **GET** /api/Masks/{maskId}/DocumentTypes | This call returns all possibile Document Types for a mask
[**masksGetDocumentTypesByMaskIdOld**](MasksApi.md#masksGetDocumentTypesByMaskIdOld) | **GET** /api/Masks/{maskId}/DocumentTypes/{businessUnitCode} | This call returns all possibile Document Types for a mask
[**masksGetDocumentTypesTreeByMaskId**](MasksApi.md#masksGetDocumentTypesTreeByMaskId) | **GET** /api/Masks/{maskId}/DocumentTypesTree | This call returns all possibile Document Types for a mask (tree format)
[**masksGetDocumentTypesTreeByMaskIdOld**](MasksApi.md#masksGetDocumentTypesTreeByMaskIdOld) | **GET** /api/Masks/{maskId}/DocumentTypesTree/{businessUnitCode} | This call returns all possibile Document Types for a mask (tree format)
[**masksGetFieldsByClasse**](MasksApi.md#masksGetFieldsByClasse) | **GET** /api/Masks/fieldsbydocumenttype/{systemid} | This call returns possibile fields by a Document Type
[**masksGetList**](MasksApi.md#masksGetList) | **GET** /api/Masks | This call returns all masks
[**masksGetPermission**](MasksApi.md#masksGetPermission) | **GET** /api/Masks/{maskId}/Permissions | This call returns the permissions for a mask
[**masksGetProfileForClasseBox**](MasksApi.md#masksGetProfileForClasseBox) | **POST** /api/Masks/byclassadditionalfield/{additionalFieldName}/profileSchema | This calls returns the profile schema for a mask associated to a class additional field
[**masksGetProfileSchemaByMaskId**](MasksApi.md#masksGetProfileSchemaByMaskId) | **GET** /api/Masks/{maskId}/profileSchema | This call returns the profile schema by a mask
[**masksGetRoot**](MasksApi.md#masksGetRoot) | **GET** /api/Masks/root | This call returns the root mask
[**masksInserMask**](MasksApi.md#masksInserMask) | **POST** /api/Masks | This call inserts a new mask
[**masksPost**](MasksApi.md#masksPost) | **POST** /api/Masks/{maskId}/Profile | This call executes a new profiling
[**masksSetPermission**](MasksApi.md#masksSetPermission) | **POST** /api/Masks/{maskId}/Permissions | This call updates the permissions for a mask
[**masksUpdateMask**](MasksApi.md#masksUpdateMask) | **PUT** /api/Masks/{id} | This call updates a mask


# **masksCloneMask**
> masksCloneMask($id, $clone_options)

This call clones a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier of the mask
$clone_options = new \Swagger\Client\Model\MaskCloneOptionsDto(); // \Swagger\Client\Model\MaskCloneOptionsDto | Options to use for cloning

try {
    $apiInstance->masksCloneMask($id, $clone_options);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksCloneMask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the mask |
 **clone_options** | [**\Swagger\Client\Model\MaskCloneOptionsDto**](../Model/MaskCloneOptionsDto.md)| Options to use for cloning |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksDelete**
> object masksDelete($id)

This call deletes a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier of the mask

try {
    $result = $apiInstance->masksDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the mask |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetById**
> \Swagger\Client\Model\MaskDTO masksGetById($id)

This call returns a mask by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier of the mask

try {
    $result = $apiInstance->masksGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the mask |

### Return type

[**\Swagger\Client\Model\MaskDTO**](../Model/MaskDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetDocumentTypesByMaskId**
> \Swagger\Client\Model\DocumentTypeBaseDTO[] masksGetDocumentTypesByMaskId($mask_id, $business_unit_code)

This call returns all possibile Document Types for a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask
$business_unit_code = "business_unit_code_example"; // string | Business Unit Code

try {
    $result = $apiInstance->masksGetDocumentTypesByMaskId($mask_id, $business_unit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetDocumentTypesByMaskId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |
 **business_unit_code** | **string**| Business Unit Code | [optional]

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseDTO[]**](../Model/DocumentTypeBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetDocumentTypesByMaskIdOld**
> \Swagger\Client\Model\DocumentTypeBaseDTO[] masksGetDocumentTypesByMaskIdOld($mask_id, $business_unit_code)

This call returns all possibile Document Types for a mask

This method is deprecated. Use api/Masks/{maskId}/DocumentTypes?businessunitcode={businessunitcode}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask
$business_unit_code = "business_unit_code_example"; // string | Business Unit Code

try {
    $result = $apiInstance->masksGetDocumentTypesByMaskIdOld($mask_id, $business_unit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetDocumentTypesByMaskIdOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |
 **business_unit_code** | **string**| Business Unit Code |

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseDTO[]**](../Model/DocumentTypeBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetDocumentTypesTreeByMaskId**
> \Swagger\Client\Model\DocumentTypeBaseTreeDTO masksGetDocumentTypesTreeByMaskId($mask_id, $business_unit_code)

This call returns all possibile Document Types for a mask (tree format)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask
$business_unit_code = "business_unit_code_example"; // string | Business Unit Code

try {
    $result = $apiInstance->masksGetDocumentTypesTreeByMaskId($mask_id, $business_unit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetDocumentTypesTreeByMaskId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |
 **business_unit_code** | **string**| Business Unit Code | [optional]

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseTreeDTO**](../Model/DocumentTypeBaseTreeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetDocumentTypesTreeByMaskIdOld**
> \Swagger\Client\Model\DocumentTypeBaseTreeDTO masksGetDocumentTypesTreeByMaskIdOld($mask_id, $business_unit_code)

This call returns all possibile Document Types for a mask (tree format)

This method is deprecated. Use api/Masks/{maskId}/DocumentTypesTree?businessunitcode={businessunitcode}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask
$business_unit_code = "business_unit_code_example"; // string | Business Unit Code

try {
    $result = $apiInstance->masksGetDocumentTypesTreeByMaskIdOld($mask_id, $business_unit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetDocumentTypesTreeByMaskIdOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |
 **business_unit_code** | **string**| Business Unit Code |

### Return type

[**\Swagger\Client\Model\DocumentTypeBaseTreeDTO**](../Model/DocumentTypeBaseTreeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetFieldsByClasse**
> \Swagger\Client\Model\MaskDetailDTO[] masksGetFieldsByClasse($systemid)

This call returns possibile fields by a Document Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$systemid = 56; // int | Document Type Identifier

try {
    $result = $apiInstance->masksGetFieldsByClasse($systemid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetFieldsByClasse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **systemid** | **int**| Document Type Identifier |

### Return type

[**\Swagger\Client\Model\MaskDetailDTO[]**](../Model/MaskDetailDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetList**
> \Swagger\Client\Model\MaskDTO[] masksGetList()

This call returns all masks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->masksGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MaskDTO[]**](../Model/MaskDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetPermission**
> \Swagger\Client\Model\PermissionsDTO masksGetPermission($mask_id)

This call returns the permissions for a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask

try {
    $result = $apiInstance->masksGetPermission($mask_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetProfileForClasseBox**
> \Swagger\Client\Model\MaskProfileSchemaDTO masksGetProfileForClasseBox($additional_field_name, $profile)

This calls returns the profile schema for a mask associated to a class additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$additional_field_name = "additional_field_name_example"; // string | Additional name
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->masksGetProfileForClasseBox($additional_field_name, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetProfileForClasseBox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **additional_field_name** | **string**| Additional name |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetProfileSchemaByMaskId**
> \Swagger\Client\Model\MaskProfileSchemaDTO masksGetProfileSchemaByMaskId($mask_id)

This call returns the profile schema by a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask

try {
    $result = $apiInstance->masksGetProfileSchemaByMaskId($mask_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetProfileSchemaByMaskId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |

### Return type

[**\Swagger\Client\Model\MaskProfileSchemaDTO**](../Model/MaskProfileSchemaDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksGetRoot**
> \Swagger\Client\Model\MaskDTO masksGetRoot()

This call returns the root mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->masksGetRoot();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksGetRoot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\MaskDTO**](../Model/MaskDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksInserMask**
> masksInserMask($mask)

This call inserts a new mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask = new \Swagger\Client\Model\MaskDTO(); // \Swagger\Client\Model\MaskDTO | 

try {
    $apiInstance->masksInserMask($mask);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksInserMask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask** | [**\Swagger\Client\Model\MaskDTO**](../Model/MaskDTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksPost**
> \Swagger\Client\Model\ProfileResultDTO masksPost($mask_id, $profile)

This call executes a new profiling

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask
$profile = new \Swagger\Client\Model\ProfileDTO(); // \Swagger\Client\Model\ProfileDTO | 

try {
    $result = $apiInstance->masksPost($mask_id, $profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |
 **profile** | [**\Swagger\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ProfileResultDTO**](../Model/ProfileResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksSetPermission**
> masksSetPermission($mask_id, $permissions)

This call updates the permissions for a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mask_id = "mask_id_example"; // string | Identifier of the mask
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | Permissions to update

try {
    $apiInstance->masksSetPermission($mask_id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksSetPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mask_id** | **string**| Identifier of the mask |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| Permissions to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **masksUpdateMask**
> \Swagger\Client\Model\MaskDTO masksUpdateMask($id, $mask)

This call updates a mask

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\MasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Identifier of the mask
$mask = new \Swagger\Client\Model\MaskDTO(); // \Swagger\Client\Model\MaskDTO | 

try {
    $result = $apiInstance->masksUpdateMask($id, $mask);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MasksApi->masksUpdateMask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier of the mask |
 **mask** | [**\Swagger\Client\Model\MaskDTO**](../Model/MaskDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MaskDTO**](../Model/MaskDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

