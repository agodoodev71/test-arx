# Swagger\Client\TicketDownloadsApi

All URIs are relative to *http://localhost/ARXivarNextWebApi*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ticketDownloadsDownloadDocumentByTicket**](TicketDownloadsApi.md#ticketDownloadsDownloadDocumentByTicket) | **GET** /api/TicketDownloads/download/{ticketId} | This call returns the file associated with a pre requested Ticket


# **ticketDownloadsDownloadDocumentByTicket**
> \SplFileObject ticketDownloadsDownloadDocumentByTicket($ticket_id)

This call returns the file associated with a pre requested Ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Authorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\TicketDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = "ticket_id_example"; // string | 

try {
    $result = $apiInstance->ticketDownloadsDownloadDocumentByTicket($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketDownloadsApi->ticketDownloadsDownloadDocumentByTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **string**|  |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

