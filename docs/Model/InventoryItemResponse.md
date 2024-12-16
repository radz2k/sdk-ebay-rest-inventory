# InventoryItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\Swagger\Client\Model\Error[]**](Error.md) | This container will be returned if there were one or more errors associated with the creation or update to the inventory item record. | [optional] 
**locale** | **string** | This field returns the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to &lt;a href&#x3D;&#x27;https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum&#x27;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**sku** | **string** | The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller should have a unique SKU value for every product that they sell. | [optional] 
**status_code** | **int** | The HTTP status code returned in this field indicates the success or failure of creating or updating the inventory item record for the inventory item indicated in the &lt;strong&gt;sku&lt;/strong&gt; field. See the &lt;strong&gt;HTTP status codes&lt;/strong&gt; table to see which each status code indicates. | [optional] 
**warnings** | [**\Swagger\Client\Model\Error[]**](Error.md) | This container will be returned if there were one or more warnings associated with the creation or update to the inventory item record. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

