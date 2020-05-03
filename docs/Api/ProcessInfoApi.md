# Swagger\Client\ProcessInfoApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processInfoGetAttachmentInfoByProcess**](ProcessInfoApi.md#processInfoGetAttachmentInfoByProcess) | **GET** /api/ProcessInfo/{processId}/Attachment | This call returns the attachments of process
[**processInfoGetChronoInfoByProcess**](ProcessInfoApi.md#processInfoGetChronoInfoByProcess) | **GET** /api/ProcessInfo/{processId}/Chrono | This call returns the chrono information of process
[**processInfoGetDocumentInfoByProcess**](ProcessInfoApi.md#processInfoGetDocumentInfoByProcess) | **GET** /api/ProcessInfo/{processId}/Document | This call returns the document information associated with the process
[**processInfoGetNoteInfoByProcess**](ProcessInfoApi.md#processInfoGetNoteInfoByProcess) | **GET** /api/ProcessInfo/{processId}/Note | This call returns the note associated with process
[**processInfoGetProcessInfo**](ProcessInfoApi.md#processInfoGetProcessInfo) | **GET** /api/ProcessInfo/{processId} | This call returns the process information
[**processInfoGetProfessionalRoleInfoByProcess**](ProcessInfoApi.md#processInfoGetProfessionalRoleInfoByProcess) | **GET** /api/ProcessInfo/{processId}/ProfessionalRole | This call returns the professional roles
[**processInfoGetTaskInfoByProcess**](ProcessInfoApi.md#processInfoGetTaskInfoByProcess) | **GET** /api/ProcessInfo/{processId}/Task | This call returns all task associated with the process
[**processInfoGetVariableInfoByProcess**](ProcessInfoApi.md#processInfoGetVariableInfoByProcess) | **GET** /api/ProcessInfo/{processId}/Variable | This call returns the process variable information of a process
[**processInfoIsSupervisor**](ProcessInfoApi.md#processInfoIsSupervisor) | **GET** /api/ProcessInfo/{processId}/IsSupervisor | This call checks if the user connected is supervisor of process


# **processInfoGetAttachmentInfoByProcess**
> \Swagger\Client\Model\AttachmentWorkInfoDTO[] processInfoGetAttachmentInfoByProcess($process_id)

This call returns the attachments of process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetAttachmentInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetAttachmentInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\AttachmentWorkInfoDTO[]**](../Model/AttachmentWorkInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetChronoInfoByProcess**
> \Swagger\Client\Model\ChronoInfoDTO[] processInfoGetChronoInfoByProcess($process_id)

This call returns the chrono information of process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetChronoInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetChronoInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\ChronoInfoDTO[]**](../Model/ChronoInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetDocumentInfoByProcess**
> \Swagger\Client\Model\DocumentWorkInfoDTO[] processInfoGetDocumentInfoByProcess($process_id)

This call returns the document information associated with the process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetDocumentInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetDocumentInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\DocumentWorkInfoDTO[]**](../Model/DocumentWorkInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetNoteInfoByProcess**
> \Swagger\Client\Model\NoteWorkInfoDTO[] processInfoGetNoteInfoByProcess($process_id)

This call returns the note associated with process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetNoteInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetNoteInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\NoteWorkInfoDTO[]**](../Model/NoteWorkInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetProcessInfo**
> \Swagger\Client\Model\ProcessInfoDTO processInfoGetProcessInfo($process_id)

This call returns the process information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetProcessInfo($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetProcessInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\ProcessInfoDTO**](../Model/ProcessInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetProfessionalRoleInfoByProcess**
> \Swagger\Client\Model\ProfessionalRoleInfoDTO[] processInfoGetProfessionalRoleInfoByProcess($process_id)

This call returns the professional roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetProfessionalRoleInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetProfessionalRoleInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\ProfessionalRoleInfoDTO[]**](../Model/ProfessionalRoleInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetTaskInfoByProcess**
> \Swagger\Client\Model\TaskInfoDTO[] processInfoGetTaskInfoByProcess($process_id)

This call returns all task associated with the process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetTaskInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetTaskInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\TaskInfoDTO[]**](../Model/TaskInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoGetVariableInfoByProcess**
> \Swagger\Client\Model\ProcessInfoVariableDTO processInfoGetVariableInfoByProcess($process_id)

This call returns the process variable information of a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoGetVariableInfoByProcess($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoGetVariableInfoByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\ProcessInfoVariableDTO**](../Model/ProcessInfoVariableDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processInfoIsSupervisor**
> bool processInfoIsSupervisor($process_id)

This call checks if the user connected is supervisor of process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->processInfoIsSupervisor($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInfoApi->processInfoIsSupervisor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

