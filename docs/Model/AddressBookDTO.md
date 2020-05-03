# AddressBookDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier of the address book | [optional] 
**business_name** | **string** | Business name | [optional] 
**fax** | **string** | Fax number | [optional] 
**address** | **string** | Address | [optional] 
**location** | **string** | Location | [optional] 
**postal_code** | **string** | Postal code | [optional] 
**province** | **string** | Province | [optional] 
**country** | **string** | Country | [optional] 
**email** | **string** | Enail address | [optional] 
**phone_number** | **string** | Phone number | [optional] 
**cell_phone** | **string** | Call phone number | [optional] 
**state** | **int** | Possible values:  0: Active  1: NotActive | [optional] 
**type** | **int** | Possible values:  0: User  1: Group  2: Business | [optional] 
**address_book_category_id** | **int** | Unique identifier of the category | [optional] 
**business_unit** | **string** | BusinessUnit code | [optional] 
**class** | **string** | Class | [optional] 
**fiscal_code** | **string** | Fiscal Code | [optional] 
**vat_number** | **string** | Partita Iva | [optional] 
**priority** | **int** | Possible values:  0: NoSend  1: Fax  2: Email  3: Fax_Email  4: Email_Fax  5: Fax_Plus_Mail  6: Print | [optional] 
**address_book_business_unit_code** | **string** | Business Unit code for not internal user | [optional] 
**address_book_note** | **string** | Note | [optional] 
**external_code** | **string** | External Code | [optional] 
**additional_fields** | [**\Swagger\Client\Model\AdditionalConcreteFields**](AdditionalConcreteFields.md) | Additional fields | [optional] 
**contacts** | [**\Swagger\Client\Model\ContactDTO[]**](ContactDTO.md) | Contacts | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


