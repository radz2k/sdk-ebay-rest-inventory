# SwaggerClient-php
The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.18.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkInventoryItem(); // \Swagger\Client\Model\BulkInventoryItem | Details of the inventories with sku and locale
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$content_language = "content_language_example"; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.<br><br>For more information on the Content-Language header, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->bulkCreateOrReplaceInventoryItem($body, $content_type, $content_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkCreateOrReplaceInventoryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkGetInventoryItem(); // \Swagger\Client\Model\BulkGetInventoryItem | Details of the inventories with sku and locale
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->bulkGetInventoryItem($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkGetInventoryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkPriceQuantity(); // \Swagger\Client\Model\BulkPriceQuantity | Price and allocation details for the given SKU and Marketplace
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.

try {
    $result = $apiInstance->bulkUpdatePriceQuantity($body, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->bulkUpdatePriceQuantity: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\InventoryItem(); // \Swagger\Client\Model\InventoryItem | Details of the inventory item record.
$content_language = "content_language_example"; // string | This header sets the natural language that will be used in the field values of the request payload. For example, the value passed in this header should be <code>en-US</code> for English or <code>de-DE</code> for German.<br><br>For more information on the Content-Language header, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$content_type = "content_type_example"; // string | This header indicates the format of the request body provided by the client. Its value should be set to <b>application/json</b>. <br><br>For more information, refer to <a href=\"/api-docs/static/rest-request-components.html#HTTP\" target=\"_blank \">HTTP request headers</a>.
$sku = "sku_example"; // string | This path parameter specifies the seller-defined SKU value for the inventory item being created or updated. SKU values must be unique across the seller's inventory. <br><br><strong>Max length</strong>: 50

try {
    $result = $apiInstance->createOrReplaceInventoryItem($body, $content_language, $content_type, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->createOrReplaceInventoryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | This path parameter specifies the seller-defined SKU value of the product whose inventory item record you wish to delete.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems\" target=\"_blank \">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max length</strong>: 50

try {
    $apiInstance->deleteInventoryItem($sku);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->deleteInventoryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sku = "sku_example"; // string | This path parameter specifies the seller-defined SKU value of the product whose inventory item record you wish to retrieve.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItems\" target=\"_blank \">getInventoryItems</a> method to retrieve SKU values.<br><br><strong>Max length</strong>: 50

try {
    $result = $apiInstance->getInventoryItem($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->getInventoryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure OAuth2 access token for authorization: api_auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\InventoryItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = "limit_example"; // string | The value passed in this query parameter sets the maximum number of records to return per page of data. Although this field is a string, the value passed in this field should be an integer from <code>1</code> to <code>200</code>.<br><br><strong>Min:</strong> 1<br><br><strong>Max:</strong> 200<br><br><b>Default:</b> 25
$offset = "offset_example"; // string | The value passed in this query parameter sets the page number to retrieve. The first page of records has a value of <code>0</code>, the second page of records has a value of <code>1</code>, and so on. If this query parameter is not set, its value defaults to <code>0</code>, and the first page of records is returned.

try {
    $result = $apiInstance->getInventoryItems($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryItemApi->getInventoryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.ebay.com{basePath}*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InventoryItemApi* | [**bulkCreateOrReplaceInventoryItem**](docs/Api/InventoryItemApi.md#bulkcreateorreplaceinventoryitem) | **POST** /bulk_create_or_replace_inventory_item | 
*InventoryItemApi* | [**bulkGetInventoryItem**](docs/Api/InventoryItemApi.md#bulkgetinventoryitem) | **POST** /bulk_get_inventory_item | 
*InventoryItemApi* | [**bulkUpdatePriceQuantity**](docs/Api/InventoryItemApi.md#bulkupdatepricequantity) | **POST** /bulk_update_price_quantity | 
*InventoryItemApi* | [**createOrReplaceInventoryItem**](docs/Api/InventoryItemApi.md#createorreplaceinventoryitem) | **PUT** /inventory_item/{sku} | 
*InventoryItemApi* | [**deleteInventoryItem**](docs/Api/InventoryItemApi.md#deleteinventoryitem) | **DELETE** /inventory_item/{sku} | 
*InventoryItemApi* | [**getInventoryItem**](docs/Api/InventoryItemApi.md#getinventoryitem) | **GET** /inventory_item/{sku} | 
*InventoryItemApi* | [**getInventoryItems**](docs/Api/InventoryItemApi.md#getinventoryitems) | **GET** /inventory_item | 
*InventoryItemGroupApi* | [**createOrReplaceInventoryItemGroup**](docs/Api/InventoryItemGroupApi.md#createorreplaceinventoryitemgroup) | **PUT** /inventory_item_group/{inventoryItemGroupKey} | 
*InventoryItemGroupApi* | [**deleteInventoryItemGroup**](docs/Api/InventoryItemGroupApi.md#deleteinventoryitemgroup) | **DELETE** /inventory_item_group/{inventoryItemGroupKey} | 
*InventoryItemGroupApi* | [**getInventoryItemGroup**](docs/Api/InventoryItemGroupApi.md#getinventoryitemgroup) | **GET** /inventory_item_group/{inventoryItemGroupKey} | 
*ListingApi* | [**bulkMigrateListing**](docs/Api/ListingApi.md#bulkmigratelisting) | **POST** /bulk_migrate_listing | 
*ListingApi* | [**createOrReplaceSkuLocationMapping**](docs/Api/ListingApi.md#createorreplaceskulocationmapping) | **PUT** /listing/{listingId}/sku/{sku}/locations | 
*ListingApi* | [**deleteSkuLocationMapping**](docs/Api/ListingApi.md#deleteskulocationmapping) | **DELETE** /listing/{listingId}/sku/{sku}/locations | 
*ListingApi* | [**getSkuLocationMapping**](docs/Api/ListingApi.md#getskulocationmapping) | **GET** /listing/{listingId}/sku/{sku}/locations | 
*LocationApi* | [**createInventoryLocation**](docs/Api/LocationApi.md#createinventorylocation) | **POST** /location/{merchantLocationKey} | 
*LocationApi* | [**deleteInventoryLocation**](docs/Api/LocationApi.md#deleteinventorylocation) | **DELETE** /location/{merchantLocationKey} | 
*LocationApi* | [**disableInventoryLocation**](docs/Api/LocationApi.md#disableinventorylocation) | **POST** /location/{merchantLocationKey}/disable | 
*LocationApi* | [**enableInventoryLocation**](docs/Api/LocationApi.md#enableinventorylocation) | **POST** /location/{merchantLocationKey}/enable | 
*LocationApi* | [**getInventoryLocation**](docs/Api/LocationApi.md#getinventorylocation) | **GET** /location/{merchantLocationKey} | 
*LocationApi* | [**getInventoryLocations**](docs/Api/LocationApi.md#getinventorylocations) | **GET** /location | 
*LocationApi* | [**updateInventoryLocation**](docs/Api/LocationApi.md#updateinventorylocation) | **POST** /location/{merchantLocationKey}/update_location_details | 
*OfferApi* | [**bulkCreateOffer**](docs/Api/OfferApi.md#bulkcreateoffer) | **POST** /bulk_create_offer | 
*OfferApi* | [**bulkPublishOffer**](docs/Api/OfferApi.md#bulkpublishoffer) | **POST** /bulk_publish_offer | 
*OfferApi* | [**createOffer**](docs/Api/OfferApi.md#createoffer) | **POST** /offer | 
*OfferApi* | [**deleteOffer**](docs/Api/OfferApi.md#deleteoffer) | **DELETE** /offer/{offerId} | 
*OfferApi* | [**getListingFees**](docs/Api/OfferApi.md#getlistingfees) | **POST** /offer/get_listing_fees | 
*OfferApi* | [**getOffer**](docs/Api/OfferApi.md#getoffer) | **GET** /offer/{offerId} | 
*OfferApi* | [**getOffers**](docs/Api/OfferApi.md#getoffers) | **GET** /offer | 
*OfferApi* | [**publishOffer**](docs/Api/OfferApi.md#publishoffer) | **POST** /offer/{offerId}/publish | 
*OfferApi* | [**publishOfferByInventoryItemGroup**](docs/Api/OfferApi.md#publishofferbyinventoryitemgroup) | **POST** /offer/publish_by_inventory_item_group | 
*OfferApi* | [**updateOffer**](docs/Api/OfferApi.md#updateoffer) | **PUT** /offer/{offerId} | 
*OfferApi* | [**withdrawOffer**](docs/Api/OfferApi.md#withdrawoffer) | **POST** /offer/{offerId}/withdraw | 
*OfferApi* | [**withdrawOfferByInventoryItemGroup**](docs/Api/OfferApi.md#withdrawofferbyinventoryitemgroup) | **POST** /offer/withdraw_by_inventory_item_group | 
*ProductCompatibilityApi* | [**createOrReplaceProductCompatibility**](docs/Api/ProductCompatibilityApi.md#createorreplaceproductcompatibility) | **PUT** /inventory_item/{sku}/product_compatibility | 
*ProductCompatibilityApi* | [**deleteProductCompatibility**](docs/Api/ProductCompatibilityApi.md#deleteproductcompatibility) | **DELETE** /inventory_item/{sku}/product_compatibility | 
*ProductCompatibilityApi* | [**getProductCompatibility**](docs/Api/ProductCompatibilityApi.md#getproductcompatibility) | **GET** /inventory_item/{sku}/product_compatibility | 

## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Amount](docs/Model/Amount.md)
 - [Availability](docs/Model/Availability.md)
 - [AvailabilityDistribution](docs/Model/AvailabilityDistribution.md)
 - [AvailabilityWithAll](docs/Model/AvailabilityWithAll.md)
 - [BaseResponse](docs/Model/BaseResponse.md)
 - [BestOffer](docs/Model/BestOffer.md)
 - [BulkEbayOfferDetailsWithKeys](docs/Model/BulkEbayOfferDetailsWithKeys.md)
 - [BulkGetInventoryItem](docs/Model/BulkGetInventoryItem.md)
 - [BulkGetInventoryItemResponse](docs/Model/BulkGetInventoryItemResponse.md)
 - [BulkInventoryItem](docs/Model/BulkInventoryItem.md)
 - [BulkInventoryItemResponse](docs/Model/BulkInventoryItemResponse.md)
 - [BulkMigrateListing](docs/Model/BulkMigrateListing.md)
 - [BulkMigrateListingResponse](docs/Model/BulkMigrateListingResponse.md)
 - [BulkOffer](docs/Model/BulkOffer.md)
 - [BulkOfferResponse](docs/Model/BulkOfferResponse.md)
 - [BulkPriceQuantity](docs/Model/BulkPriceQuantity.md)
 - [BulkPriceQuantityResponse](docs/Model/BulkPriceQuantityResponse.md)
 - [BulkPublishResponse](docs/Model/BulkPublishResponse.md)
 - [Charity](docs/Model/Charity.md)
 - [Compatibility](docs/Model/Compatibility.md)
 - [CompatibleProduct](docs/Model/CompatibleProduct.md)
 - [ConditionDescriptor](docs/Model/ConditionDescriptor.md)
 - [CountryPolicy](docs/Model/CountryPolicy.md)
 - [Dimension](docs/Model/Dimension.md)
 - [Document](docs/Model/Document.md)
 - [EbayOfferDetailsWithAll](docs/Model/EbayOfferDetailsWithAll.md)
 - [EbayOfferDetailsWithId](docs/Model/EbayOfferDetailsWithId.md)
 - [EbayOfferDetailsWithKeys](docs/Model/EbayOfferDetailsWithKeys.md)
 - [EnergyEfficiencyLabel](docs/Model/EnergyEfficiencyLabel.md)
 - [Error](docs/Model/Error.md)
 - [ErrorParameter](docs/Model/ErrorParameter.md)
 - [ExtendedProducerResponsibility](docs/Model/ExtendedProducerResponsibility.md)
 - [Fee](docs/Model/Fee.md)
 - [FeeSummary](docs/Model/FeeSummary.md)
 - [FeesSummaryResponse](docs/Model/FeesSummaryResponse.md)
 - [FormatAllocation](docs/Model/FormatAllocation.md)
 - [FulfillmentCenterSpecifications](docs/Model/FulfillmentCenterSpecifications.md)
 - [GeoCoordinates](docs/Model/GeoCoordinates.md)
 - [GetInventoryItem](docs/Model/GetInventoryItem.md)
 - [GetInventoryItemResponse](docs/Model/GetInventoryItemResponse.md)
 - [Hazmat](docs/Model/Hazmat.md)
 - [Interval](docs/Model/Interval.md)
 - [InventoryItem](docs/Model/InventoryItem.md)
 - [InventoryItemGroup](docs/Model/InventoryItemGroup.md)
 - [InventoryItemListing](docs/Model/InventoryItemListing.md)
 - [InventoryItemResponse](docs/Model/InventoryItemResponse.md)
 - [InventoryItemWithSkuLocale](docs/Model/InventoryItemWithSkuLocale.md)
 - [InventoryItemWithSkuLocaleGroupKeys](docs/Model/InventoryItemWithSkuLocaleGroupKeys.md)
 - [InventoryItemWithSkuLocaleGroupid](docs/Model/InventoryItemWithSkuLocaleGroupid.md)
 - [InventoryItems](docs/Model/InventoryItems.md)
 - [InventoryLocation](docs/Model/InventoryLocation.md)
 - [InventoryLocationFull](docs/Model/InventoryLocationFull.md)
 - [InventoryLocationResponse](docs/Model/InventoryLocationResponse.md)
 - [ListingDetails](docs/Model/ListingDetails.md)
 - [ListingPolicies](docs/Model/ListingPolicies.md)
 - [Location](docs/Model/Location.md)
 - [LocationAvailabilityDetails](docs/Model/LocationAvailabilityDetails.md)
 - [LocationDetails](docs/Model/LocationDetails.md)
 - [LocationMapping](docs/Model/LocationMapping.md)
 - [LocationResponse](docs/Model/LocationResponse.md)
 - [Manufacturer](docs/Model/Manufacturer.md)
 - [MigrateListing](docs/Model/MigrateListing.md)
 - [MigrateListingResponse](docs/Model/MigrateListingResponse.md)
 - [NameValueList](docs/Model/NameValueList.md)
 - [OfferKeyWithId](docs/Model/OfferKeyWithId.md)
 - [OfferKeysWithId](docs/Model/OfferKeysWithId.md)
 - [OfferPriceQuantity](docs/Model/OfferPriceQuantity.md)
 - [OfferResponse](docs/Model/OfferResponse.md)
 - [OfferResponseWithListingId](docs/Model/OfferResponseWithListingId.md)
 - [OfferSkuResponse](docs/Model/OfferSkuResponse.md)
 - [Offers](docs/Model/Offers.md)
 - [OperatingHours](docs/Model/OperatingHours.md)
 - [Overrides](docs/Model/Overrides.md)
 - [PackageWeightAndSize](docs/Model/PackageWeightAndSize.md)
 - [PickupAtLocationAvailability](docs/Model/PickupAtLocationAvailability.md)
 - [PriceQuantity](docs/Model/PriceQuantity.md)
 - [PriceQuantityResponse](docs/Model/PriceQuantityResponse.md)
 - [PricingSummary](docs/Model/PricingSummary.md)
 - [Product](docs/Model/Product.md)
 - [ProductFamilyProperties](docs/Model/ProductFamilyProperties.md)
 - [ProductIdentifier](docs/Model/ProductIdentifier.md)
 - [ProductSafety](docs/Model/ProductSafety.md)
 - [PublishByInventoryItemGroupRequest](docs/Model/PublishByInventoryItemGroupRequest.md)
 - [PublishResponse](docs/Model/PublishResponse.md)
 - [RegionalProductCompliancePolicies](docs/Model/RegionalProductCompliancePolicies.md)
 - [RegionalTakeBackPolicies](docs/Model/RegionalTakeBackPolicies.md)
 - [Regulatory](docs/Model/Regulatory.md)
 - [ResponsiblePerson](docs/Model/ResponsiblePerson.md)
 - [SameDayShippingCutOffTimes](docs/Model/SameDayShippingCutOffTimes.md)
 - [ShipToLocationAvailability](docs/Model/ShipToLocationAvailability.md)
 - [ShipToLocationAvailabilityWithAll](docs/Model/ShipToLocationAvailabilityWithAll.md)
 - [ShippingCostOverride](docs/Model/ShippingCostOverride.md)
 - [SpecialHours](docs/Model/SpecialHours.md)
 - [Specification](docs/Model/Specification.md)
 - [Tax](docs/Model/Tax.md)
 - [TimeDuration](docs/Model/TimeDuration.md)
 - [VariesBy](docs/Model/VariesBy.md)
 - [Version](docs/Model/Version.md)
 - [WeeklySchedule](docs/Model/WeeklySchedule.md)
 - [Weight](docs/Model/Weight.md)
 - [WithdrawByInventoryItemGroupRequest](docs/Model/WithdrawByInventoryItemGroupRequest.md)
 - [WithdrawResponse](docs/Model/WithdrawResponse.md)

## Documentation For Authorization


## api_auth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://auth.ebay.com/oauth2/authorize
- **Scopes**: 
 - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers
 - **https://api.ebay.com/oauth/api_scope/sell.inventory.readonly**: View your inventory and offers


## Author


