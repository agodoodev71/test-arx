# Swagger\Client\AssociationsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associationsDelete**](AssociationsApi.md#associationsDelete) | **DELETE** /api/Associations/{id} | This call deletes an existing association
[**associationsGet**](AssociationsApi.md#associationsGet) | **GET** /api/Associations | This calls returns all ARXivar associations
[**associationsGetByDocNumber**](AssociationsApi.md#associationsGetByDocNumber) | **GET** /api/Associations/docnumber/{docnumber} | This call returns all associations by a document identifier
[**associationsGetById**](AssociationsApi.md#associationsGetById) | **POST** /api/Associations/items/{id} | This call returns the profile data contained in the association
[**associationsInsertNew**](AssociationsApi.md#associationsInsertNew) | **POST** /api/Associations/insert/new | This call adds profiles in a new association with auto generated name
[**associationsInsertWithId**](AssociationsApi.md#associationsInsertWithId) | **POST** /api/Associations/{id} | This call adds profiles in an association by association Identifier
[**associationsInsertWithName**](AssociationsApi.md#associationsInsertWithName) | **POST** /api/Associations/insertWithName | This call adds profiles to an existing association by association name
[**associationsRemove**](AssociationsApi.md#associationsRemove) | **DELETE** /api/Associations/{id}/docnumber/{docnumber} | This call removes a profile from association
[**associationsRename**](AssociationsApi.md#associationsRename) | **PUT** /api/Associations/rename/{id} | This call renames an existing association


# **associationsDelete**
> associationsDelete($id)

This call deletes an existing association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association to delete

try {
    $apiInstance->associationsDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the association to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsGet**
> \Swagger\Client\Model\AssociationDTO[] associationsGet()

This calls returns all ARXivar associations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->associationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AssociationDTO[]**](../Model/AssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsGetByDocNumber**
> \Swagger\Client\Model\AssociationDTO[] associationsGetByDocNumber($docnumber)

This call returns all associations by a document identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->associationsGetByDocNumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsGetByDocNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

[**\Swagger\Client\Model\AssociationDTO[]**](../Model/AssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsGetById**
> \Swagger\Client\Model\RowSearchResult[] associationsGetById($id, $select)

This call returns the profile data contained in the association

This method is deprecated. Use api/v2/Associations/items/{id}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Columns settings for the result

try {
    $result = $apiInstance->associationsGetById($id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the association |
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Columns settings for the result |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsInsertNew**
> \Swagger\Client\Model\AssociationDTO[] associationsInsertNew($docnumbers)

This call adds profiles in a new association with auto generated name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Identifiers of the profiles to add

try {
    $result = $apiInstance->associationsInsertNew($docnumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsInsertNew: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumbers** | **int[]**| Identifiers of the profiles to add |

### Return type

[**\Swagger\Client\Model\AssociationDTO[]**](../Model/AssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsInsertWithId**
> \Swagger\Client\Model\AssociationDTO[] associationsInsertWithId($id, $docnumbers)

This call adds profiles in an association by association Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Identifiers of the profiles to add

try {
    $result = $apiInstance->associationsInsertWithId($id, $docnumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsInsertWithId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the association |
 **docnumbers** | **int[]**| Identifiers of the profiles to add |

### Return type

[**\Swagger\Client\Model\AssociationDTO[]**](../Model/AssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsInsertWithName**
> \Swagger\Client\Model\AssociationDTO[] associationsInsertWithName($body_data)

This call adds profiles to an existing association by association name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body_data = new \stdClass; // object | JSON object with 2 properties: docnumbers (array of ints) and associationName (new association name)

try {
    $result = $apiInstance->associationsInsertWithName($body_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsInsertWithName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_data** | **object**| JSON object with 2 properties: docnumbers (array of ints) and associationName (new association name) |

### Return type

[**\Swagger\Client\Model\AssociationDTO[]**](../Model/AssociationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsRemove**
> associationsRemove($id, $docnumber)

This call removes a profile from association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association
$docnumber = 56; // int | Identifier of the profile to remove

try {
    $apiInstance->associationsRemove($id, $docnumber);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the association |
 **docnumber** | **int**| Identifier of the profile to remove |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsRename**
> associationsRename($id, $body_data)

This call renames an existing association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association to rename
$body_data = new \stdClass; // object | JSON object with 1 property: associationName (new association name)

try {
    $apiInstance->associationsRename($id, $body_data);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsApi->associationsRename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the association to rename |
 **body_data** | **object**| JSON object with 1 property: associationName (new association name) |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

