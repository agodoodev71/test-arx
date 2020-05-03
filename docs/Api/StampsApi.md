# Swagger\Client\StampsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**stampsApplyStampInstanceFromDocnumber**](StampsApi.md#stampsApplyStampInstanceFromDocnumber) | **PUT** /api/Stamps/applyStampInstanceFromDocnumber/{docnumber} | This call apply stampinstances in document
[**stampsApplyStampInstanceFromProcessDoc**](StampsApi.md#stampsApplyStampInstanceFromProcessDoc) | **PUT** /api/Stamps/applyStampInstanceFromProcessDoc/{processDocId} | This call apply stampinstances in process document
[**stampsCanAddVirtualStamp**](StampsApi.md#stampsCanAddVirtualStamp) | **GET** /api/Stamps/canAddVirtualStamps | This call returns if user can add virtual stamps
[**stampsCanApplyStamp**](StampsApi.md#stampsCanApplyStamp) | **GET** /api/Stamps/canApplyStamps | This call returns if user can apply stamps
[**stampsConvertToPngByDocnumberAndPageIndex**](StampsApi.md#stampsConvertToPngByDocnumberAndPageIndex) | **POST** /api/Stamps/convertToPng/{docnumber}/{pageIndex} | This call returns the png file results on convertion from pdf file of profile
[**stampsConvertToPngByProcessDocAndPageIndex**](StampsApi.md#stampsConvertToPngByProcessDocAndPageIndex) | **POST** /api/Stamps/convertToPngForTask/{processDocId}/{pageIndex} | This call returns the png file results on convertion from pdf file of task profile
[**stampsDeleteStampInstanceFromDocnumber**](StampsApi.md#stampsDeleteStampInstanceFromDocnumber) | **DELETE** /api/Stamps/stampInstanceFromDocnumber/{docnumber} | This call deletes stampinstances from docnumber
[**stampsDeleteStampInstanceFromProcessDoc**](StampsApi.md#stampsDeleteStampInstanceFromProcessDoc) | **DELETE** /api/Stamps/stampInstanceFromProcessDoc/{processDocId} | This call deletes stampinstances from docnumber for task
[**stampsGet**](StampsApi.md#stampsGet) | **GET** /api/Stamps | This call returns all the type of stamp defined in Arxivar
[**stampsGetPdfPageNumber**](StampsApi.md#stampsGetPdfPageNumber) | **GET** /api/Stamps/getPdfPageNumber/{docnumber} | This call returns the number of pages for pdf document
[**stampsGetPdfPageNumberForProcessDoc**](StampsApi.md#stampsGetPdfPageNumberForProcessDoc) | **GET** /api/Stamps/getPdfPageNumberForProcessDoc/{processDocId} | This call returns the number of pages for pdf document for task
[**stampsGetStampsDefinitionByDocnumber**](StampsApi.md#stampsGetStampsDefinitionByDocnumber) | **GET** /api/Stamps/stampDefinitionByDocnumber/{docnumber} | This call returns all the stamp definition virtual by a docnumber
[**stampsGetStampsDefinitionByProcessDoc**](StampsApi.md#stampsGetStampsDefinitionByProcessDoc) | **GET** /api/Stamps/stampDefinitionByProcessDoc/{processDocId} | This call returns all the stamp definition virtual by a process document
[**stampsGetStampsInstanceByDocnumber**](StampsApi.md#stampsGetStampsInstanceByDocnumber) | **GET** /api/Stamps/stampInstanceByDocnumber/{docnumber} | This call returns all the stamp applied virtual on a docnumber
[**stampsGetStampsInstanceByProcessDoc**](StampsApi.md#stampsGetStampsInstanceByProcessDoc) | **GET** /api/Stamps/stampInstanceByProcessDoc/{processDocId} | This call returns all the stamp applied virtual on a process document
[**stampsInsertStampInstanceFromDocnumber**](StampsApi.md#stampsInsertStampInstanceFromDocnumber) | **POST** /api/Stamps/stampInstanceFromDocnumber/{docnumber} | This call inserts new stampinstances for docnumber
[**stampsInsertStampInstanceFromProcessDoc**](StampsApi.md#stampsInsertStampInstanceFromProcessDoc) | **POST** /api/Stamps/stampInstanceFromProcessDoc/{processDocId} | This call inserts new stampinstances for process document
[**stampsUpdateStampInstanceFromDocnumber**](StampsApi.md#stampsUpdateStampInstanceFromDocnumber) | **PUT** /api/Stamps/stampInstanceFromDocnumber/{docnumber} | This call updates new stampinstances for docnumber
[**stampsUpdateStampInstanceFromProcessDoc**](StampsApi.md#stampsUpdateStampInstanceFromProcessDoc) | **PUT** /api/Stamps/stampInstanceFromProcessDoc/{processDocId} | This call updates stampinstances for process document


# **stampsApplyStampInstanceFromDocnumber**
> stampsApplyStampInstanceFromDocnumber($docnumber)

This call apply stampinstances in document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 

try {
    $apiInstance->stampsApplyStampInstanceFromDocnumber($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsApplyStampInstanceFromDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsApplyStampInstanceFromProcessDoc**
> stampsApplyStampInstanceFromProcessDoc($process_doc_id)

This call apply stampinstances in process document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 

try {
    $apiInstance->stampsApplyStampInstanceFromProcessDoc($process_doc_id);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsApplyStampInstanceFromProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsCanAddVirtualStamp**
> bool stampsCanAddVirtualStamp()

This call returns if user can add virtual stamps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stampsCanAddVirtualStamp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsCanAddVirtualStamp: ', $e->getMessage(), PHP_EOL;
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

# **stampsCanApplyStamp**
> bool stampsCanApplyStamp()

This call returns if user can apply stamps

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stampsCanApplyStamp();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsCanApplyStamp: ', $e->getMessage(), PHP_EOL;
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

# **stampsConvertToPngByDocnumberAndPageIndex**
> \SplFileObject stampsConvertToPngByDocnumberAndPageIndex($docnumber, $page_index)

This call returns the png file results on convertion from pdf file of profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Identifier
$page_index = 56; // int | Page index

try {
    $result = $apiInstance->stampsConvertToPngByDocnumberAndPageIndex($docnumber, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsConvertToPngByDocnumberAndPageIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Identifier |
 **page_index** | **int**| Page index |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsConvertToPngByProcessDocAndPageIndex**
> \SplFileObject stampsConvertToPngByProcessDocAndPageIndex($process_doc_id, $page_index)

This call returns the png file results on convertion from pdf file of task profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Process document Identifier
$page_index = 56; // int | Page index

try {
    $result = $apiInstance->stampsConvertToPngByProcessDocAndPageIndex($process_doc_id, $page_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsConvertToPngByProcessDocAndPageIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Process document Identifier |
 **page_index** | **int**| Page index |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsDeleteStampInstanceFromDocnumber**
> stampsDeleteStampInstanceFromDocnumber($docnumber, $to_remove)

This call deletes stampinstances from docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 
$to_remove = array(new \Swagger\Client\Model\StampsInstanceDTO()); // \Swagger\Client\Model\StampsInstanceDTO[] | 

try {
    $apiInstance->stampsDeleteStampInstanceFromDocnumber($docnumber, $to_remove);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsDeleteStampInstanceFromDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |
 **to_remove** | [**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsDeleteStampInstanceFromProcessDoc**
> stampsDeleteStampInstanceFromProcessDoc($process_doc_id, $to_remove)

This call deletes stampinstances from docnumber for task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 
$to_remove = array(new \Swagger\Client\Model\StampsInstanceDTO()); // \Swagger\Client\Model\StampsInstanceDTO[] | 

try {
    $apiInstance->stampsDeleteStampInstanceFromProcessDoc($process_doc_id, $to_remove);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsDeleteStampInstanceFromProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |
 **to_remove** | [**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGet**
> \Swagger\Client\Model\StampDefinitionDTO[] stampsGet()

This call returns all the type of stamp defined in Arxivar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->stampsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StampDefinitionDTO[]**](../Model/StampDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGetPdfPageNumber**
> int stampsGetPdfPageNumber($docnumber)

This call returns the number of pages for pdf document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 

try {
    $result = $apiInstance->stampsGetPdfPageNumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGetPdfPageNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGetPdfPageNumberForProcessDoc**
> int stampsGetPdfPageNumberForProcessDoc($process_doc_id)

This call returns the number of pages for pdf document for task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 

try {
    $result = $apiInstance->stampsGetPdfPageNumberForProcessDoc($process_doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGetPdfPageNumberForProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGetStampsDefinitionByDocnumber**
> \Swagger\Client\Model\StampDefinitionDTO[] stampsGetStampsDefinitionByDocnumber($docnumber)

This call returns all the stamp definition virtual by a docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 

try {
    $result = $apiInstance->stampsGetStampsDefinitionByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGetStampsDefinitionByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |

### Return type

[**\Swagger\Client\Model\StampDefinitionDTO[]**](../Model/StampDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGetStampsDefinitionByProcessDoc**
> \Swagger\Client\Model\StampDefinitionDTO[] stampsGetStampsDefinitionByProcessDoc($process_doc_id)

This call returns all the stamp definition virtual by a process document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 

try {
    $result = $apiInstance->stampsGetStampsDefinitionByProcessDoc($process_doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGetStampsDefinitionByProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\StampDefinitionDTO[]**](../Model/StampDefinitionDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGetStampsInstanceByDocnumber**
> \Swagger\Client\Model\StampsInstanceDTO[] stampsGetStampsInstanceByDocnumber($docnumber)

This call returns all the stamp applied virtual on a docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 

try {
    $result = $apiInstance->stampsGetStampsInstanceByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGetStampsInstanceByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |

### Return type

[**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsGetStampsInstanceByProcessDoc**
> \Swagger\Client\Model\StampsInstanceDTO[] stampsGetStampsInstanceByProcessDoc($process_doc_id)

This call returns all the stamp applied virtual on a process document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 

try {
    $result = $apiInstance->stampsGetStampsInstanceByProcessDoc($process_doc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsGetStampsInstanceByProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsInsertStampInstanceFromDocnumber**
> stampsInsertStampInstanceFromDocnumber($docnumber, $to_insert)

This call inserts new stampinstances for docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 
$to_insert = array(new \Swagger\Client\Model\StampsInstanceDTO()); // \Swagger\Client\Model\StampsInstanceDTO[] | 

try {
    $apiInstance->stampsInsertStampInstanceFromDocnumber($docnumber, $to_insert);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsInsertStampInstanceFromDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |
 **to_insert** | [**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsInsertStampInstanceFromProcessDoc**
> stampsInsertStampInstanceFromProcessDoc($process_doc_id, $to_insert)

This call inserts new stampinstances for process document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 
$to_insert = array(new \Swagger\Client\Model\StampsInstanceDTO()); // \Swagger\Client\Model\StampsInstanceDTO[] | 

try {
    $apiInstance->stampsInsertStampInstanceFromProcessDoc($process_doc_id, $to_insert);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsInsertStampInstanceFromProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |
 **to_insert** | [**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsUpdateStampInstanceFromDocnumber**
> stampsUpdateStampInstanceFromDocnumber($docnumber, $to_update)

This call updates new stampinstances for docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 
$to_update = array(new \Swagger\Client\Model\StampsInstanceDTO()); // \Swagger\Client\Model\StampsInstanceDTO[] | 

try {
    $apiInstance->stampsUpdateStampInstanceFromDocnumber($docnumber, $to_update);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsUpdateStampInstanceFromDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |
 **to_update** | [**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **stampsUpdateStampInstanceFromProcessDoc**
> stampsUpdateStampInstanceFromProcessDoc($process_doc_id, $to_update)

This call updates stampinstances for process document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\StampsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | 
$to_update = array(new \Swagger\Client\Model\StampsInstanceDTO()); // \Swagger\Client\Model\StampsInstanceDTO[] | 

try {
    $apiInstance->stampsUpdateStampInstanceFromProcessDoc($process_doc_id, $to_update);
} catch (Exception $e) {
    echo 'Exception when calling StampsApi->stampsUpdateStampInstanceFromProcessDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**|  |
 **to_update** | [**\Swagger\Client\Model\StampsInstanceDTO[]**](../Model/StampsInstanceDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

