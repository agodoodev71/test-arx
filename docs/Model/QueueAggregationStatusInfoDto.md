# QueueAggregationStatusInfoDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**working_progress** | **int** |  | [optional] 
**queue_status** | **int** | Possible values:  0: CompletedOk  1: CompletedPartialOk  2: CompletedKo  3: Deleted  4: Processing  5: Enqueued  6: Waiting  7: Failed | [optional] 
**is_completed** | **bool** |  | [optional] 
**queue_id** | **string** | Queue Identifier | [optional] 
**queue_name** | **string** | Queue Name | [optional] 
**queue_type** | **string** | Queue Type | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Creation Date | [optional] 
**expire_at** | [**\DateTime**](\DateTime.md) | Expiration Date | [optional] 
**work_item_count** | **int** | Items | [optional] 
**state_count** | [**\Swagger\Client\Model\QueueStateAggregationInfoDto**](QueueStateAggregationInfoDto.md) | Status of items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


