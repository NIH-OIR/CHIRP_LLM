<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/inventories/v1beta/regionalinventory.proto

namespace Google\Shopping\Merchant\Inventories\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Regional inventory information for the product. Represents specific
 * information like price and availability for a given product in a specific
 * [`region`][google.shopping.merchant.inventories.v1beta.RegionalInventory.region].
 * For a list of all accepted attribute values, see the [regional product
 * inventory data
 * specification](https://support.google.com/merchants/answer/9698880).
 *
 * Generated from protobuf message <code>google.shopping.merchant.inventories.v1beta.RegionalInventory</code>
 */
class RegionalInventory extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the `RegionalInventory` resource.
     * Format:
     * `{regional_inventory.name=accounts/{account}/products/{product}/regionalInventories/{region}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The account that owns the product. This field will be ignored
     * if set by the client.
     *
     * Generated from protobuf field <code>int64 account = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $account = 0;
    /**
     * Required. Immutable. ID of the region for this
     * `RegionalInventory` resource. See the [Regional availability and
     * pricing](https://support.google.com/merchants/answer/9698880) for more
     * details.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $region = '';
    /**
     * Price of the product in this region.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price price = 4;</code>
     */
    protected $price = null;
    /**
     * Sale price of the product in this region. Mandatory if
     * [`salePriceEffectiveDate`][google.shopping.merchant.inventories.v1beta.RegionalInventory.sale_price_effective_date]
     * is defined.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price sale_price = 5;</code>
     */
    protected $sale_price = null;
    /**
     * The `TimePeriod` of the
     * sale price in this region.
     *
     * Generated from protobuf field <code>.google.type.Interval sale_price_effective_date = 6;</code>
     */
    protected $sale_price_effective_date = null;
    /**
     * Availability of the product in this region.
     * For accepted attribute values, see the [regional product inventory data
     * specification](https://support.google.com/merchants/answer/3061342)
     *
     * Generated from protobuf field <code>optional string availability = 7;</code>
     */
    protected $availability = null;
    /**
     * A list of custom (merchant-provided) attributes. You can also use
     * `CustomAttribute` to submit any attribute of the data specification in its
     * generic form.
     *
     * Generated from protobuf field <code>repeated .google.shopping.type.CustomAttribute custom_attributes = 8;</code>
     */
    private $custom_attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the `RegionalInventory` resource.
     *           Format:
     *           `{regional_inventory.name=accounts/{account}/products/{product}/regionalInventories/{region}`
     *     @type int|string $account
     *           Output only. The account that owns the product. This field will be ignored
     *           if set by the client.
     *     @type string $region
     *           Required. Immutable. ID of the region for this
     *           `RegionalInventory` resource. See the [Regional availability and
     *           pricing](https://support.google.com/merchants/answer/9698880) for more
     *           details.
     *     @type \Google\Shopping\Type\Price $price
     *           Price of the product in this region.
     *     @type \Google\Shopping\Type\Price $sale_price
     *           Sale price of the product in this region. Mandatory if
     *           [`salePriceEffectiveDate`][google.shopping.merchant.inventories.v1beta.RegionalInventory.sale_price_effective_date]
     *           is defined.
     *     @type \Google\Type\Interval $sale_price_effective_date
     *           The `TimePeriod` of the
     *           sale price in this region.
     *     @type string $availability
     *           Availability of the product in this region.
     *           For accepted attribute values, see the [regional product inventory data
     *           specification](https://support.google.com/merchants/answer/3061342)
     *     @type array<\Google\Shopping\Type\CustomAttribute>|\Google\Protobuf\Internal\RepeatedField $custom_attributes
     *           A list of custom (merchant-provided) attributes. You can also use
     *           `CustomAttribute` to submit any attribute of the data specification in its
     *           generic form.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Inventories\V1Beta\Regionalinventory::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the `RegionalInventory` resource.
     * Format:
     * `{regional_inventory.name=accounts/{account}/products/{product}/regionalInventories/{region}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the `RegionalInventory` resource.
     * Format:
     * `{regional_inventory.name=accounts/{account}/products/{product}/regionalInventories/{region}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The account that owns the product. This field will be ignored
     * if set by the client.
     *
     * Generated from protobuf field <code>int64 account = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Output only. The account that owns the product. This field will be ignored
     * if set by the client.
     *
     * Generated from protobuf field <code>int64 account = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkInt64($var);
        $this->account = $var;

        return $this;
    }

    /**
     * Required. Immutable. ID of the region for this
     * `RegionalInventory` resource. See the [Regional availability and
     * pricing](https://support.google.com/merchants/answer/9698880) for more
     * details.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. Immutable. ID of the region for this
     * `RegionalInventory` resource. See the [Regional availability and
     * pricing](https://support.google.com/merchants/answer/9698880) for more
     * details.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Price of the product in this region.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price price = 4;</code>
     * @return \Google\Shopping\Type\Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     * Price of the product in this region.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price price = 4;</code>
     * @param \Google\Shopping\Type\Price $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Type\Price::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Sale price of the product in this region. Mandatory if
     * [`salePriceEffectiveDate`][google.shopping.merchant.inventories.v1beta.RegionalInventory.sale_price_effective_date]
     * is defined.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price sale_price = 5;</code>
     * @return \Google\Shopping\Type\Price|null
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    public function hasSalePrice()
    {
        return isset($this->sale_price);
    }

    public function clearSalePrice()
    {
        unset($this->sale_price);
    }

    /**
     * Sale price of the product in this region. Mandatory if
     * [`salePriceEffectiveDate`][google.shopping.merchant.inventories.v1beta.RegionalInventory.sale_price_effective_date]
     * is defined.
     *
     * Generated from protobuf field <code>.google.shopping.type.Price sale_price = 5;</code>
     * @param \Google\Shopping\Type\Price $var
     * @return $this
     */
    public function setSalePrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Type\Price::class);
        $this->sale_price = $var;

        return $this;
    }

    /**
     * The `TimePeriod` of the
     * sale price in this region.
     *
     * Generated from protobuf field <code>.google.type.Interval sale_price_effective_date = 6;</code>
     * @return \Google\Type\Interval|null
     */
    public function getSalePriceEffectiveDate()
    {
        return $this->sale_price_effective_date;
    }

    public function hasSalePriceEffectiveDate()
    {
        return isset($this->sale_price_effective_date);
    }

    public function clearSalePriceEffectiveDate()
    {
        unset($this->sale_price_effective_date);
    }

    /**
     * The `TimePeriod` of the
     * sale price in this region.
     *
     * Generated from protobuf field <code>.google.type.Interval sale_price_effective_date = 6;</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setSalePriceEffectiveDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->sale_price_effective_date = $var;

        return $this;
    }

    /**
     * Availability of the product in this region.
     * For accepted attribute values, see the [regional product inventory data
     * specification](https://support.google.com/merchants/answer/3061342)
     *
     * Generated from protobuf field <code>optional string availability = 7;</code>
     * @return string
     */
    public function getAvailability()
    {
        return isset($this->availability) ? $this->availability : '';
    }

    public function hasAvailability()
    {
        return isset($this->availability);
    }

    public function clearAvailability()
    {
        unset($this->availability);
    }

    /**
     * Availability of the product in this region.
     * For accepted attribute values, see the [regional product inventory data
     * specification](https://support.google.com/merchants/answer/3061342)
     *
     * Generated from protobuf field <code>optional string availability = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAvailability($var)
    {
        GPBUtil::checkString($var, True);
        $this->availability = $var;

        return $this;
    }

    /**
     * A list of custom (merchant-provided) attributes. You can also use
     * `CustomAttribute` to submit any attribute of the data specification in its
     * generic form.
     *
     * Generated from protobuf field <code>repeated .google.shopping.type.CustomAttribute custom_attributes = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomAttributes()
    {
        return $this->custom_attributes;
    }

    /**
     * A list of custom (merchant-provided) attributes. You can also use
     * `CustomAttribute` to submit any attribute of the data specification in its
     * generic form.
     *
     * Generated from protobuf field <code>repeated .google.shopping.type.CustomAttribute custom_attributes = 8;</code>
     * @param array<\Google\Shopping\Type\CustomAttribute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomAttributes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Shopping\Type\CustomAttribute::class);
        $this->custom_attributes = $arr;

        return $this;
    }

}
