# Swagger\Client\AssociationsV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associationsV2Delete**](AssociationsV2Api.md#associationsV2Delete) | **DELETE** /api/v2/Associations/{id} | This call deletes an existing association
[**associationsV2Get**](AssociationsV2Api.md#associationsV2Get) | **GET** /api/v2/Associations | This calls returns all ARXivar associations
[**associationsV2GetByDocNumber**](AssociationsV2Api.md#associationsV2GetByDocNumber) | **GET** /api/v2/Associations/docnumber/{docnumber} | This call returns all associations by a document identifier
[**associationsV2GetById**](AssociationsV2Api.md#associationsV2GetById) | **POST** /api/v2/Associations/items/{id} | This call returns the profile data contained in the association  This call could not be compatible with some programming language, in this case use the call api/Associations/items/{id}
[**associationsV2InsertNew**](AssociationsV2Api.md#associationsV2InsertNew) | **POST** /api/v2/Associations/insert/new | This call adds profiles in a new association with auto generated name
[**associationsV2InsertWithId**](AssociationsV2Api.md#associationsV2InsertWithId) | **POST** /api/v2/Associations/{id} | This call adds profiles in an association by association Identifier
[**associationsV2InsertWithName**](AssociationsV2Api.md#associationsV2InsertWithName) | **POST** /api/v2/Associations/insertWithName | This call adds profiles to an existing association by association name
[**associationsV2Remove**](AssociationsV2Api.md#associationsV2Remove) | **DELETE** /api/v2/Associations/{id}/docnumber/{docnumber} | This call removes a profile from association
[**associationsV2Rename**](AssociationsV2Api.md#associationsV2Rename) | **PUT** /api/v2/Associations/rename/{id} | This call renames an existing association


# **associationsV2Delete**
> associationsV2Delete($id)

This call deletes an existing association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association to delete

try {
    $apiInstance->associationsV2Delete($id);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2Delete: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2Get**
> \Swagger\Client\Model\AssociationDTO[] associationsV2Get()

This calls returns all ARXivar associations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->associationsV2Get();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2Get: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2GetByDocNumber**
> \Swagger\Client\Model\AssociationDTO[] associationsV2GetByDocNumber($docnumber)

This call returns all associations by a document identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->associationsV2GetByDocNumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2GetByDocNumber: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2GetById**
> object associationsV2GetById($id, $select)

This call returns the profile data contained in the association  This call could not be compatible with some programming language, in this case use the call api/Associations/items/{id}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Columns settings for the result

try {
    $result = $apiInstance->associationsV2GetById($id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2GetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of the association |
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Columns settings for the result |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **associationsV2InsertNew**
> \Swagger\Client\Model\AssociationDTO[] associationsV2InsertNew($docnumbers)

This call adds profiles in a new association with auto generated name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Identifiers of the profiles to add

try {
    $result = $apiInstance->associationsV2InsertNew($docnumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2InsertNew: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2InsertWithId**
> \Swagger\Client\Model\AssociationDTO[] associationsV2InsertWithId($id, $docnumbers)

This call adds profiles in an association by association Identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Identifiers of the profiles to add

try {
    $result = $apiInstance->associationsV2InsertWithId($id, $docnumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2InsertWithId: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2InsertWithName**
> \Swagger\Client\Model\AssociationDTO[] associationsV2InsertWithName($body_data)

This call adds profiles to an existing association by association name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body_data = new \stdClass; // object | JSON object with 2 properties: docnumbers (array of ints) and associationName (new association name)

try {
    $result = $apiInstance->associationsV2InsertWithName($body_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2InsertWithName: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2Remove**
> associationsV2Remove($id, $docnumber)

This call removes a profile from association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association
$docnumber = 56; // int | Identifier of the profile to remove

try {
    $apiInstance->associationsV2Remove($id, $docnumber);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2Remove: ', $e->getMessage(), PHP_EOL;
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

# **associationsV2Rename**
> associationsV2Rename($id, $body_data)

This call renames an existing association

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AssociationsV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of the association to rename
$body_data = new \stdClass; // object | JSON object with 1 property: associationName (new association name)

try {
    $apiInstance->associationsV2Rename($id, $body_data);
} catch (Exception $e) {
    echo 'Exception when calling AssociationsV2Api->associationsV2Rename: ', $e->getMessage(), PHP_EOL;
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

