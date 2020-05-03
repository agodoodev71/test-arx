# Swagger\Client\BindersApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bindersAddProfilesToBinder**](BindersApi.md#bindersAddProfilesToBinder) | **POST** /api/Binders/addprofiles | This call adds specified profiles to a binder container
[**bindersBinderComboValues**](BindersApi.md#bindersBinderComboValues) | **PUT** /api/Binders/combofieldvalues | This call updates the possible values for a combo custom binder field
[**bindersBinderCustomFieldsTranslations**](BindersApi.md#bindersBinderCustomFieldsTranslations) | **PUT** /api/Binders/customfieldsbytype | This call updates custom field for a binder type
[**bindersBinderCustomFieldsTranslations_0**](BindersApi.md#bindersBinderCustomFieldsTranslations_0) | **PUT** /api/Binders/customFieldsTranslations/{customFieldId} | This call updates translation custom field for a binder type
[**bindersCanInsertNewBinderType**](BindersApi.md#bindersCanInsertNewBinderType) | **GET** /api/Binders/CanInsertNewType | This call returns if the connected user can insert a new binder type
[**bindersDeleteBinderType**](BindersApi.md#bindersDeleteBinderType) | **DELETE** /api/Binders/type/{binderTypeId} | This call creates delete a binder type
[**bindersDeleteById**](BindersApi.md#bindersDeleteById) | **DELETE** /api/Binders/{binderId} | This call deletes a binder by the identifier
[**bindersGetBinderComboValues**](BindersApi.md#bindersGetBinderComboValues) | **GET** /api/Binders/combofieldvalues/{comboFieldId} | This call returns the possible combo value of a binder combo custom field by field id
[**bindersGetBinderCustomFields**](BindersApi.md#bindersGetBinderCustomFields) | **GET** /api/Binders/customfieldsbytype/{binderType} | This call returns the custom fields by binder type
[**bindersGetBinderCustomFieldsTranslations**](BindersApi.md#bindersGetBinderCustomFieldsTranslations) | **GET** /api/Binders/customFieldsTranslations/{customFieldId} | This call returns translation custom field for a binder type
[**bindersGetBinderPermission**](BindersApi.md#bindersGetBinderPermission) | **GET** /api/Binders/binderpermission/{binderId} | This call returns the users permissions for a binder
[**bindersGetBinderStateForVisualization**](BindersApi.md#bindersGetBinderStateForVisualization) | **GET** /api/Binders/visualizationstates | This call returns the possible states for binder visualization
[**bindersGetBinderStates**](BindersApi.md#bindersGetBinderStates) | **GET** /api/Binders/states | This call returns the possible states for a binder
[**bindersGetBinderTypeById**](BindersApi.md#bindersGetBinderTypeById) | **GET** /api/Binders/type/{binderTypeId} | This call returns a binder type by its identifier
[**bindersGetBinderTypePermission**](BindersApi.md#bindersGetBinderTypePermission) | **GET** /api/Binders/bindertypepermission/{binderTypeId} | This call returns the permission for a binder type
[**bindersGetBindersFieldsByType**](BindersApi.md#bindersGetBindersFieldsByType) | **GET** /api/Binders/binderfields/{binderType} | This call returns the binder custom fields by binder type
[**bindersGetById**](BindersApi.md#bindersGetById) | **GET** /api/Binders/{id} | This call search a binder by the given identifiers
[**bindersGetByIds**](BindersApi.md#bindersGetByIds) | **POST** /api/Binders/getByIds | This call search a binder by the given identifiers
[**bindersGetByNumero**](BindersApi.md#bindersGetByNumero) | **GET** /api/Binders | This call search a binder by the given number
[**bindersGetByNumeroOld**](BindersApi.md#bindersGetByNumeroOld) | **GET** /api/Binders/number/{numero} | This call search a binder by the given number
[**bindersGetByTypeAndState**](BindersApi.md#bindersGetByTypeAndState) | **GET** /api/Binders/{type}/{state} | This call retrieve binders of the given type and state
[**bindersGetTypesOfPratiche**](BindersApi.md#bindersGetTypesOfPratiche) | **GET** /api/Binders/Type | This call returns the types of binders available
[**bindersGetUserDefaultTypeAndStateSelection**](BindersApi.md#bindersGetUserDefaultTypeAndStateSelection) | **GET** /api/Binders/defaulttypeandstate | This call returns the default type and state for the user
[**bindersInsertNewBinder**](BindersApi.md#bindersInsertNewBinder) | **POST** /api/Binders | This call adds new binder
[**bindersInsertNewBinderType**](BindersApi.md#bindersInsertNewBinderType) | **POST** /api/Binders/type | This call creates new binder type
[**bindersRemoveProfilesFromBinder**](BindersApi.md#bindersRemoveProfilesFromBinder) | **POST** /api/Binders/removeprofiles | This call removes specified profiles from a binder container
[**bindersSetBinderPermission**](BindersApi.md#bindersSetBinderPermission) | **POST** /api/Binders/binderpermission/{binderId} | This call updates permission for a binder
[**bindersSetBinderTypePermission**](BindersApi.md#bindersSetBinderTypePermission) | **POST** /api/Binders/bindertypepermission/{binderTypeId} | This call updates permission for a binder type
[**bindersSetUserDefaultTypeAndStateSelection**](BindersApi.md#bindersSetUserDefaultTypeAndStateSelection) | **POST** /api/Binders/defaulttypeandstate | This call saves the user binder type and state default
[**bindersUpdateBinderById**](BindersApi.md#bindersUpdateBinderById) | **PUT** /api/Binders/{binderId} | This call updates all binder values, also custom fields, by binder identifier
[**bindersUpdateBinderTypeById**](BindersApi.md#bindersUpdateBinderTypeById) | **PUT** /api/Binders/type | This call updates a binder type


# **bindersAddProfilesToBinder**
> bindersAddProfilesToBinder($profiles_insert_request)

This call adds specified profiles to a binder container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profiles_insert_request = new \Swagger\Client\Model\BinderProfilesInsertRequest(); // \Swagger\Client\Model\BinderProfilesInsertRequest | Request for insert profiles into the binder

try {
    $apiInstance->bindersAddProfilesToBinder($profiles_insert_request);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersAddProfilesToBinder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profiles_insert_request** | [**\Swagger\Client\Model\BinderProfilesInsertRequest**](../Model/BinderProfilesInsertRequest.md)| Request for insert profiles into the binder |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersBinderComboValues**
> bindersBinderComboValues($request)

This call updates the possible values for a combo custom binder field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\BinderComboValuesUpdateRequest(); // \Swagger\Client\Model\BinderComboValuesUpdateRequest | The update values request

try {
    $apiInstance->bindersBinderComboValues($request);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersBinderComboValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\BinderComboValuesUpdateRequest**](../Model/BinderComboValuesUpdateRequest.md)| The update values request |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersBinderCustomFieldsTranslations**
> \Swagger\Client\Model\FieldBaseDTO[] bindersBinderCustomFieldsTranslations($request)

This call updates custom field for a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\BinderTypeCustomFieldUpdateRequest(); // \Swagger\Client\Model\BinderTypeCustomFieldUpdateRequest | The update custom fields request

try {
    $result = $apiInstance->bindersBinderCustomFieldsTranslations($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersBinderCustomFieldsTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\BinderTypeCustomFieldUpdateRequest**](../Model/BinderTypeCustomFieldUpdateRequest.md)| The update custom fields request |

### Return type

[**\Swagger\Client\Model\FieldBaseDTO[]**](../Model/FieldBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersBinderCustomFieldsTranslations_0**
> bindersBinderCustomFieldsTranslations_0($custom_field_id, $request)

This call updates translation custom field for a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 56; // int | customFieldId
$request = new \Swagger\Client\Model\UpdateFieldTranslationRequest(); // \Swagger\Client\Model\UpdateFieldTranslationRequest | The update custom fields request object

try {
    $apiInstance->bindersBinderCustomFieldsTranslations_0($custom_field_id, $request);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersBinderCustomFieldsTranslations_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_field_id** | **int**| customFieldId |
 **request** | [**\Swagger\Client\Model\UpdateFieldTranslationRequest**](../Model/UpdateFieldTranslationRequest.md)| The update custom fields request object |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersCanInsertNewBinderType**
> bool bindersCanInsertNewBinderType()

This call returns if the connected user can insert a new binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bindersCanInsertNewBinderType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersCanInsertNewBinderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersDeleteBinderType**
> bindersDeleteBinderType($binder_type_id)

This call creates delete a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_type_id = 56; // int | Identifier of the binder type to delete

try {
    $apiInstance->bindersDeleteBinderType($binder_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersDeleteBinderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_type_id** | **int**| Identifier of the binder type to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersDeleteById**
> bindersDeleteById($binder_id)

This call deletes a binder by the identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_id = 56; // int | Identifier of the binder to delete

try {
    $apiInstance->bindersDeleteById($binder_id);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersDeleteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_id** | **int**| Identifier of the binder to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderComboValues**
> string[] bindersGetBinderComboValues($combo_field_id)

This call returns the possible combo value of a binder combo custom field by field id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$combo_field_id = 56; // int | The identifier of a binder combo custom field

try {
    $result = $apiInstance->bindersGetBinderComboValues($combo_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderComboValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **combo_field_id** | **int**| The identifier of a binder combo custom field |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderCustomFields**
> \Swagger\Client\Model\FieldBaseDTO[] bindersGetBinderCustomFields($binder_type)

This call returns the custom fields by binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_type = 56; // int | Binder type identifier

try {
    $result = $apiInstance->bindersGetBinderCustomFields($binder_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderCustomFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_type** | **int**| Binder type identifier |

### Return type

[**\Swagger\Client\Model\FieldBaseDTO[]**](../Model/FieldBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderCustomFieldsTranslations**
> \Swagger\Client\Model\FieldTranslation[] bindersGetBinderCustomFieldsTranslations($custom_field_id)

This call returns translation custom field for a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$custom_field_id = 56; // int | Identifier of the custm field

try {
    $result = $apiInstance->bindersGetBinderCustomFieldsTranslations($custom_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderCustomFieldsTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_field_id** | **int**| Identifier of the custm field |

### Return type

[**\Swagger\Client\Model\FieldTranslation[]**](../Model/FieldTranslation.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderPermission**
> \Swagger\Client\Model\PermissionsDTO bindersGetBinderPermission($binder_id)

This call returns the users permissions for a binder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_id = 56; // int | The binder identifier

try {
    $result = $apiInstance->bindersGetBinderPermission($binder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_id** | **int**| The binder identifier |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderStateForVisualization**
> \Swagger\Client\Model\BinderStateDto[] bindersGetBinderStateForVisualization()

This call returns the possible states for binder visualization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bindersGetBinderStateForVisualization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderStateForVisualization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BinderStateDto[]**](../Model/BinderStateDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderStates**
> \Swagger\Client\Model\BinderStateDto[] bindersGetBinderStates()

This call returns the possible states for a binder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bindersGetBinderStates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderStates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BinderStateDto[]**](../Model/BinderStateDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderTypeById**
> \Swagger\Client\Model\BinderTypeDTO bindersGetBinderTypeById($binder_type_id)

This call returns a binder type by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_type_id = 56; // int | The identifier of the binder type

try {
    $result = $apiInstance->bindersGetBinderTypeById($binder_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_type_id** | **int**| The identifier of the binder type |

### Return type

[**\Swagger\Client\Model\BinderTypeDTO**](../Model/BinderTypeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBinderTypePermission**
> \Swagger\Client\Model\PermissionsDTO bindersGetBinderTypePermission($binder_type_id)

This call returns the permission for a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_type_id = 56; // int | The binder type identifier

try {
    $result = $apiInstance->bindersGetBinderTypePermission($binder_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBinderTypePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_type_id** | **int**| The binder type identifier |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetBindersFieldsByType**
> \Swagger\Client\Model\FieldBaseDTO[] bindersGetBindersFieldsByType($binder_type)

This call returns the binder custom fields by binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_type = 56; // int | Binder type identifier

try {
    $result = $apiInstance->bindersGetBindersFieldsByType($binder_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetBindersFieldsByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_type** | **int**| Binder type identifier |

### Return type

[**\Swagger\Client\Model\FieldBaseDTO[]**](../Model/FieldBaseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetById**
> \Swagger\Client\Model\BinderDTO bindersGetById($id)

This call search a binder by the given identifiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifiers filter

try {
    $result = $apiInstance->bindersGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifiers filter |

### Return type

[**\Swagger\Client\Model\BinderDTO**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetByIds**
> \Swagger\Client\Model\BinderDTO[] bindersGetByIds($ids)

This call search a binder by the given identifiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array(new \Swagger\Client\Model\int[]()); // int[] | The identifiers filter

try {
    $result = $apiInstance->bindersGetByIds($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetByIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **int[]**| The identifiers filter |

### Return type

[**\Swagger\Client\Model\BinderDTO[]**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetByNumero**
> \Swagger\Client\Model\BinderDTO[] bindersGetByNumero($number)

This call search a binder by the given number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$number = "number_example"; // string | The number filter

try {
    $result = $apiInstance->bindersGetByNumero($number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetByNumero: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **number** | **string**| The number filter |

### Return type

[**\Swagger\Client\Model\BinderDTO[]**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetByNumeroOld**
> \Swagger\Client\Model\BinderDTO[] bindersGetByNumeroOld($numero)

This call search a binder by the given number

This method is deprecated. Use api/Binders?number={number}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$numero = "numero_example"; // string | The number filter

try {
    $result = $apiInstance->bindersGetByNumeroOld($numero);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetByNumeroOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numero** | **string**| The number filter |

### Return type

[**\Swagger\Client\Model\BinderDTO[]**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetByTypeAndState**
> \Swagger\Client\Model\BinderDTO[] bindersGetByTypeAndState($type, $state)

This call retrieve binders of the given type and state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Binders type filter
$state = 56; // int | Binder state filter

try {
    $result = $apiInstance->bindersGetByTypeAndState($type, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetByTypeAndState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| Binders type filter |
 **state** | **int**| Binder state filter |

### Return type

[**\Swagger\Client\Model\BinderDTO[]**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetTypesOfPratiche**
> \Swagger\Client\Model\BinderTypeDTO[] bindersGetTypesOfPratiche()

This call returns the types of binders available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bindersGetTypesOfPratiche();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetTypesOfPratiche: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BinderTypeDTO[]**](../Model/BinderTypeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersGetUserDefaultTypeAndStateSelection**
> \Swagger\Client\Model\BinderUserDefaultTypeAndStateDto bindersGetUserDefaultTypeAndStateSelection()

This call returns the default type and state for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bindersGetUserDefaultTypeAndStateSelection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersGetUserDefaultTypeAndStateSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BinderUserDefaultTypeAndStateDto**](../Model/BinderUserDefaultTypeAndStateDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersInsertNewBinder**
> \Swagger\Client\Model\BinderDTO bindersInsertNewBinder($binder)

This call adds new binder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder = new \Swagger\Client\Model\BinderDTO(); // \Swagger\Client\Model\BinderDTO | 

try {
    $result = $apiInstance->bindersInsertNewBinder($binder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersInsertNewBinder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder** | [**\Swagger\Client\Model\BinderDTO**](../Model/BinderDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BinderDTO**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersInsertNewBinderType**
> \Swagger\Client\Model\BinderTypeDTO bindersInsertNewBinderType($bindertype)

This call creates new binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bindertype = new \Swagger\Client\Model\BinderTypeDTO(); // \Swagger\Client\Model\BinderTypeDTO | 

try {
    $result = $apiInstance->bindersInsertNewBinderType($bindertype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersInsertNewBinderType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindertype** | [**\Swagger\Client\Model\BinderTypeDTO**](../Model/BinderTypeDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BinderTypeDTO**](../Model/BinderTypeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersRemoveProfilesFromBinder**
> bindersRemoveProfilesFromBinder($profiles_remove_request)

This call removes specified profiles from a binder container

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profiles_remove_request = new \Swagger\Client\Model\BinderProfilesRemoveRequest(); // \Swagger\Client\Model\BinderProfilesRemoveRequest | Request for remove profiles into the binder

try {
    $apiInstance->bindersRemoveProfilesFromBinder($profiles_remove_request);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersRemoveProfilesFromBinder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profiles_remove_request** | [**\Swagger\Client\Model\BinderProfilesRemoveRequest**](../Model/BinderProfilesRemoveRequest.md)| Request for remove profiles into the binder |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersSetBinderPermission**
> bindersSetBinderPermission($permission_dto, $binder_id)

This call updates permission for a binder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permission_dto = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | The permissions data
$binder_id = 56; // int | The binder identifier

try {
    $apiInstance->bindersSetBinderPermission($permission_dto, $binder_id);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersSetBinderPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_dto** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)| The permissions data |
 **binder_id** | **int**| The binder identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersSetBinderTypePermission**
> bindersSetBinderTypePermission($permission_dto, $binder_type_id)

This call updates permission for a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$permission_dto = new \Swagger\Client\Model\BinderPermissionsDTO(); // \Swagger\Client\Model\BinderPermissionsDTO | The permissions data
$binder_type_id = 56; // int | The binder type identifier

try {
    $apiInstance->bindersSetBinderTypePermission($permission_dto, $binder_type_id);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersSetBinderTypePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **permission_dto** | [**\Swagger\Client\Model\BinderPermissionsDTO**](../Model/BinderPermissionsDTO.md)| The permissions data |
 **binder_type_id** | **int**| The binder type identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersSetUserDefaultTypeAndStateSelection**
> bindersSetUserDefaultTypeAndStateSelection($defaultoption)

This call saves the user binder type and state default

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$defaultoption = new \Swagger\Client\Model\BinderUserDefaultTypeAndStateDto(); // \Swagger\Client\Model\BinderUserDefaultTypeAndStateDto | The new default for the user

try {
    $apiInstance->bindersSetUserDefaultTypeAndStateSelection($defaultoption);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersSetUserDefaultTypeAndStateSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **defaultoption** | [**\Swagger\Client\Model\BinderUserDefaultTypeAndStateDto**](../Model/BinderUserDefaultTypeAndStateDto.md)| The new default for the user |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersUpdateBinderById**
> \Swagger\Client\Model\BinderDTO bindersUpdateBinderById($binder_id, $binder)

This call updates all binder values, also custom fields, by binder identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$binder_id = 56; // int | The identifier of the binder
$binder = new \Swagger\Client\Model\BinderDTO(); // \Swagger\Client\Model\BinderDTO | 

try {
    $result = $apiInstance->bindersUpdateBinderById($binder_id, $binder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersUpdateBinderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **binder_id** | **int**| The identifier of the binder |
 **binder** | [**\Swagger\Client\Model\BinderDTO**](../Model/BinderDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BinderDTO**](../Model/BinderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bindersUpdateBinderTypeById**
> \Swagger\Client\Model\BinderTypeDTO bindersUpdateBinderTypeById($bindertype)

This call updates a binder type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bindertype = new \Swagger\Client\Model\BinderTypeDTO(); // \Swagger\Client\Model\BinderTypeDTO | 

try {
    $result = $apiInstance->bindersUpdateBinderTypeById($bindertype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BindersApi->bindersUpdateBinderTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bindertype** | [**\Swagger\Client\Model\BinderTypeDTO**](../Model/BinderTypeDTO.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\BinderTypeDTO**](../Model/BinderTypeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

