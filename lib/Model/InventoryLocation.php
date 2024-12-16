<?php
/**
 * InventoryLocation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * OpenAPI spec version: 1.18.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
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
 * InventoryLocation Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;updateInventoryLocation&lt;/strong&gt; call to update operating hours, special hours, phone number, and other minor details of an inventory location.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location' => '\Swagger\Client\Model\LocationDetails',
        'location_additional_information' => 'string',
        'location_instructions' => 'string',
        'location_types' => 'string[]',
        'location_web_url' => 'string',
        'name' => 'string',
        'operating_hours' => '\Swagger\Client\Model\OperatingHours[]',
        'phone' => 'string',
        'special_hours' => '\Swagger\Client\Model\SpecialHours[]',
        'time_zone_id' => 'string',
        'fulfillment_center_specifications' => '\Swagger\Client\Model\FulfillmentCenterSpecifications'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'location' => null,
        'location_additional_information' => null,
        'location_instructions' => null,
        'location_types' => null,
        'location_web_url' => null,
        'name' => null,
        'operating_hours' => null,
        'phone' => null,
        'special_hours' => null,
        'time_zone_id' => null,
        'fulfillment_center_specifications' => null
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
        'location' => 'location',
        'location_additional_information' => 'locationAdditionalInformation',
        'location_instructions' => 'locationInstructions',
        'location_types' => 'locationTypes',
        'location_web_url' => 'locationWebUrl',
        'name' => 'name',
        'operating_hours' => 'operatingHours',
        'phone' => 'phone',
        'special_hours' => 'specialHours',
        'time_zone_id' => 'timeZoneId',
        'fulfillment_center_specifications' => 'fulfillmentCenterSpecifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'location_additional_information' => 'setLocationAdditionalInformation',
        'location_instructions' => 'setLocationInstructions',
        'location_types' => 'setLocationTypes',
        'location_web_url' => 'setLocationWebUrl',
        'name' => 'setName',
        'operating_hours' => 'setOperatingHours',
        'phone' => 'setPhone',
        'special_hours' => 'setSpecialHours',
        'time_zone_id' => 'setTimeZoneId',
        'fulfillment_center_specifications' => 'setFulfillmentCenterSpecifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'location_additional_information' => 'getLocationAdditionalInformation',
        'location_instructions' => 'getLocationInstructions',
        'location_types' => 'getLocationTypes',
        'location_web_url' => 'getLocationWebUrl',
        'name' => 'getName',
        'operating_hours' => 'getOperatingHours',
        'phone' => 'getPhone',
        'special_hours' => 'getSpecialHours',
        'time_zone_id' => 'getTimeZoneId',
        'fulfillment_center_specifications' => 'getFulfillmentCenterSpecifications'
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['location_additional_information'] = isset($data['location_additional_information']) ? $data['location_additional_information'] : null;
        $this->container['location_instructions'] = isset($data['location_instructions']) ? $data['location_instructions'] : null;
        $this->container['location_types'] = isset($data['location_types']) ? $data['location_types'] : null;
        $this->container['location_web_url'] = isset($data['location_web_url']) ? $data['location_web_url'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operating_hours'] = isset($data['operating_hours']) ? $data['operating_hours'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['special_hours'] = isset($data['special_hours']) ? $data['special_hours'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['fulfillment_center_specifications'] = isset($data['fulfillment_center_specifications']) ? $data['fulfillment_center_specifications'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\LocationDetails
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\LocationDetails $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets location_additional_information
     *
     * @return string
     */
    public function getLocationAdditionalInformation()
    {
        return $this->container['location_additional_information'];
    }

    /**
     * Sets location_additional_information
     *
     * @param string $location_additional_information This text field is used by the merchant to provide/update additional information about an inventory location. Whatever text is passed in this field will replace the current text string defined for this field. If the text will not change, the same text should be passed in once again. <br><br><b>Max length</b>: 256
     *
     * @return $this
     */
    public function setLocationAdditionalInformation($location_additional_information)
    {
        $this->container['location_additional_information'] = $location_additional_information;

        return $this;
    }

    /**
     * Gets location_instructions
     *
     * @return string
     */
    public function getLocationInstructions()
    {
        return $this->container['location_instructions'];
    }

    /**
     * Sets location_instructions
     *
     * @param string $location_instructions This text field is generally used by the merchant to provide/update special pickup instructions for a store inventory location. Although this field is optional, it is recommended that merchants provide this field to create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field is not included in the call request payload, eBay will use the default pickup instructions contained in the merchant's profile (if available). Whatever text is passed in this field will replace the current text string defined for this field. If the text will not change, the same text should be passed in once again. <br><br><b>Max length</b>: 1000
     *
     * @return $this
     */
    public function setLocationInstructions($location_instructions)
    {
        $this->container['location_instructions'] = $location_instructions;

        return $this;
    }

    /**
     * Gets location_types
     *
     * @return string[]
     */
    public function getLocationTypes()
    {
        return $this->container['location_types'];
    }

    /**
     * Sets location_types
     *
     * @param string[] $location_types This container is used to update the location type(s) associated with an inventory location.
     *
     * @return $this
     */
    public function setLocationTypes($location_types)
    {
        $this->container['location_types'] = $location_types;

        return $this;
    }

    /**
     * Gets location_web_url
     *
     * @return string
     */
    public function getLocationWebUrl()
    {
        return $this->container['location_web_url'];
    }

    /**
     * Sets location_web_url
     *
     * @param string $location_web_url This text field is used by the merchant to provide/update the Website address (URL) associated with the inventory location. The URL that is passed in this field will replace any other URL that may be defined for this field. <br><br><b>Max length</b>: 512
     *
     * @return $this
     */
    public function setLocationWebUrl($location_web_url)
    {
        $this->container['location_web_url'] = $location_web_url;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name This text field is used by the merchant to update the name of the inventory location. This name should be a human-friendly name as it will be in In-Store Pickup and Click and Collect listings. A name is not required for warehouse locations. For store locations, this field is not immediately required, but will be required before an offer enabled with the In-Store Pickup or Click and Collect capability can be published. So, if the seller omitted this field in the <strong>createInventoryLocation</strong> call, it is required for an <strong>updateInventoryLocation</strong> call. The name that is passed in this field will replace any other name that may be defined for this field.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operating_hours
     *
     * @return \Swagger\Client\Model\OperatingHours[]
     */
    public function getOperatingHours()
    {
        return $this->container['operating_hours'];
    }

    /**
     * Sets operating_hours
     *
     * @param \Swagger\Client\Model\OperatingHours[] $operating_hours This container is used to provide/update the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container will be needed for each day of the week that the location is open. Note that if operating hours are already set for a location for a specific day of the week, whatever is set through an <strong>updateInventoryLocation</strong> call will override those existing hours.
     *
     * @return $this
     */
    public function setOperatingHours($operating_hours)
    {
        $this->container['operating_hours'] = $operating_hours;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone This text field is used by the merchant to provide/update the phone number for the inventory location. The phone number that is passed in this field will replace any other phone number that may be defined for this field. <br><br><b>Max length</b>: 36
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets special_hours
     *
     * @return \Swagger\Client\Model\SpecialHours[]
     */
    public function getSpecialHours()
    {
        return $this->container['special_hours'];
    }

    /**
     * Sets special_hours
     *
     * @param \Swagger\Client\Model\SpecialHours[] $special_hours This container is used to provide/update the special operating hours for a store location on a specific date, such as a holiday. The special hours specified for the specific date will override the normal operating hours for that particular day of the week. If special hours have already been set up for an inventory location, specifying special hours through an <strong>updateInventoryLocation</strong> call will only add to the list, unless the date(s) used are the same special date(s) already set up, in which case, the special hours set up through the <strong>updateInventoryLocation</strong> call will override the existing special hours.
     *
     * @return $this
     */
    public function setSpecialHours($special_hours)
    {
        $this->container['special_hours'] = $special_hours;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string $time_zone_id This field is used to provide/update the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href=\"https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets\" target=\"_blank\">Java Supported Zone Ids and Offsets</a>.<br><br><span class=\"tablenote\"><b>Note:</b> If specified, this time zone will be used for all hour related fields. If this field is not specified, the time zone will be calculated from the provided address fields.</span>
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets fulfillment_center_specifications
     *
     * @return \Swagger\Client\Model\FulfillmentCenterSpecifications
     */
    public function getFulfillmentCenterSpecifications()
    {
        return $this->container['fulfillment_center_specifications'];
    }

    /**
     * Sets fulfillment_center_specifications
     *
     * @param \Swagger\Client\Model\FulfillmentCenterSpecifications $fulfillment_center_specifications fulfillment_center_specifications
     *
     * @return $this
     */
    public function setFulfillmentCenterSpecifications($fulfillment_center_specifications)
    {
        $this->container['fulfillment_center_specifications'] = $fulfillment_center_specifications;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
