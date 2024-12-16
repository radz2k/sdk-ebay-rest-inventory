# ProductSafety

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**component** | **string** | This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as &#x27;Tipping hazard&#x27;. &lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; Component information can only be specified if used with the &lt;b&gt;pictograms&lt;/b&gt; and/or &lt;b&gt;statements&lt;/b&gt; field; if the component is provided without one or both of these fields, an error will occur.&lt;/span&gt;&lt;br&gt;&lt;b&gt;Max length:&lt;/b&gt; 120 characters | [optional] 
**pictograms** | **string[]** | An array of comma-separated string values used to provide product safety pictogram(s) for the listing.&lt;br&gt;&lt;br&gt;If your product shows universal product safety or compliance symbols, please select the values corresponding to the product safety pictograms for display in the product safety section of the listing. The seller specifies the identifier of each pictogram in this field.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; For product safety pictograms, use the &lt;a href&#x3D; \&quot;/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getProductSafetyLabels&lt;/a&gt; method of the &lt;b&gt;Metadata API&lt;/b&gt; to find supported values for a specific marketplace/site.&lt;/span&gt;&lt;br&gt;A maximum of 2 pictograms are allowed for product safety. | [optional] 
**statements** | **string[]** | An array of comma-separated string values used to provide product safety statement(s) for the listing.&lt;br&gt;&lt;br&gt;If your product shows universal product safety or compliance warnings, please select the values corresponding to the product safety statements for display in the product safety section of the listing. The seller specifies the identifier of each statement in this field.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt;&lt;b&gt;Note:&lt;/b&gt; For product safety statements, use the &lt;a href&#x3D; \&quot;/api-docs/sell/metadata/resources/marketplace/methods/getProductSafetyLabels\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getProductSafetyLabels&lt;/a&gt; method of the &lt;b&gt;Metadata API&lt;/b&gt; to find supported values for a specific marketplace/site.&lt;/span&gt;&lt;br&gt;A maximum of 8 statements are allowed for product safety. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
