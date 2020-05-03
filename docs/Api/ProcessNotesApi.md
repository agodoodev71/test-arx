# Swagger\Client\ProcessNotesApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processNotesDelete**](ProcessNotesApi.md#processNotesDelete) | **DELETE** /api/ProcessNotes/{noteworkid} | This call deletes a process note
[**processNotesInsert**](ProcessNotesApi.md#processNotesInsert) | **POST** /api/ProcessNotes/insert | This call inserts a new note
[**processNotesUpdate**](ProcessNotesApi.md#processNotesUpdate) | **PUT** /api/ProcessNotes/update | This call updates a process note


# **processNotesDelete**
> processNotesDelete($noteworkid)

This call deletes a process note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$noteworkid = 56; // int | Process note idenfier

try {
    $apiInstance->processNotesDelete($noteworkid);
} catch (Exception $e) {
    echo 'Exception when calling ProcessNotesApi->processNotesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **noteworkid** | **int**| Process note idenfier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processNotesInsert**
> \Swagger\Client\Model\ProcessNoteDTO processNotesInsert($note)

This call inserts a new note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note = new \Swagger\Client\Model\ProcessNoteDTO(); // \Swagger\Client\Model\ProcessNoteDTO | Note information to insert

try {
    $result = $apiInstance->processNotesInsert($note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessNotesApi->processNotesInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note** | [**\Swagger\Client\Model\ProcessNoteDTO**](../Model/ProcessNoteDTO.md)| Note information to insert |

### Return type

[**\Swagger\Client\Model\ProcessNoteDTO**](../Model/ProcessNoteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **processNotesUpdate**
> \Swagger\Client\Model\ProcessNoteDTO processNotesUpdate($note)

This call updates a process note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcessNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note = new \Swagger\Client\Model\ProcessNoteDTO(); // \Swagger\Client\Model\ProcessNoteDTO | Note information to update

try {
    $result = $apiInstance->processNotesUpdate($note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessNotesApi->processNotesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note** | [**\Swagger\Client\Model\ProcessNoteDTO**](../Model/ProcessNoteDTO.md)| Note information to update |

### Return type

[**\Swagger\Client\Model\ProcessNoteDTO**](../Model/ProcessNoteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

