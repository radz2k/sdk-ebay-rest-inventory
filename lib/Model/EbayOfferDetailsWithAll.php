<?php
/**
 * EbayOfferDetailsWithAll
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
 * EbayOfferDetailsWithAll Class Doc Comment
 *
 * @category Class
 * @description This type provides details of an offer, and is used by the response payloads of the &lt;strong&gt;getOffer&lt;/strong&gt; and the &lt;strong&gt;getOffers&lt;/strong&gt; calls.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EbayOfferDetailsWithAll implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EbayOfferDetailsWithAll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'available_quantity' => 'int',
        'category_id' => 'string',
        'charity' => '\Swagger\Client\Model\Charity',
        'extended_producer_responsibility' => '\Swagger\Client\Model\ExtendedProducerResponsibility',
        'format' => 'string',
        'hide_buyer_details' => 'bool',
        'include_catalog_product_details' => 'bool',
        'listing' => '\Swagger\Client\Model\ListingDetails',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\Swagger\Client\Model\ListingPolicies',
        'listing_start_date' => 'string',
        'lot_size' => 'int',
        'marketplace_id' => 'string',
        'merchant_location_key' => 'string',
        'offer_id' => 'string',
        'pricing_summary' => '\Swagger\Client\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'regulatory' => '\Swagger\Client\Model\Regulatory',
        'secondary_category_id' => 'string',
        'sku' => 'string',
        'status' => 'string',
        'store_category_names' => 'string[]',
        'tax' => '\Swagger\Client\Model\Tax'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'available_quantity' => 'int32',
        'category_id' => null,
        'charity' => null,
        'extended_producer_responsibility' => null,
        'format' => null,
        'hide_buyer_details' => null,
        'include_catalog_product_details' => null,
        'listing' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'listing_start_date' => null,
        'lot_size' => 'int32',
        'marketplace_id' => null,
        'merchant_location_key' => null,
        'offer_id' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => 'int32',
        'regulatory' => null,
        'secondary_category_id' => null,
        'sku' => null,
        'status' => null,
        'store_category_names' => null,
        'tax' => null
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
        'available_quantity' => 'availableQuantity',
        'category_id' => 'categoryId',
        'charity' => 'charity',
        'extended_producer_responsibility' => 'extendedProducerResponsibility',
        'format' => 'format',
        'hide_buyer_details' => 'hideBuyerDetails',
        'include_catalog_product_details' => 'includeCatalogProductDetails',
        'listing' => 'listing',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'listing_start_date' => 'listingStartDate',
        'lot_size' => 'lotSize',
        'marketplace_id' => 'marketplaceId',
        'merchant_location_key' => 'merchantLocationKey',
        'offer_id' => 'offerId',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'regulatory' => 'regulatory',
        'secondary_category_id' => 'secondaryCategoryId',
        'sku' => 'sku',
        'status' => 'status',
        'store_category_names' => 'storeCategoryNames',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_quantity' => 'setAvailableQuantity',
        'category_id' => 'setCategoryId',
        'charity' => 'setCharity',
        'extended_producer_responsibility' => 'setExtendedProducerResponsibility',
        'format' => 'setFormat',
        'hide_buyer_details' => 'setHideBuyerDetails',
        'include_catalog_product_details' => 'setIncludeCatalogProductDetails',
        'listing' => 'setListing',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'listing_start_date' => 'setListingStartDate',
        'lot_size' => 'setLotSize',
        'marketplace_id' => 'setMarketplaceId',
        'merchant_location_key' => 'setMerchantLocationKey',
        'offer_id' => 'setOfferId',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'regulatory' => 'setRegulatory',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'sku' => 'setSku',
        'status' => 'setStatus',
        'store_category_names' => 'setStoreCategoryNames',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_quantity' => 'getAvailableQuantity',
        'category_id' => 'getCategoryId',
        'charity' => 'getCharity',
        'extended_producer_responsibility' => 'getExtendedProducerResponsibility',
        'format' => 'getFormat',
        'hide_buyer_details' => 'getHideBuyerDetails',
        'include_catalog_product_details' => 'getIncludeCatalogProductDetails',
        'listing' => 'getListing',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'listing_start_date' => 'getListingStartDate',
        'lot_size' => 'getLotSize',
        'marketplace_id' => 'getMarketplaceId',
        'merchant_location_key' => 'getMerchantLocationKey',
        'offer_id' => 'getOfferId',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'regulatory' => 'getRegulatory',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'sku' => 'getSku',
        'status' => 'getStatus',
        'store_category_names' => 'getStoreCategoryNames',
        'tax' => 'getTax'
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
        $this->container['available_quantity'] = isset($data['available_quantity']) ? $data['available_quantity'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['charity'] = isset($data['charity']) ? $data['charity'] : null;
        $this->container['extended_producer_responsibility'] = isset($data['extended_producer_responsibility']) ? $data['extended_producer_responsibility'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['hide_buyer_details'] = isset($data['hide_buyer_details']) ? $data['hide_buyer_details'] : null;
        $this->container['include_catalog_product_details'] = isset($data['include_catalog_product_details']) ? $data['include_catalog_product_details'] : null;
        $this->container['listing'] = isset($data['listing']) ? $data['listing'] : null;
        $this->container['listing_description'] = isset($data['listing_description']) ? $data['listing_description'] : null;
        $this->container['listing_duration'] = isset($data['listing_duration']) ? $data['listing_duration'] : null;
        $this->container['listing_policies'] = isset($data['listing_policies']) ? $data['listing_policies'] : null;
        $this->container['listing_start_date'] = isset($data['listing_start_date']) ? $data['listing_start_date'] : null;
        $this->container['lot_size'] = isset($data['lot_size']) ? $data['lot_size'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['merchant_location_key'] = isset($data['merchant_location_key']) ? $data['merchant_location_key'] : null;
        $this->container['offer_id'] = isset($data['offer_id']) ? $data['offer_id'] : null;
        $this->container['pricing_summary'] = isset($data['pricing_summary']) ? $data['pricing_summary'] : null;
        $this->container['quantity_limit_per_buyer'] = isset($data['quantity_limit_per_buyer']) ? $data['quantity_limit_per_buyer'] : null;
        $this->container['regulatory'] = isset($data['regulatory']) ? $data['regulatory'] : null;
        $this->container['secondary_category_id'] = isset($data['secondary_category_id']) ? $data['secondary_category_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['store_category_names'] = isset($data['store_category_names']) ? $data['store_category_names'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
     * Gets available_quantity
     *
     * @return int
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int $available_quantity This integer value indicates the quantity of the inventory item (specified by the <strong>sku</strong> value) that will be available for purchase by buyers shopping on the eBay site specified in the <strong>marketplaceId</strong> field.
     *
     * @return $this
     */
    public function setAvailableQuantity($available_quantity)
    {
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id The unique identifier of the primary eBay category that the inventory item is listed under. This field is always returned for published offers, but is only returned if set for unpublished offers.
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets charity
     *
     * @return \Swagger\Client\Model\Charity
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity
     *
     * @param \Swagger\Client\Model\Charity $charity charity
     *
     * @return $this
     */
    public function setCharity($charity)
    {
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets extended_producer_responsibility
     *
     * @return \Swagger\Client\Model\ExtendedProducerResponsibility
     */
    public function getExtendedProducerResponsibility()
    {
        return $this->container['extended_producer_responsibility'];
    }

    /**
     * Sets extended_producer_responsibility
     *
     * @param \Swagger\Client\Model\ExtendedProducerResponsibility $extended_producer_responsibility extended_producer_responsibility
     *
     * @return $this
     */
    public function setExtendedProducerResponsibility($extended_producer_responsibility)
    {
        $this->container['extended_producer_responsibility'] = $extended_producer_responsibility;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format This enumerated value indicates the listing format of the offer. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets hide_buyer_details
     *
     * @return bool
     */
    public function getHideBuyerDetails()
    {
        return $this->container['hide_buyer_details'];
    }

    /**
     * Sets hide_buyer_details
     *
     * @param bool $hide_buyer_details This field is returned as <code>true</code> if the private listing feature has been enabled for the offer. Sellers may want to use this feature when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users. <br><br>This field is always returned even if not explicitly set in the offer. It defaults to <code>false</code>, so will get returned as <code>false</code> if seller does not set this feature with a 'Create' or 'Update' offer method.
     *
     * @return $this
     */
    public function setHideBuyerDetails($hide_buyer_details)
    {
        $this->container['hide_buyer_details'] = $hide_buyer_details;

        return $this;
    }

    /**
     * Gets include_catalog_product_details
     *
     * @return bool
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['include_catalog_product_details'];
    }

    /**
     * Sets include_catalog_product_details
     *
     * @param bool $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.</span></p>
     *
     * @return $this
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing
     *
     * @return \Swagger\Client\Model\ListingDetails
     */
    public function getListing()
    {
        return $this->container['listing'];
    }

    /**
     * Sets listing
     *
     * @param \Swagger\Client\Model\ListingDetails $listing listing
     *
     * @return $this
     */
    public function setListing($listing)
    {
        $this->container['listing'] = $listing;

        return $this;
    }

    /**
     * Gets listing_description
     *
     * @return string
     */
    public function getListingDescription()
    {
        return $this->container['listing_description'];
    }

    /**
     * Sets listing_description
     *
     * @param string $listing_description The description of the eBay listing that is part of the unpublished or published offer. This field is always returned for published offers, but is only returned if set for unpublished offers.<br><br><strong>Max Length</strong>: 500000 (which includes HTML markup/tags)
     *
     * @return $this
     */
    public function setListingDescription($listing_description)
    {
        $this->container['listing_description'] = $listing_description;

        return $this;
    }

    /**
     * Gets listing_duration
     *
     * @return string
     */
    public function getListingDuration()
    {
        return $this->container['listing_duration'];
    }

    /**
     * Sets listing_duration
     *
     * @param string $listing_duration This field indicates the number of days that the listing will be active.<br><br>This field is returned for both auction and fixed-price listings; however, the value returned for fixed-price listings will always be <code>GTC</code>. The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing.<br><br><span class=\"tablenote\"> <strong>Note:</strong> If the listing duration expires for an auction offer, the listing then becomes available as a fixed-price offer and will be GTC.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setListingDuration($listing_duration)
    {
        $this->container['listing_duration'] = $listing_duration;

        return $this;
    }

    /**
     * Gets listing_policies
     *
     * @return \Swagger\Client\Model\ListingPolicies
     */
    public function getListingPolicies()
    {
        return $this->container['listing_policies'];
    }

    /**
     * Sets listing_policies
     *
     * @param \Swagger\Client\Model\ListingPolicies $listing_policies listing_policies
     *
     * @return $this
     */
    public function setListingPolicies($listing_policies)
    {
        $this->container['listing_policies'] = $listing_policies;

        return $this;
    }

    /**
     * Gets listing_start_date
     *
     * @return string
     */
    public function getListingStartDate()
    {
        return $this->container['listing_start_date'];
    }

    /**
     * Sets listing_start_date
     *
     * @param string $listing_start_date This timestamp is the date/time (in UTC format) that the seller set for the scheduled listing. With the scheduled listing feature, the seller can set a time in the future that the listing will become active, instead of the listing becoming active immediately after a <strong>publishOffer</strong> call.<br><br>For example: 2023-05-30T19:08:00Z.<br><br>Scheduled listings do not always start at the exact date/time specified by the seller, but the date/time of the timestamp returned in <strong>getOffer</strong>/<strong>getOffers</strong> will be the same as the timestamp passed into a 'Create' or 'Update' offer call. <br><br>This field is returned if set for an offer.
     *
     * @return $this
     */
    public function setListingStartDate($listing_start_date)
    {
        $this->container['listing_start_date'] = $listing_start_date;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return int
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int $lot_size This field is only applicable and returned if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same product. An example would be a set of four identical car tires. The integer value in this field is the number of identical items being sold through the lot listing.
     *
     * @return $this
     */
    public function setLotSize($lot_size)
    {
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id This enumeration value is the unique identifier of the eBay site on which the offer is available, or will be made available. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

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
     * @param string $merchant_location_key The unique identifier of the inventory location. This identifier is set up by the merchant when the inventory location is first created with the <strong>createInventoryLocation</strong> call. Once this value is set for an inventory location, it can not be modified. To get more information about this inventory location, the <a href=\"/api-docs/sell/inventory/resources/location/methods/getInventoryLocation\" target=\"_blank \">getInventoryLocation</a> method can be used, passing in this value at the end of the call URI.<br><br>This field is always returned for published offers, but is only returned if set for unpublished offers.<br><br><b>Max length</b>: 36
     *
     * @return $this
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets offer_id
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string $offer_id The unique identifier of the offer. This identifier is used in many offer-related calls, and it is also used in the <strong>bulkUpdatePriceQuantity</strong> call.
     *
     * @return $this
     */
    public function setOfferId($offer_id)
    {
        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \Swagger\Client\Model\PricingSummary
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \Swagger\Client\Model\PricingSummary $pricing_summary pricing_summary
     *
     * @return $this
     */
    public function setPricingSummary($pricing_summary)
    {
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets quantity_limit_per_buyer
     *
     * @return int
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantity_limit_per_buyer'];
    }

    /**
     * Sets quantity_limit_per_buyer
     *
     * @param int $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity of an inventory item per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceed the quantity in this field. So, if this field's value is <code>5</code>, each buyer may purchase a quantity of the inventory item between one and five, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.<br>
     *
     * @return $this
     */
    public function setQuantityLimitPerBuyer($quantity_limit_per_buyer)
    {
        $this->container['quantity_limit_per_buyer'] = $quantity_limit_per_buyer;

        return $this;
    }

    /**
     * Gets regulatory
     *
     * @return \Swagger\Client\Model\Regulatory
     */
    public function getRegulatory()
    {
        return $this->container['regulatory'];
    }

    /**
     * Sets regulatory
     *
     * @param \Swagger\Client\Model\Regulatory $regulatory regulatory
     *
     * @return $this
     */
    public function setRegulatory($regulatory)
    {
        $this->container['regulatory'] = $regulatory;

        return $this;
    }

    /**
     * Gets secondary_category_id
     *
     * @return string
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondary_category_id'];
    }

    /**
     * Sets secondary_category_id
     *
     * @param string $secondary_category_id The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. <br><br><span class=\"tablenote\"><strong>Note:</strong> You cannot list <strong>US eBay Motors</strong> vehicles in two categories. However, you can list <strong>Parts & Accessories</strong> in two categories.</span>
     *
     * @return $this
     */
    public function setSecondaryCategoryId($secondary_category_id)
    {
        $this->container['secondary_category_id'] = $secondary_category_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku This is the seller-defined SKU value of the product in the offer.<br><br><strong>Max Length</strong>: 50 <br>
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The enumeration value in this field specifies the status of the offer - either <code>PUBLISHED</code> or <code>UNPUBLISHED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:OfferStatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets store_category_names
     *
     * @return string[]
     */
    public function getStoreCategoryNames()
    {
        return $this->container['store_category_names'];
    }

    /**
     * Sets store_category_names
     *
     * @param string[] $store_category_names This container is returned if the seller chose to place the inventory item into one or two eBay store categories that the seller has set up for their eBay store. The string value(s) in this container will be the full path(s) to the eBay store categories, as shown below:<br> <pre><code>\"storeCategoryNames\": [<br> \"/Fashion/Men/Shirts\", <br> \"/Fashion/Men/Accessories\" ], </pre></code>
     *
     * @return $this
     */
    public function setStoreCategoryNames($store_category_names)
    {
        $this->container['store_category_names'] = $store_category_names;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \Swagger\Client\Model\Tax
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \Swagger\Client\Model\Tax $tax tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

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
