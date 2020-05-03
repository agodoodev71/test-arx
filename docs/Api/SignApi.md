# Swagger\Client\SignApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signDeleteSignCert**](SignApi.md#signDeleteSignCert) | **DELETE** /api/Sign/SignCert/{id} | This call deletes a signature certificate
[**signGetRelatedSignCertList**](SignApi.md#signGetRelatedSignCertList) | **GET** /api/Sign/RelatedSignCertList/{signCertId} | This call returns the related certificates of a given Sign certificate (es: Telecom Remote Provider)
[**signGetSignCert**](SignApi.md#signGetSignCert) | **GET** /api/Sign/SignCert/{id} | This call returs a specific signature certificate
[**signGetSignCertList**](SignApi.md#signGetSignCertList) | **GET** /api/Sign/SignCertList | This call returs all signature certificates of user
[**signGetSignCertTypeList**](SignApi.md#signGetSignCertTypeList) | **GET** /api/Sign/SignCertTypeList | This call returs all signature certificates
[**signGetSignCertUseList**](SignApi.md#signGetSignCertUseList) | **GET** /api/Sign/SignCertUse/{signCertId} | This call returns the automatic use of a given Sign certificate
[**signGetVerifyInfo**](SignApi.md#signGetVerifyInfo) | **POST** /api/Sign/GetVerifyInfo | 
[**signInsertSignCert**](SignApi.md#signInsertSignCert) | **POST** /api/Sign/InsertSignCert | This call inserts a signature certificate
[**signRemoteSign**](SignApi.md#signRemoteSign) | **POST** /api/Sign/RemoteSign | This call executes a remote signature operation
[**signRemoteSignTaskWork**](SignApi.md#signRemoteSignTaskWork) | **POST** /api/Sign/RemoteSignTaskWork | This call executes a remote signature operation on a TaskWork list
[**signTestSignCert**](SignApi.md#signTestSignCert) | **POST** /api/Sign/TestSignCert/{signCertId} | This call tests a Sign certificate
[**signUpdateSignCert**](SignApi.md#signUpdateSignCert) | **POST** /api/Sign/UpdateSignCert/{id} | This call updates a signature certificate
[**signUpdateSignCertUseList**](SignApi.md#signUpdateSignCertUseList) | **POST** /api/Sign/UpdateSignCertUse/{signCertId} | This call updates the automatic use for a given Sign certificate


# **signDeleteSignCert**
> signDeleteSignCert($id)

This call deletes a signature certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier

try {
    $apiInstance->signDeleteSignCert($id);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signDeleteSignCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signGetRelatedSignCertList**
> \Swagger\Client\Model\SignCertRelatedDTO[] signGetRelatedSignCertList($sign_cert_id)

This call returns the related certificates of a given Sign certificate (es: Telecom Remote Provider)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sign_cert_id = 56; // int | Identifier of certificate

try {
    $result = $apiInstance->signGetRelatedSignCertList($sign_cert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signGetRelatedSignCertList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sign_cert_id** | **int**| Identifier of certificate |

### Return type

[**\Swagger\Client\Model\SignCertRelatedDTO[]**](../Model/SignCertRelatedDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signGetSignCert**
> \Swagger\Client\Model\SignCertDTO signGetSignCert($id)

This call returs a specific signature certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier

try {
    $result = $apiInstance->signGetSignCert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signGetSignCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier |

### Return type

[**\Swagger\Client\Model\SignCertDTO**](../Model/SignCertDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signGetSignCertList**
> \Swagger\Client\Model\SignCertDTO[] signGetSignCertList()

This call returs all signature certificates of user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->signGetSignCertList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signGetSignCertList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SignCertDTO[]**](../Model/SignCertDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signGetSignCertTypeList**
> \Swagger\Client\Model\SignCertTypeDTO[] signGetSignCertTypeList()

This call returs all signature certificates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->signGetSignCertTypeList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signGetSignCertTypeList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SignCertTypeDTO[]**](../Model/SignCertTypeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signGetSignCertUseList**
> \Swagger\Client\Model\SignCertUseGetDTO signGetSignCertUseList($sign_cert_id)

This call returns the automatic use of a given Sign certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sign_cert_id = 56; // int | Identifier of certificate

try {
    $result = $apiInstance->signGetSignCertUseList($sign_cert_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signGetSignCertUseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sign_cert_id** | **int**| Identifier of certificate |

### Return type

[**\Swagger\Client\Model\SignCertUseGetDTO**](../Model/SignCertUseGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signGetVerifyInfo**
> \Swagger\Client\Model\VerifyInfoDTO signGetVerifyInfo($verify_info_request_dto)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$verify_info_request_dto = new \Swagger\Client\Model\VerifyInfoRequestDTO(); // \Swagger\Client\Model\VerifyInfoRequestDTO | 

try {
    $result = $apiInstance->signGetVerifyInfo($verify_info_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signGetVerifyInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **verify_info_request_dto** | [**\Swagger\Client\Model\VerifyInfoRequestDTO**](../Model/VerifyInfoRequestDTO.md)|  |

### Return type

[**\Swagger\Client\Model\VerifyInfoDTO**](../Model/VerifyInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signInsertSignCert**
> \Swagger\Client\Model\SignCertDTO signInsertSignCert($cert_insert)

This call inserts a signature certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cert_insert = new \Swagger\Client\Model\SignCertInsertDTO(); // \Swagger\Client\Model\SignCertInsertDTO | 

try {
    $result = $apiInstance->signInsertSignCert($cert_insert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signInsertSignCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cert_insert** | [**\Swagger\Client\Model\SignCertInsertDTO**](../Model/SignCertInsertDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SignCertDTO**](../Model/SignCertDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signRemoteSign**
> \Swagger\Client\Model\RemoteSignResponseDTO signRemoteSign($remote_sign_request)

This call executes a remote signature operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remote_sign_request = new \Swagger\Client\Model\RemoteSignRequestDTO(); // \Swagger\Client\Model\RemoteSignRequestDTO | List of documents to sign

try {
    $result = $apiInstance->signRemoteSign($remote_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signRemoteSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remote_sign_request** | [**\Swagger\Client\Model\RemoteSignRequestDTO**](../Model/RemoteSignRequestDTO.md)| List of documents to sign |

### Return type

[**\Swagger\Client\Model\RemoteSignResponseDTO**](../Model/RemoteSignResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signRemoteSignTaskWork**
> \Swagger\Client\Model\RemoteSignResponseDTO signRemoteSignTaskWork($remote_sign_task_work_request)

This call executes a remote signature operation on a TaskWork list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remote_sign_task_work_request = new \Swagger\Client\Model\RemoteSignTaskWorkRequestDTO(); // \Swagger\Client\Model\RemoteSignTaskWorkRequestDTO | List of taskWorks to sign

try {
    $result = $apiInstance->signRemoteSignTaskWork($remote_sign_task_work_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signRemoteSignTaskWork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remote_sign_task_work_request** | [**\Swagger\Client\Model\RemoteSignTaskWorkRequestDTO**](../Model/RemoteSignTaskWorkRequestDTO.md)| List of taskWorks to sign |

### Return type

[**\Swagger\Client\Model\RemoteSignResponseDTO**](../Model/RemoteSignResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signTestSignCert**
> signTestSignCert($sign_cert_id, $cert_password_test)

This call tests a Sign certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sign_cert_id = 56; // int | Identifier of certificate
$cert_password_test = new \Swagger\Client\Model\SignCertPasswordTestDTO(); // \Swagger\Client\Model\SignCertPasswordTestDTO | Information of test password

try {
    $apiInstance->signTestSignCert($sign_cert_id, $cert_password_test);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signTestSignCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sign_cert_id** | **int**| Identifier of certificate |
 **cert_password_test** | [**\Swagger\Client\Model\SignCertPasswordTestDTO**](../Model/SignCertPasswordTestDTO.md)| Information of test password |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signUpdateSignCert**
> \Swagger\Client\Model\SignCertDTO signUpdateSignCert($id, $cert_update)

This call updates a signature certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier
$cert_update = new \Swagger\Client\Model\SignCertUpdateDTO(); // \Swagger\Client\Model\SignCertUpdateDTO | Information to update

try {
    $result = $apiInstance->signUpdateSignCert($id, $cert_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signUpdateSignCert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier |
 **cert_update** | [**\Swagger\Client\Model\SignCertUpdateDTO**](../Model/SignCertUpdateDTO.md)| Information to update |

### Return type

[**\Swagger\Client\Model\SignCertDTO**](../Model/SignCertDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signUpdateSignCertUseList**
> \Swagger\Client\Model\SignCertUseGetDTO signUpdateSignCertUseList($sign_cert_id, $cert_use_set)

This call updates the automatic use for a given Sign certificate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\SignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sign_cert_id = 56; // int | Identifier of certificate
$cert_use_set = new \Swagger\Client\Model\SignCertUseSetDTO(); // \Swagger\Client\Model\SignCertUseSetDTO | Setting of certificate use

try {
    $result = $apiInstance->signUpdateSignCertUseList($sign_cert_id, $cert_use_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignApi->signUpdateSignCertUseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sign_cert_id** | **int**| Identifier of certificate |
 **cert_use_set** | [**\Swagger\Client\Model\SignCertUseSetDTO**](../Model/SignCertUseSetDTO.md)| Setting of certificate use |

### Return type

[**\Swagger\Client\Model\SignCertUseGetDTO**](../Model/SignCertUseGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

