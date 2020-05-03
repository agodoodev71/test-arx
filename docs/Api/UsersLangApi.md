# Swagger\Client\UsersLangApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersLangGet**](UsersLangApi.md#usersLangGet) | **POST** /api/UsersLang | This call retrieves the default language for a user by the given username


# **usersLangGet**
> string usersLangGet($lang_dto)

This call retrieves the default language for a user by the given username

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\UsersLangApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lang_dto = new \Swagger\Client\Model\UserLangDto(); // \Swagger\Client\Model\UserLangDto | Dto that contains the username for the language

try {
    $result = $apiInstance->usersLangGet($lang_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersLangApi->usersLangGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang_dto** | [**\Swagger\Client\Model\UserLangDto**](../Model/UserLangDto.md)| Dto that contains the username for the language |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

