# SignatureInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signature_standard** | **string** |  | [optional] 
**certificate_info** | [**\Swagger\Client\Model\CertificateInfoDTO**](CertificateInfoDTO.md) |  | [optional] 
**timestamp_info** | [**\Swagger\Client\Model\TimestampInfoDTO**](TimestampInfoDTO.md) |  | [optional] 
**counter_signatures** | [**\Swagger\Client\Model\SignatureInfoDTO[]**](SignatureInfoDTO.md) |  | [optional] 
**content_type** | [**\Swagger\Client\Model\IdValuePairDTO**](IdValuePairDTO.md) |  | [optional] 
**digest_algorithm** | [**\Swagger\Client\Model\IdValuePairDTO**](IdValuePairDTO.md) |  | [optional] 
**sign_algorithm** | [**\Swagger\Client\Model\IdValuePairDTO**](IdValuePairDTO.md) |  | [optional] 
**signature_hex** | **string** |  | [optional] 
**is_valid** | **bool** |  | [optional] 
**signature_integrity** | **bool** |  | [optional] 
**is_counter_sign** | **bool** |  | [optional] 
**signature_validation_message_list** | [**\Swagger\Client\Model\ValidationMessageDTO[]**](ValidationMessageDTO.md) |  | [optional] 
**signature_time_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**signed_attribute_list** | [**\Swagger\Client\Model\SignatureAttributeDTO[]**](SignatureAttributeDTO.md) |  | [optional] 
**unsigned_attribute_list** | [**\Swagger\Client\Model\SignatureAttributeDTO[]**](SignatureAttributeDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


