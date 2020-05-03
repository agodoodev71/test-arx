# AuthenticationTokenDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error** | **string** | Error code | [optional] 
**error_description** | **string** | Error desciption | [optional] 
**error_uri** | **string** | Error Uri | [optional] 
**access_token** | **string** | Access token string | [optional] 
**token_type** | **string** | Token type (bearer) | [optional] 
**expires_in** | **int** | Token and refresh token expire in ExpiresIn seconds | [optional] 
**refresh_token** | **string** | Refresh token string | [optional] 
**issued** | [**\DateTime**](\DateTime.md) | Issue date of the token | [optional] 
**expires** | [**\DateTime**](\DateTime.md) | Expiration date of the token | [optional] 
**arxclient_id** | **string** | Client id | [optional] 
**arxuser_must_change_password** | **bool** | User must change password after this &#39;login&#39; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


