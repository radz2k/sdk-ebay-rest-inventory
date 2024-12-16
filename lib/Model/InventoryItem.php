<?php
/**
 * InventoryItem
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
 * InventoryItem Class Doc Comment
 *
 * @category Class
 * @description This type is used to provide detailed information about an inventory item.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'availability' => '\Swagger\Client\Model\Availability',
        'condition' => 'string',
        'condition_description' => 'string',
        'condition_descriptors' => '\Swagger\Client\Model\ConditionDescriptor[]',
        'package_weight_and_size' => '\Swagger\Client\Model\PackageWeightAndSize',
        'product' => '\Swagger\Client\Model\Product'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'availability' => null,
        'condition' => null,
        'condition_description' => null,
        'condition_descriptors' => null,
        'package_weight_and_size' => null,
        'product' => null
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
        'availability' => 'availability',
        'condition' => 'condition',
        'condition_description' => 'conditionDescription',
        'condition_descriptors' => 'conditionDescriptors',
        'package_weight_and_size' => 'packageWeightAndSize',
        'product' => 'product'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'condition' => 'setCondition',
        'condition_description' => 'setConditionDescription',
        'condition_descriptors' => 'setConditionDescriptors',
        'package_weight_and_size' => 'setPackageWeightAndSize',
        'product' => 'setProduct'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'condition' => 'getCondition',
        'condition_description' => 'getConditionDescription',
        'condition_descriptors' => 'getConditionDescriptors',
        'package_weight_and_size' => 'getPackageWeightAndSize',
        'product' => 'getProduct'
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
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['condition_description'] = isset($data['condition_description']) ? $data['condition_description'] : null;
        $this->container['condition_descriptors'] = isset($data['condition_descriptors']) ? $data['condition_descriptors'] : null;
        $this->container['package_weight_and_size'] = isset($data['package_weight_and_size']) ? $data['package_weight_and_size'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
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
     * Gets availability
     *
     * @return \Swagger\Client\Model\Availability
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \Swagger\Client\Model\Availability $availability availability
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies\" target=\"_blank\">getItemConditionPolicies</a> method of the <strong>Metadata API</strong>. This method returns condition ID values that map to the enumeration values defined in the <a href=\"/api-docs/sell/inventory/types/slr:ConditionEnum\" target=\"_blank\">ConditionEnum</a> type. The <a href=\"/api-docs/sell/static/metadata/condition-id-values.html\" target=\"_blank\">Item condition ID and name values</a> topic in the <strong>Selling Integration Guide</strong> has a table that maps condition ID values to <strong>ConditionEnum</strong> values. The <strong>getItemConditionPolicies</strong> call reference page has more information.<br><br>A <strong>condition</strong> value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required for most eBay categories.<br><br><span class=\"tablenote\"> <strong>Note:</strong> The 'Manufacturer Refurbished' item condition is no longer a valid item condition on any eBay marketplace, and to reflect this change, the <code>MANUFACTURER_REFURBISHED</code> value is no longer applicable, and should not be used. With Version 1.13.0, the <code>CERTIFIED_REFURBISHED</code> enumeration value has been introduced, and CR-eligible sellers should make a note to start using <code>CERTIFIED_REFURBISHED</code> from this point forward. For the time being, if the <code>MANUFACTURER_REFURBISHED</code> enum is used in a <strong>createOrReplaceInventoryItem</strong> method, it will be accepted but automatically converted by eBay to <code>CERTIFIED_REFURBISHED</code>. In the future, the <code>MANUFACTURER_REFURBISHED</code> may start triggering an error if used.<br><br>To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition. <br><br>Any seller that is interested in eligibility requirements to list with 'Certified Refurbished' should see the <a href=\"https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html \" target=\"_blank\">Certified refurbished program</a> page in Seller Center. </span><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For trading card listings in Non-Sport Trading Card Singles (183050), CCG Individual Cards (183454), and Sports Trading Card Singles (261328) categories, sellers must use either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition. No other item conditions will be accepted. Use of these item conditions require the seller to use the conditionDescriptors array to provide one or more applicable Condition Descriptor name-value pairs. See the conditionDescriptors field description for more information. If these requierments are not followed,  publishOffer, updateOffer, bulkPublishOffer, and publishOfferByInventoryItemGroup methods will fail when trying to create new listings.</p></span></div><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: This field is required before an offer can be published to create an active listing. </p></span></div> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_description
     *
     * @return string
     */
    public function getConditionDescription()
    {
        return $this->container['condition_description'];
    }

    /**
     * Sets condition_description
     *
     * @param string $condition_description This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose <strong>condition</strong> value is not <code>NEW</code>, <code>LIKE_NEW</code>, <code>NEW_OTHER</code>, or <code>NEW_WITH_DEFECTS</code>.<br><br>The <strong>conditionDescription</strong> field is available for all eBay categories. If the <strong>conditionDescription</strong> field is used with an item in one of the new conditions (mentioned in previous paragraph), eBay will simply ignore this field if included, and eBay will return a warning message to the user. <br><br>This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the used item. Make sure that the <strong>condition</strong> value, condition description, listing description, and the item's pictures do not contradict one another. <br><br>This field is not always required, but is required if an inventory item is being updated and a condition description already exists for that inventory item. <br><br>This field is returned in the <strong>getInventoryItem</strong> and <strong>getInventoryItems</strong> calls if a condition description was provided for a used inventory item.<br><br><strong>Max Length</strong>: 1000.
     *
     * @return $this
     */
    public function setConditionDescription($condition_description)
    {
        $this->container['condition_description'] = $condition_description;

        return $this;
    }

    /**
     * Gets condition_descriptors
     *
     * @return \Swagger\Client\Model\ConditionDescriptor[]
     */
    public function getConditionDescriptors()
    {
        return $this->container['condition_descriptors'];
    }

    /**
     * Sets condition_descriptors
     *
     * @param \Swagger\Client\Model\ConditionDescriptor[] $condition_descriptors <div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For trading card listings in Non-Sport Trading Card Singles (183050), CCG Individual Cards (183454), and Sports Trading Card Singles (261328) categories, sellers must use either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition. No other item conditions will be accepted. Use of these item conditions require the seller to use the conditionDescriptors array to provide one or more applicable Condition Descriptor name-value pairs. See the conditionDescriptors field description for more information. If these requierments are not followed,  publishOffer, updateOffer, bulkPublishOffer, and publishOfferByInventoryItemGroup methods will fail when trying to create new listings.</p></span></div><br>This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br><br>To retrieve all condition descriptor numeric IDs for a category, use the <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies\" target=\"_blank\">getItemConditionPolicies</a> method of the Metadata API. <br><br>
     *
     * @return $this
     */
    public function setConditionDescriptors($condition_descriptors)
    {
        $this->container['condition_descriptors'] = $condition_descriptors;

        return $this;
    }

    /**
     * Gets package_weight_and_size
     *
     * @return \Swagger\Client\Model\PackageWeightAndSize
     */
    public function getPackageWeightAndSize()
    {
        return $this->container['package_weight_and_size'];
    }

    /**
     * Sets package_weight_and_size
     *
     * @param \Swagger\Client\Model\PackageWeightAndSize $package_weight_and_size package_weight_and_size
     *
     * @return $this
     */
    public function setPackageWeightAndSize($package_weight_and_size)
    {
        $this->container['package_weight_and_size'] = $package_weight_and_size;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Swagger\Client\Model\Product
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Swagger\Client\Model\Product $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
