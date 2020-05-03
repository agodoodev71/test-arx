# ViewEditDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier | [optional] 
**description** | **string** |  | [optional] 
**user** | **int** | User Identifier | [optional] 
**user_complete_name** | **string** | User Description | [optional] 
**document_type** | **int** | Document Type Identifier for first level | [optional] 
**type2** | **int** | Document Type Identifier for second level | [optional] 
**type3** | **int** | Document Type Identifier for third level | [optional] 
**select_fields** | [**\Swagger\Client\Model\SelectDTO**](SelectDTO.md) | Lista dei campi da visualizzare nel risultato di ricerca. | [optional] 
**edit_fields** | [**\Swagger\Client\Model\SearchDTO**](SearchDTO.md) | List of edit fields | [optional] 
**lock_fields** | [**\Swagger\Client\Model\SearchDTO**](SearchDTO.md) | List of lock fields | [optional] 
**show_fields** | **bool** | Mode of show fields | [optional] 
**form_open** | **bool** | Mode of show search form | [optional] 
**allow_empty_filter_mode** | **int** | Possible values:  0: Yes  1: No  2: OnDemand | [optional] 
**show_groups_mode** | **int** | Possible values:  0: No  1: Yes | [optional] 
**can_execute** | **bool** | Can Search | [optional] 
**can_update** | **bool** | Can Update | [optional] 
**can_delete** | **bool** | Can Delete | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


