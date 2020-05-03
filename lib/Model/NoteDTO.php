<?php
/**
 * NoteDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Abletech.Arxivar.Server.WebApi.Services
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * NoteDTO Class Doc Comment
 *
 * @category Class
 * @description Class of note
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'docnumber' => 'int',
        'user' => 'int',
        'user_complete_name' => 'string',
        'creation_date' => '\DateTime',
        'comment' => 'string',
        'revision' => 'int',
        'aosflag' => 'bool',
        'counters_table' => 'int',
        'external_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'docnumber' => 'int32',
        'user' => 'int32',
        'user_complete_name' => null,
        'creation_date' => 'date-time',
        'comment' => null,
        'revision' => 'int32',
        'aosflag' => null,
        'counters_table' => 'int32',
        'external_id' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'docnumber' => 'docnumber',
        'user' => 'user',
        'user_complete_name' => 'userCompleteName',
        'creation_date' => 'creationDate',
        'comment' => 'comment',
        'revision' => 'revision',
        'aosflag' => 'aosflag',
        'counters_table' => 'countersTable',
        'external_id' => 'externalId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'docnumber' => 'setDocnumber',
        'user' => 'setUser',
        'user_complete_name' => 'setUserCompleteName',
        'creation_date' => 'setCreationDate',
        'comment' => 'setComment',
        'revision' => 'setRevision',
        'aosflag' => 'setAosflag',
        'counters_table' => 'setCountersTable',
        'external_id' => 'setExternalId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'docnumber' => 'getDocnumber',
        'user' => 'getUser',
        'user_complete_name' => 'getUserCompleteName',
        'creation_date' => 'getCreationDate',
        'comment' => 'getComment',
        'revision' => 'getRevision',
        'aosflag' => 'getAosflag',
        'counters_table' => 'getCountersTable',
        'external_id' => 'getExternalId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['docnumber'] = isset($data['docnumber']) ? $data['docnumber'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['user_complete_name'] = isset($data['user_complete_name']) ? $data['user_complete_name'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['aosflag'] = isset($data['aosflag']) ? $data['aosflag'] : null;
        $this->container['counters_table'] = isset($data['counters_table']) ? $data['counters_table'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets docnumber
     *
     * @return int
     */
    public function getDocnumber()
    {
        return $this->container['docnumber'];
    }

    /**
     * Sets docnumber
     *
     * @param int $docnumber Document Identifier
     *
     * @return $this
     */
    public function setDocnumber($docnumber)
    {
        $this->container['docnumber'] = $docnumber;

        return $this;
    }

    /**
     * Gets user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int $user Author
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets user_complete_name
     *
     * @return string
     */
    public function getUserCompleteName()
    {
        return $this->container['user_complete_name'];
    }

    /**
     * Sets user_complete_name
     *
     * @param string $user_complete_name Author Name
     *
     * @return $this
     */
    public function setUserCompleteName($user_complete_name)
    {
        $this->container['user_complete_name'] = $user_complete_name;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date Creation Date
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Text
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision Document Revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets aosflag
     *
     * @return bool
     */
    public function getAosflag()
    {
        return $this->container['aosflag'];
    }

    /**
     * Sets aosflag
     *
     * @param bool $aosflag Conservation
     *
     * @return $this
     */
    public function setAosflag($aosflag)
    {
        $this->container['aosflag'] = $aosflag;

        return $this;
    }

    /**
     * Gets counters_table
     *
     * @return int
     */
    public function getCountersTable()
    {
        return $this->container['counters_table'];
    }

    /**
     * Sets counters_table
     *
     * @param int $counters_table Possible values:  0: DM_ALLEGATIDOC  1: DM_ALLEGATIFAX  2: DM_ALLEGATIWORK  3: DM_ASSOCIAZIONI  4: DM_CAMPIPRATICA  5: DM_CAMPIPRATICHECBO  6: DM_CAMPISPECGRP  7: DM_CONTATTI  8: DM_FASCICOLI  9: DM_FAXOUT  10: DM_NOTE  11: DM_OPZIONI  12: DM_PERMESSI_FOLDER  13: DM_PERMESSI_RUBRICA  14: DM_PROFILE  15: DM_GRUPPI  16: DM_RUBRICA  17: DM_UTENTI  18: DM_REVISIONI  19: DM_SECURITY  20: DM_STATOSECURITY  21: DM_TIPIPRATICHE  22: DM_TABELLE  23: DM_TIPI_UTENTI  24: DM_ELENCO_ORG  25: DM_ORGANIGRAMMA  26: DM_ORGDESIGN  27: DM_CATRUBRICHE  28: DM_CAMPI  29: DM_CAMPI_VALORI  30: DM_RUBRICA_OPZIONALI  31: DM_NOTECONTATTI  32: DM_SECURITY_DOC  33: DM_NPCE_OUT  34: DM_LOG  35: DM_NPCE_LOG  36: DM_DESKTOP  37: DM_VARIABILIPROCESSO  38: DM_DATIPROFILO  39: DM_AUTOPROFILO  40: DM_PROTOCOLLI  41: DM_DATI_ENTE  42: DM_NUMERAZIONE  43: DM_FILEINFOLDER  44: DM_INOLTRO  45: DM_DOCMOV  46: DM_CAMPIMESSAGGIO  47: DM_DETTAGLIMAIL  48: DM_MAILOUT  49: DM_DELEGATI  50: DM_MSG  51: DM_ACCOUNT  52: DM_FOLDERTYPE  53: SD_ASSOCDOC  54: DM_COMBO  55: DM_REGOLEUNIVOCITA  56: DM_BARCODE  57: DM_DOCALLEGATI  58: DM_STARTWORKFLOW  59: DM_FILTRO  60: DM_ELENCOPRATICHE  61: DM_TESTO  62: DM_PROCBATCH  63: DM_EVENTIFLOW  64: DM_TRADUZIONI  65: DM_TIPIDOCUMENTO  66: DM_GRUPPIMODELLI  67: DM_ASSOCIAFOLDER_DATIPROFILO  68: DM_ASSOCIAFOLDER  69: DM_MODULIOFFICE  70: DM_EMERGENZA  71: DM_TASKEXECUTE  72: DM_NOTEWORK  73: DM_PERMESSIALLEGATI  74: DM_PROCESSDOC  75: DM_MASSIVEUPDATES  76: DM_MASSIVEUPDATES_DATIPROFILO  77: DM_MASSIVEUPDATES_DATA  78: DM_COMANDITASK  79: DM_TRADUZIONI_PKG  80: DM_FIGUREPROCESSO  81: DM_PROMEMORIA  82: DM_ALLEGATIPROMO  83: DM_SIGNDELEGATE  84: DM_SIGNCERT  85: DM_SIGNCERTLOCATION  86: DM_VARIABILIQUERY  87: DM_ASSOCIAFOLDER_MAPPING  88: DM_PERMESSINOTE  89: DM_WORKFLOW_EXTRAGRANT  90: DM_QUEUE  91: DM_QUEUEDETAIL  92: NOTHING  93: DM_CACHE  94: DM_THUMBNAIL  95: DM_SMSACCOUNT  96: DM_SHARING  97: DM_SHARING_DEFINITION  98: DM_SHARING_DETAIL  99: DM_SHARING_RECEIVER  100: DM_SHARING_OPERATION  101: DM_TASKWORK  102: DM_TASKWORK_CLOSE  103: DM_INSTRUCTIONS  104: DM_TASKS  105: DM_WORKFLOW  106: DM_AOO  107: DM_LOGONPROVIDERS  108: DM_MASSIVEUPDATES_MAPPING  109: DM_STORAGE  110: DM_TIPIDOC_DEFMAIL  111: DM_LOGS  112: DM_PN_DEVICE  113: DM_PN_NOTIFICATIONS  114: DM_COLLABORATION  115: DM_COLLABORATION_MASTER  116: DM_COLLABORATION_DETAIL  117: WS_VERSAMENTI  118: WS_VERSAMENTI_DETT_ATT  119: WS_VERSAMENTI_DETT_NOTE  120: WS_VERSAMENTI_DETT_DOC  121: WS_AOS  122: WS_AOS_MAPPING  123: WS_DOCTOIX  124: WS_DOCTOIX_DETAIL  125: WS_TIPIDOCUMENTO  126: WS_CREDENTIAL  127: WS_CLASSINORM  128: WS_CLASSINORM_FILTER  129: WS_TIPIDOC_EXPORT  130: WS_TIPIDOC_ROTT  131: WS_NOTIFY  132: WS_NOTIFY_MAPPING  133: DM_COLLABORATION_TEMPLATE  134: DM_COLLABORATION_TAKEOFF  135: DM_COLLABORATION_TEMPLATE_M  136: WS_CONFCLASSEIXCE  137: WS_CAMPIMETADATIIXCE  138: WS_DOCTOIXCE  139: WS_DOCTOIXCE_DETAIL  140: WS_VERSAMENTO  141: DM_PLUGINCUSTOM_DETT  142: DM_PLUGINCUSTOM  143: DM_PLUGINCUSTOMWF  144: DM_PLUGINCUSTOMWF_CONF  145: DM_LINKS  146: DM_LINKS_MANSDYN  147: DM_LINKS_MANSDYN_DETT  148: DM_MANSIONIDYNTASK  149: DM_FASCICOLI_ASSOCIAFOLDER  150: DM_WEBSERVICESWF_LINK  151: DM_TASKDOC_ESITI  152: DM_PLUGINCUSTOM_CONF  153: DM_PLUGINCUSTOM_CONFIP  154: DM_PLUGINCUSTOM_CONFUSER  155: DM_INDEX  156: WS_DOCTOIXCE_VALIDATION  157: DM_BARCODE_SETTINGS  158: DM_LOG_MASTER  159: DM_UTENTI_USEDPSW  160: DM_CAMPIMODULI_MATRICE  161: DM_MAPWORKFLOW  162: DM_ALLEGATIDOC_REV  163: DM_FASCICOLI_RULES  164: DM_FASCICOLIRULESDETAIL  165: DM_FASCICOLI_RULES_USERS  166: DM_ARXDRIVESHARERULE  167: DM_ARXDRIVESHARERULEUSERS  168: DM_LAYOUT  169: DM_LAYOUT_DETAILS  170: DM_FASCICOLI_MASK  171: DM_MAILWF  172: DM_CONV_MESSAGES  173: DM_CONVERSATION  174: DM_MAILWF_ARCHIVE
     *
     * @return $this
     */
    public function setCountersTable($counters_table)
    {
        $this->container['counters_table'] = $counters_table;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return int
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param int $external_id External Identifier
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


