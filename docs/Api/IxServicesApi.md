# Swagger\Client\IxServicesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ixServicesCanDeleteAccumulationPackage**](IxServicesApi.md#ixServicesCanDeleteAccumulationPackage) | **GET** /api/IxServices/{accumulationPackageId}/CanDelete | This method return the possibility for user to delete a accumulation package
[**ixServicesCanDeleteAccumulationPackageDocument**](IxServicesApi.md#ixServicesCanDeleteAccumulationPackageDocument) | **GET** /api/IxServices/Document/{accumulationPackageDocumentId}/CanDelete | This method return the possibility for user to delete a document in an accumulation package
[**ixServicesDeleteAccumulationPackage**](IxServicesApi.md#ixServicesDeleteAccumulationPackage) | **DELETE** /api/IxServices/{accumulationPackageId} | This method deletes a accumulation package
[**ixServicesDeleteAccumulationPackageDocument**](IxServicesApi.md#ixServicesDeleteAccumulationPackageDocument) | **DELETE** /api/IxServices/Document/{accumulationPackageDocumentId} | This method deletes a document in an accumulation package
[**ixServicesDetachAccumulationPackage**](IxServicesApi.md#ixServicesDetachAccumulationPackage) | **GET** /api/IxServices/{accumulationPackageId}/Detach | Detach the accumulation package from the WebSuite service. This call is required if the call CanDelete returns DetachRequired &#x3D; 2
[**ixServicesDetachAccumulationPackageDocument**](IxServicesApi.md#ixServicesDetachAccumulationPackageDocument) | **GET** /api/IxServices/Document/{accumulationPackageDocumentId}/Detach | Detach the document from the WebSuite service. This call is required if the call CanDelete returns DetachRequired &#x3D; 2
[**ixServicesGetAccumulationPackageDocumentValidationByDate**](IxServicesApi.md#ixServicesGetAccumulationPackageDocumentValidationByDate) | **GET** /api/IxServices/Validation | This call return the status of the validations for accumulation package documents in a range of date
[**ixServicesGetByAoo**](IxServicesApi.md#ixServicesGetByAoo) | **GET** /api/IxServices | This method return the accumulation packages contained in IX-CE services
[**ixServicesGetDocumentsByAccumulationPackageId**](IxServicesApi.md#ixServicesGetDocumentsByAccumulationPackageId) | **GET** /api/IxServices/{accumulationPackageId}/Documents | This method return the document contained in IX-CE accumulation packages
[**ixServicesGetIxCeCompleteDetailsByDocnumber**](IxServicesApi.md#ixServicesGetIxCeCompleteDetailsByDocnumber) | **GET** /api/IxServices/Document/{docnumber}/IxCeInfo | This call returns all the information about a document sent to IX-CE Service
[**ixServicesGetIxFeCompleteDetailsByDocnumber**](IxServicesApi.md#ixServicesGetIxFeCompleteDetailsByDocnumber) | **GET** /api/IxServices/Document/{docnumber}/IxFeInfo | This call returns all the information about a document sent to IX-FE Service
[**ixServicesSendOutcomeByDocnumber**](IxServicesApi.md#ixServicesSendOutcomeByDocnumber) | **POST** /api/IxServices/SendOutcome | This call send an outcome value for a docnumber (for invoice from IX-CE service)
[**ixServicesSendToIx**](IxServicesApi.md#ixServicesSendToIx) | **POST** /api/IxServices/SendToIxFe | This call send docnumbers to IX-FE services
[**ixServicesSendToIxCe**](IxServicesApi.md#ixServicesSendToIxCe) | **POST** /api/IxServices/SendToIxCe | This call send docnumbers to IX-CE services
[**ixServicesSendToIxFeSignRequired**](IxServicesApi.md#ixServicesSendToIxFeSignRequired) | **POST** /api/IxServices/SendToIxFeSignRequired | Checks is the docnumber list must be signed before being sent to IX-FE


# **ixServicesCanDeleteAccumulationPackage**
> \Swagger\Client\Model\AccumulationPackageDeleteStatus ixServicesCanDeleteAccumulationPackage($accumulation_package_id)

This method return the possibility for user to delete a accumulation package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_id = 56; // int | The id of the accumulation package

try {
    $result = $apiInstance->ixServicesCanDeleteAccumulationPackage($accumulation_package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesCanDeleteAccumulationPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_id** | **int**| The id of the accumulation package |

### Return type

[**\Swagger\Client\Model\AccumulationPackageDeleteStatus**](../Model/AccumulationPackageDeleteStatus.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesCanDeleteAccumulationPackageDocument**
> \Swagger\Client\Model\AccumulationPackageDocumentDeleteStatus ixServicesCanDeleteAccumulationPackageDocument($accumulation_package_document_id)

This method return the possibility for user to delete a document in an accumulation package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_document_id = 56; // int | The code of the accumulation package document

try {
    $result = $apiInstance->ixServicesCanDeleteAccumulationPackageDocument($accumulation_package_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesCanDeleteAccumulationPackageDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_document_id** | **int**| The code of the accumulation package document |

### Return type

[**\Swagger\Client\Model\AccumulationPackageDocumentDeleteStatus**](../Model/AccumulationPackageDocumentDeleteStatus.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesDeleteAccumulationPackage**
> ixServicesDeleteAccumulationPackage($accumulation_package_id)

This method deletes a accumulation package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_id = 56; // int | The id of the package

try {
    $apiInstance->ixServicesDeleteAccumulationPackage($accumulation_package_id);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesDeleteAccumulationPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_id** | **int**| The id of the package |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesDeleteAccumulationPackageDocument**
> ixServicesDeleteAccumulationPackageDocument($accumulation_package_document_id)

This method deletes a document in an accumulation package

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_document_id = 56; // int | The id of the document

try {
    $apiInstance->ixServicesDeleteAccumulationPackageDocument($accumulation_package_document_id);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesDeleteAccumulationPackageDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_document_id** | **int**| The id of the document |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesDetachAccumulationPackage**
> ixServicesDetachAccumulationPackage($accumulation_package_id)

Detach the accumulation package from the WebSuite service. This call is required if the call CanDelete returns DetachRequired = 2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_id = 56; // int | 

try {
    $apiInstance->ixServicesDetachAccumulationPackage($accumulation_package_id);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesDetachAccumulationPackage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesDetachAccumulationPackageDocument**
> ixServicesDetachAccumulationPackageDocument($accumulation_package_document_id)

Detach the document from the WebSuite service. This call is required if the call CanDelete returns DetachRequired = 2

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_document_id = 56; // int | The code of the accumulation package document

try {
    $apiInstance->ixServicesDetachAccumulationPackageDocument($accumulation_package_document_id);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesDetachAccumulationPackageDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_document_id** | **int**| The code of the accumulation package document |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesGetAccumulationPackageDocumentValidationByDate**
> \Swagger\Client\Model\AccumulationPackageDocumentValidationDTO[] ixServicesGetAccumulationPackageDocumentValidationByDate($start_date, $end_date)

This call return the status of the validations for accumulation package documents in a range of date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date

try {
    $result = $apiInstance->ixServicesGetAccumulationPackageDocumentValidationByDate($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesGetAccumulationPackageDocumentValidationByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Start date |
 **end_date** | **\DateTime**| End date |

### Return type

[**\Swagger\Client\Model\AccumulationPackageDocumentValidationDTO[]**](../Model/AccumulationPackageDocumentValidationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesGetByAoo**
> \Swagger\Client\Model\AccumulationPackageDTO[] ixServicesGetByAoo($business_unit_code)

This method return the accumulation packages contained in IX-CE services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$business_unit_code = "business_unit_code_example"; // string | The code of the business unit

try {
    $result = $apiInstance->ixServicesGetByAoo($business_unit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesGetByAoo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **business_unit_code** | **string**| The code of the business unit |

### Return type

[**\Swagger\Client\Model\AccumulationPackageDTO[]**](../Model/AccumulationPackageDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesGetDocumentsByAccumulationPackageId**
> \Swagger\Client\Model\IxCeDocumentDTO[] ixServicesGetDocumentsByAccumulationPackageId($accumulation_package_id)

This method return the document contained in IX-CE accumulation packages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accumulation_package_id = 56; // int | The code of the accumulation package

try {
    $result = $apiInstance->ixServicesGetDocumentsByAccumulationPackageId($accumulation_package_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesGetDocumentsByAccumulationPackageId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accumulation_package_id** | **int**| The code of the accumulation package |

### Return type

[**\Swagger\Client\Model\IxCeDocumentDTO[]**](../Model/IxCeDocumentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesGetIxCeCompleteDetailsByDocnumber**
> \Swagger\Client\Model\IxCeDocumentCompleteDTO[] ixServicesGetIxCeCompleteDetailsByDocnumber($docnumber)

This call returns all the information about a document sent to IX-CE Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Docnumber

try {
    $result = $apiInstance->ixServicesGetIxCeCompleteDetailsByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesGetIxCeCompleteDetailsByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Docnumber |

### Return type

[**\Swagger\Client\Model\IxCeDocumentCompleteDTO[]**](../Model/IxCeDocumentCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesGetIxFeCompleteDetailsByDocnumber**
> \Swagger\Client\Model\IxFeDocumentCompleteDTO[] ixServicesGetIxFeCompleteDetailsByDocnumber($docnumber)

This call returns all the information about a document sent to IX-FE Service

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Docnumber

try {
    $result = $apiInstance->ixServicesGetIxFeCompleteDetailsByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesGetIxFeCompleteDetailsByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Docnumber |

### Return type

[**\Swagger\Client\Model\IxFeDocumentCompleteDTO[]**](../Model/IxFeDocumentCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesSendOutcomeByDocnumber**
> ixServicesSendOutcomeByDocnumber($request)

This call send an outcome value for a docnumber (for invoice from IX-CE service)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\SendOutcomeRequestDTO(); // \Swagger\Client\Model\SendOutcomeRequestDTO | 

try {
    $apiInstance->ixServicesSendOutcomeByDocnumber($request);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesSendOutcomeByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SendOutcomeRequestDTO**](../Model/SendOutcomeRequestDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesSendToIx**
> \Swagger\Client\Model\IxFeSendResponseDTO ixServicesSendToIx($request)

This call send docnumbers to IX-FE services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\IxFeSendRequestDTO(); // \Swagger\Client\Model\IxFeSendRequestDTO | 

try {
    $result = $apiInstance->ixServicesSendToIx($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesSendToIx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\IxFeSendRequestDTO**](../Model/IxFeSendRequestDTO.md)|  |

### Return type

[**\Swagger\Client\Model\IxFeSendResponseDTO**](../Model/IxFeSendResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesSendToIxCe**
> ixServicesSendToIxCe($request)

This call send docnumbers to IX-CE services

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\SendToIxCeRequestDTO(); // \Swagger\Client\Model\SendToIxCeRequestDTO | 

try {
    $apiInstance->ixServicesSendToIxCe($request);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesSendToIxCe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SendToIxCeRequestDTO**](../Model/SendToIxCeRequestDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ixServicesSendToIxFeSignRequired**
> bool ixServicesSendToIxFeSignRequired($request)

Checks is the docnumber list must be signed before being sent to IX-FE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\IxServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\SendToIxFeSignRequiredRequestDto(); // \Swagger\Client\Model\SendToIxFeSignRequiredRequestDto | 

try {
    $result = $apiInstance->ixServicesSendToIxFeSignRequired($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IxServicesApi->ixServicesSendToIxFeSignRequired: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\SendToIxFeSignRequiredRequestDto**](../Model/SendToIxFeSignRequiredRequestDto.md)|  |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

