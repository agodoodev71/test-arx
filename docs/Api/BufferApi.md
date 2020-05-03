# Swagger\Client\BufferApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bufferDeleteByBufferId**](BufferApi.md#bufferDeleteByBufferId) | **DELETE** /api/Buffer/{bufferId} | 
[**bufferGetBufferElement**](BufferApi.md#bufferGetBufferElement) | **GET** /api/Buffer/{id} | This call returns the information about the buffer element
[**bufferGetFile**](BufferApi.md#bufferGetFile) | **GET** /api/Buffer/file/{id} | This call returns the file of the buffer element
[**bufferGetForMonitoredFolder**](BufferApi.md#bufferGetForMonitoredFolder) | **GET** /api/Buffer/ForMonitoredFolder | This call returns the list of the document in the buffer for the monitored folder
[**bufferInsert**](BufferApi.md#bufferInsert) | **POST** /api/Buffer/insert | This call allows to add a file to the buffer
[**bufferInsertAdvanced**](BufferApi.md#bufferInsertAdvanced) | **POST** /api/Buffer/insert/{elementTypeEnum}/{description} | This call allows to add a file to the buffer
[**bufferInsertAdvancedForMonitoredFolder**](BufferApi.md#bufferInsertAdvancedForMonitoredFolder) | **POST** /api/Buffer/insertForMonitoredFolder/{elementTypeEnum}/{monitoredFolderId}/{description} | This call allows to add a file to the buffer


# **bufferDeleteByBufferId**
> bool bufferDeleteByBufferId($buffer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$buffer_id = "buffer_id_example"; // string | 

try {
    $result = $apiInstance->bufferDeleteByBufferId($buffer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferDeleteByBufferId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **buffer_id** | **string**|  |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bufferGetBufferElement**
> \Swagger\Client\Model\BufferSimpleElement bufferGetBufferElement($id)

This call returns the information about the buffer element

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->bufferGetBufferElement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferGetBufferElement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\BufferSimpleElement**](../Model/BufferSimpleElement.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bufferGetFile**
> \SplFileObject bufferGetFile($id)

This call returns the file of the buffer element

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->bufferGetFile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferGetFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bufferGetForMonitoredFolder**
> \Swagger\Client\Model\BufferSimpleElement[] bufferGetForMonitoredFolder()

This call returns the list of the document in the buffer for the monitored folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->bufferGetForMonitoredFolder();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferGetForMonitoredFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BufferSimpleElement[]**](../Model/BufferSimpleElement.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bufferInsert**
> string[] bufferInsert($file)

This call allows to add a file to the buffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | The file

try {
    $result = $apiInstance->bufferInsert($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| The file |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bufferInsertAdvanced**
> string[] bufferInsertAdvanced($element_type_enum, $description, $file)

This call allows to add a file to the buffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type_enum = 56; // int | Possible values:  0: DmBuffer  1: NextArchive  2: MonitoredFolder  3: ProcessDocThumbnail  4: CloneProfile  5: ReportExecuted
$description = "description_example"; // string | Description
$file = "/path/to/file.txt"; // \SplFileObject | The file

try {
    $result = $apiInstance->bufferInsertAdvanced($element_type_enum, $description, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferInsertAdvanced: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **element_type_enum** | **int**| Possible values:  0: DmBuffer  1: NextArchive  2: MonitoredFolder  3: ProcessDocThumbnail  4: CloneProfile  5: ReportExecuted |
 **description** | **string**| Description |
 **file** | **\SplFileObject**| The file |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bufferInsertAdvancedForMonitoredFolder**
> string[] bufferInsertAdvancedForMonitoredFolder($element_type_enum, $monitored_folder_id, $description, $file)

This call allows to add a file to the buffer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BufferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$element_type_enum = 56; // int | Possible values:  0: DmBuffer  1: NextArchive  2: MonitoredFolder  3: ProcessDocThumbnail  4: CloneProfile  5: ReportExecuted
$monitored_folder_id = "monitored_folder_id_example"; // string | If the buffer is related to a monitored folder
$description = "description_example"; // string | Description
$file = "/path/to/file.txt"; // \SplFileObject | The file

try {
    $result = $apiInstance->bufferInsertAdvancedForMonitoredFolder($element_type_enum, $monitored_folder_id, $description, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BufferApi->bufferInsertAdvancedForMonitoredFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **element_type_enum** | **int**| Possible values:  0: DmBuffer  1: NextArchive  2: MonitoredFolder  3: ProcessDocThumbnail  4: CloneProfile  5: ReportExecuted |
 **monitored_folder_id** | **string**| If the buffer is related to a monitored folder |
 **description** | **string**| Description |
 **file** | **\SplFileObject**| The file |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

