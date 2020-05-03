# Swagger\Client\CheckInOutV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkInOutV2CheckIn**](CheckInOutV2Api.md#checkInOutV2CheckIn) | **POST** /api/v2/CheckInOut/checkIn/{docnumber}/{fileId}/{option}/{undoCheckOut} | This call set file and remove document from checkout list
[**checkInOutV2CheckInForTask**](CheckInOutV2Api.md#checkInOutV2CheckInForTask) | **POST** /api/v2/CheckInOut/checkInForTask/{processDocId}/{taskWorkId}/{fileId} | This call set file and remove document from checkout list when document is used in taskwork
[**checkInOutV2CheckOut**](CheckInOutV2Api.md#checkInOutV2CheckOut) | **PUT** /api/v2/CheckInOut/checkOut/{docNumber} | This call allows checkout document
[**checkInOutV2CheckOutForTask**](CheckInOutV2Api.md#checkInOutV2CheckOutForTask) | **PUT** /api/v2/CheckInOut/checkOutTask/{processDocId}/{taskWorkId} | This call allows checkout document for task
[**checkInOutV2GetCheckOutProfilesList**](CheckInOutV2Api.md#checkInOutV2GetCheckOutProfilesList) | **POST** /api/v2/CheckInOut | This call allows the retrieval of the default profile for archiving based on user connected.  This call could not be compatible with some programming language, in this case use the call api/CheckInOut
[**checkInOutV2IsAlreadyInCheckOutByUserConnected**](CheckInOutV2Api.md#checkInOutV2IsAlreadyInCheckOutByUserConnected) | **POST** /api/v2/CheckInOut/isInCheckOut/{docnumber} | This call allows to know if the document is in checkout
[**checkInOutV2UndoCheckOut**](CheckInOutV2Api.md#checkInOutV2UndoCheckOut) | **PUT** /api/v2/CheckInOut/undoCheckOut | This call allows undo checkout document
[**checkInOutV2UndoCheckOutForTask**](CheckInOutV2Api.md#checkInOutV2UndoCheckOutForTask) | **PUT** /api/v2/CheckInOut/undoCheckOutForTask/{processDocId}/{taskWorkId} | This call allows undo checkout document for task


# **checkInOutV2CheckIn**
> checkInOutV2CheckIn($docnumber, $file_id, $option, $undo_check_out)

This call set file and remove document from checkout list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
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
    $apiInstance->checkInOutV2CheckIn($docnumber, $file_id, $option, $undo_check_out);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2CheckIn: ', $e->getMessage(), PHP_EOL;
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

# **checkInOutV2CheckInForTask**
> checkInOutV2CheckInForTask($process_doc_id, $task_work_id, $file_id)

This call set file and remove document from checkout list when document is used in taskwork

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | Identifier of the document you want to checkin
$task_work_id = 56; // int | Identifier of the document you want to checkin
$file_id = "file_id_example"; // string | Identifier of file you want to upload

try {
    $apiInstance->checkInOutV2CheckInForTask($process_doc_id, $task_work_id, $file_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2CheckInForTask: ', $e->getMessage(), PHP_EOL;
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

# **checkInOutV2CheckOut**
> checkInOutV2CheckOut($doc_number)

This call allows checkout document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_number = 56; // int | The identifier of document to checkout

try {
    $apiInstance->checkInOutV2CheckOut($doc_number);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2CheckOut: ', $e->getMessage(), PHP_EOL;
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

# **checkInOutV2CheckOutForTask**
> checkInOutV2CheckOutForTask($process_doc_id, $task_work_id)

This call allows checkout document for task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | The process document identifier of profile to checkout
$task_work_id = 56; // int | The taskWork identifier for the profile to checkout

try {
    $apiInstance->checkInOutV2CheckOutForTask($process_doc_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2CheckOutForTask: ', $e->getMessage(), PHP_EOL;
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

# **checkInOutV2GetCheckOutProfilesList**
> object checkInOutV2GetCheckOutProfilesList($select_dto)

This call allows the retrieval of the default profile for archiving based on user connected.  This call could not be compatible with some programming language, in this case use the call api/CheckInOut

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_dto = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | Seleted data for search

try {
    $result = $apiInstance->checkInOutV2GetCheckOutProfilesList($select_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2GetCheckOutProfilesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select_dto** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| Seleted data for search |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkInOutV2IsAlreadyInCheckOutByUserConnected**
> bool checkInOutV2IsAlreadyInCheckOutByUserConnected($docnumber)

This call allows to know if the document is in checkout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->checkInOutV2IsAlreadyInCheckOutByUserConnected($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2IsAlreadyInCheckOutByUserConnected: ', $e->getMessage(), PHP_EOL;
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

# **checkInOutV2UndoCheckOut**
> checkInOutV2UndoCheckOut($doc_numbers)

This call allows undo checkout document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_numbers = array(new \Swagger\Client\Model\int[]()); // int[] | Array of document identifiers

try {
    $apiInstance->checkInOutV2UndoCheckOut($doc_numbers);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2UndoCheckOut: ', $e->getMessage(), PHP_EOL;
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

# **checkInOutV2UndoCheckOutForTask**
> checkInOutV2UndoCheckOutForTask($process_doc_id, $task_work_id)

This call allows undo checkout document for task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CheckInOutV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_doc_id = 56; // int | The process document identifier of profile to checkout
$task_work_id = 56; // int | The taskWork identifier for the profile to checkout

try {
    $apiInstance->checkInOutV2UndoCheckOutForTask($process_doc_id, $task_work_id);
} catch (Exception $e) {
    echo 'Exception when calling CheckInOutV2Api->checkInOutV2UndoCheckOutForTask: ', $e->getMessage(), PHP_EOL;
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

