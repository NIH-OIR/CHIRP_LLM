<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `RemoveProductFromProductSet` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.RemoveProductFromProductSetRequest</code>
 */
class RemoveProductFromProductSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name for the ProductSet to modify.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The resource name for the Product to be removed from this
     * ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *
     * Generated from protobuf field <code>string product = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $product = '';

    /**
     * @param string $name    Required. The resource name for the ProductSet to modify.
     *
     *                        Format is:
     *                        `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *                        Please see {@see ProductSearchClient::productSetName()} for help formatting this field.
     * @param string $product Required. The resource name for the Product to be removed from this
     *                        ProductSet.
     *
     *                        Format is:
     *                        `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *                        Please see {@see ProductSearchClient::productName()} for help formatting this field.
     *
     * @return \Google\Cloud\Vision\V1\RemoveProductFromProductSetRequest
     *
     * @experimental
     */
    public static function build(string $name, string $product): self
    {
        return (new self())
            ->setName($name)
            ->setProduct($product);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name for the ProductSet to modify.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *     @type string $product
     *           Required. The resource name for the Product to be removed from this
     *           ProductSet.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name for the ProductSet to modify.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name for the ProductSet to modify.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The resource name for the Product to be removed from this
     * ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *
     * Generated from protobuf field <code>string product = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Required. The resource name for the Product to be removed from this
     * ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/products/PRODUCT_ID`
     *
     * Generated from protobuf field <code>string product = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProduct($var)
    {
        GPBUtil::checkString($var, True);
        $this->product = $var;

        return $this;
    }

}
