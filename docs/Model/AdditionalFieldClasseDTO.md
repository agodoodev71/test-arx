# AdditionalFieldClasseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**value** | **int[]** | Value | [optional] 
**composed_values** | [**\Swagger\Client\Model\RowSearchResult[]**](RowSearchResult.md) | List of search items | [optional] 
**document_type** | [**\Swagger\Client\Model\DocumentTypeBaseDTO**](DocumentTypeBaseDTO.md) | Document Type for profiling | [optional] 
**insert_mask_id** | **string** | Identifier of the profiling mask | [optional] 
**show_expanded** | **bool** | Show all expanded items | [optional] 
**single_element** | **bool** | Only one item | [optional] 
**columns** | [**\Swagger\Client\Model\ColumnInfo[]**](ColumnInfo.md) | Columns to show | [optional] 
**additional_field_type** | **int** | Possible values:  0: Textbox  1: Databox  2: Numeric  3: Combobox  4: TableBox  5: Checkbox  6: MultiValue  7: ClasseBox  8: Group  9: RubricaBox  10: TextArea | [optional] 
**group_id** | **int** | Group Identifier | [optional] 
**binder_field_id** | **int** | Binder Field Identifier | [optional] 
**task_work_variable_id** | **int** | Variable Identifier in taskword context | [optional] 
**validation_type** | **int** | Possible values:  0: None  1: Regex  2: Formula | [optional] 
**validation_string** | **string** | Validation string (regex or formula) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


