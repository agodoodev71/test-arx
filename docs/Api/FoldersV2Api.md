# Swagger\Client\FoldersV2Api

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**foldersV2AutoinsertInFolderByDocnumber**](FoldersV2Api.md#foldersV2AutoinsertInFolderByDocnumber) | **POST** /api/v2/Folders/{docnumber}/autoinsert | This method recalculate folder for profile
[**foldersV2Delete**](FoldersV2Api.md#foldersV2Delete) | **DELETE** /api/v2/Folders/{id} | This method allow to delete a folder
[**foldersV2DeleteArxDriveConfiguration**](FoldersV2Api.md#foldersV2DeleteArxDriveConfiguration) | **DELETE** /api/v2/Folders/arxdriveinfo/{id} | This method delete the arxdrive configuration for the folder
[**foldersV2FindByDocnumber**](FoldersV2Api.md#foldersV2FindByDocnumber) | **GET** /api/v2/Folders/docnumber/{docnumber} | This method allows to find folders that contains docnumber
[**foldersV2FindByName**](FoldersV2Api.md#foldersV2FindByName) | **GET** /api/v2/Folders/find | This method allows to find folders by their name
[**foldersV2FindByNameOld**](FoldersV2Api.md#foldersV2FindByNameOld) | **GET** /api/v2/Folders/find/{name} | This method allows to find folders by their name
[**foldersV2FindInFolderByName**](FoldersV2Api.md#foldersV2FindInFolderByName) | **GET** /api/v2/Folders/{id}/name/{name} | This method allows to find folders by their parent and name
[**foldersV2GetArchiveInfo**](FoldersV2Api.md#foldersV2GetArchiveInfo) | **GET** /api/v2/Folders/{id}/archiveinfo | This method returns the profile configuration for a folder
[**foldersV2GetArxDriveConfiguration**](FoldersV2Api.md#foldersV2GetArxDriveConfiguration) | **GET** /api/v2/Folders/{id}/arxdriveinfo | This method returns the ArxDrive configuration for the folder
[**foldersV2GetById**](FoldersV2Api.md#foldersV2GetById) | **GET** /api/v2/Folders/{id} | This method return the folders contained in specified folder
[**foldersV2GetByParentId**](FoldersV2Api.md#foldersV2GetByParentId) | **GET** /api/v2/Folders/parent/{parentId} | This method return the folders contained in specified parent folder
[**foldersV2GetDocumentsById**](FoldersV2Api.md#foldersV2GetDocumentsById) | **POST** /api/v2/Folders/{id}/documents | This methods return the profiles contained in a folder.  This call could not be compatible with some programming language, in this case use the call api/Folders/{id}/documents
[**foldersV2GetFolderPermission**](FoldersV2Api.md#foldersV2GetFolderPermission) | **GET** /api/v2/Folders/{id}/permissions | This method returns the permissions for the folder
[**foldersV2InsertDocnumbers**](FoldersV2Api.md#foldersV2InsertDocnumbers) | **POST** /api/v2/Folders/{id}/add | This method allow to insert docnumbers in a folder
[**foldersV2Move**](FoldersV2Api.md#foldersV2Move) | **PUT** /api/v2/Folders/move/{id}/{parentid} | This method allows to change the parent of a folder
[**foldersV2New**](FoldersV2Api.md#foldersV2New) | **POST** /api/v2/Folders/{parentId} | This method allow to create a new folder in the parent folder specified
[**foldersV2NewFolder**](FoldersV2Api.md#foldersV2NewFolder) | **POST** /api/v2/Folders/{parentId}/new | This method allow to create a new folder in the parent folder specified
[**foldersV2RemoveDocumentsInFolder**](FoldersV2Api.md#foldersV2RemoveDocumentsInFolder) | **PUT** /api/v2/Folders/{id}/documents/delete | This method allows to remove some docnumber from a folder
[**foldersV2Rename**](FoldersV2Api.md#foldersV2Rename) | **PUT** /api/v2/Folders/rename/{id} | This method allows to rename a folder
[**foldersV2RenameOld**](FoldersV2Api.md#foldersV2RenameOld) | **PUT** /api/v2/Folders/rename/{id}/{name} | This method allows to rename a folder
[**foldersV2SetArchiveInfo**](FoldersV2Api.md#foldersV2SetArchiveInfo) | **POST** /api/v2/Folders/{id}/archiveinfo | This method allows to set the profile information for a folder
[**foldersV2SetArxDriveConfiguration**](FoldersV2Api.md#foldersV2SetArxDriveConfiguration) | **POST** /api/v2/Folders/{id}/arxdriveinfo | This method sets the ArxDrive configuration for the folder
[**foldersV2SetFolderPermission**](FoldersV2Api.md#foldersV2SetFolderPermission) | **POST** /api/v2/Folders/{id}/permissions | This method sets the permissions for the folder


# **foldersV2AutoinsertInFolderByDocnumber**
> foldersV2AutoinsertInFolderByDocnumber($docnumber)

This method recalculate folder for profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The identifier of the profile

try {
    $apiInstance->foldersV2AutoinsertInFolderByDocnumber($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2AutoinsertInFolderByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| The identifier of the profile |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2Delete**
> foldersV2Delete($id)

This method allow to delete a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $apiInstance->foldersV2Delete($id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2Delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2DeleteArxDriveConfiguration**
> foldersV2DeleteArxDriveConfiguration($id)

This method delete the arxdrive configuration for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the configuration

try {
    $apiInstance->foldersV2DeleteArxDriveConfiguration($id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2DeleteArxDriveConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the configuration |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2FindByDocnumber**
> \Swagger\Client\Model\FolderDTO[] foldersV2FindByDocnumber($docnumber)

This method allows to find folders that contains docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The document identifier

try {
    $result = $apiInstance->foldersV2FindByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2FindByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| The document identifier |

### Return type

[**\Swagger\Client\Model\FolderDTO[]**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2FindByName**
> \Swagger\Client\Model\FolderDTO[] foldersV2FindByName($name)

This method allows to find folders by their name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name to search

try {
    $result = $apiInstance->foldersV2FindByName($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2FindByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name to search |

### Return type

[**\Swagger\Client\Model\FolderDTO[]**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2FindByNameOld**
> \Swagger\Client\Model\FolderDTO[] foldersV2FindByNameOld($name)

This method allows to find folders by their name

This method is deprecated. Use /api/v2/Folders/find?name={name}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name to search

try {
    $result = $apiInstance->foldersV2FindByNameOld($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2FindByNameOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The name to search |

### Return type

[**\Swagger\Client\Model\FolderDTO[]**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2FindInFolderByName**
> \Swagger\Client\Model\FolderDTO[] foldersV2FindInFolderByName($id, $name)

This method allows to find folders by their parent and name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier for root folder
$name = "name_example"; // string | The name to search

try {
    $result = $apiInstance->foldersV2FindInFolderByName($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2FindInFolderByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier for root folder |
 **name** | **string**| The name to search |

### Return type

[**\Swagger\Client\Model\FolderDTO[]**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2GetArchiveInfo**
> \Swagger\Client\Model\FolderArchiveModeInfo foldersV2GetArchiveInfo($id)

This method returns the profile configuration for a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersV2GetArchiveInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2GetArchiveInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |

### Return type

[**\Swagger\Client\Model\FolderArchiveModeInfo**](../Model/FolderArchiveModeInfo.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2GetArxDriveConfiguration**
> \Swagger\Client\Model\ArxDriveFolderModeInfo foldersV2GetArxDriveConfiguration($id)

This method returns the ArxDrive configuration for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersV2GetArxDriveConfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2GetArxDriveConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |

### Return type

[**\Swagger\Client\Model\ArxDriveFolderModeInfo**](../Model/ArxDriveFolderModeInfo.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2GetById**
> \Swagger\Client\Model\FolderDTO foldersV2GetById($id)

This method return the folders contained in specified folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersV2GetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2GetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |

### Return type

[**\Swagger\Client\Model\FolderDTO**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2GetByParentId**
> \Swagger\Client\Model\FolderDTO[] foldersV2GetByParentId($parent_id)

This method return the folders contained in specified parent folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The identifier of the parent folder

try {
    $result = $apiInstance->foldersV2GetByParentId($parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2GetByParentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| The identifier of the parent folder |

### Return type

[**\Swagger\Client\Model\FolderDTO[]**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2GetDocumentsById**
> object foldersV2GetDocumentsById($id, $select)

This methods return the profiles contained in a folder.  This call could not be compatible with some programming language, in this case use the call api/Folders/{id}/documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | The select object to instruct the server on which fields it must return

try {
    $result = $apiInstance->foldersV2GetDocumentsById($id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2GetDocumentsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| The select object to instruct the server on which fields it must return |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2GetFolderPermission**
> \Swagger\Client\Model\FolderPermissionsDTO foldersV2GetFolderPermission($id)

This method returns the permissions for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersV2GetFolderPermission($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2GetFolderPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |

### Return type

[**\Swagger\Client\Model\FolderPermissionsDTO**](../Model/FolderPermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2InsertDocnumbers**
> foldersV2InsertDocnumbers($id, $docnumbers)

This method allow to insert docnumbers in a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Array of identifier of docnumbers to insert

try {
    $apiInstance->foldersV2InsertDocnumbers($id, $docnumbers);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2InsertDocnumbers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |
 **docnumbers** | **int[]**| Array of identifier of docnumbers to insert |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2Move**
> foldersV2Move($id, $parentid)

This method allows to change the parent of a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of folder
$parentid = 56; // int | The new parent folder identifier

try {
    $apiInstance->foldersV2Move($id, $parentid);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2Move: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of folder |
 **parentid** | **int**| The new parent folder identifier |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2New**
> \Swagger\Client\Model\FolderDTO foldersV2New($parent_id, $name)

This method allow to create a new folder in the parent folder specified

This method is deprecated. Use /api/v2/Folders/{parentId}/new?name={name}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The identifier of the parent folder
$name = "name_example"; // string | The name of new folder

try {
    $result = $apiInstance->foldersV2New($parent_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2New: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| The identifier of the parent folder |
 **name** | **string**| The name of new folder |

### Return type

[**\Swagger\Client\Model\FolderDTO**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2NewFolder**
> \Swagger\Client\Model\FolderDTO foldersV2NewFolder($parent_id, $name)

This method allow to create a new folder in the parent folder specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The identifier of the parent folder
$name = "name_example"; // string | The name of new folder

try {
    $result = $apiInstance->foldersV2NewFolder($parent_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2NewFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parent_id** | **int**| The identifier of the parent folder |
 **name** | **string**| The name of new folder |

### Return type

[**\Swagger\Client\Model\FolderDTO**](../Model/FolderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2RemoveDocumentsInFolder**
> foldersV2RemoveDocumentsInFolder($id, $docnumbers)

This method allows to remove some docnumber from a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Array of documents identifier to remove

try {
    $apiInstance->foldersV2RemoveDocumentsInFolder($id, $docnumbers);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2RemoveDocumentsInFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |
 **docnumbers** | **int[]**| Array of documents identifier to remove |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2Rename**
> foldersV2Rename($name, $id)

This method allows to rename a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The new name of folder
$id = 56; // int | The identifier of folder to rename

try {
    $apiInstance->foldersV2Rename($name, $id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2Rename: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The new name of folder |
 **id** | **int**| The identifier of folder to rename |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2RenameOld**
> foldersV2RenameOld($name, $id)

This method allows to rename a folder

This method is deprecated. Use /api/v2/Folders/rename/{id}?name={name}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The new name of folder
$id = 56; // int | The identifier of folder to rename

try {
    $apiInstance->foldersV2RenameOld($name, $id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2RenameOld: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The new name of folder |
 **id** | **int**| The identifier of folder to rename |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2SetArchiveInfo**
> foldersV2SetArchiveInfo($id, $archive_info)

This method allows to set the profile information for a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of folder
$archive_info = new \Swagger\Client\Model\FolderArchiveModeInfo(); // \Swagger\Client\Model\FolderArchiveModeInfo | The profile configuration

try {
    $apiInstance->foldersV2SetArchiveInfo($id, $archive_info);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2SetArchiveInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of folder |
 **archive_info** | [**\Swagger\Client\Model\FolderArchiveModeInfo**](../Model/FolderArchiveModeInfo.md)| The profile configuration |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2SetArxDriveConfiguration**
> foldersV2SetArxDriveConfiguration($id, $arx_drive_folder_mode_info)

This method sets the ArxDrive configuration for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$arx_drive_folder_mode_info = new \Swagger\Client\Model\ArxDriveFolderModeInfo(); // \Swagger\Client\Model\ArxDriveFolderModeInfo | ArxDrive folder information

try {
    $apiInstance->foldersV2SetArxDriveConfiguration($id, $arx_drive_folder_mode_info);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2SetArxDriveConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |
 **arx_drive_folder_mode_info** | [**\Swagger\Client\Model\ArxDriveFolderModeInfo**](../Model/ArxDriveFolderModeInfo.md)| ArxDrive folder information |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersV2SetFolderPermission**
> foldersV2SetFolderPermission($id, $permissions)

This method sets the permissions for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$permissions = new \Swagger\Client\Model\FolderPermissionsDTO(); // \Swagger\Client\Model\FolderPermissionsDTO | The folder permissions

try {
    $apiInstance->foldersV2SetFolderPermission($id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling FoldersV2Api->foldersV2SetFolderPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |
 **permissions** | [**\Swagger\Client\Model\FolderPermissionsDTO**](../Model/FolderPermissionsDTO.md)| The folder permissions |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

