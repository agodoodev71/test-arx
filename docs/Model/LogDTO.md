# LogDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Identifier | [optional] 
**log_level** | **int** | Possible values:  1: INFORMATION  2: SUCCESSAUDIT  3: FAILUREAUDIT  4: WARNING  5: ERROR | [optional] 
**log_message** | **string** | Message | [optional] 
**log_date** | [**\DateTime**](\DateTime.md) | Creation Date | [optional] 
**user_id** | **int** | Author | [optional] 
**user_name_complete** | **string** | Author Name | [optional] 
**ip_logger** | **string** | Ip Address | [optional] 
**info_type** | **int** | Possible values:  0: Nothing  1: WcfService  2: LogInClient  3: LogOutClient  4: LogInServer  5: LogOutServer  6: LogInSPR  7: LogOutSPR  8: LogInWEB  9: LogOutWEB  10: LogInGeneric  11: LogOutGeneric  12: LogInOCR  13: LogOutOCR  14: WcfServiceDmModuliDelete  15: LogIn  16: LogOut  17: GetDocument  18: SetDocument  19: DmNoteUpdated  20: PluginQueueLogInfo  21: SdAssocDocInserted  22: SdAssocDocDeleted  23: DmBarcodeDeleted  24: DmBarcodeUnMatchProfile  25: DmAllegatiFaxInsertDocument  26: DmDocOpenCheckOut  27: DocumentInsertRelationship  28: RevisioniGetDocument  29: RevisioniDelete  30: DmNpceOutInsert  31: DmNpceOutUpdate  32: DmNpceOutDelete  33: DmAssociazioniInsert  34: DmAllegatiWorkInsert  35: DmProcessDocSetDocumentInEditBuffer  36: DmProcessDocSetDocumentInLine  37: DmProcessDocSetDocumentForProfile  38: DmAllegatiDocInsert  39: DmAllegatiDocUpdate  40: DmAllegatiDocDelete  41: ProfileUpdateProtocollo  42: ProfileDeleted  43: ExternalCall  44: ProfileUndoCheckOut  45: ProfileInserted  46: ProfileLogReaded  47: ProfileUpdate  48: Profile_Field_DocName  49: Profile_Field_Aoo  50: Profile_Field_Numero  51: Profile_Field_DataDoc  52: Profile_Field_Mittente  53: Profile_Field_Destinatario  54: Profile_Field_Cc  55: Profile_Field_CreationDate  56: Profile_Field_Impronta  57: Profile_Field_Device  58: Profile_Field_DataFile  59: Profile_Field_Importante  60: Profile_Field_Revisione  61: Profile_Field_Autore  62: Profile_Field_Protocollo  63: Profile_Field_Anno  64: Profile_Field_Bloccato  65: Profile_Field_Stato  66: Profile_Field_InOut  67: Profile_Field_Scadenza  68: Profile_Field_Flag  69: Profile_Field_WorkFlow  70: Profile_Field_GestRev  71: Profile_Field_EtichettaCd  72: Profile_Field_EtichettaAos  73: Profile_Field_Associazioni  74: Profile_Field_OpenDoc  75: Profile_Field_Allegati  76: Profile_Field_Emergenza  77: Profile_Field_IsAos  78: Profile_Field_EtiReader  79: Profile_Field_ScadAos  80: Profile_Field_Aggiuntivi  81: Profile_Field_DataProt  82: Profile_Field_Compressed  83: ProfileLogMigrated  84: Profile_Field_Originale  85: ProfileSigned  86: ProfileInsertedInFolder  87: ProfileInsertedInFaxOut  88: ProfileInsertedInPratica  89: ProfileInsertedNote  90: LicenseViolated  91: BarcodePrinted  92: WorkflowStarted  93: WorkflowEnded  94: WorkflowEndedForced  95: WorkflowDeleted  96: DmAllegatiDocSignOtpSent  97: DmProfileSignOtpSent  98: ProfileRemovedFromFolder  99: ProfileRemovedFromPratica  100: Dm_Sharing_Insert  101: Dm_Sharing_Update  102: Dm_Sharing_Expiration  103: Dm_Sharing_Read  104: Dm_Sharing_Delete  105: Dm_Sharing_Expiration_NpceOut  106: RemoveDocument  107: Dm_Sharing_Alert  108: Dm_Sharing_MailOut  109: DocumentRemovedFromRelationship  110: DmAssociazioniDelete  111: Dm_Queue_Start  112: Dm_Queue_Change_Progress  113: Dm_Queue_Scheduled  114: Dm_Queue_Terminated  115: Dm_Queue_Cancelled  116: Dm_Queue_Waiting  117: Dm_Queue_Warning  118: Dm_Queue_Info  119: Dm_Instructions_Insert  120: Dm_Instructions_Update  121: Dm_Instructions_Delete  122: Dm_DatiProfilo_Field_Id  123: Dm_DatiProfilo_Field_Valore  124: Dm_DatiProfilo_Field_Contatti  125: Dm_DatiProfilo_Field_Fax  126: Dm_DatiProfilo_Field_Tel  127: Dm_DatiProfilo_Field_Indirizzo  128: Dm_DatiProfilo_Field_Mail  129: Dm_DatiProfilo_Field_Localita  130: Dm_DatiProfilo_Field_Cap  131: Dm_DatiProfilo_Field_Provincia  132: Dm_DatiProfilo_Field_Nazione  133: Dm_DatiProfilo_Field_Contatto  134: Dm_DatiProfilo_Field_Mansione  135: Dm_DatiProfilo_Field_TelNome  136: Dm_DatiProfilo_Field_FaxNome  137: Dm_DatiProfilo_Field_Cell  138: Dm_DatiProfilo_Field_Abitazione  139: Dm_DatiProfilo_Field_Reparto  140: Dm_DatiProfilo_Field_Ufficio  141: Dm_DatiProfilo_Field_Email  142: Dm_DatiProfilo_Field_Riferimento  143: Dm_DatiProfilo_Field_CodFis  144: Dm_DatiProfilo_Field_PartIva  145: Dm_DatiProfilo_Field_Priorita  146: Dm_DatiProfilo_Field_Codice  147: Profile_Field_Senders  148: Dm_Collaboration_Create  149: Dm_Collaboration_ReCollaborate  150: Dm_Collaboration_TakeOff  151: Dm_Collaboration_Delete  152: Profile_Field_DocumentType  153: Profile_Field_Tipo2  154: Profile_Field_Tipo3  155: Dm_Collaboration_Terminate  156: AllegatiDocSigned  157: LogInFailed | [optional] 
**info_type_message** | **string** | Message Type | [optional] 
**info_int** | **int** | Information in integer format | [optional] 
**session_id** | **string** | Session Identifier | [optional] 
**software_name** | **string** | Software Name | [optional] 
**software_type** | **string** | Software Type | [optional] 
**info_string** | **string** | Information in string format | [optional] 
**parent_id** | **string** | Identifier of the reference object | [optional] 
**log_kind** | **int** | Possible values:  0: None  1: Profile  2: Sharing  3: Queue  4: Instruction  5: Collaboration | [optional] 
**history_int** | **int** | Integer for Deleting Rules | [optional] 
**history_string** | **string** | String for Deleting Rules | [optional] 
**childs** | [**\Swagger\Client\Model\LogDTO[]**](LogDTO.md) | Sublevel Items | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

