# SharingDefinitionDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the configuration | [optional] 
**document_type_id** | **int** | System id for the documentType. | [optional] 
**business_unit_code** | **string** | BusinessUnit code. | [optional] 
**beginning** | **int** | Days for the activation of the sharing. | [optional] 
**expiration** | **int** | Days for the expiration of the sharing. | [optional] 
**after_send** | **int** | Possible values:  0: None  1: Email  2: R  3: RR  4: EmailArchiveContent | [optional] 
**repeat_send_mail** | **bool** | Resend for the mail. | [optional] 
**repeat_send_mail_time** | **int** | Resend mail Days. | [optional] 
**repeat_send_mail_number** | **int** | Max number of resend for mail. | [optional] 
**workflow_after_read** | **int** | Workflow id for the read operation. | [optional] 
**workflow_after_expiration** | **int** | Workflow id for the expiration of a read sharing | [optional] 
**workflow_after_expiration_not_read** | **int** | Workflow id for the expiration of a not read sharing | [optional] 
**alert_for_no_read** | **bool** | Enable warning for no read sharing. | [optional] 
**alert_for_no_read_time** | **int** | Warning message for no read sharing days. | [optional] 
**disable_after_read** | **bool** | Disable sharing after read. | [optional] 
**delete_after_expiration** | **bool** | Delete after expiration. | [optional] 
**immediatly_send** | **bool** | Immediatly send. | [optional] 
**send_time** | [**\DateTime**](\DateTime.md) | Send datetime. | [optional] 
**max_download_time** | **int** | Max number of download | [optional] 
**details_as_zip** | **bool** | Archive the details in one zip | [optional] 
**default_language** | **string** | Default language. | [optional] 
**download_directly** | **bool** | Donwload the documents directly from mail | [optional] 
**aggregable** | **bool** | Aggregable sharing. | [optional] 
**aggregate_mode** | **int** | Possible values:  0: ByDefinition  1: ByDocumentType | [optional] 
**sharing_mode** | **int** | Possible values:  0: Link  1: Attachment  2: None | [optional] 
**mail_definitions** | [**\Swagger\Client\Model\SharingMailDTO[]**](SharingMailDTO.md) | List of mails to send. | [optional] 
**html_for_access** | [**\Swagger\Client\Model\SharingHtmlDTO[]**](SharingHtmlDTO.md) | List of Html for access to sharing page. | [optional] 
**html_for_expiration** | [**\Swagger\Client\Model\SharingHtmlDTO[]**](SharingHtmlDTO.md) | List of html for expiration page | [optional] 
**selected_fields** | [**\Swagger\Client\Model\SelectDTO**](SelectDTO.md) | Fields For Profile selection. | [optional] 
**sharing_definition_sender** | [**\Swagger\Client\Model\SharingDefinitionSenderDTO**](SharingDefinitionSenderDTO.md) | Sharing sender. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


