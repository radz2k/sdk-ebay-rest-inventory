<?php
/**
 * ProductTest
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
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

use PHPUnit\Framework\TestCase;

/**
 * ProductTest Class Doc Comment
 *
 * @category    Class
 * @description This type is used to define the product details, such as a title, a product description, product aspects/item specifics, and links to images for the product. Optionally, in a &lt;strong&gt;createOrReplaceInventoryItem&lt;/strong&gt; call, a seller can pass in an eBay Product Identifier (ePID) or a Global Trade Item Number (GTIN) value, such as an EAN, an ISBN, a UPC, to identify a product to be matched with a product in the eBay Catalog. The information in this type is also returned in the &lt;strong&gt;getInventoryItem&lt;/strong&gt;, &lt;strong&gt;getInventoryItems&lt;/strong&gt;, and &lt;strong&gt;bulkGetInventoryItem&lt;/strong&gt; calls if defined.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "Product"
     */
    public function testProduct()
    {
    }

    /**
     * Test attribute "aspects"
     */
    public function testPropertyAspects()
    {
    }

    /**
     * Test attribute "brand"
     */
    public function testPropertyBrand()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "ean"
     */
    public function testPropertyEan()
    {
    }

    /**
     * Test attribute "epid"
     */
    public function testPropertyEpid()
    {
    }

    /**
     * Test attribute "image_urls"
     */
    public function testPropertyImageUrls()
    {
    }

    /**
     * Test attribute "isbn"
     */
    public function testPropertyIsbn()
    {
    }

    /**
     * Test attribute "mpn"
     */
    public function testPropertyMpn()
    {
    }

    /**
     * Test attribute "subtitle"
     */
    public function testPropertySubtitle()
    {
    }

    /**
     * Test attribute "title"
     */
    public function testPropertyTitle()
    {
    }

    /**
     * Test attribute "upc"
     */
    public function testPropertyUpc()
    {
    }

    /**
     * Test attribute "video_ids"
     */
    public function testPropertyVideoIds()
    {
    }
}