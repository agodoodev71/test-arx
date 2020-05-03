# Swagger\Client\AddressBookApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressBookAddressBookCanWriteByAddressBookId**](AddressBookApi.md#addressBookAddressBookCanWriteByAddressBookId) | **GET** /api/AddressBook/canwrite/{addressbookId} | This call returns true if the connected user can edit an address book
[**addressBookAddressBookCanWriteByCategoryId**](AddressBookApi.md#addressBookAddressBookCanWriteByCategoryId) | **GET** /api/AddressBook/canwritebycategory/{addressbookCategoryId} | This call returns true if the connected user can edit address books of a specified category
[**addressBookDeleteAddressBook**](AddressBookApi.md#addressBookDeleteAddressBook) | **DELETE** /api/AddressBook/addressbook/{addressBookId} | This call deletes an addressbook by its Id
[**addressBookDeleteAddressBook_0**](AddressBookApi.md#addressBookDeleteAddressBook_0) | **POST** /api/AddressBook/delete/addressbooks | This call deletes addressbooks by their ids
[**addressBookDeleteContact**](AddressBookApi.md#addressBookDeleteContact) | **DELETE** /api/AddressBook/contact/{contactId} | This call deletes a contact
[**addressBookDeleteContact_0**](AddressBookApi.md#addressBookDeleteContact_0) | **POST** /api/AddressBook/delete/contacts | This call deletes contacts by their ids
[**addressBookGetAddressBookComboFieldValues**](AddressBookApi.md#addressBookGetAddressBookComboFieldValues) | **GET** /api/AddressBook/addressbook/combovalues | This call returns the values for combo box address book additional field
[**addressBookGetByAddressBookId**](AddressBookApi.md#addressBookGetByAddressBookId) | **GET** /api/AddressBook/AddressBook/{addressBookId}/UserProfile/{type} | This call returns new profile data (for archiving purpose) by address book identifier
[**addressBookGetByContactId**](AddressBookApi.md#addressBookGetByContactId) | **GET** /api/AddressBook/Contact/{contactId}/UserProfile/{type} | This call returns new profile data (for archiving purpose) by contact identifier
[**addressBookGetById**](AddressBookApi.md#addressBookGetById) | **GET** /api/AddressBook/addressbook/{addressBookId} | This call returns an adressbook by the identifier
[**addressBookGetByUserId**](AddressBookApi.md#addressBookGetByUserId) | **GET** /api/AddressBook/User/{userId}/UserProfile/{type} | This call returns new profile data (for archiving purpose) by user identifier
[**addressBookGetForInsert**](AddressBookApi.md#addressBookGetForInsert) | **GET** /api/AddressBook/newinstance | This call returns new AddreBookDTO object for insert purpose
[**addressBookGetForInsert_0**](AddressBookApi.md#addressBookGetForInsert_0) | **GET** /api/AddressBook/newinstance/{addressbookCategoryId} | This call returns new AddreBookDTO for insert purpose by category
[**addressBookGetPermissionByAddrebookId**](AddressBookApi.md#addressBookGetPermissionByAddrebookId) | **GET** /api/AddressBook/{addressBookId}/Permission | This call returns all permissions for an AddreBook
[**addressBookGetSearchField**](AddressBookApi.md#addressBookGetSearchField) | **GET** /api/AddressBook/SearchField | This call returns all the possible fields for search in address book
[**addressBookGetSelectField**](AddressBookApi.md#addressBookGetSelectField) | **GET** /api/AddressBook/SelectField | This call returns all the possible select fields for search in address book
[**addressBookInsertAddressBook**](AddressBookApi.md#addressBookInsertAddressBook) | **POST** /api/AddressBook/addressbook | This call inserts new addres book item
[**addressBookInsertAddressBook_0**](AddressBookApi.md#addressBookInsertAddressBook_0) | **POST** /api/AddressBook/addressbooks | This call inserts new address book items
[**addressBookInsertContact**](AddressBookApi.md#addressBookInsertContact) | **POST** /api/AddressBook/contact | This call inserts new contact of a address book item
[**addressBookPostSearch**](AddressBookApi.md#addressBookPostSearch) | **POST** /api/AddressBook | This call searches address book items
[**addressBookPutSelectField**](AddressBookApi.md#addressBookPutSelectField) | **PUT** /api/AddressBook/SelectField | This call saves the select fields with the user settings
[**addressBookSetPermissionByAddrebookId**](AddressBookApi.md#addressBookSetPermissionByAddrebookId) | **PUT** /api/AddressBook/{addressBookId}/Permission | This call saves all permissions for an AddreBook
[**addressBookUpdateAddressBook**](AddressBookApi.md#addressBookUpdateAddressBook) | **PUT** /api/AddressBook/addressbook/{addressbookId} | This call updates a addresbook item
[**addressBookUpdateContact**](AddressBookApi.md#addressBookUpdateContact) | **PUT** /api/AddressBook/contact | This call updates a contact


# **addressBookAddressBookCanWriteByAddressBookId**
> bool addressBookAddressBookCanWriteByAddressBookId($addressbook_id)

This call returns true if the connected user can edit an address book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressbook_id = 56; // int | Identifier of the address book

try {
    $result = $apiInstance->addressBookAddressBookCanWriteByAddressBookId($addressbook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookAddressBookCanWriteByAddressBookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressbook_id** | **int**| Identifier of the address book |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookAddressBookCanWriteByCategoryId**
> bool addressBookAddressBookCanWriteByCategoryId($addressbook_category_id)

This call returns true if the connected user can edit address books of a specified category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressbook_category_id = 56; // int | Identifier of address book category

try {
    $result = $apiInstance->addressBookAddressBookCanWriteByCategoryId($addressbook_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookAddressBookCanWriteByCategoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressbook_category_id** | **int**| Identifier of address book category |

### Return type

**bool**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookDeleteAddressBook**
> addressBookDeleteAddressBook($address_book_id)

This call deletes an addressbook by its Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id = 56; // int | AddressBook Id

try {
    $apiInstance->addressBookDeleteAddressBook($address_book_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookDeleteAddressBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id** | **int**| AddressBook Id |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookDeleteAddressBook_0**
> addressBookDeleteAddressBook_0($address_book_id_list)

This call deletes addressbooks by their ids

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id_list = array(new \Swagger\Client\Model\int[]()); // int[] | The id list

try {
    $apiInstance->addressBookDeleteAddressBook_0($address_book_id_list);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookDeleteAddressBook_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id_list** | **int[]**| The id list |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookDeleteContact**
> addressBookDeleteContact($contact_id)

This call deletes a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | Identifier of contact to delete

try {
    $apiInstance->addressBookDeleteContact($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookDeleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| Identifier of contact to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookDeleteContact_0**
> addressBookDeleteContact_0($contact_id_list)

This call deletes contacts by their ids

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id_list = array(new \Swagger\Client\Model\int[]()); // int[] | The id list

try {
    $apiInstance->addressBookDeleteContact_0($contact_id_list);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookDeleteContact_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id_list** | **int[]**| The id list |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetAddressBookComboFieldValues**
> string[] addressBookGetAddressBookComboFieldValues($field_name)

This call returns the values for combo box address book additional field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_name = "field_name_example"; // string | The field name of the combo

try {
    $result = $apiInstance->addressBookGetAddressBookComboFieldValues($field_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetAddressBookComboFieldValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_name** | **string**| The field name of the combo |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetByAddressBookId**
> \Swagger\Client\Model\UserProfileDTO addressBookGetByAddressBookId($address_book_id, $type)

This call returns new profile data (for archiving purpose) by address book identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id = 56; // int | Identifier of the adress book
$type = 56; // int | Possible values:  0: To  1: From  2: Cc  3: Senders

try {
    $result = $apiInstance->addressBookGetByAddressBookId($address_book_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetByAddressBookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id** | **int**| Identifier of the adress book |
 **type** | **int**| Possible values:  0: To  1: From  2: Cc  3: Senders |

### Return type

[**\Swagger\Client\Model\UserProfileDTO**](../Model/UserProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetByContactId**
> \Swagger\Client\Model\UserProfileDTO addressBookGetByContactId($contact_id, $type)

This call returns new profile data (for archiving purpose) by contact identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 56; // int | Identifier of the contact
$type = 56; // int | Possible values:  0: To  1: From  2: Cc  3: Senders

try {
    $result = $apiInstance->addressBookGetByContactId($contact_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetByContactId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| Identifier of the contact |
 **type** | **int**| Possible values:  0: To  1: From  2: Cc  3: Senders |

### Return type

[**\Swagger\Client\Model\UserProfileDTO**](../Model/UserProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetById**
> \Swagger\Client\Model\AddressBookDTO addressBookGetById($address_book_id)

This call returns an adressbook by the identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id = 56; // int | Identifier of the adress book

try {
    $result = $apiInstance->addressBookGetById($address_book_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id** | **int**| Identifier of the adress book |

### Return type

[**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetByUserId**
> \Swagger\Client\Model\UserProfileDTO addressBookGetByUserId($user_id, $type)

This call returns new profile data (for archiving purpose) by user identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 56; // int | Identifier of the user
$type = 56; // int | Possible values:  0: To  1: From  2: Cc  3: Senders

try {
    $result = $apiInstance->addressBookGetByUserId($user_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetByUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| Identifier of the user |
 **type** | **int**| Possible values:  0: To  1: From  2: Cc  3: Senders |

### Return type

[**\Swagger\Client\Model\UserProfileDTO**](../Model/UserProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetForInsert**
> \Swagger\Client\Model\AddressBookDTO addressBookGetForInsert()

This call returns new AddreBookDTO object for insert purpose

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookGetForInsert();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetForInsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetForInsert_0**
> \Swagger\Client\Model\AddressBookDTO addressBookGetForInsert_0($addressbook_category_id)

This call returns new AddreBookDTO for insert purpose by category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressbook_category_id = 56; // int | Identifier of the address book category

try {
    $result = $apiInstance->addressBookGetForInsert_0($addressbook_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetForInsert_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressbook_category_id** | **int**| Identifier of the address book category |

### Return type

[**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetPermissionByAddrebookId**
> \Swagger\Client\Model\PermissionsDTO addressBookGetPermissionByAddrebookId($address_book_id)

This call returns all permissions for an AddreBook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id = 56; // int | Id of the addressBook

try {
    $result = $apiInstance->addressBookGetPermissionByAddrebookId($address_book_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetPermissionByAddrebookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id** | **int**| Id of the addressBook |

### Return type

[**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetSearchField**
> \Swagger\Client\Model\RubricaFieldDTO[] addressBookGetSearchField()

This call returns all the possible fields for search in address book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookGetSearchField();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetSearchField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RubricaFieldDTO[]**](../Model/RubricaFieldDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookGetSelectField**
> \Swagger\Client\Model\RubricaFieldDTO[] addressBookGetSelectField()

This call returns all the possible select fields for search in address book

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->addressBookGetSelectField();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookGetSelectField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RubricaFieldDTO[]**](../Model/RubricaFieldDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookInsertAddressBook**
> \Swagger\Client\Model\AddressBookDTO addressBookInsertAddressBook($address_book_dto)

This call inserts new addres book item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_dto = new \Swagger\Client\Model\AddressBookDTO(); // \Swagger\Client\Model\AddressBookDTO | Address book item to profile

try {
    $result = $apiInstance->addressBookInsertAddressBook($address_book_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookInsertAddressBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_dto** | [**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)| Address book item to profile |

### Return type

[**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookInsertAddressBook_0**
> \Swagger\Client\Model\AddressBookDTO[] addressBookInsertAddressBook_0($address_book_dtos)

This call inserts new address book items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_dtos = array(new \Swagger\Client\Model\AddressBookDTO()); // \Swagger\Client\Model\AddressBookDTO[] | Address book items to profile

try {
    $result = $apiInstance->addressBookInsertAddressBook_0($address_book_dtos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookInsertAddressBook_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_dtos** | [**\Swagger\Client\Model\AddressBookDTO[]**](../Model/AddressBookDTO.md)| Address book items to profile |

### Return type

[**\Swagger\Client\Model\AddressBookDTO[]**](../Model/AddressBookDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookInsertContact**
> \Swagger\Client\Model\ContactDTO addressBookInsertContact($contact_dto)

This call inserts new contact of a address book item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_dto = new \Swagger\Client\Model\ContactDTO(); // \Swagger\Client\Model\ContactDTO | Contact item to insert

try {
    $result = $apiInstance->addressBookInsertContact($contact_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookInsertContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_dto** | [**\Swagger\Client\Model\ContactDTO**](../Model/ContactDTO.md)| Contact item to insert |

### Return type

[**\Swagger\Client\Model\ContactDTO**](../Model/ContactDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookPostSearch**
> \Swagger\Client\Model\AddressBookSearchResultDTO addressBookPostSearch($search_dto)

This call searches address book items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_dto = new \Swagger\Client\Model\AddressBookSearchCriteriaDTO(); // \Swagger\Client\Model\AddressBookSearchCriteriaDTO | The fields of the search

try {
    $result = $apiInstance->addressBookPostSearch($search_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookPostSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_dto** | [**\Swagger\Client\Model\AddressBookSearchCriteriaDTO**](../Model/AddressBookSearchCriteriaDTO.md)| The fields of the search |

### Return type

[**\Swagger\Client\Model\AddressBookSearchResultDTO**](../Model/AddressBookSearchResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookPutSelectField**
> addressBookPutSelectField($select_fields)

This call saves the select fields with the user settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$select_fields = array(new \Swagger\Client\Model\RubricaFieldDTO()); // \Swagger\Client\Model\RubricaFieldDTO[] | Array of select fields

try {
    $apiInstance->addressBookPutSelectField($select_fields);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookPutSelectField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select_fields** | [**\Swagger\Client\Model\RubricaFieldDTO[]**](../Model/RubricaFieldDTO.md)| Array of select fields |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookSetPermissionByAddrebookId**
> addressBookSetPermissionByAddrebookId($address_book_id, $permissions)

This call saves all permissions for an AddreBook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_book_id = 56; // int | Id of the addressBook
$permissions = new \Swagger\Client\Model\PermissionsDTO(); // \Swagger\Client\Model\PermissionsDTO | 

try {
    $apiInstance->addressBookSetPermissionByAddrebookId($address_book_id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookSetPermissionByAddrebookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_book_id** | **int**| Id of the addressBook |
 **permissions** | [**\Swagger\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookUpdateAddressBook**
> \Swagger\Client\Model\AddressBookDTO addressBookUpdateAddressBook($addressbook_id, $address_book_dto)

This call updates a addresbook item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addressbook_id = 56; // int | Identifier of Address book to update
$address_book_dto = new \Swagger\Client\Model\AddressBookDTO(); // \Swagger\Client\Model\AddressBookDTO | Address book data to update

try {
    $result = $apiInstance->addressBookUpdateAddressBook($addressbook_id, $address_book_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookUpdateAddressBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addressbook_id** | **int**| Identifier of Address book to update |
 **address_book_dto** | [**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)| Address book data to update |

### Return type

[**\Swagger\Client\Model\AddressBookDTO**](../Model/AddressBookDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addressBookUpdateContact**
> \Swagger\Client\Model\ContactDTO addressBookUpdateContact($contact)

This call updates a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\AddressBookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact = new \Swagger\Client\Model\ContactDTO(); // \Swagger\Client\Model\ContactDTO | Identifier of contact to update

try {
    $result = $apiInstance->addressBookUpdateContact($contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressBookApi->addressBookUpdateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\Swagger\Client\Model\ContactDTO**](../Model/ContactDTO.md)| Identifier of contact to update |

### Return type

[**\Swagger\Client\Model\ContactDTO**](../Model/ContactDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

