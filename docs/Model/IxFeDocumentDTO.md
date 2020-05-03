# IxFeDocumentDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**description** | **string** |  | [optional] 
**user_id** | **int** |  | [optional] 
**user_description** | **string** |  | [optional] 
**document_type_system_id** | **int** |  | [optional] 
**docnumber** | **int** |  | [optional] 
**revision** | **int** |  | [optional] 
**status** | **int** | Possible values:  0: Error  1: Inserted  2: ConnectorTakeCharge  3: ConnectorError  4: IxServiceTakeCharge  5: TemplateCompleted  6: TemplateError  7: ValidationCompleted  8: ValidationError  9: Discarded  10: ConservationCompleted  11: ConservationError  12: historicizingCompleted  13: historicizingError  14: DiscardedNotManaged  15: ResendCompleted  16: ResendError  17: SignCompleted  18: SignError  19: TransmissionCompleted  20: TransmissionError  21: DeliveryReceiptNotification  22: DeliveryMissedNotification  23: DiscardedNotification  24: ResultNotification  25: ExpirationTermsNotification  26: SendAttestationNotification  27: PositiveResultNotification  28: NegativeResultNotification  29: PositiveResultWaiting  30: NegativeResultWaiting | [optional] 
**ix_document_id** | **string** |  | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**ix_business_unit_vat_number** | **string** |  | [optional] 
**vat_sectional** | **string** |  | [optional] 
**ix_rule_id** | **int** |  | [optional] 
**service_type** | **int** | Possible values:  0: IX  1: IXCE  2: IXCE_V2  3: IX_V2 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


