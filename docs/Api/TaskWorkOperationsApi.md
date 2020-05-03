# Swagger\Client\TaskWorkOperationsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taskWorkOperationsExecuteSignOperation**](TaskWorkOperationsApi.md#taskWorkOperationsExecuteSignOperation) | **POST** /api/TaskOperations/ExecuteSignOperation | 
[**taskWorkOperationsGetByTaskWorkId**](TaskWorkOperationsApi.md#taskWorkOperationsGetByTaskWorkId) | **GET** /api/TaskOperations/byTaskWork/{taskWorkId} | This call returns all the operations in a task work
[**taskWorkOperationsGetDocumentForSignOperation**](TaskWorkOperationsApi.md#taskWorkOperationsGetDocumentForSignOperation) | **GET** /api/TaskOperations/{taskWorkId}/signOperationInfo/{signOperationId} | 
[**taskWorkOperationsGetDynamicJobOperationsByExitCodeAndTaskWorkIds**](TaskWorkOperationsApi.md#taskWorkOperationsGetDynamicJobOperationsByExitCodeAndTaskWorkIds) | **POST** /api/TaskOperations/getdynamicjoboperations/exitcode | This call returns the dynamic job operation to execute for a taskwork list close action by an exit code
[**taskWorkOperationsGetFieldValuesByProcessVariable**](TaskWorkOperationsApi.md#taskWorkOperationsGetFieldValuesByProcessVariable) | **POST** /api/TaskOperations/{taskWorkId}/processvariable/{processVariableId}/getValues | This call returns the possibile values for a process variable (combo or table)
[**taskWorkOperationsGetFiltersByProcessVariables**](TaskWorkOperationsApi.md#taskWorkOperationsGetFiltersByProcessVariables) | **POST** /api/TaskOperations/processvariable/{processVariableId}/getFilters | This call returns the possibile filters for a table process variable
[**taskWorkOperationsGetProfessionalRoleByTaskIds**](TaskWorkOperationsApi.md#taskWorkOperationsGetProfessionalRoleByTaskIds) | **POST** /api/TaskOperations/professionalroleoperation | This call returns all professional role operations by multiple TaskWork
[**taskWorkOperationsGetProfessionalRoleOperationsByExitCodeAndTaskWorkIds**](TaskWorkOperationsApi.md#taskWorkOperationsGetProfessionalRoleOperationsByExitCodeAndTaskWorkIds) | **POST** /api/TaskOperations/getprofessionalroleoperations/exitcode | This call returns the professional role operation to execute for a taskwork list close action by an exit code
[**taskWorkOperationsGetSelectedUsersForDynamicJob**](TaskWorkOperationsApi.md#taskWorkOperationsGetSelectedUsersForDynamicJob) | **GET** /api/TaskOperations/dynamicjob/{dynamicJobUser}/byprocessid/{processId} | This call returns the selected users list for a dynamic job in a process
[**taskWorkOperationsGetUsersForDynamicJob**](TaskWorkOperationsApi.md#taskWorkOperationsGetUsersForDynamicJob) | **GET** /api/TaskOperations/dynamicjobusers | This call returns al possibile user for a dynamic job attribution
[**taskWorkOperationsGetUsersForProfessionalRoleSelection**](TaskWorkOperationsApi.md#taskWorkOperationsGetUsersForProfessionalRoleSelection) | **GET** /api/TaskOperations/professionalroleoperation/{professionalRoleId}/usersbytaskwork/{taskWorkId} | This call returns the professional role possibile users for a professional role operation
[**taskWorkOperationsSetDynamicJob**](TaskWorkOperationsApi.md#taskWorkOperationsSetDynamicJob) | **PUT** /api/TaskOperations/dynamicjob/{dynamicJobId}/taskwork/{taskWorkId} | This call sets the users for a process dynamic job
[**taskWorkOperationsSetDynamicJobMultiple**](TaskWorkOperationsApi.md#taskWorkOperationsSetDynamicJobMultiple) | **PUT** /api/TaskOperations/dynamicjobmultiple | This call sets the users for multiple process dynamic job
[**taskWorkOperationsSetProcessVariableValueByTaskWorkId**](TaskWorkOperationsApi.md#taskWorkOperationsSetProcessVariableValueByTaskWorkId) | **POST** /api/TaskOperations/{taskWorkId}/setprocessvariables | This call sets the values for the process variables
[**taskWorkOperationsSetProfessionalRoleByTaskIds**](TaskWorkOperationsApi.md#taskWorkOperationsSetProfessionalRoleByTaskIds) | **PUT** /api/TaskOperations/professionalroleoperation/{professionalRoleId}/{userToAssignId} | This call sets the professional roles users for multiple TaskWork Ids
[**taskWorkOperationsSetUsersForProfessionalRoleSelection**](TaskWorkOperationsApi.md#taskWorkOperationsSetUsersForProfessionalRoleSelection) | **PUT** /api/TaskOperations/professionalroleoperation/{professionalRoleId}/setuserbytaskwork/{taskWorkId}/{userId} | This call sets the user for a professional role operation
[**taskWorkOperationsTaskWorkCommandExecute**](TaskWorkOperationsApi.md#taskWorkOperationsTaskWorkCommandExecute) | **PUT** /api/TaskOperations/{taskWorkId}/taskworkcommand/{taskWorkCommandId}/execute | this call executes a command task operation
[**taskWorkOperationsUnSetProfessionalRoleSelection**](TaskWorkOperationsApi.md#taskWorkOperationsUnSetProfessionalRoleSelection) | **DELETE** /api/TaskOperations/professionalroleoperation/{professionalRoleId}/bytaskwork/{taskWorkId} | This call deletes the professional role actual value
[**taskWorkOperationsValidateVariabile**](TaskWorkOperationsApi.md#taskWorkOperationsValidateVariabile) | **POST** /api/TaskOperations/{taskWorkId}/validation | 


# **taskWorkOperationsExecuteSignOperation**
> taskWorkOperationsExecuteSignOperation($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \Swagger\Client\Model\TaskWorkSignOperationRequestDTO(); // \Swagger\Client\Model\TaskWorkSignOperationRequestDTO | 

try {
    $apiInstance->taskWorkOperationsExecuteSignOperation($request);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsExecuteSignOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Swagger\Client\Model\TaskWorkSignOperationRequestDTO**](../Model/TaskWorkSignOperationRequestDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetByTaskWorkId**
> \Swagger\Client\Model\TaskWorkOperationsDTO taskWorkOperationsGetByTaskWorkId($task_work_id)

This call returns all the operations in a task work

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Taskwork identifier

try {
    $result = $apiInstance->taskWorkOperationsGetByTaskWorkId($task_work_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetByTaskWorkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Taskwork identifier |

### Return type

[**\Swagger\Client\Model\TaskWorkOperationsDTO**](../Model/TaskWorkOperationsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetDocumentForSignOperation**
> \Swagger\Client\Model\SignDocumentDataDTO[] taskWorkOperationsGetDocumentForSignOperation($task_work_id, $sign_operation_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | 
$sign_operation_id = 56; // int | 

try {
    $result = $apiInstance->taskWorkOperationsGetDocumentForSignOperation($task_work_id, $sign_operation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetDocumentForSignOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**|  |
 **sign_operation_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\SignDocumentDataDTO[]**](../Model/SignDocumentDataDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetDynamicJobOperationsByExitCodeAndTaskWorkIds**
> \Swagger\Client\Model\TaskWorkDynamicJobOperationDTO[] taskWorkOperationsGetDynamicJobOperationsByExitCodeAndTaskWorkIds($task_exit_code)

This call returns the dynamic job operation to execute for a taskwork list close action by an exit code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_exit_code = new \Swagger\Client\Model\TaskExitCodeDTO(); // \Swagger\Client\Model\TaskExitCodeDTO | exit code for close action

try {
    $result = $apiInstance->taskWorkOperationsGetDynamicJobOperationsByExitCodeAndTaskWorkIds($task_exit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetDynamicJobOperationsByExitCodeAndTaskWorkIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_exit_code** | [**\Swagger\Client\Model\TaskExitCodeDTO**](../Model/TaskExitCodeDTO.md)| exit code for close action |

### Return type

[**\Swagger\Client\Model\TaskWorkDynamicJobOperationDTO[]**](../Model/TaskWorkDynamicJobOperationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetFieldValuesByProcessVariable**
> \Swagger\Client\Model\FieldValuesDTO taskWorkOperationsGetFieldValuesByProcessVariable($process_variable_id, $task_work_id, $process_variables)

This call returns the possibile values for a process variable (combo or table)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_variable_id = 56; // int | Id of the process variable
$task_work_id = 56; // int | Id of the task work
$process_variables = new \Swagger\Client\Model\VariablesValuesCriteriaDTO(); // \Swagger\Client\Model\VariablesValuesCriteriaDTO | Actual values of the process variables (for value dependant query)

try {
    $result = $apiInstance->taskWorkOperationsGetFieldValuesByProcessVariable($process_variable_id, $task_work_id, $process_variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetFieldValuesByProcessVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_variable_id** | **int**| Id of the process variable |
 **task_work_id** | **int**| Id of the task work |
 **process_variables** | [**\Swagger\Client\Model\VariablesValuesCriteriaDTO**](../Model/VariablesValuesCriteriaDTO.md)| Actual values of the process variables (for value dependant query) |

### Return type

[**\Swagger\Client\Model\FieldValuesDTO**](../Model/FieldValuesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetFiltersByProcessVariables**
> \Swagger\Client\Model\FieldFilterConcreteDTO taskWorkOperationsGetFiltersByProcessVariables($process_variable_id, $process_variables)

This call returns the possibile filters for a table process variable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_variable_id = 56; // int | Id of the process variable
$process_variables = new \Swagger\Client\Model\ProcessVariablesFieldsDTO(); // \Swagger\Client\Model\ProcessVariablesFieldsDTO | Actual values of the process variables (for value dependant query)

try {
    $result = $apiInstance->taskWorkOperationsGetFiltersByProcessVariables($process_variable_id, $process_variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetFiltersByProcessVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_variable_id** | **int**| Id of the process variable |
 **process_variables** | [**\Swagger\Client\Model\ProcessVariablesFieldsDTO**](../Model/ProcessVariablesFieldsDTO.md)| Actual values of the process variables (for value dependant query) |

### Return type

[**\Swagger\Client\Model\FieldFilterConcreteDTO**](../Model/FieldFilterConcreteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetProfessionalRoleByTaskIds**
> \Swagger\Client\Model\ProfessionalRoleOperationDTO[] taskWorkOperationsGetProfessionalRoleByTaskIds($task_work_ids)

This call returns all professional role operations by multiple TaskWork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_ids = array(new \Swagger\Client\Model\int[]()); // int[] | Ids of the TaskWorks

try {
    $result = $apiInstance->taskWorkOperationsGetProfessionalRoleByTaskIds($task_work_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetProfessionalRoleByTaskIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_ids** | **int[]**| Ids of the TaskWorks |

### Return type

[**\Swagger\Client\Model\ProfessionalRoleOperationDTO[]**](../Model/ProfessionalRoleOperationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetProfessionalRoleOperationsByExitCodeAndTaskWorkIds**
> \Swagger\Client\Model\ProfessionalRoleOperationDTO[] taskWorkOperationsGetProfessionalRoleOperationsByExitCodeAndTaskWorkIds($task_exit_code)

This call returns the professional role operation to execute for a taskwork list close action by an exit code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_exit_code = new \Swagger\Client\Model\TaskExitCodeDTO(); // \Swagger\Client\Model\TaskExitCodeDTO | exit code for close action

try {
    $result = $apiInstance->taskWorkOperationsGetProfessionalRoleOperationsByExitCodeAndTaskWorkIds($task_exit_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetProfessionalRoleOperationsByExitCodeAndTaskWorkIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_exit_code** | [**\Swagger\Client\Model\TaskExitCodeDTO**](../Model/TaskExitCodeDTO.md)| exit code for close action |

### Return type

[**\Swagger\Client\Model\ProfessionalRoleOperationDTO[]**](../Model/ProfessionalRoleOperationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetSelectedUsersForDynamicJob**
> \Swagger\Client\Model\UserCompleteDTO[] taskWorkOperationsGetSelectedUsersForDynamicJob($dynamic_job_user, $process_id)

This call returns the selected users list for a dynamic job in a process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dynamic_job_user = 56; // int | Id of the dynamic job
$process_id = 56; // int | Id of the process

try {
    $result = $apiInstance->taskWorkOperationsGetSelectedUsersForDynamicJob($dynamic_job_user, $process_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetSelectedUsersForDynamicJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic_job_user** | **int**| Id of the dynamic job |
 **process_id** | **int**| Id of the process |

### Return type

[**\Swagger\Client\Model\UserCompleteDTO[]**](../Model/UserCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetUsersForDynamicJob**
> \Swagger\Client\Model\UserCompleteDTO[] taskWorkOperationsGetUsersForDynamicJob()

This call returns al possibile user for a dynamic job attribution

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->taskWorkOperationsGetUsersForDynamicJob();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetUsersForDynamicJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\UserCompleteDTO[]**](../Model/UserCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsGetUsersForProfessionalRoleSelection**
> \Swagger\Client\Model\UserCompleteDTO[] taskWorkOperationsGetUsersForProfessionalRoleSelection($task_work_id, $professional_role_id)

This call returns the professional role possibile users for a professional role operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Id of the task work
$professional_role_id = 56; // int | Id of the professional role

try {
    $result = $apiInstance->taskWorkOperationsGetUsersForProfessionalRoleSelection($task_work_id, $professional_role_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsGetUsersForProfessionalRoleSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Id of the task work |
 **professional_role_id** | **int**| Id of the professional role |

### Return type

[**\Swagger\Client\Model\UserCompleteDTO[]**](../Model/UserCompleteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsSetDynamicJob**
> taskWorkOperationsSetDynamicJob($dynamic_job_id, $task_work_id, $users)

This call sets the users for a process dynamic job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dynamic_job_id = 56; // int | Id of the dynamic job
$task_work_id = 56; // int | Id of the task work
$users = array(new \Swagger\Client\Model\UserCompleteDTO()); // \Swagger\Client\Model\UserCompleteDTO[] | users list to add

try {
    $apiInstance->taskWorkOperationsSetDynamicJob($dynamic_job_id, $task_work_id, $users);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsSetDynamicJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic_job_id** | **int**| Id of the dynamic job |
 **task_work_id** | **int**| Id of the task work |
 **users** | [**\Swagger\Client\Model\UserCompleteDTO[]**](../Model/UserCompleteDTO.md)| users list to add |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsSetDynamicJobMultiple**
> taskWorkOperationsSetDynamicJobMultiple($dynamic_job_multiple_set_request)

This call sets the users for multiple process dynamic job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dynamic_job_multiple_set_request = new \Swagger\Client\Model\DynamicJobMultipleSetRequestDTO(); // \Swagger\Client\Model\DynamicJobMultipleSetRequestDTO | Request for multiple dynamic job set

try {
    $apiInstance->taskWorkOperationsSetDynamicJobMultiple($dynamic_job_multiple_set_request);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsSetDynamicJobMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dynamic_job_multiple_set_request** | [**\Swagger\Client\Model\DynamicJobMultipleSetRequestDTO**](../Model/DynamicJobMultipleSetRequestDTO.md)| Request for multiple dynamic job set |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsSetProcessVariableValueByTaskWorkId**
> taskWorkOperationsSetProcessVariableValueByTaskWorkId($task_work_id, $process_variables)

This call sets the values for the process variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Id of the task work
$process_variables = new \Swagger\Client\Model\ProcessVariablesFieldsDTO(); // \Swagger\Client\Model\ProcessVariablesFieldsDTO | Process variables informations

try {
    $apiInstance->taskWorkOperationsSetProcessVariableValueByTaskWorkId($task_work_id, $process_variables);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsSetProcessVariableValueByTaskWorkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Id of the task work |
 **process_variables** | [**\Swagger\Client\Model\ProcessVariablesFieldsDTO**](../Model/ProcessVariablesFieldsDTO.md)| Process variables informations |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsSetProfessionalRoleByTaskIds**
> taskWorkOperationsSetProfessionalRoleByTaskIds($professional_role_id, $user_to_assign_id, $task_work_ids)

This call sets the professional roles users for multiple TaskWork Ids

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$professional_role_id = 56; // int | Id of the professional role
$user_to_assign_id = 56; // int | If of user
$task_work_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of taskwork id

try {
    $apiInstance->taskWorkOperationsSetProfessionalRoleByTaskIds($professional_role_id, $user_to_assign_id, $task_work_ids);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsSetProfessionalRoleByTaskIds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **professional_role_id** | **int**| Id of the professional role |
 **user_to_assign_id** | **int**| If of user |
 **task_work_ids** | **int[]**| List of taskwork id |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsSetUsersForProfessionalRoleSelection**
> taskWorkOperationsSetUsersForProfessionalRoleSelection($task_work_id, $professional_role_id, $user_id)

This call sets the user for a professional role operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Id of the task work
$professional_role_id = 56; // int | Id of the professional role
$user_id = 56; // int | Id of the user

try {
    $apiInstance->taskWorkOperationsSetUsersForProfessionalRoleSelection($task_work_id, $professional_role_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsSetUsersForProfessionalRoleSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Id of the task work |
 **professional_role_id** | **int**| Id of the professional role |
 **user_id** | **int**| Id of the user |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsTaskWorkCommandExecute**
> taskWorkOperationsTaskWorkCommandExecute($task_work_id, $task_work_command_id)

this call executes a command task operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | Task id of the operation
$task_work_command_id = 56; // int | Id of the command operation

try {
    $apiInstance->taskWorkOperationsTaskWorkCommandExecute($task_work_id, $task_work_command_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsTaskWorkCommandExecute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**| Task id of the operation |
 **task_work_command_id** | **int**| Id of the command operation |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsUnSetProfessionalRoleSelection**
> taskWorkOperationsUnSetProfessionalRoleSelection($professional_role_id, $task_work_id)

This call deletes the professional role actual value

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$professional_role_id = 56; // int | Id of the professional role
$task_work_id = 56; // int | Id of the task work

try {
    $apiInstance->taskWorkOperationsUnSetProfessionalRoleSelection($professional_role_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsUnSetProfessionalRoleSelection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **professional_role_id** | **int**| Id of the professional role |
 **task_work_id** | **int**| Id of the task work |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taskWorkOperationsValidateVariabile**
> \Swagger\Client\Model\ValidationFieldResultDTO taskWorkOperationsValidateVariabile($task_work_id, $validation_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TaskWorkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_work_id = 56; // int | 
$validation_data = new \Swagger\Client\Model\ProcessVariableValidationDTO(); // \Swagger\Client\Model\ProcessVariableValidationDTO | 

try {
    $result = $apiInstance->taskWorkOperationsValidateVariabile($task_work_id, $validation_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskWorkOperationsApi->taskWorkOperationsValidateVariabile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_work_id** | **int**|  |
 **validation_data** | [**\Swagger\Client\Model\ProcessVariableValidationDTO**](../Model/ProcessVariableValidationDTO.md)|  |

### Return type

[**\Swagger\Client\Model\ValidationFieldResultDTO**](../Model/ValidationFieldResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

