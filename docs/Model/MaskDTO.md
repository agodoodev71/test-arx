# MaskDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier | [optional] 
**mask_name** | **string** | Name | [optional] 
**mask_description** | **string** | Description | [optional] 
**predefined_profile_id** | **int** | Predefined Profile Identifier | [optional] 
**user** | **int** | Author Identifier | [optional] 
**external_id** | **string** | External Identifier | [optional] 
**is_root** | **bool** | Root | [optional] 
**type** | **int** | Possible values:  0: Nothing  1: Barcode  2: Archiviazione | [optional] 
**pa_mode** | **int** | Possible values:  0: None  1: OnlyNever  2: OnlyOptionally  3: NeverOrOptionally  4: OnlyAlways  5: AlwaysOrNever  6: AlwaysOrOptionally  7: All | [optional] 
**show_additional** | **bool** | Show Additional | [optional] 
**kind** | **int** | Possible values:  0: UserMask  1: SystemMask | [optional] 
**show_groups** | **bool** | Show Groups | [optional] 
**user_complete_name** | **string** | Author Complete Name | [optional] 
**predefined_profile** | [**\Swagger\Client\Model\PredefinedProfileDTO**](PredefinedProfileDTO.md) | Predefined Profile associated with the mask | [optional] 
**mask_details** | [**\Swagger\Client\Model\MaskDetailDTO[]**](MaskDetailDTO.md) | Details | [optional] 
**mask_class_options** | [**\Swagger\Client\Model\MaskClassOptionsDTO[]**](MaskClassOptionsDTO.md) | Options on document type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


