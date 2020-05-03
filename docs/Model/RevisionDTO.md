# RevisionDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional] 
**docnumber** | **int** | Document Identifier | [optional] 
**revision** | **int** | Revision Number | [optional] 
**user** | **int** | User Identifier | [optional] 
**user_description** | **string** | User Description | [optional] 
**document_date** | [**\DateTime**](\DateTime.md) | Document Date | [optional] 
**profile_date** | [**\DateTime**](\DateTime.md) | Document Creation Date | [optional] 
**path** | **string** | File Path | [optional] 
**file_name** | **string** | File Compressed Name | [optional] 
**original_name** | **string** | Original File Name | [optional] 
**file_date** | [**\DateTime**](\DateTime.md) | File Date | [optional] 
**attachments** | **bool** | Has Attachments | [optional] 
**hash** | **string** | File Hash | [optional] 
**zip_password** | **string** | Password Zip | [optional] 
**device** | **int** | Possible values:  0: Hd  1: Cd | [optional] 
**cd_label** | **string** | CD Label | [optional] 
**cstring** | **string** | Database to save | [optional] 
**save_type** | **int** | Possible values:  0: File_System  1: Database | [optional] 
**compressed** | **bool** | If file compressed | [optional] 
**compression_mode** | **int** | Possible values:  0: None  1: CompressChilkat91  2: CompressChilkat95  3: CompressChilkat95AndCryptoAes256 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


