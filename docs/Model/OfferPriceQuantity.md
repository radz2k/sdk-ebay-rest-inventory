# OfferPriceQuantity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_quantity** | **int** | This field is used if the seller wants to modify the current quantity of the inventory item that will be available for purchase in the offer (identified by the corresponding &lt;strong&gt;offerId&lt;/strong&gt; value). Either the &lt;strong&gt;availableQuantity&lt;/strong&gt; field or the &lt;strong&gt;price&lt;/strong&gt; container is required, but not necessarily both. | [optional] 
**offer_id** | **string** | This field is the unique identifier of the offer. If an &lt;strong&gt;offers&lt;/strong&gt; container is used to update one or more offers associated to a specific inventory item, the &lt;strong&gt;offerId&lt;/strong&gt; value is required in order to identify the offer to update with a modified price and/or quantity.&lt;br&gt;&lt;br&gt;The seller can use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/offer/methods/getOffers\&quot; target&#x3D;\&quot;_blank \&quot;&gt;getOffers&lt;/a&gt; method (passing in the correct SKU value as a query parameter) to retrieve &lt;strong&gt;offerId&lt;/strong&gt; values for offers associated with the SKU. | [optional] 
**price** | [**\Swagger\Client\Model\Amount**](Amount.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

