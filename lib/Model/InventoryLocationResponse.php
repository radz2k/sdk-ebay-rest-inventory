<?php
/**
 * InventoryLocationResponse
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
 * InventoryLocationResponse Class Doc Comment
 *
 * @category Class
 * @description This type is used by the base response of the &lt;strong&gt;getInventoryLocation&lt;/strong&gt; and &lt;strong&gt;getInventoryLocations&lt;/strong&gt; calls. These responses provide details about inventory location(s) defined for the merchant&#x27;s account.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryLocationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryLocationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'location' => '\Swagger\Client\Model\Location',
        'location_additional_information' => 'string',
        'location_instructions' => 'string',
        'location_types' => 'string[]',
        'location_web_url' => 'string',
        'merchant_location_key' => 'string',
        'merchant_location_status' => 'string',
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
        'merchant_location_key' => null,
        'merchant_location_status' => null,
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
        'merchant_location_key' => 'merchantLocationKey',
        'merchant_location_status' => 'merchantLocationStatus',
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
        'merchant_location_key' => 'setMerchantLocationKey',
        'merchant_location_status' => 'setMerchantLocationStatus',
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
        'merchant_location_key' => 'getMerchantLocationKey',
        'merchant_location_status' => 'getMerchantLocationStatus',
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
        $this->container['merchant_location_key'] = isset($data['merchant_location_key']) ? $data['merchant_location_key'] : null;
        $this->container['merchant_location_status'] = isset($data['merchant_location_status']) ? $data['merchant_location_status'] : null;
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
     * @return \Swagger\Client\Model\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\Location $location location
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
     * @param string $location_additional_information This text field provides additional information about an inventory location. This field is returned if it is set for the location.
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
     * @param string $location_instructions This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a <strong>createInventoryLocation</strong> or a <strong>updateInventoryLocation</strong> call, eBay will use the default pickup instructions contained in the merchant's profile.
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
     * @param string[] $location_types This container defines the function of the inventory location. Typically, a location will serve as a store, warehouse, or fulfillment center, but in some cases, an inventory location may be more than one type.
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
     * @param string $location_web_url This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the location.
     *
     * @return $this
     */
    public function setLocationWebUrl($location_web_url)
    {
        $this->container['location_web_url'] = $location_web_url;

        return $this;
    }

    /**
     * Gets merchant_location_key
     *
     * @return string
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key
     *
     * @param string $merchant_location_key The unique identifier of the inventory location. This identifier is set up by the merchant when the location is first created with the <strong>createInventoryLocation</strong> call.
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets merchant_location_status
     *
     * @return string
     */
    public function getMerchantLocationStatus()
    {
        return $this->container['merchant_location_status'];
    }

    /**
     * Sets merchant_location_status
     *
     * @param string $merchant_location_status This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). The merchant can use the <strong>enableInventoryLocation</strong> call to enable a location in disabled status, or the <strong>disableInventoryLocation</strong> call to disable a location in enabled status. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMerchantLocationStatus($merchant_location_status)
    {
        $this->container['merchant_location_status'] = $merchant_location_status;

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
     * @param string $name The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the <strong>createInventoryLocation</strong> call, but a store inventory location must have a defined <strong>name</strong> value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the <strong>createInventoryLocation</strong> call, it will have to be added later through a <strong>updateInventoryLocation</strong> call.
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
     * @param \Swagger\Client\Model\OperatingHours[] $operating_hours This container shows the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container is shown for each day of the week that the location is open.
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
     * @param string $phone The phone number for an inventory location. This field will typically only be returned for store locations.
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
     * @param \Swagger\Client\Model\SpecialHours[] $special_hours This container shows the special operating hours for a store or fulfillment center location on a specific date or dates.
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
     * @param string $time_zone_id This field specifies the time zone of the inventory location being created. This value should be in Olson format (for example <code>America/Vancouver</code>). For supported values, see <a href=\"https://howtodoinjava.com/java/date-time/supported-zone-ids-offsets/#3-java-supported-zone-ids-and-offsets\" target=\"_blank\">Java Supported Zone Ids and Offsets</a>.
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
