# CertificateInfoDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sign_algorithm** | [**\Swagger\Client\Model\IdValuePairDTO**](IdValuePairDTO.md) |  | [optional] 
**key_bit_length** | **int** |  | [optional] 
**serial_number** | **string** |  | [optional] 
**thumbprint_algorithm** | [**\Swagger\Client\Model\IdValuePairDTO**](IdValuePairDTO.md) |  | [optional] 
**thumbprint** | **string** |  | [optional] 
**trust_level** | **string** |  | [optional] 
**key_usage_list** | **int[]** |  | [optional] 
**extended_key_usage_list** | [**\Swagger\Client\Model\IdValuePairDTO[]**](IdValuePairDTO.md) |  | [optional] 
**valid_not_before_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**valid_not_after_utc** | [**\DateTime**](\DateTime.md) |  | [optional] 
**subject_key_identifier** | **string** |  | [optional] 
**subject_alternative_name** | **string** |  | [optional] 
**subject_unique_id** | **string** |  | [optional] 
**subject_info_list** | [**\Swagger\Client\Model\IdValuePairDTO[]**](IdValuePairDTO.md) |  | [optional] 
**version** | **int** |  | [optional] 
**issuer_unique_id** | **string** |  | [optional] 
**issuer_alternative_name** | **string** |  | [optional] 
**issuer_info_list** | [**\Swagger\Client\Model\IdValuePairDTO[]**](IdValuePairDTO.md) |  | [optional] 
**authority_info_access_ocsp** | **string[]** |  | [optional] 
**crl_distribution_points** | **string[]** |  | [optional] 
**validation_message_list** | [**\Swagger\Client\Model\ValidationMessageDTO[]**](ValidationMessageDTO.md) |  | [optional] 
**certificate_policies** | [**\Swagger\Client\Model\CertificatePolicyInfoDTO[]**](CertificatePolicyInfoDTO.md) |  | [optional] 
**qc_statement_list** | [**\Swagger\Client\Model\SignatureAttributeDTO[]**](SignatureAttributeDTO.md) |  | [optional] 
**is_trusted** | **bool** |  | [optional] 
**trust_validation_message_list** | [**\Swagger\Client\Model\ValidationMessageDTO[]**](ValidationMessageDTO.md) |  | [optional] 
**is_valid** | **bool** |  | [optional] 
**certificate_b64** | **string** |  | [optional] 
**verify_condition** | [**\Swagger\Client\Model\VerifyConditionDTO**](VerifyConditionDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


