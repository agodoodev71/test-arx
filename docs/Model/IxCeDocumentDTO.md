# IxCeDocumentDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**attachment_id** | **int** |  | [optional] 
**note_id** | **int** |  | [optional] 
**father_id** | **int** |  | [optional] 
**ixce_id** | **string** |  | [optional] 
**vat_number** | **string** |  | [optional] 
**document_type_system_id** | **int** |  | [optional] 
**document_type_description** | **string** |  | [optional] 
**docnumber** | **int** |  | [optional] 
**revision** | **int** |  | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**status** | **int** | Possible values:  0: Error  1: Inserted  2: ConnectorTakeCharge  3: ConnectorError  4: TakeChargeError  5: IxceTakeCharge  6: ToValidate  7: Validated  8: InError  9: Discarded  10: Preserved | [optional] 
**insertion_hash** | **string** |  | [optional] 
**receive_hash** | **string** |  | [optional] 
**accumulation_package_id** | **int** |  | [optional] 
**accumulation_package_description** | **string** |  | [optional] 
**modified** | **bool** |  | [optional] 
**last_update** | [**\DateTime**](\DateTime.md) |  | [optional] 
**description** | **string** |  | [optional] 
**user_id** | **int** |  | [optional] 
**user_description** | **string** |  | [optional] 
**service_type** | **int** | Possible values:  0: IX  1: IXCE  2: IXCE_V2  3: IX_V2 | [optional] 
**ix_document_id** | **int** |  | [optional] 
**ixce_index** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


