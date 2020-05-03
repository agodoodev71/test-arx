# Swagger\Client\QueueApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queueAdminDeleteQueue**](QueueApi.md#queueAdminDeleteQueue) | **DELETE** /api/Queue/AdminQueue/{queueId} | This call checks if to delete a queue (administrator required)
[**queueAdminGetQueueAggregationList**](QueueApi.md#queueAdminGetQueueAggregationList) | **POST** /api/Queue/AdminGetQueueAggregatedList | This call returns the queue aggregated information list  (administrator required)
[**queueAdminGetQueueAggregationList_0**](QueueApi.md#queueAdminGetQueueAggregationList_0) | **GET** /api/Queue/AdminQueueAggregated/{queueId} | This call returns the specific queue aggregated information (administrator required)
[**queueAdminGetQueueEndJobInfo**](QueueApi.md#queueAdminGetQueueEndJobInfo) | **GET** /api/Queue/AdminEndJobInfo/{queueId} | This call returns the end job information (administrator required)
[**queueAdminGetQueueJobInfo**](QueueApi.md#queueAdminGetQueueJobInfo) | **POST** /api/Queue/AdminGetQueueJobInfoList | This call returns the job information list (administrator required)
[**queueAdminGetQueueList**](QueueApi.md#queueAdminGetQueueList) | **POST** /api/Queue/AdminGetQueueList | This call returns all queue (administrator required)
[**queueAdminGetQueueWorkJobInfo**](QueueApi.md#queueAdminGetQueueWorkJobInfo) | **GET** /api/Queue/AdminWorkJobInfo/{queueId} | This call returns a work job information (administrator required)
[**queueDeleteJob**](QueueApi.md#queueDeleteJob) | **DELETE** /api/Queue/Job/{jobId} | This call checks if to delete a queue job
[**queueDeleteQueue**](QueueApi.md#queueDeleteQueue) | **DELETE** /api/Queue/Queue/{queueId} | This call checks if to delete a queue
[**queueEnqueuedJob**](QueueApi.md#queueEnqueuedJob) | **POST** /api/Queue/Enqueue/{jobId} | This call checks if to equeue a job is in state Scheduled or Failed
[**queueGetJobInfo**](QueueApi.md#queueGetJobInfo) | **GET** /api/Queue/JobInfo/{jobId} | This call returns a job info
[**queueGetQueueAggregationList**](QueueApi.md#queueGetQueueAggregationList) | **POST** /api/Queue/GetQueueAggregatedList | This call returns the queue aggregated information list
[**queueGetQueueAggregationList_0**](QueueApi.md#queueGetQueueAggregationList_0) | **GET** /api/Queue/QueueAggregated/{queueId} | This call returns the specific queue aggregated information
[**queueGetQueueAggregationStatusInfo**](QueueApi.md#queueGetQueueAggregationStatusInfo) | **GET** /api/Queue/QueueAggregationStatusInfo/{queueId} | This call returns the specific queue aggregated status
[**queueGetQueueEndJobInfo**](QueueApi.md#queueGetQueueEndJobInfo) | **GET** /api/Queue/EndJobInfo/{queueId} | This call returns the end job information
[**queueGetQueueJobInfo**](QueueApi.md#queueGetQueueJobInfo) | **POST** /api/Queue/GetQueueJobInfoList | This call returns the job info information list
[**queueGetQueueJobSucceededResultList**](QueueApi.md#queueGetQueueJobSucceededResultList) | **POST** /api/Queue/GetQueueJobSucceededResultList | Gets the job result of specific queue
[**queueGetQueueList**](QueueApi.md#queueGetQueueList) | **POST** /api/Queue/GetQueueList | This call returns all jobs of queue
[**queueGetQueueWorkItemCount**](QueueApi.md#queueGetQueueWorkItemCount) | **GET** /api/Queue/WorkItemCount/{queueId} | This call returns the counts of work item for a queue
[**queueGetQueueWorkItemLeftCount**](QueueApi.md#queueGetQueueWorkItemLeftCount) | **GET** /api/Queue/WorkItemLeftCount/{queueId} | This call returns the counts how many work item jobs left
[**queueGetQueueWorkJobInfo**](QueueApi.md#queueGetQueueWorkJobInfo) | **GET** /api/Queue/WorkJobInfo/{queueId} | This call returns a work job information


# **queueAdminDeleteQueue**
> bool queueAdminDeleteQueue($queue_id)

This call checks if to delete a queue (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueAdminDeleteQueue($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminDeleteQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueAdminGetQueueAggregationList**
> \Swagger\Client\Model\QueueAggregationInfoDto[] queueAdminGetQueueAggregationList($get_queue_info)

This call returns the queue aggregated information list  (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_queue_info = new \Swagger\Client\Model\GetQueueInfoDto(); // \Swagger\Client\Model\GetQueueInfoDto | Queue information

try {
    $result = $apiInstance->queueAdminGetQueueAggregationList($get_queue_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminGetQueueAggregationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_queue_info** | [**\Swagger\Client\Model\GetQueueInfoDto**](../Model/GetQueueInfoDto.md)| Queue information |

### Return type

[**\Swagger\Client\Model\QueueAggregationInfoDto[]**](../Model/QueueAggregationInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueAdminGetQueueAggregationList_0**
> \Swagger\Client\Model\QueueAggregationInfoDto queueAdminGetQueueAggregationList_0($queue_id)

This call returns the specific queue aggregated information (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueAdminGetQueueAggregationList_0($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminGetQueueAggregationList_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueAggregationInfoDto**](../Model/QueueAggregationInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueAdminGetQueueEndJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto queueAdminGetQueueEndJobInfo($queue_id)

This call returns the end job information (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueAdminGetQueueEndJobInfo($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminGetQueueEndJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueAdminGetQueueJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto[] queueAdminGetQueueJobInfo($queue_id, $get_queue_job_info)

This call returns the job information list (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier
$get_queue_job_info = new \Swagger\Client\Model\GetQueueJobInfoDto(); // \Swagger\Client\Model\GetQueueJobInfoDto | Job Information

try {
    $result = $apiInstance->queueAdminGetQueueJobInfo($queue_id, $get_queue_job_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminGetQueueJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |
 **get_queue_job_info** | [**\Swagger\Client\Model\GetQueueJobInfoDto**](../Model/GetQueueJobInfoDto.md)| Job Information |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto[]**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueAdminGetQueueList**
> \Swagger\Client\Model\QueueJobInfoDto[] queueAdminGetQueueList($get_queue_info)

This call returns all queue (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_queue_info = new \Swagger\Client\Model\GetQueueInfoDto(); // \Swagger\Client\Model\GetQueueInfoDto | Queue information

try {
    $result = $apiInstance->queueAdminGetQueueList($get_queue_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminGetQueueList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_queue_info** | [**\Swagger\Client\Model\GetQueueInfoDto**](../Model/GetQueueInfoDto.md)| Queue information |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto[]**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueAdminGetQueueWorkJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto queueAdminGetQueueWorkJobInfo($queue_id)

This call returns a work job information (administrator required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueAdminGetQueueWorkJobInfo($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueAdminGetQueueWorkJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueDeleteJob**
> bool queueDeleteJob($job_id)

This call checks if to delete a queue job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | Job Identifier

try {
    $result = $apiInstance->queueDeleteJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueDeleteJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Job Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueDeleteQueue**
> bool queueDeleteQueue($queue_id)

This call checks if to delete a queue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueDeleteQueue($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueDeleteQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueEnqueuedJob**
> bool queueEnqueuedJob($job_id)

This call checks if to equeue a job is in state Scheduled or Failed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | Job Identifier

try {
    $result = $apiInstance->queueEnqueuedJob($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueEnqueuedJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Job Identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto queueGetJobInfo($job_id)

This call returns a job info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$job_id = "job_id_example"; // string | Job Identifier

try {
    $result = $apiInstance->queueGetJobInfo($job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| Job Identifier |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueAggregationList**
> \Swagger\Client\Model\QueueAggregationInfoDto[] queueGetQueueAggregationList($get_queue_info)

This call returns the queue aggregated information list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_queue_info = new \Swagger\Client\Model\GetQueueInfoDto(); // \Swagger\Client\Model\GetQueueInfoDto | Queue information

try {
    $result = $apiInstance->queueGetQueueAggregationList($get_queue_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueAggregationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_queue_info** | [**\Swagger\Client\Model\GetQueueInfoDto**](../Model/GetQueueInfoDto.md)| Queue information |

### Return type

[**\Swagger\Client\Model\QueueAggregationInfoDto[]**](../Model/QueueAggregationInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueAggregationList_0**
> \Swagger\Client\Model\QueueAggregationInfoDto queueGetQueueAggregationList_0($queue_id)

This call returns the specific queue aggregated information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueGetQueueAggregationList_0($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueAggregationList_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueAggregationInfoDto**](../Model/QueueAggregationInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueAggregationStatusInfo**
> \Swagger\Client\Model\QueueAggregationStatusInfoDto queueGetQueueAggregationStatusInfo($queue_id)

This call returns the specific queue aggregated status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueGetQueueAggregationStatusInfo($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueAggregationStatusInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueAggregationStatusInfoDto**](../Model/QueueAggregationStatusInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueEndJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto queueGetQueueEndJobInfo($queue_id)

This call returns the end job information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueGetQueueEndJobInfo($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueEndJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto[] queueGetQueueJobInfo($queue_id, $get_queue_job_info)

This call returns the job info information list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier
$get_queue_job_info = new \Swagger\Client\Model\GetQueueJobInfoDto(); // \Swagger\Client\Model\GetQueueJobInfoDto | Job Information

try {
    $result = $apiInstance->queueGetQueueJobInfo($queue_id, $get_queue_job_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |
 **get_queue_job_info** | [**\Swagger\Client\Model\GetQueueJobInfoDto**](../Model/GetQueueJobInfoDto.md)| Job Information |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto[]**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueJobSucceededResultList**
> \Swagger\Client\Model\JobResultDto[] queueGetQueueJobSucceededResultList($queue_id, $get_queue_job_info)

Gets the job result of specific queue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | 
$get_queue_job_info = new \Swagger\Client\Model\GetQueueJobInfoDto(); // \Swagger\Client\Model\GetQueueJobInfoDto | 

try {
    $result = $apiInstance->queueGetQueueJobSucceededResultList($queue_id, $get_queue_job_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueJobSucceededResultList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**|  |
 **get_queue_job_info** | [**\Swagger\Client\Model\GetQueueJobInfoDto**](../Model/GetQueueJobInfoDto.md)|  |

### Return type

[**\Swagger\Client\Model\JobResultDto[]**](../Model/JobResultDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueList**
> \Swagger\Client\Model\QueueJobInfoDto[] queueGetQueueList($get_queue_info)

This call returns all jobs of queue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_queue_info = new \Swagger\Client\Model\GetQueueInfoDto(); // \Swagger\Client\Model\GetQueueInfoDto | Queue information

try {
    $result = $apiInstance->queueGetQueueList($get_queue_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_queue_info** | [**\Swagger\Client\Model\GetQueueInfoDto**](../Model/GetQueueInfoDto.md)| Queue information |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto[]**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueWorkItemCount**
> int queueGetQueueWorkItemCount($queue_id)

This call returns the counts of work item for a queue

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueGetQueueWorkItemCount($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueWorkItemCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueWorkItemLeftCount**
> int queueGetQueueWorkItemLeftCount($queue_id)

This call returns the counts how many work item jobs left

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueGetQueueWorkItemLeftCount($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueWorkItemLeftCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

**int**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queueGetQueueWorkJobInfo**
> \Swagger\Client\Model\QueueJobInfoDto queueGetQueueWorkJobInfo($queue_id)

This call returns a work job information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\QueueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$queue_id = "queue_id_example"; // string | Queue Identifier

try {
    $result = $apiInstance->queueGetQueueWorkJobInfo($queue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->queueGetQueueWorkJobInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **queue_id** | **string**| Queue Identifier |

### Return type

[**\Swagger\Client\Model\QueueJobInfoDto**](../Model/QueueJobInfoDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

