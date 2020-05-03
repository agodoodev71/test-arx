# AttachmentDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier | [optional] 
**docnumber** | **int** | Document Identifier | [optional] 
**revision** | **int** | Revision number | [optional] 
**filename** | **string** | Name for the zip file. | [optional] 
**filepath** | **string** | Path of compressed file. | [optional] 
**originalname** | **string** | Name of the file. | [optional] 
**device** | **int** | Possible values:  0: Hd  1: Cd | [optional] 
**cdlabel** | **string** | CD Label | [optional] 
**comment** | **string** | Description | [optional] 
**importdate** | [**\DateTime**](\DateTime.md) | Creation Date | [optional] 
**user** | **int** | Identifier of the author | [optional] 
**user_complete_name** | **string** | Full name of the author | [optional] 
**block** | **int** | Possible values:  0: None  1: Active  2: Marked | [optional] 
**compliantcopy** | **bool** | Replace with the profile data for web visualization | [optional] 
**footprint** | **string** | Hash of the file | [optional] 
**checksend** | **bool** | Send the file in the case of email shipment | [optional] 
**aosflag** | **bool** | Kept in the replacement mode with the document profile | [optional] 
**access** | **int** | Possible values:  0: Access_Denied  1: Read_Only  2: Edit  4: Full_Trust  -1: None | [optional] 
**save_type** | **int** | Possible values:  0: File_System  1: Database | [optional] 
**filesize** | **int** | File Size | [optional] 
**kind** | **int** | Possible values:  0: ExternalAttachement  1: InternalAttachement | [optional] 
**attached_docnumber** | **int** | Document Identifier if the internal attachment | [optional] 
**ix_check** | **bool** | Send the file to IX service in the case of shipment | [optional] 
**attachment_revision** | **int** |  | [optional] 
**compression_mode** | **int** | Possible values:  0: None  1: CompressChilkat91  2: CompressChilkat95  3: CompressChilkat95AndCryptoAes256 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


