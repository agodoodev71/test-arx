# LayoutDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier | [optional] 
**type** | **int** | Possible values:  1: DesktopMenu  2: CommandsPanel | [optional] 
**name** | **string** | Name | [optional] 
**author** | **int** | Author user | [optional] 
**author_complete_name** | **string** | Author name | [optional] 
**creation_date** | [**\DateTime**](\DateTime.md) | Creation Date | [optional] 
**priority** | **int** | Priority | [optional] 
**details** | [**\Swagger\Client\Model\LayoutDetailDTO[]**](LayoutDetailDTO.md) | Details | [optional] 
**using_type** | **int** | Possible values:  2: Computer  4: Tablet  8: Smartphone | [optional] 
**users** | [**\Swagger\Client\Model\LayoutUsersDto[]**](LayoutUsersDto.md) | Users | [optional] 
**is_system** | **bool** | System Layout | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


