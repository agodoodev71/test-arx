# Swagger\Client\FoldersApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**foldersAutoinsertInFolderByDocnumber**](FoldersApi.md#foldersAutoinsertInFolderByDocnumber) | **POST** /api/Folders/{docnumber}/autoinsert | This method recalculate folder for profile
[**foldersDelete**](FoldersApi.md#foldersDelete) | **DELETE** /api/Folders/{id} | This method allow to delete a folder
[**foldersDeleteArxDriveConfiguration**](FoldersApi.md#foldersDeleteArxDriveConfiguration) | **DELETE** /api/Folders/arxdriveinfo/{id} | This method delete the arxdrive configuration for the folder
[**foldersFindByDocnumber**](FoldersApi.md#foldersFindByDocnumber) | **GET** /api/Folders/docnumber/{docnumber} | This method allows to find folders that contains docnumber
[**foldersFindByName**](FoldersApi.md#foldersFindByName) | **GET** /api/Folders/find | This method allows to find folders by their name
[**foldersFindByNameOld**](FoldersApi.md#foldersFindByNameOld) | **GET** /api/Folders/find/{name} | This method allows to find folders by their name
[**foldersFindInFolderByName**](FoldersApi.md#foldersFindInFolderByName) | **GET** /api/Folders/{id}/name/{name} | This method allows to find folders by their parent and name
[**foldersGetArchiveInfo**](FoldersApi.md#foldersGetArchiveInfo) | **GET** /api/Folders/{id}/archiveinfo | This method returns the profile configuration for a folder
[**foldersGetArxDriveConfiguration**](FoldersApi.md#foldersGetArxDriveConfiguration) | **GET** /api/Folders/{id}/arxdriveinfo | This method returns the ArxDrive configuration for the folder
[**foldersGetById**](FoldersApi.md#foldersGetById) | **GET** /api/Folders/{id} | This method return the folders contained in specified folder
[**foldersGetByParentId**](FoldersApi.md#foldersGetByParentId) | **GET** /api/Folders/parent/{parentId} | This method return the folders contained in specified parent folder
[**foldersGetDocumentsById**](FoldersApi.md#foldersGetDocumentsById) | **POST** /api/Folders/{id}/documents | This methods return the profiles contained in a folder
[**foldersGetFolderPermission**](FoldersApi.md#foldersGetFolderPermission) | **GET** /api/Folders/{id}/permissions | This method returns the permissions for the folder
[**foldersInsertDocnumbers**](FoldersApi.md#foldersInsertDocnumbers) | **POST** /api/Folders/{id}/add | This method allow to insert docnumbers in a folder
[**foldersMove**](FoldersApi.md#foldersMove) | **PUT** /api/Folders/move/{id}/{parentid} | This method allows to change the parent of a folder
[**foldersNew**](FoldersApi.md#foldersNew) | **POST** /api/Folders/{parentId} | This method allow to create a new folder in the parent folder specified
[**foldersNewFolder**](FoldersApi.md#foldersNewFolder) | **POST** /api/Folders/{parentId}/new | This method allow to create a new folder in the parent folder specified
[**foldersRemoveDocumentsInFolder**](FoldersApi.md#foldersRemoveDocumentsInFolder) | **PUT** /api/Folders/{id}/documents/delete | This method allows to remove some docnumber from a folder
[**foldersRename**](FoldersApi.md#foldersRename) | **PUT** /api/Folders/rename/{id} | This method allows to rename a folder
[**foldersRenameOld**](FoldersApi.md#foldersRenameOld) | **PUT** /api/Folders/rename/{id}/{name} | This method allows to rename a folder
[**foldersSetArchiveInfo**](FoldersApi.md#foldersSetArchiveInfo) | **POST** /api/Folders/{id}/archiveinfo | This method allows to set the profile information for a folder
[**foldersSetArxDriveConfiguration**](FoldersApi.md#foldersSetArxDriveConfiguration) | **POST** /api/Folders/{id}/arxdriveinfo | This method sets the ArxDrive configuration for the folder
[**foldersSetFolderPermission**](FoldersApi.md#foldersSetFolderPermission) | **POST** /api/Folders/{id}/permissions | This method sets the permissions for the folder


# **foldersAutoinsertInFolderByDocnumber**
> foldersAutoinsertInFolderByDocnumber($docnumber)

This method recalculate folder for profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The identifier of the profile

try {
    $apiInstance->foldersAutoinsertInFolderByDocnumber($docnumber);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersAutoinsertInFolderByDocnumber: ', $e->getMessage(), PHP_EOL;
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

# **foldersDelete**
> foldersDelete($id)

This method allow to delete a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $apiInstance->foldersDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersDelete: ', $e->getMessage(), PHP_EOL;
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

# **foldersDeleteArxDriveConfiguration**
> foldersDeleteArxDriveConfiguration($id)

This method delete the arxdrive configuration for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the configuration

try {
    $apiInstance->foldersDeleteArxDriveConfiguration($id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersDeleteArxDriveConfiguration: ', $e->getMessage(), PHP_EOL;
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

# **foldersFindByDocnumber**
> \Swagger\Client\Model\FolderDTO[] foldersFindByDocnumber($docnumber)

This method allows to find folders that contains docnumber

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | The document identifier

try {
    $result = $apiInstance->foldersFindByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersFindByDocnumber: ', $e->getMessage(), PHP_EOL;
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

# **foldersFindByName**
> \Swagger\Client\Model\FolderDTO[] foldersFindByName($name)

This method allows to find folders by their name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name to search

try {
    $result = $apiInstance->foldersFindByName($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersFindByName: ', $e->getMessage(), PHP_EOL;
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

# **foldersFindByNameOld**
> \Swagger\Client\Model\FolderDTO[] foldersFindByNameOld($name)

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

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The name to search

try {
    $result = $apiInstance->foldersFindByNameOld($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersFindByNameOld: ', $e->getMessage(), PHP_EOL;
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

# **foldersFindInFolderByName**
> \Swagger\Client\Model\FolderDTO[] foldersFindInFolderByName($id, $name)

This method allows to find folders by their parent and name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier for root folder
$name = "name_example"; // string | The name to search

try {
    $result = $apiInstance->foldersFindInFolderByName($id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersFindInFolderByName: ', $e->getMessage(), PHP_EOL;
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

# **foldersGetArchiveInfo**
> \Swagger\Client\Model\FolderArchiveModeInfo foldersGetArchiveInfo($id)

This method returns the profile configuration for a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersGetArchiveInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersGetArchiveInfo: ', $e->getMessage(), PHP_EOL;
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

# **foldersGetArxDriveConfiguration**
> \Swagger\Client\Model\ArxDriveFolderModeInfo foldersGetArxDriveConfiguration($id)

This method returns the ArxDrive configuration for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersGetArxDriveConfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersGetArxDriveConfiguration: ', $e->getMessage(), PHP_EOL;
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

# **foldersGetById**
> \Swagger\Client\Model\FolderDTO foldersGetById($id)

This method return the folders contained in specified folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersGetById: ', $e->getMessage(), PHP_EOL;
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

# **foldersGetByParentId**
> \Swagger\Client\Model\FolderDTO[] foldersGetByParentId($parent_id)

This method return the folders contained in specified parent folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The identifier of the parent folder

try {
    $result = $apiInstance->foldersGetByParentId($parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersGetByParentId: ', $e->getMessage(), PHP_EOL;
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

# **foldersGetDocumentsById**
> \Swagger\Client\Model\RowSearchResult[] foldersGetDocumentsById($id, $select)

This methods return the profiles contained in a folder

This method is deprecated. Use api/v2/Folders/{id}/documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$select = new \Swagger\Client\Model\SelectDTO(); // \Swagger\Client\Model\SelectDTO | The select object to instruct the server on which fields it must return

try {
    $result = $apiInstance->foldersGetDocumentsById($id, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersGetDocumentsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The identifier of the folder |
 **select** | [**\Swagger\Client\Model\SelectDTO**](../Model/SelectDTO.md)| The select object to instruct the server on which fields it must return |

### Return type

[**\Swagger\Client\Model\RowSearchResult[]**](../Model/RowSearchResult.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **foldersGetFolderPermission**
> \Swagger\Client\Model\FolderPermissionsDTO foldersGetFolderPermission($id)

This method returns the permissions for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder

try {
    $result = $apiInstance->foldersGetFolderPermission($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersGetFolderPermission: ', $e->getMessage(), PHP_EOL;
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

# **foldersInsertDocnumbers**
> foldersInsertDocnumbers($id, $docnumbers)

This method allow to insert docnumbers in a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Array of identifier of docnumbers to insert

try {
    $apiInstance->foldersInsertDocnumbers($id, $docnumbers);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersInsertDocnumbers: ', $e->getMessage(), PHP_EOL;
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

# **foldersMove**
> foldersMove($id, $parentid)

This method allows to change the parent of a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of folder
$parentid = 56; // int | The new parent folder identifier

try {
    $apiInstance->foldersMove($id, $parentid);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersMove: ', $e->getMessage(), PHP_EOL;
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

# **foldersNew**
> \Swagger\Client\Model\FolderDTO foldersNew($parent_id, $name)

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

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The identifier of the parent folder
$name = "name_example"; // string | The name of new folder

try {
    $result = $apiInstance->foldersNew($parent_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersNew: ', $e->getMessage(), PHP_EOL;
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

# **foldersNewFolder**
> \Swagger\Client\Model\FolderDTO foldersNewFolder($parent_id, $name)

This method allow to create a new folder in the parent folder specified

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_id = 56; // int | The identifier of the parent folder
$name = "name_example"; // string | The name of new folder

try {
    $result = $apiInstance->foldersNewFolder($parent_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersNewFolder: ', $e->getMessage(), PHP_EOL;
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

# **foldersRemoveDocumentsInFolder**
> foldersRemoveDocumentsInFolder($id, $docnumbers)

This method allows to remove some docnumber from a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$docnumbers = array(new \Swagger\Client\Model\int[]()); // int[] | Array of documents identifier to remove

try {
    $apiInstance->foldersRemoveDocumentsInFolder($id, $docnumbers);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersRemoveDocumentsInFolder: ', $e->getMessage(), PHP_EOL;
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

# **foldersRename**
> foldersRename($name, $id)

This method allows to rename a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The new name of folder
$id = 56; // int | The identifier of folder to rename

try {
    $apiInstance->foldersRename($name, $id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersRename: ', $e->getMessage(), PHP_EOL;
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

# **foldersRenameOld**
> foldersRenameOld($name, $id)

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

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | The new name of folder
$id = 56; // int | The identifier of folder to rename

try {
    $apiInstance->foldersRenameOld($name, $id);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersRenameOld: ', $e->getMessage(), PHP_EOL;
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

# **foldersSetArchiveInfo**
> foldersSetArchiveInfo($id, $archive_info)

This method allows to set the profile information for a folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of folder
$archive_info = new \Swagger\Client\Model\FolderArchiveModeInfo(); // \Swagger\Client\Model\FolderArchiveModeInfo | The profile configuration

try {
    $apiInstance->foldersSetArchiveInfo($id, $archive_info);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersSetArchiveInfo: ', $e->getMessage(), PHP_EOL;
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

# **foldersSetArxDriveConfiguration**
> foldersSetArxDriveConfiguration($id, $arx_drive_folder_mode_info)

This method sets the ArxDrive configuration for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$arx_drive_folder_mode_info = new \Swagger\Client\Model\ArxDriveFolderModeInfo(); // \Swagger\Client\Model\ArxDriveFolderModeInfo | ArxDrive folder information

try {
    $apiInstance->foldersSetArxDriveConfiguration($id, $arx_drive_folder_mode_info);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersSetArxDriveConfiguration: ', $e->getMessage(), PHP_EOL;
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

# **foldersSetFolderPermission**
> foldersSetFolderPermission($id, $permissions)

This method sets the permissions for the folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The identifier of the folder
$permissions = new \Swagger\Client\Model\FolderPermissionsDTO(); // \Swagger\Client\Model\FolderPermissionsDTO | The folder permissions

try {
    $apiInstance->foldersSetFolderPermission($id, $permissions);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->foldersSetFolderPermission: ', $e->getMessage(), PHP_EOL;
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

