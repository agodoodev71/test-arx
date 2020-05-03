# AccessTokenInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Access Token | [optional] 
**refresh_token_token** | **string** | Refresh Token | [optional] 
**token_type** | **string** | Token Type | [optional] 
**auth_property_list** | [**\Swagger\Client\Model\AuthPropertyInfoDTO[]**](AuthPropertyInfoDTO.md) | Properties | [optional] 
**expires_utc** | [**\DateTime**](\DateTime.md) | Expires | [optional] 
**issued_utc** | [**\DateTime**](\DateTime.md) | Issued | [optional] 
**is_persistent** | **bool** | Authentication Persistent | [optional] 
**claim_info_list** | [**\Swagger\Client\Model\ClaimInfoDTO[]**](ClaimInfoDTO.md) | Claims | [optional] 
**arx_user_must_change_password** | **bool** | Passeord Change | [optional] 
**error** | [**\Swagger\Client\Model\MessageErrorDTO**](MessageErrorDTO.md) | Error Message | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


