# Swagger\Client\OfferApi

All URIs are relative to *https://api.ebay.com{basePath}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCreateOffer**](OfferApi.md#bulkcreateoffer) | **POST** /bulk_create_offer | 
[**bulkPublishOffer**](OfferApi.md#bulkpublishoffer) | **POST** /bulk_publish_offer | 
[**createOffer**](OfferApi.md#createoffer) | **POST** /offer | 
[**deleteOffer**](OfferApi.md#deleteoffer) | **DELETE** /offer/{offerId} | 
[**getListingFees**](OfferApi.md#getlistingfees) | **POST** /offer/get_listing_fees | 
[**getOffer**](OfferApi.md#getoffer) | **GET** /offer/{offerId} | 
[**getOffers**](OfferApi.md#getoffers) | **GET** /offer | 
[**publishOffer**](OfferApi.md#publishoffer) | **POST** /offer/{offerId}/publish | 
[**publishOfferByInventoryItemGroup**](OfferApi.md#publishofferbyinventoryitemgroup) | **POST** /offer/publish_by_inventory_item_group | 
[**updateOffer**](OfferApi.md#updateoffer) | **PUT** /offer/{offerId} | 
[**withdrawOffer**](OfferApi.md#withdrawoffer) | **POST** /offer/{offerId}/withdraw | 
[**withdrawOfferByInventoryItemGroup**](OfferApi.md#withdrawofferbyinventoryitemgroup) | **POST** /offer/withdraw_by_inventory_item_group | 

# **bulkCreateOffer**
> \Swagger\Client\Model\BulkOfferResponse bulkCreateOffer($body, $content_language, $content_type)



This call creates multiple offers (up to 25) for specific inventory items on a specific eBay marketplace. Although it is not a requirement for the seller to create complete offers (with all necessary details) right from the start, eBay recommends that the seller provide all necessary details with this call since there is currently no bulk operation available to update multiple offers with one call. The following fields are always required in the request payload:  <strong>sku</strong>, <strong>marketplaceId</strong>, and (listing) <strong>format</strong>. <br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#offer\" target=\"_blank\">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that will be required before a offer can be published are highlighted below: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li> <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul><p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span><br><span class=\"tablenote\"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href=\"/api-docs/sell/inventory/resources/offer/methods/bulkCreateOffer#h3-request-headers\">HTTP request headers</a> for more information.</span></p> <p>If the call is successful, unique <strong>offerId</strong> values are returned in the response for each successfully created offer. The <strong>offerId</strong> value will be required for many other offer-related calls. Note that this call only stages an offer for publishing. The seller must run either the <strong>publishOffer</strong>, <strong>bulkPublishOffer</strong>, or <strong>publishOfferByInventoryItemGroup</strong> call to convert offer(s) into an active single- or multiple-variation listing.</p><p>For those who prefer to create a single offer per call, the <strong>createOffer</strong> method can be used instead.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkEbayOfferDetailsWithKeys(); // \Swagger\Client\Model\BulkEbayOfferDetailsWithKeys | Details of the offer for the channel
$content_language = "content_language_example"; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.<br><br>For more information on the Content-Language header, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->bulkCreateOffer($body, $content_language, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->bulkCreateOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BulkEbayOfferDetailsWithKeys**](../Model/BulkEbayOfferDetailsWithKeys.md)| Details of the offer for the channel |
 **content_language** | **string**| This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be &lt;code&gt;en-US&lt;/code&gt; for English or &lt;code&gt;de-DE&lt;/code&gt; for German.&lt;br&gt;&lt;br&gt;For more information on the Content-Language header, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Swagger\Client\Model\BulkOfferResponse**](../Model/BulkOfferResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bulkPublishOffer**
> \Swagger\Client\Model\BulkPublishResponse bulkPublishOffer($body, $content_type)



<span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call is used to convert unpublished offers (up to 25) into  published offers, or live eBay listings. The unique identifier (<strong>offerId</strong>) of each offer to publish is passed into the request payload. It is possible that some unpublished offers will be successfully created into eBay listings, but others may fail. The response payload will show the results for each <strong>offerId</strong> value that is passed into the request payload. The <strong>errors</strong> and <strong>warnings</strong> containers will be returned for an offer that had one or more issues being published. <br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling the create or update methods, but become required when publishing the offer to create active listings. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#offer\" target=\"_blank\">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>For those who prefer to publish one offer per call, the <strong>publishOffer</strong> method can be used instead. In the case of a multiple-variation listing, the <strong>publishOfferByInventoryItemGroup</strong> call should be used instead, as this call will convert all unpublished offers associated with an inventory item group into a multiple-variation listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkOffer(); // \Swagger\Client\Model\BulkOffer | The base request of the <strong>bulkPublishOffer</strong> method.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->bulkPublishOffer($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->bulkPublishOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BulkOffer**](../Model/BulkOffer.md)| The base request of the &lt;strong&gt;bulkPublishOffer&lt;/strong&gt; method. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Swagger\Client\Model\BulkPublishResponse**](../Model/BulkPublishResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOffer**
> \Swagger\Client\Model\OfferResponse createOffer($body, $content_language, $content_type)



This call creates an offer for a specific inventory item on a specific eBay marketplace. It is up to the sellers whether they want to create a complete offer (with all necessary details) right from the start, or sellers can provide only some information with the initial <strong>createOffer</strong> call, and then make one or more subsequent <strong>updateOffer</strong> calls to complete the offer and prepare to publish the offer. Upon first creating an offer, the following fields are required in the request payload:  <strong>sku</strong>, <strong>marketplaceId</strong>, and (listing) <strong>format</strong>.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#offer\" target=\"_blank\">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that will be required before an offer can be published are highlighted below. These settings are either set with <strong>createOffer</strong>, or they can be set with a subsequent <strong>updateOffer</strong> call: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li> <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul> <p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted.</span></p><span class=\"tablenote\"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href=\"/api-docs/sell/inventory/resources/offer/methods/createOffer#h3-request-headers\">HTTP request headers</a> for more information.</span><p>If the call is successful, a unique <strong>offerId</strong> value is returned in the response. This value will be required for many other offer-related calls. Note that this call only stages an offer for publishing. The seller must run the <strong>publishOffer</strong> call to convert the offer to an active eBay listing.</p><p>For those who prefer to create multiple offers (up to 25 at a time) with one call, the <strong>bulkCreateOffer</strong> method can be used.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EbayOfferDetailsWithKeys(); // \Swagger\Client\Model\EbayOfferDetailsWithKeys | Details of the offer for the channel
$content_language = "content_language_example"; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.<br><br>For more information on the Content-Language header, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->createOffer($body, $content_language, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->createOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EbayOfferDetailsWithKeys**](../Model/EbayOfferDetailsWithKeys.md)| Details of the offer for the channel |
 **content_language** | **string**| This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be &lt;code&gt;en-US&lt;/code&gt; for English or &lt;code&gt;de-DE&lt;/code&gt; for German.&lt;br&gt;&lt;br&gt;For more information on the Content-Language header, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Swagger\Client\Model\OfferResponse**](../Model/OfferResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOffer**
> deleteOffer($offer_id)



If used against an unpublished offer, this call will permanently delete that offer. In the case of a published offer (or live eBay listing), a successful call will either end the single-variation listing associated with the offer, or it will remove that product variation from the eBay listing and also automatically remove that product variation from the inventory item group. In the case of a multiple-variation listing, the <strong>deleteOffer</strong> will not remove the product variation from the listing if that variation has one or more sales. If that product variation has one or more sales, the seller can alternately just set the available quantity of that product variation to <code>0</code>, so it is not available in the eBay search or View Item page, and then the seller can remove that product variation from the inventory item group at a later time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | This path parameter specifies the unique identifier of the offer being deleted.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\">getOffers</a> method to retrieve offer IDs.

try {
    $apiInstance->deleteOffer($offer_id);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->deleteOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| This path parameter specifies the unique identifier of the offer being deleted.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot;&gt;getOffers&lt;/a&gt; method to retrieve offer IDs. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListingFees**
> \Swagger\Client\Model\FeesSummaryResponse getListingFees($content_type, $body)



This call is used to retrieve the expected listing fees for up to 250 unpublished offers. An array of one or more <strong>offerId</strong> values are passed in under the <strong>offers</strong> container.<br><br>In the response payload, all listing fees are grouped by eBay marketplace, and listing fees per offer are not shown. A <strong>fees</strong> container will be returned for each eBay marketplace where the seller is selling the products associated with the specified offers. <br><br>Errors will occur if the seller passes in <strong>offerIds</strong> that represent published offers, so this call should be made before the seller publishes offers with the <strong>publishOffer</strong>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$body = new \Swagger\Client\Model\OfferKeysWithId(); // \Swagger\Client\Model\OfferKeysWithId | List of offers that needs fee information

try {
    $result = $apiInstance->getListingFees($content_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->getListingFees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **body** | [**\Swagger\Client\Model\OfferKeysWithId**](../Model/OfferKeysWithId.md)| List of offers that needs fee information | [optional]

### Return type

[**\Swagger\Client\Model\FeesSummaryResponse**](../Model/FeesSummaryResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOffer**
> \Swagger\Client\Model\EbayOfferDetailsWithAll getOffer($offer_id)



This call retrieves a specific published or unpublished offer. The unique identifier of the offer (<strong>offerId</strong>) is passed in at the end of the call URI.<p>The <code>authorization</code> header is the only required HTTP header for this call. See the <strong>HTTP request headers</strong> section for more information.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | This path parameter specifies the unique identifier of the offer that is to be retrieved.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\">getOffers</a> method to retrieve offer IDs.

try {
    $result = $apiInstance->getOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->getOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| This path parameter specifies the unique identifier of the offer that is to be retrieved.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot;&gt;getOffers&lt;/a&gt; method to retrieve offer IDs. |

### Return type

[**\Swagger\Client\Model\EbayOfferDetailsWithAll**](../Model/EbayOfferDetailsWithAll.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOffers**
> \Swagger\Client\Model\Offers getOffers($format, $limit, $marketplace_id, $offset, $sku)



This call retrieves all existing offers for the specified SKU value. The seller has the option of limiting the offers that are retrieved to a specific eBay marketplace, or to a listing format.<br><br><span class=\"tablenote\"><strong>Note:</strong> At this time, the same SKU value can not be offered across multiple eBay marketplaces, so the <strong>marketplace_id</strong> query parameter currently does not have any practical use for this call.</span><br><span class=\"tablenote\"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers. Otherwise, only one offer will be returned.</span><br>The <code>authorization</code> header is the only required HTTP header for this call. See the <strong>HTTP request headers</strong> section for more information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$format = "format_example"; // string | This enumeration value sets the listing format for the offers being retrieved. This query parameter will be passed in if the seller only wants to see offers in a specified listing format, such as <code>FIXED_PRICE</code>.
$limit = "limit_example"; // string | The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results.
$marketplace_id = "marketplace_id_example"; // string | The unique identifier of the eBay marketplace. This query parameter will be passed in if the seller only wants to see the product's offers on a specific eBay marketplace.<br><br><span class=\"tablenote\"><strong>Note:</strong> At this time, the same SKU value can not be offered across multiple eBay marketplaces, so the <strong>marketplace_id</strong> query parameter currently does not have any practical use for this call.</span>
$offset = "offset_example"; // string | The value passed in this query parameter sets the page number to retrieve. Although this field is a string, the value passed in this field should be a integer value equal to or greater than <code>0</code>. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned.
$sku = "sku_example"; // string | The seller-defined SKU value is passed in as a query parameter. All offers associated with this product are returned in the response. <br><br><span class=\"tablenote\"><strong>Note:</strong> The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, <b>getOffers</b> will return two offers. Otherwise, only one offer will be returned.</span><br>Use the <a href=\"/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems\">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max length</strong>: 50.

try {
    $result = $apiInstance->getOffers($format, $limit, $marketplace_id, $offset, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->getOffers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| This enumeration value sets the listing format for the offers being retrieved. This query parameter will be passed in if the seller only wants to see offers in a specified listing format, such as &lt;code&gt;FIXED_PRICE&lt;/code&gt;. | [optional]
 **limit** | **string**| The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be a positive integer value. If this query parameter is not set, up to 100 records will be returned on each page of results. | [optional]
 **marketplace_id** | **string**| The unique identifier of the eBay marketplace. This query parameter will be passed in if the seller only wants to see the product&#x27;s offers on a specific eBay marketplace.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; At this time, the same SKU value can not be offered across multiple eBay marketplaces, so the &lt;strong&gt;marketplace_id&lt;/strong&gt; query parameter currently does not have any practical use for this call.&lt;/span&gt; | [optional]
 **offset** | **string**| The value passed in this query parameter sets the page number to retrieve. Although this field is a string, the value passed in this field should be a integer value equal to or greater than &lt;code&gt;0&lt;/code&gt;. The first page of records has a value of &lt;code&gt;0&lt;/code&gt;, the second page of records has a value of &lt;code&gt;1&lt;/code&gt;, and so on. If this query parameter is not set, its value defaults to &lt;code&gt;0&lt;/code&gt;, and the first page of records is returned. | [optional]
 **sku** | **string**| The seller-defined SKU value is passed in as a query parameter. All offers associated with this product are returned in the response. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;strong&gt;Note:&lt;/strong&gt; The same SKU can be offered through an auction and a fixed-price listing concurrently. If this is the case, &lt;b&gt;getOffers&lt;/b&gt; will return two offers. Otherwise, only one offer will be returned.&lt;/span&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems\&quot;&gt;getInventoryItems&lt;/a&gt; method to retrieve SKU values.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Max length&lt;/strong&gt;: 50. | [optional]

### Return type

[**\Swagger\Client\Model\Offers**](../Model/Offers.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishOffer**
> \Swagger\Client\Model\PublishResponse publishOffer($offer_id)



<span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call is used to convert an unpublished offer into a published offer, or live eBay listing. The unique identifier of the offer (<strong>offerId</strong>) is passed in at the end of the call URI.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling the create or update methods, but become required when publishing the offer to create active listings. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#offer\" target=\"_blank\">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>For those who prefer to publish multiple offers (up to 25 at a time) with one call, the <strong>bulkPublishOffer</strong> method can be used. In the case of a multiple-variation listing, the <strong>publishOfferByInventoryItemGroup</strong> call should be used instead, as this call will convert all unpublished offers associated with an inventory item group into a multiple-variation listing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | This path parameter specifies the unique identifier of the offer that is to be published.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\">getOffers</a> method to retrieve offer IDs.

try {
    $result = $apiInstance->publishOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->publishOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| This path parameter specifies the unique identifier of the offer that is to be published.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot;&gt;getOffers&lt;/a&gt; method to retrieve offer IDs. |

### Return type

[**\Swagger\Client\Model\PublishResponse**](../Model/PublishResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishOfferByInventoryItemGroup**
> \Swagger\Client\Model\PublishResponse publishOfferByInventoryItemGroup($body, $content_type)



<span class=\"tablenote\"><strong>Note:</strong> Please note that any eBay listing created using the Inventory API cannot be revised or relisted using the Trading API calls.</span><br><span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span><br>This call is used to convert all unpublished offers associated with an inventory item group into an active, multiple-variation listing.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling the create or update methods, but become required when publishing the offer to create active listings. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#offer\" target=\"_blank\">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>The unique identifier of the inventory item group (<strong>inventoryItemGroupKey</strong>) is passed in the request payload. All inventory items and their corresponding offers in the inventory item group must be valid (meet all requirements) for the <strong>publishOfferByInventoryItemGroup</strong> call to be completely successful. For any inventory items in the group that are missing required data or have no corresponding offers, the <strong>publishOfferByInventoryItemGroup</strong> will create a new multiple-variation listing, but any inventory items with missing required data/offers will not be in the newly-created listing. If any inventory items in the group to be published have invalid data, or one or more of the inventory items have conflicting data with one another, the <strong>publishOfferByInventoryItemGroup</strong> call will fail. Be sure to check for any error or warning messages in the call response for any applicable information about one or more inventory items/offers having issues.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PublishByInventoryItemGroupRequest(); // \Swagger\Client\Model\PublishByInventoryItemGroupRequest | The identifier of the inventory item group to publish and the eBay marketplace where the listing will be published is needed in the request payload.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->publishOfferByInventoryItemGroup($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->publishOfferByInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PublishByInventoryItemGroupRequest**](../Model/PublishByInventoryItemGroupRequest.md)| The identifier of the inventory item group to publish and the eBay marketplace where the listing will be published is needed in the request payload. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

[**\Swagger\Client\Model\PublishResponse**](../Model/PublishResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOffer**
> \Swagger\Client\Model\OfferResponse updateOffer($body, $content_language, $content_type, $offer_id)



This call updates an existing offer. An existing offer may be in published state (active eBay listing), or in an unpublished state and yet to be published with the <strong>publishOffer</strong> call. The unique identifier (<strong>offerId</strong>) for the offer to update is passed in at the end of the call URI. <br><br>The <strong>updateOffer</strong> call does a complete replacement of the existing offer object, so all fields that make up the current offer object are required, regardless of whether their values changed. <br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>Publish offer note: Fields may be optional or conditionally required when calling this method, but become required when publishing the offer to create an active listing. For this method, see <a href=\"/api-docs/sell/static/inventory/publishing-offers.html#offer\" target=\"_blank\">Offer fields</a> for a list of fields required to publish an offer.</p></span></div><br>Other information that is required before an unpublished offer can be published or before a published offer can be revised include: <ul><li>Inventory location</li> <li>Offer price</li> <li>Available quantity</li> <li>eBay listing category</li>  <li>Referenced listing policy profiles to set payment, return, and fulfillment values/settings</li> </ul> <p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to <code>true</code> if omitted from both the <strong>updateOffer</strong> and the <strong>createOffer</strong> calls. If a value is specified in the <strong>updateOffer</strong> call, this value will be used.</span><br><span class=\"tablenote\"><b>Note:</b> In addition to the <code>authorization</code> header, which is required for all Inventory API calls, this call also requires the <code>Content-Type</code> and <code>Content-Language</code> headers. See the <a href=\"/api-docs/sell/inventory/resources/offer/methods/updateOffer#h3-request-headers\">HTTP request headers</a> for more information.</span><br><span class=\"tablenote\"><strong>Note:</strong> Each listing can be revised up to 250 times in one calendar day. If this revision threshold is reached, the seller will be blocked from revising the item until the next calendar day.</span></p> <p>For published offers, the <strong>listingDescription</strong> field is also required to update the offer/eBay listing. For unpublished offers, this field is not necessarily required unless it is already set for the unpublished offer.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EbayOfferDetailsWithId(); // \Swagger\Client\Model\EbayOfferDetailsWithId | Details of the offer for the channel
$content_language = "content_language_example"; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.<br><br>For more information on the Content-Language header, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$offer_id = "offer_id_example"; // string | This path parameter specifies the unique identifier of the offer being updated.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\">getOffers</a> method to retrieve offer IDs.

try {
    $result = $apiInstance->updateOffer($body, $content_language, $content_type, $offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->updateOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EbayOfferDetailsWithId**](../Model/EbayOfferDetailsWithId.md)| Details of the offer for the channel |
 **content_language** | **string**| This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be &lt;code&gt;en-US&lt;/code&gt; for English or &lt;code&gt;de-DE&lt;/code&gt; for German.&lt;br&gt;&lt;br&gt;For more information on the Content-Language header, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |
 **offer_id** | **string**| This path parameter specifies the unique identifier of the offer being updated.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot;&gt;getOffers&lt;/a&gt; method to retrieve offer IDs. |

### Return type

[**\Swagger\Client\Model\OfferResponse**](../Model/OfferResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **withdrawOffer**
> \Swagger\Client\Model\WithdrawResponse withdrawOffer($offer_id)



This call is used to end a single-variation listing that is associated with the specified offer. This call is used in place of the <strong>deleteOffer</strong> call if the seller only wants to end the listing associated with the offer but does not want to delete the offer object. With this call, the offer object remains, but it goes into the unpublished state, and will require a <strong>publishOffer</strong> call to relist the offer.<br><br>To end a multiple-variation listing that is associated with an inventory item group, the <strong>withdrawOfferByInventoryItemGroup</strong> method can be used. This call only ends the multiple-variation listing associated with an inventory item group but does not delete the inventory item group object, nor does it delete any of the offers associated with the inventory item group, but instead all of these offers go into the unpublished state.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offer_id = "offer_id_example"; // string | This path parameter specifies the unique identifier of the offer that is to be withdrawn.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/offer/methods/getOffers\">getOffers</a> method to retrieve offer IDs.

try {
    $result = $apiInstance->withdrawOffer($offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->withdrawOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offer_id** | **string**| This path parameter specifies the unique identifier of the offer that is to be withdrawn.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot;&gt;getOffers&lt;/a&gt; method to retrieve offer IDs. |

### Return type

[**\Swagger\Client\Model\WithdrawResponse**](../Model/WithdrawResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **withdrawOfferByInventoryItemGroup**
> withdrawOfferByInventoryItemGroup($body, $content_type)



This call is used to end a multiple-variation eBay listing that is associated with the specified inventory item group. This call only ends multiple-variation eBay listing associated with the inventory item group but does not delete the inventory item group object. Similarly, this call also does not delete any of the offers associated with the inventory item group, but instead all of these offers go into the unpublished state. If the seller wanted to relist the multiple-variation eBay listing, they could use the <strong>publishOfferByInventoryItemGroup</strong> method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OfferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\WithdrawByInventoryItemGroupRequest(); // \Swagger\Client\Model\WithdrawByInventoryItemGroupRequest | The base request of the <strong>withdrawOfferByInventoryItemGroup</strong> call.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $apiInstance->withdrawOfferByInventoryItemGroup($body, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling OfferApi->withdrawOfferByInventoryItemGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\WithdrawByInventoryItemGroupRequest**](../Model/WithdrawByInventoryItemGroupRequest.md)| The base request of the &lt;strong&gt;withdrawOfferByInventoryItemGroup&lt;/strong&gt; call. |
 **content_type** | **string**| This header indicates the format of the request body provided by the client. Its value should be set to &lt;b&gt;application/json&lt;/b&gt;. &lt;br&gt;&lt;br&gt;For more information, refer to &lt;a href&#x3D;\&quot;/api-docs/static/rest-request-components.html#HTTP\&quot; target&#x3D;\&quot;_blank \&quot;&gt;HTTP request headers&lt;/a&gt;. |

### Return type

void (empty response body)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

