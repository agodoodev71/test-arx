# Swagger\Client\WorkflowApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**workflowCanStartByDocnumber**](WorkflowApi.md#workflowCanStartByDocnumber) | **GET** /api/Workflow/CanStartByDocnumber/{docnumber} | Check if a new workflow can start
[**workflowDeleteWorkflow**](WorkflowApi.md#workflowDeleteWorkflow) | **DELETE** /api/Workflow/delete/{processId}/{keepHistory} | This call deletes instance of workflow
[**workflowFreeUserConstraint**](WorkflowApi.md#workflowFreeUserConstraint) | **PUT** /api/Workflow/FreeUserConstraint/{processId} | This call removes the user checkout
[**workflowGetAllEventsForManualStarts**](WorkflowApi.md#workflowGetAllEventsForManualStarts) | **POST** /api/Workflow/userevents | This call returns all available events for manual start a workflow by the user
[**workflowGetEventsForManualStarts**](WorkflowApi.md#workflowGetEventsForManualStarts) | **POST** /api/Workflow/events | This call returns all available events for manual start a workflow on a list of profiles
[**workflowGetTasksExternalIds**](WorkflowApi.md#workflowGetTasksExternalIds) | **GET** /api/Workflow/externalids | This call retruns all external identifier of tasks
[**workflowGetWorkflowInfoByDocnumber**](WorkflowApi.md#workflowGetWorkflowInfoByDocnumber) | **GET** /api/Workflow/bydocnumber/{docnumber}/history | This call returns all workflow associated with a document
[**workflowGetWorkflowInfoByProcessId**](WorkflowApi.md#workflowGetWorkflowInfoByProcessId) | **GET** /api/Workflow/{processId}/history | This call returns the workflow information of process
[**workflowGetWorkflows**](WorkflowApi.md#workflowGetWorkflows) | **GET** /api/Workflow | This call returns all workflow configured
[**workflowRemoveProfileFromTask**](WorkflowApi.md#workflowRemoveProfileFromTask) | **DELETE** /api/Workflow/processdoc/{processDocId} | This call removes a document from a workflow process
[**workflowStopWorkflow**](WorkflowApi.md#workflowStopWorkflow) | **PUT** /api/Workflow/stop/{processId} | This call stops instance of workflow
[**workflowWorkflowManualStart**](WorkflowApi.md#workflowWorkflowManualStart) | **PUT** /api/Workflow/start/{docnumber}/{workFlowEventId} | This call starts a new instance of workflow on a document
[**workflowWorkflowManualStartWithoutDocnumber**](WorkflowApi.md#workflowWorkflowManualStartWithoutDocnumber) | **PUT** /api/Workflow/start/byevent/{workFlowEventId} | This call starts a new instance of workflow without document


# **workflowCanStartByDocnumber**
> bool workflowCanStartByDocnumber($docnumber)

Check if a new workflow can start

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | 

try {
    $result = $apiInstance->workflowCanStartByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowCanStartByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**|  |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowDeleteWorkflow**
> workflowDeleteWorkflow($process_id, $keep_history)

This call deletes instance of workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier
$keep_history = true; // bool | false if the hostiry must be deleted

try {
    $apiInstance->workflowDeleteWorkflow($process_id, $keep_history);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowDeleteWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |
 **keep_history** | **bool**| false if the hostiry must be deleted |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowFreeUserConstraint**
> workflowFreeUserConstraint($process_id)

This call removes the user checkout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process Id

try {
    $apiInstance->workflowFreeUserConstraint($process_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowFreeUserConstraint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process Id |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowGetAllEventsForManualStarts**
> \Swagger\Client\Model\WorkFlowEventDTO[] workflowGetAllEventsForManualStarts()

This call returns all available events for manual start a workflow by the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->workflowGetAllEventsForManualStarts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowGetAllEventsForManualStarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WorkFlowEventDTO[]**](../Model/WorkFlowEventDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowGetEventsForManualStarts**
> \Swagger\Client\Model\WorkFlowEventDTO[] workflowGetEventsForManualStarts($docnumbers)

This call returns all available events for manual start a workflow on a list of profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | List of document identifier

try {
    $result = $apiInstance->workflowGetEventsForManualStarts($docnumbers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowGetEventsForManualStarts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumbers** | **int[]**| List of document identifier |

### Return type

[**\Swagger\Client\Model\WorkFlowEventDTO[]**](../Model/WorkFlowEventDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowGetTasksExternalIds**
> string[] workflowGetTasksExternalIds()

This call retruns all external identifier of tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->workflowGetTasksExternalIds();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowGetTasksExternalIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowGetWorkflowInfoByDocnumber**
> \Swagger\Client\Model\WorkflowInfoDTO[] workflowGetWorkflowInfoByDocnumber($docnumber)

This call returns all workflow associated with a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document Idenfier

try {
    $result = $apiInstance->workflowGetWorkflowInfoByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowGetWorkflowInfoByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document Idenfier |

### Return type

[**\Swagger\Client\Model\WorkflowInfoDTO[]**](../Model/WorkflowInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowGetWorkflowInfoByProcessId**
> \Swagger\Client\Model\WorkflowInfoDTO workflowGetWorkflowInfoByProcessId($process_id)

This call returns the workflow information of process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $result = $apiInstance->workflowGetWorkflowInfoByProcessId($process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowGetWorkflowInfoByProcessId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

[**\Swagger\Client\Model\WorkflowInfoDTO**](../Model/WorkflowInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowGetWorkflows**
> \Swagger\Client\Model\WorkflowDTO[] workflowGetWorkflows()

This call returns all workflow configured

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->workflowGetWorkflows();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowGetWorkflows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WorkflowDTO[]**](../Model/WorkflowDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowRemoveProfileFromTask**
> workflowRemoveProfileFromTask($process_doc_id)

This call removes a document from a workflow process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of process document

try {
    $apiInstance->workflowRemoveProfileFromTask($process_doc_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowRemoveProfileFromTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of process document |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowStopWorkflow**
> workflowStopWorkflow($process_id)

This call stops instance of workflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_id = 56; // int | Process identifier

try {
    $apiInstance->workflowStopWorkflow($process_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowStopWorkflow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_id** | **int**| Process identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowWorkflowManualStart**
> workflowWorkflowManualStart($docnumber, $work_flow_event_id)

This call starts a new instance of workflow on a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier to apply workflow
$work_flow_event_id = 56; // int | Workflow event identifier

try {
    $apiInstance->workflowWorkflowManualStart($docnumber, $work_flow_event_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowWorkflowManualStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier to apply workflow |
 **work_flow_event_id** | **int**| Workflow event identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflowWorkflowManualStartWithoutDocnumber**
> workflowWorkflowManualStartWithoutDocnumber($work_flow_event_id)

This call starts a new instance of workflow without document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\WorkflowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$work_flow_event_id = 56; // int | Workflow event identifier

try {
    $apiInstance->workflowWorkflowManualStartWithoutDocnumber($work_flow_event_id);
} catch (Exception $e) {
    echo 'Exception when calling WorkflowApi->workflowWorkflowManualStartWithoutDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **work_flow_event_id** | **int**| Workflow event identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

