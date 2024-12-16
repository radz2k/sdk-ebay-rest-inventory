# ShipToLocationAvailability

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_distributions** | [**\Swagger\Client\Model\AvailabilityDistribution[]**](AvailabilityDistribution.md) | This container is used to set the available quantity of the inventory item at one or more warehouse locations.&lt;br&gt;&lt;br&gt;This container will be returned if available quantity is set for one or more inventory locations. | [optional] 
**quantity** | **int** | This container is used to set the total &#x27;ship-to-home&#x27; quantity of the inventory item that will be available for purchase through one or more published offers. This field is not immediately required, but &#x27;ship-to-home&#x27; quantity must be set before an offer of the inventory item can be published.&lt;br&gt;&lt;br&gt;If an existing inventory item is being updated, and the &#x27;ship-to-home&#x27; quantity already exists for the inventory item record, this field should be included again, even if the value is not changing, or the available quantity data will be lost.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The &lt;b&gt;availableQuantity&lt;/b&gt; field if set in the offer overrides the &lt;b&gt;quantity&lt;/b&gt; field set here. See the note in &lt;a href &#x3D;\&quot;/api-docs/sell/static/inventory/publishing-offers.html#offer\&quot; target&#x3D;\&quot;_blank\&quot; &gt;Offer fields&lt;/a&gt; for details. &lt;/span&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

