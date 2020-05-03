# SharingDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sharing_id** | **string** | Sharing unique id | [optional] 
**user_id** | **int** | Owner user id | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | Date time of creation | [optional] 
**html_for_access** | [**\Swagger\Client\Model\SharingHtmlDTO[]**](SharingHtmlDTO.md) | Html for the sharing page | [optional] 
**html_for_expiration** | [**\Swagger\Client\Model\SharingHtmlDTO[]**](SharingHtmlDTO.md) | Html for the expiration page | [optional] 
**url_for_receivers** | [**\Swagger\Client\Model\SharingReceiverUriDTO[]**](SharingReceiverUriDTO.md) | Collection of URL for receivers | [optional] 
**sharing_definition_id** | **string** | Unique identifier for the configuration | [optional] 
**document_type_id** | **int** | System id for the documentType. | [optional] 
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
**sharing_mode** | **int** | Possible values:  0: Link  1: Attachment  2: None | [optional] 
**mail_definitions** | [**\Swagger\Client\Model\SharingMailDTO[]**](SharingMailDTO.md) | List of mails to send. | [optional] 
**share_name** | **string** | Sharing name. | [optional] 
**share_description** | **string** | Sharing description. | [optional] 
**is_enable** | **bool** | Is enable. | [optional] 
**virtual** | **bool** | Is virtual sharing. | [optional] 
**sharing_receivers** | [**\Swagger\Client\Model\SharingReceiverDTO[]**](SharingReceiverDTO.md) | Sharing receivers. | [optional] 
**sharing_details** | [**\Swagger\Client\Model\SharingDetailDTO[]**](SharingDetailDTO.md) | Sharing details. | [optional] 
**external_data** | [**\Swagger\Client\Model\KeyValueDTO[]**](KeyValueDTO.md) | Sharing external data. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


