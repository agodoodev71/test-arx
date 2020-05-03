# Swagger\Client\AddressBookNoteApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressBookNoteDeleteAddressBookNote**](AddressBookNoteApi.md#addressBookNoteDeleteAddressBookNote) | **DELETE** /api/AddressBookNote/{addressBookNoteId} | This call deletes an addressbook note
[**addressBookNoteGetByAddressBookId**](AddressBookNoteApi.md#addressBookNoteGetByAddressBookId) | **GET** /api/AddressBookNote/ByAddressBookId/{addressBookId} | This call returns all the notes created in an addressbook item
[**addressBookNoteInsertAddressBookNote**](AddressBookNoteApi.md#addressBookNoteInsertAddressBookNote) | **POST** /api/AddressBookNote | This call creates a note for an addressBook
[**addressBookNoteUpdateAddressBookNote**](AddressBookNoteApi.md#addressBookNoteUpdateAddressBookNote) | **PUT** /api/AddressBookNote | This call updates an addressbook note


# **addressBookNoteDeleteAddressBookNote**
> addressBookNoteDeleteAddressBookNote($address_book_note_id)

This call deletes an addressbook note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_note_id = 56; // int | 

try {
    $apiInstance->addressBookNoteDeleteAddressBookNote($address_book_note_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookNoteApi->addressBookNoteDeleteAddressBookNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_note_id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookNoteGetByAddressBookId**
> \Swagger\Client\Model\AddressBookNoteDTO[] addressBookNoteGetByAddressBookId($address_book_id)

This call returns all the notes created in an addressbook item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id = 56; // int | System Id of the addressbook

try {
    $result = $apiInstance->addressBookNoteGetByAddressBookId($address_book_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookNoteApi->addressBookNoteGetByAddressBookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id** | **int**| System Id of the addressbook |

### Return type

[**\Swagger\Client\Model\AddressBookNoteDTO[]**](../Model/AddressBookNoteDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookNoteInsertAddressBookNote**
> addressBookNoteInsertAddressBookNote($address_book_note)

This call creates a note for an addressBook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_note = new \Swagger\Client\Model\AddressBookNoteDTO(); // \Swagger\Client\Model\AddressBookNoteDTO | 

try {
    $apiInstance->addressBookNoteInsertAddressBookNote($address_book_note);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookNoteApi->addressBookNoteInsertAddressBookNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_note** | [**\Swagger\Client\Model\AddressBookNoteDTO**](../Model/AddressBookNoteDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookNoteUpdateAddressBookNote**
> addressBookNoteUpdateAddressBookNote($address_book_note)

This call updates an addressbook note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_note = new \Swagger\Client\Model\AddressBookNoteDTO(); // \Swagger\Client\Model\AddressBookNoteDTO | 

try {
    $apiInstance->addressBookNoteUpdateAddressBookNote($address_book_note);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookNoteApi->addressBookNoteUpdateAddressBookNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_note** | [**\Swagger\Client\Model\AddressBookNoteDTO**](../Model/AddressBookNoteDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

