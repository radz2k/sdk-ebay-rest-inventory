# CompatibleProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**compatibility_properties** | [**\Swagger\Client\Model\NameValueList[]**](NameValueList.md) | This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/value pairs. In the &lt;strong&gt;name&lt;/strong&gt; field, the vehicle aspect (such as &#x27;make&#x27;, &#x27;model&#x27;, &#x27;year&#x27;, &#x27;trim&#x27;, or &#x27;engine&#x27;) will be identified, and the &lt;strong&gt;value&lt;/strong&gt; field will be used to identify the value of each aspect.&lt;br&gt;&lt;br&gt;The &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityProperties\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCompatibilityProperties&lt;/a&gt; method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category, and the &lt;a href&#x3D;\&quot;/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityPropertyValues\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getCompatibilityPropertyValues&lt;/a&gt; method of the Taxonomy API can be used to retrieve possible values for these same vehicle aspect names.&lt;br&gt;&lt;br&gt;Below is an example of identifying one motor vehicle using the &lt;strong&gt;compatibilityProperties&lt;/strong&gt; container:&lt;br&gt;&lt;br&gt;&lt;code&gt;&amp;quot;compatibilityProperties&amp;quot; : &amp;#91;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#123;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;name&amp;quot; : &amp;quot;make&amp;quot;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot; : &amp;quot;Subaru&amp;quot;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#125;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#123;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;name&amp;quot; : &amp;quot;model&amp;quot;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot; : &amp;quot;GL&amp;quot;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#125;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#123;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;name&amp;quot; : &amp;quot;year&amp;quot;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot; : &amp;quot;1983&amp;quot;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#125;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#123;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;name&amp;quot; : &amp;quot;trim&amp;quot;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot; : &amp;quot;Base Wagon 4-Door&amp;quot;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#125;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#123;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;name&amp;quot; : &amp;quot;engine&amp;quot;,&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;quot;value&amp;quot; : &amp;quot;1.8L Turbocharged&amp;quot;&lt;br&gt;&amp;nbsp;&amp;nbsp;&amp;#125;&lt;br&gt;&amp;#93;&lt;/code&gt;&lt;br&gt;&lt;br&gt;Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.&lt;br&gt;&lt;br&gt;&lt;span class&#x3D;\&quot;tablenote\&quot;&gt; &lt;strong&gt;Note:&lt;/strong&gt; The &lt;strong&gt;productFamilyProperties&lt;/strong&gt; container is deprecated and should no longer be used. The &lt;strong&gt;compatibilityProperties&lt;/strong&gt; container should be used instead.&lt;/span&gt; | [optional] 
**notes** | **string** | This field is used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable information.&lt;br&gt;&lt;br&gt;This field will only be returned if specified by the seller.&lt;br&gt;&lt;br&gt;&lt;strong&gt;Max Length&lt;/strong&gt;: 500&lt;br&gt; | [optional] 
**product_family_properties** | [**\Swagger\Client\Model\ProductFamilyProperties**](ProductFamilyProperties.md) |  | [optional] 
**product_identifier** | [**\Swagger\Client\Model\ProductIdentifier**](ProductIdentifier.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
