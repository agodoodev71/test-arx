# FieldBaseForSearchDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_id** | **int** | Group Identifier | [optional] 
**field_type** | **int** | Possible values:  0: Standard  1: Group  2: Additional | [optional] 
**additional_field_type** | **int** | Possible values:  0: Textbox  1: Databox  2: Numeric  3: Combobox  4: TableBox  5: Checkbox  6: MultiValue  7: ClasseBox  8: Group  9: RubricaBox  10: TextArea | [optional] 
**default_operator** | **int** | Default Operator | [optional] 
**table_name** | **string** | Table name | [optional] 
**binder_field_id** | **int** | Binder Identifier | [optional] 
**multiple** | **string** | Multiple values | [optional] 
**name** | **string** | Name | [optional] 
**external_id** | **string** | External identifier | [optional] 
**description** | **string** | Label | [optional] 
**order** | **int** | Order | [optional] 
**data_source** | **string** | DataSource identifier | [optional] 
**required** | **bool** | Required | [optional] 
**formula** | **string** | Formula | [optional] 
**class_name** | **string** | Name of class | 
**locked** | **bool** | Locked in read-only | [optional] 
**combo_gruppi_id** | **string** | Data Group Identifier | [optional] 
**dependency_fields** | [**\Swagger\Client\Model\DependencyFieldItem[]**](DependencyFieldItem.md) | List of dependent fields | [optional] 
**associations** | **map[string,string]** | Associated fields | [optional] 
**is_additional** | **bool** | Field type additional | [optional] 
**visible** | **bool** | Visible | [optional] 
**predefined_profile_formula** | **string** | Formula in the context of predefined profile | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


