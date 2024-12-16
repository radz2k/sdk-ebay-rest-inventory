# Swagger\Client\ListingApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkMigrateListing**](ListingApi.md#bulkmigratelisting) | **POST** /bulk_migrate_listing | 
[**createOrReplaceSkuLocationMapping**](ListingApi.md#createorreplaceskulocationmapping) | **PUT** /listing/{listingId}/sku/{sku}/locations | 
[**deleteSkuLocationMapping**](ListingApi.md#deleteskulocationmapping) | **DELETE** /listing/{listingId}/sku/{sku}/locations | 
[**getSkuLocationMapping**](ListingApi.md#getskulocationmapping) | **GET** /listing/{listingId}/sku/{sku}/locations | 

# **bulkMigrateListing**
> \Swagger\Client\Model\BulkMigrateListingResponse bulkMigrateListing($body, $content_type)



This call is used to convert existing eBay Listings to the corresponding Inventory API objects. If an eBay listing is successfully migrated to the Inventory API model, new Inventory Location, Inventory Item, and Offer objects are created. For a multiple-variation listing that is successfully migrated, in addition to the three new Inventory API objects just mentioned, an Inventory Item Group object will also be created. If the eBay listing is a motor vehicle part or accessory listing with a compatible vehicle list (<strong>ItemCompatibilityList</strong> container in Trading API's Add/Revise/Relist/Verify calls), a Product Compatibility object will be created.<br><br><h3>Migration Requirements</h3><br>To be eligible for migration, the active eBay listings must meet the following requirements:<ul><li>Listing type is Fixed-Price<p><span class=\"tablenote\"><strong>Note:</strong> Auction listings are supported by the Inventory API, but the <b>bulkMigrateListing</b> method cannot be used to migrate auction listings.</span></p></li><li>The item(s) in the listings must have seller-defined SKU values associated with them, and in the case of a multiple-variation listing, each product variation must also have its own SKU value</li><li>Business Polices (Payment, Return Policy, and Shipping) must be used on the listing, as legacy payment, return policy, and shipping fields will not be accepted. With the Payment Policy associated with a listing, the immediate payment requirement must be enabled.</li><li>The postal/zip code (<strong>PostalCode</strong> field in Trading's <strong>ItemType</strong>) or city (<strong>Location</strong> field in Trading's <strong>ItemType</strong>) must be set in the listing; the country is also needed, but this value is required in Trading API, so it will always be set for every listing</li></ul><br><h3>Unsupported Listing Features</h3><br>The following features are not yet available to be set or modified through the Inventory API, but they will remain on the active eBay listing, even after a successful migration to the Inventory model. The downside to this is that the seller will be completely blocked (in APIs or My eBay) from revising these features/settings once the migration takes place:<ul><li>Any listing-level Buyer Requirements</li><li>Listing enhancements like a bold listing title or Gallery Plus</li></ul><br><h3>Making the Call</h3><br>In the request payload of the <strong>bulkMigrateListings</strong> call, the seller will pass in an array of one to five eBay listing IDs (aka Item IDs). To save time and hassle, that seller should do a pre-check on each listing to make sure those listings meet the requirements to be migrated to the new Inventory model. This method also requires the <code>Content-Type</code> request header. See the <a href=\"/api-docs/sell/inventory/resources/listing/methods/bulkMigrateListing#h3-request-headers\">HTTP request headers</a> for more information. There are no path or query parameters for this call.<br><br><h3>Call Response</h3><br>If an eBay listing is migrated successfully to the new Inventory model, the following will occur:<ul><li>An Inventory Item object will be created for the item(s) in the listing, and this object will be accessible through the Inventory API</li><li>An Offer object will be created for the listing, and this object will be accessible through the Inventory API</li><li>An Inventory Location object will be created and associated with the Offer object, as an Inventory Location must be associated with a published Offer</li></ul>The response payload of the Bulk Migrate Listings call will show the results of each listing migration. These results include an HTTP status code to indicate the success or failure of each listing migration, the SKU value associated with each item, and if the migration is successful, an Offer ID value. The SKU value will be used in the Inventory API to manage the Inventory Item object, and the Offer ID value will be used in the Inventory API to manage the Offer object. Errors and/or warnings containers will be returned for each listing where an error and/or warning occurred with the attempted migration.<br><br>If a multiple-variation listing is successfully migrated, along with the Offer and Inventory Location objects, an Inventory Item object will be created for each product variation within the listing, and an Inventory Item Group object will also be created, grouping those variations together in the Inventory API platform. For a motor vehicle part or accessory listing that has a specified list of compatible vehicles, in addition to the Inventory Item, Inventory Location, and Offer objects that are created, a Product Compatibility object will also be created in the Inventory API platform.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkMigrateListing(); // \Swagger\Client\Model\BulkMigrateListing | Details of the listings that needs to be migrated into Inventory
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->bulkMigrateListing($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->bulkMigrateListing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BulkMigrateListing**](../Model/BulkMigrateListing.md)| Details of the listings that needs to be migrated into Inventory |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Swagger\Client\Model\BulkMigrateListingResponse**](../Model/BulkMigrateListingResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrReplaceSkuLocationMapping**
> createOrReplaceSkuLocationMapping($body, $content_type, $listing_id, $sku)



This method allows sellers to map multiple fulfillment center locations to single-SKU listing, or to a single SKU within a multiple-variation listing. This allows eBay to leverage the location metadata associated with a seller’s fulfillment centers to calculate more accurate estimated delivery dates on their listing.<br><br><span class=\"tablenote\"><b>Note:</b> While location mappings can be created for listings on any eBay marketplace, the improved delivery date estimate feature is currently only supported for US-based fulfillment centers shipping domestically within the US.</span><br>The listing for which the locations will be mapped is specified through the <b>listingId</b> and <b>sku</b> values associated with the item. Note that only a single SKU value can be identified; if the seller wishes to map locations to multiple/all SKU values in a multiple-variation listing, this method must be called for each of those SKUs within the listing.<br><br><span class=\"tablenote\"><b>Note:</b> Sellers should keep track of <b>listingId</b>/<b>sku</b> pairs that have been used for location mapping, as there is no programmatic way to retrieve or delete these pairs at this time.</span><br>In the case of replacing/updating existing location mappings, this method will do a complete replacement of the location mappings associated with a SKU. This means that each existing location mappings that the seller wants to continue to associate with the SKU are required in the update call, regardless of if they are affected by the update.<br><br>This method is only supported for inventory locations that have <code>FULFILLMENT_CENTER</code> as one of their <b>locationTypes</b>. For more information on fulfillment center locations, see <a href=\"/api-docs/sell/static/inventory/multi-warehouse-program.html#create-location\" target=\"_blank \">Create a fulfillment center location</a>.<br><br>For more information on location mapping features, see <a href=\"/api-docs/sell/static/inventory/multi-warehouse-program.html\" target=\"_blank \">Multi-warehouse program</a> in the Selling Integration Guide.<br><br><span class=\"tablenote\"><b>Note:</b> Only listings with SKU values are supported. Sellers using listings creating through the Trading API can add a SKU value to their single variation listing through the <a href=\"/Devzone/XML/docs/Reference/eBay/AddFixedPriceItem.html#Request.Item.SKU\" target=\"_blank \">Item.SKU</a> field during listing creation or by using the <b>ReviseItem</b> family of calls.</span>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LocationMapping(); // \Swagger\Client\Model\LocationMapping | 
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$listing_id = "listing_id_example"; // string | This path parameter specifies the unique identifier of the listing for which multiple fulfillment center locations will be mapped to a SKU within that listing.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\" target=\"_blank \">getOffers</a> method of the Inventory API or the <a href=\"/devzone/xml/docs/reference/ebay/getmyebayselling.html\" target=\"_blank \">GetMyEbaySelling</a> method of the Trading API to retrieve all listing IDs for all active listings.
$sku = "sku_example"; // string | This path parameter specifies the seller-defined SKU value of the item/variation for which multiple fulfillment center locations will be mapped. This SKU value must be defined in the listing specified in <b>listingId</b> parameter.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\" target=\"_blank \">getOffers</a> method of the Inventory API or the <a href=\"/devzone/xml/docs/reference/ebay/getmyebayselling.html\" target=\"_blank \">GetMyEbaySelling</a> method of the Trading API to retrieve all listing IDs for all active listings.<br><br><span class=\"tablenote\"><b>Note:</b> SKU values can be updated by a seller at any time. If a seller updates a SKU value that is being used for location mapping, this change will not be reflected until the mapping is updated through the <b>createOrReplaceSkuLocationMapping</b> method.</span>

try {
    $apiInstance->createOrReplaceSkuLocationMapping($body, $content_type, $listing_id, $sku);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->createOrReplaceSkuLocationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LocationMapping**](../Model/LocationMapping.md)|  |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **listing_id** | **string**| This path parameter specifies the unique identifier of the listing for which multiple fulfillment center locations will be mapped to a SKU within that listing.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method of the Inventory API or the &lt;a href&#x3D;\&quot;/devzone/xml/docs/reference/ebay/getmyebayselling.html\&quot; target&#x3D;\&quot;_blank \&quot;&gt;GetMyEbaySelling&lt;/a&gt; method of the Trading API to retrieve all listing IDs for all active listings. |
 **sku** | **string**| This path parameter specifies the seller-defined SKU value of the item/variation for which multiple fulfillment center locations will be mapped. This SKU value must be defined in the listing specified in &lt;b&gt;listingId&lt;/b&gt; parameter.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method of the Inventory API or the &lt;a href&#x3D;\&quot;/devzone/xml/docs/reference/ebay/getmyebayselling.html\&quot; target&#x3D;\&quot;_blank \&quot;&gt;GetMyEbaySelling&lt;/a&gt; method of the Trading API to retrieve all listing IDs for all active listings.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; SKU values can be updated by a seller at any time. If a seller updates a SKU value that is being used for location mapping, this change will not be reflected until the mapping is updated through the &lt;b&gt;createOrReplaceSkuLocationMapping&lt;/b&gt; method.&lt;/span&gt; |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSkuLocationMapping**
> deleteSkuLocationMapping($listing_id, $sku)



This method allows sellers to remove all location mappings associated with a specific SKU within a listing.<br><br>The <b>listingId</b> and <b>sku</b> of the listing are passed in as path parameters.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> To remove all location mappings from a multiple-variation listing, this method must be used for each individual SKU in the listing.</p></div>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = "listing_id_example"; // string | This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be removed.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\" target=\"_blank \">getOffers</a> method of the <b>Inventory API</b> or the <a href=\"/devzone/xml/docs/reference/ebay/getmyebayselling.html\" target=\"_blank \">GetMyEbaySelling</a> method of the <b>Trading API</b> to retrieve all listing IDs for all active listings.
$sku = "sku_example"; // string | This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be removed. This SKU value must be defined in the listing specified in <b>listingId</b> parameter<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\" target=\"_blank \">getOffers</a> method of the <b>Inventory API</b> or the <a href=\"/devzone/xml/docs/reference/ebay/getmyebayselling.html\" target=\"_blank \">GetMyEbaySelling</a> method of the <b>Trading API</b> to retrieve all SKUs for all active listings.

try {
    $apiInstance->deleteSkuLocationMapping($listing_id, $sku);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->deleteSkuLocationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **string**| This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be removed.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method of the &lt;b&gt;Inventory API&lt;/b&gt; or the &lt;a href&#x3D;\&quot;/devzone/xml/docs/reference/ebay/getmyebayselling.html\&quot; target&#x3D;\&quot;_blank \&quot;&gt;GetMyEbaySelling&lt;/a&gt; method of the &lt;b&gt;Trading API&lt;/b&gt; to retrieve all listing IDs for all active listings. |
 **sku** | **string**| This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be removed. This SKU value must be defined in the listing specified in &lt;b&gt;listingId&lt;/b&gt; parameter&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method of the &lt;b&gt;Inventory API&lt;/b&gt; or the &lt;a href&#x3D;\&quot;/devzone/xml/docs/reference/ebay/getmyebayselling.html\&quot; target&#x3D;\&quot;_blank \&quot;&gt;GetMyEbaySelling&lt;/a&gt; method of the &lt;b&gt;Trading API&lt;/b&gt; to retrieve all SKUs for all active listings. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSkuLocationMapping**
> \Swagger\Client\Model\LocationMapping getSkuLocationMapping($listing_id, $sku)



This method allows sellers to retrieve the locations mapped to a specific SKU within a listing.<br><br>The <b>listingId</b> and <b>sku</b> of the listing are passed in as path parameters. This method only retrieves location mappings for a single SKU value; if a seller wishes to retrieve the location mappings for all items in a multiple-variation listing, this method must be called for each variation in the listing.<br><br>If there are fulfillment center locations mapped to the SKU, they will be returned in the <b>locations</b> array. If no locations are mapped to the SKU, status code <b>404 Not Found</b> will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = "listing_id_example"; // string | This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be retrieved.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\" target=\"_blank \">getOffers</a> method of the <b>Inventory API</b> or the <a href=\"/devzone/xml/docs/reference/ebay/getmyebayselling.html\" target=\"_blank \">GetMyEbaySelling</a> method of the <b>Trading API</b> to retrieve all listing IDs for all active listings.
$sku = "sku_example"; // string | This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be retrieved. This SKU value must be defined in the listing specified in <b>listingId</b> parameter<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\" target=\"_blank \">getOffers</a> method of the <b>Inventory API</b> or the <a href=\"/devzone/xml/docs/reference/ebay/getmyebayselling.html\" target=\"_blank \">GetMyEbaySelling</a> method of the <b>Trading API</b> to retrieve all SKUs for all active listings.

try {
    $result = $apiInstance->getSkuLocationMapping($listing_id, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->getSkuLocationMapping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **string**| This path parameter specifies the unique identifier of the listing that the SKU belongs to for which all mapped locations will be retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method of the &lt;b&gt;Inventory API&lt;/b&gt; or the &lt;a href&#x3D;\&quot;/devzone/xml/docs/reference/ebay/getmyebayselling.html\&quot; target&#x3D;\&quot;_blank \&quot;&gt;GetMyEbaySelling&lt;/a&gt; method of the &lt;b&gt;Trading API&lt;/b&gt; to retrieve all listing IDs for all active listings. |
 **sku** | **string**| This path parameter specifies the seller-defined SKU value of the item/variation for which location mappings will be retrieved. This SKU value must be defined in the listing specified in &lt;b&gt;listingId&lt;/b&gt; parameter&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method of the &lt;b&gt;Inventory API&lt;/b&gt; or the &lt;a href&#x3D;\&quot;/devzone/xml/docs/reference/ebay/getmyebayselling.html\&quot; target&#x3D;\&quot;_blank \&quot;&gt;GetMyEbaySelling&lt;/a&gt; method of the &lt;b&gt;Trading API&lt;/b&gt; to retrieve all SKUs for all active listings. |

### Return type

[**\Swagger\Client\Model\LocationMapping**](../Model/LocationMapping.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

