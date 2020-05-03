# Swagger\Client\BarcodeApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**barcodeGetBarcodeGraphicUserTemplate**](BarcodeApi.md#barcodeGetBarcodeGraphicUserTemplate) | **GET** /api/Barcode/userGraphicTemplate/documentType/{dmTipidocumentoId} | This call returns the barcode grapich user template
[**barcodeGetBarcodeUserSettings**](BarcodeApi.md#barcodeGetBarcodeUserSettings) | **GET** /api/Barcode/userSettings | This call returns the barcode user default settings
[**barcodeGetBarcodeUserTemplate**](BarcodeApi.md#barcodeGetBarcodeUserTemplate) | **GET** /api/Barcode/userTemplate/documentType/{dmTipidocumentoId} | This call returns the barcode user template by document type
[**barcodeGetDefaultTemplate**](BarcodeApi.md#barcodeGetDefaultTemplate) | **GET** /api/Barcode/defaultTemplate/printerFamily/{printerFamilyValue} | This call returns the barcode default template by a printer family   - ZEBRA_EPL2,   - ZEBRA_ZPL2,   - TOSHIBA_BSV4,   - EPSON_ESC_POS
[**barcodePrintArxBarcode**](BarcodeApi.md#barcodePrintArxBarcode) | **POST** /api/Barcode/printArxBarcode | This call executes the print of barcode in format Arxivar
[**barcodePrintAttachmentByDocnumber**](BarcodeApi.md#barcodePrintAttachmentByDocnumber) | **POST** /api/Barcode/printAttachment/byDocnumber/{docnumber} | This call executes the print of barcode for attachment of document
[**barcodePrintByDocnumber**](BarcodeApi.md#barcodePrintByDocnumber) | **POST** /api/Barcode/print/byDocnumber/{docnumber} | This call executes the print of barcode associated with a document
[**barcodePrintByIdBarcode**](BarcodeApi.md#barcodePrintByIdBarcode) | **POST** /api/Barcode/print/{idBarcode} | This call executes the print of barcode
[**barcodePrintRevisionByDocnumber**](BarcodeApi.md#barcodePrintRevisionByDocnumber) | **POST** /api/Barcode/printRevision/byDocnumber/{docnumber} | This call executes the print of barcode for revision of document
[**barcodeSetBarcodeGraphicUserTemplate**](BarcodeApi.md#barcodeSetBarcodeGraphicUserTemplate) | **POST** /api/Barcode/setUserGraphicTemplate | This call sets the barcode graphic user template
[**barcodeSetBarcodeUserSettings**](BarcodeApi.md#barcodeSetBarcodeUserSettings) | **POST** /api/Barcode/setUserSettings | This call sets the barcode user default settings
[**barcodeSetBarcodeUserTemplate**](BarcodeApi.md#barcodeSetBarcodeUserTemplate) | **POST** /api/Barcode/setUserTemplate | This call sets the barcode user template


# **barcodeGetBarcodeGraphicUserTemplate**
> \Swagger\Client\Model\BarcodeGraphicTemplateDto barcodeGetBarcodeGraphicUserTemplate($dm_tipidocumento_id)

This call returns the barcode grapich user template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dm_tipidocumento_id = 56; // int | Document type identifier

try {
    $result = $apiInstance->barcodeGetBarcodeGraphicUserTemplate($dm_tipidocumento_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeGetBarcodeGraphicUserTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dm_tipidocumento_id** | **int**| Document type identifier |

### Return type

[**\Swagger\Client\Model\BarcodeGraphicTemplateDto**](../Model/BarcodeGraphicTemplateDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodeGetBarcodeUserSettings**
> \Swagger\Client\Model\BarcodeUserSettingsDto barcodeGetBarcodeUserSettings()

This call returns the barcode user default settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->barcodeGetBarcodeUserSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeGetBarcodeUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BarcodeUserSettingsDto**](../Model/BarcodeUserSettingsDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodeGetBarcodeUserTemplate**
> \Swagger\Client\Model\BarcodeTemplateDto barcodeGetBarcodeUserTemplate($dm_tipidocumento_id)

This call returns the barcode user template by document type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dm_tipidocumento_id = 56; // int | Document type identifier

try {
    $result = $apiInstance->barcodeGetBarcodeUserTemplate($dm_tipidocumento_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeGetBarcodeUserTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dm_tipidocumento_id** | **int**| Document type identifier |

### Return type

[**\Swagger\Client\Model\BarcodeTemplateDto**](../Model/BarcodeTemplateDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodeGetDefaultTemplate**
> \Swagger\Client\Model\DefaultBarcodeTemplateDto barcodeGetDefaultTemplate($printer_family_value)

This call returns the barcode default template by a printer family   - ZEBRA_EPL2,   - ZEBRA_ZPL2,   - TOSHIBA_BSV4,   - EPSON_ESC_POS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$printer_family_value = "printer_family_value_example"; // string | The printer family (see Dm_Barcode_PrinterFamily)

try {
    $result = $apiInstance->barcodeGetDefaultTemplate($printer_family_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeGetDefaultTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **printer_family_value** | **string**| The printer family (see Dm_Barcode_PrinterFamily) |

### Return type

[**\Swagger\Client\Model\DefaultBarcodeTemplateDto**](../Model/DefaultBarcodeTemplateDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodePrintArxBarcode**
> \Swagger\Client\Model\BarcodePrintResultDto barcodePrintArxBarcode($docnumber)

This call executes the print of barcode in format Arxivar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->barcodePrintArxBarcode($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodePrintArxBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

[**\Swagger\Client\Model\BarcodePrintResultDto**](../Model/BarcodePrintResultDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodePrintAttachmentByDocnumber**
> \Swagger\Client\Model\BarcodePrintResultDto barcodePrintAttachmentByDocnumber($docnumber)

This call executes the print of barcode for attachment of document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->barcodePrintAttachmentByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodePrintAttachmentByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

[**\Swagger\Client\Model\BarcodePrintResultDto**](../Model/BarcodePrintResultDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodePrintByDocnumber**
> \Swagger\Client\Model\BarcodePrintResultDto barcodePrintByDocnumber($docnumber)

This call executes the print of barcode associated with a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->barcodePrintByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodePrintByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

[**\Swagger\Client\Model\BarcodePrintResultDto**](../Model/BarcodePrintResultDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodePrintByIdBarcode**
> \Swagger\Client\Model\BarcodePrintResultDto barcodePrintByIdBarcode($id_barcode)

This call executes the print of barcode

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_barcode = 56; // int | Barcode identifier

try {
    $result = $apiInstance->barcodePrintByIdBarcode($id_barcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodePrintByIdBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_barcode** | **int**| Barcode identifier |

### Return type

[**\Swagger\Client\Model\BarcodePrintResultDto**](../Model/BarcodePrintResultDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodePrintRevisionByDocnumber**
> \Swagger\Client\Model\BarcodePrintResultDto barcodePrintRevisionByDocnumber($docnumber)

This call executes the print of barcode for revision of document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$docnumber = 56; // int | Document identifier

try {
    $result = $apiInstance->barcodePrintRevisionByDocnumber($docnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodePrintRevisionByDocnumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **docnumber** | **int**| Document identifier |

### Return type

[**\Swagger\Client\Model\BarcodePrintResultDto**](../Model/BarcodePrintResultDto.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodeSetBarcodeGraphicUserTemplate**
> barcodeSetBarcodeGraphicUserTemplate($dto)

This call sets the barcode graphic user template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dto = new \Swagger\Client\Model\BarcodeGraphicTemplateSaveDto(); // \Swagger\Client\Model\BarcodeGraphicTemplateSaveDto | Barcode Graphic Template to save

try {
    $apiInstance->barcodeSetBarcodeGraphicUserTemplate($dto);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeSetBarcodeGraphicUserTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dto** | [**\Swagger\Client\Model\BarcodeGraphicTemplateSaveDto**](../Model/BarcodeGraphicTemplateSaveDto.md)| Barcode Graphic Template to save |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodeSetBarcodeUserSettings**
> barcodeSetBarcodeUserSettings($barcode_settings)

This call sets the barcode user default settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$barcode_settings = new \Swagger\Client\Model\BarcodeUserSettingsDto(); // \Swagger\Client\Model\BarcodeUserSettingsDto | Barcode settings for user

try {
    $apiInstance->barcodeSetBarcodeUserSettings($barcode_settings);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeSetBarcodeUserSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **barcode_settings** | [**\Swagger\Client\Model\BarcodeUserSettingsDto**](../Model/BarcodeUserSettingsDto.md)| Barcode settings for user |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **barcodeSetBarcodeUserTemplate**
> barcodeSetBarcodeUserTemplate($template_dto)

This call sets the barcode user template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\BarcodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_dto = new \Swagger\Client\Model\BarcodeTemplateDto(); // \Swagger\Client\Model\BarcodeTemplateDto | Barcode Template

try {
    $apiInstance->barcodeSetBarcodeUserTemplate($template_dto);
} catch (Exception $e) {
    echo 'Exception when calling BarcodeApi->barcodeSetBarcodeUserTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_dto** | [**\Swagger\Client\Model\BarcodeTemplateDto**](../Model/BarcodeTemplateDto.md)| Barcode Template |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

