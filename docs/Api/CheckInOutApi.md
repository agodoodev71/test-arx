# Swagger\Client\CheckInOutApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkInOutCheckIn**](CheckInOutApi.md#checkInOutCheckIn) | **POST** /api/CheckInOut/checkIn/{docnumber}/{fileId}/{option}/{undoCheckOut} | This call set file and remove document from checkout list
[**checkInOutCheckInForTask**](CheckInOutApi.md#checkInOutCheckInForTask) | **POST** /api/CheckInOut/checkInForTask/{processDocId}/{taskWorkId}/{fileId} | This call set file and remove document from checkout list when document is used in taskwork
[**checkInOutCheckOut**](CheckInOutApi.md#checkInOutCheckOut) | **PUT** /api/CheckInOut/checkOut/{docNumber} | This call allows checkout document
[**checkInOutCheckOutForTask**](CheckInOutApi.md#checkInOutCheckOutForTask) | **PUT** /api/CheckInOut/checkOutTask/{processDocId}/{taskWorkId} | This call allows checkout document for task
[**checkInOutGetCheckOutProfilesList**](CheckInOutApi.md#checkInOutGetCheckOutProfilesList) | **POST** /api/CheckInOut | This call allows the retrieval of the default profile for archiving based on user connected
[**checkInOutIsAlreadyInCheckOutByUserConnected**](CheckInOutApi.md#checkInOutIsAlreadyInCheckOutByUserConnected) | **POST** /api/CheckInOut/isInCheckOut/{docnumber} | This call allows to know if the document is in checkout
[**checkInOutUndoCheckOut**](CheckInOutApi.md#checkInOutUndoCheckOut) | **PUT** /api/CheckInOut/undoCheckOut | This call allows undo checkout document
[**checkInOutUndoCheckOutForTask**](CheckInOutApi.md#checkInOutUndoCheckOutForTask) | **PUT** /api/CheckInOut/undoCheckOutForTask/{processDocId}/{taskWorkId} | This call allows undo checkout document for task


# **checkInOutCheckIn**
> checkInOutCheckIn($docnumber, $file_id, $option, $undo_check_out)

This call set file and remove document from checkout list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Identifier of the document you want to checkin
$file_id = "file_id_example"; // string | Identifier of file you want to upload
$option = 56; // int | State option
$undo_check_out = true; // bool | If import fails execute undo checkout

try {
    $apiInstance->checkInOutCheckIn($docnumber, $file_id, $option, $undo_check_out);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutCheckIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Identifier of the document you want to checkin |
 **file_id** | **string**| Identifier of file you want to upload |
 **option** | **int**| State option |
 **undo_check_out** | **bool**| If import fails execute undo checkout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutCheckInForTask**
> checkInOutCheckInForTask($process_doc_id, $task_work_id, $file_id)

This call set file and remove document from checkout list when document is used in taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of the document you want to checkin
$task_work_id = 56; // int | Identifier of the document you want to checkin
$file_id = "file_id_example"; // string | Identifier of file you want to upload

try {
    $apiInstance->checkInOutCheckInForTask($process_doc_id, $task_work_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutCheckInForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| Identifier of the document you want to checkin |
 **task_work_id** | **int**| Identifier of the document you want to checkin |
 **file_id** | **string**| Identifier of file you want to upload |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutCheckOut**
> checkInOutCheckOut($doc_number)

This call allows checkout document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | The identifier of document to checkout

try {
    $apiInstance->checkInOutCheckOut($doc_number);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutCheckOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_number** | **int**| The identifier of document to checkout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutCheckOutForTask**
> checkInOutCheckOutForTask($process_doc_id, $task_work_id)

This call allows checkout document for task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | The process document identifier of profile to checkout
$task_work_id = 56; // int | The taskWork identifier for the profile to checkout

try {
    $apiInstance->checkInOutCheckOutForTask($process_doc_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutCheckOutForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| The process document identifier of profile to checkout |
 **task_work_id** | **int**| The taskWork identifier for the profile to checkout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutGetCheckOutProfilesList**
> \Swagger\Client\Model\RowSearchResult[] checkInOutGetCheckOutProfilesList($select_dto)

This call allows the retrieval of the default profile for archiving based on user connected

This method is deprecated. Use api/v2/CheckInOut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Seleted data for search

try {
    $result = $apiInstance->checkInOutGetCheckOutProfilesList($select_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutGetCheckOutProfilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select_dto** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Seleted data for search |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutIsAlreadyInCheckOutByUserConnected**
> bool checkInOutIsAlreadyInCheckOutByUserConnected($docnumber)

This call allows to know if the document is in checkout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->checkInOutIsAlreadyInCheckOutByUserConnected($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutIsAlreadyInCheckOutByUserConnected: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutUndoCheckOut**
> checkInOutUndoCheckOut($doc_numbers)

This call allows undo checkout document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_numbers = array(new \Swagger\Client\Model\int[]()); // int[] | Array of document identifiers

try {
    $apiInstance->checkInOutUndoCheckOut($doc_numbers);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutUndoCheckOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **doc_numbers** | **int[]**| Array of document identifiers |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutUndoCheckOutForTask**
> checkInOutUndoCheckOutForTask($process_doc_id, $task_work_id)

This call allows undo checkout document for task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | The process document identifier of profile to checkout
$task_work_id = 56; // int | The taskWork identifier for the profile to checkout

try {
    $apiInstance->checkInOutUndoCheckOutForTask($process_doc_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutApi->checkInOutUndoCheckOutForTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_doc_id** | **int**| The process document identifier of profile to checkout |
 **task_work_id** | **int**| The taskWork identifier for the profile to checkout |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

