<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/conversions/v1beta/conversionsources.proto

namespace GPBMetadata\Google\Shopping\Merchant\Conversions\V1Beta;

class Conversionsources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
Cgoogle/shopping/merchant/conversions/v1beta/conversionsources.proto+google.shopping.merchant.conversions.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ConversionSourcef
google_analytics_link (2@.google.shopping.merchant.conversions.v1beta.GoogleAnalyticsLinkB�AH m
merchant_center_destination (2F.google.shopping.merchant.conversions.v1beta.MerchantCenterDestinationH 
name (	B�A�AW
state (2C.google.shopping.merchant.conversions.v1beta.ConversionSource.StateB�A4
expire_time (2.google.protobuf.TimestampB�Aa

controller (2H.google.shopping.merchant.conversions.v1beta.ConversionSource.ControllerB�A"E
State
STATE_UNSPECIFIED 

ACTIVE
ARCHIVED
PENDING"N

Controller
CONTROLLER_UNSPECIFIED 
MERCHANT
YOUTUBE_AFFILIATES:��A�
+merchantapi.googleapis.com/ConversionSource8accounts/{account}/conversionSources/{conversion_source}*conversionSources2conversionSourceB
source_data"�
AttributionSettings-
 attribution_lookback_window_days (B�Aq
attribution_model (2Q.google.shopping.merchant.conversions.v1beta.AttributionSettings.AttributionModelB�Ap
conversion_type (2O.google.shopping.merchant.conversions.v1beta.AttributionSettings.ConversionTypeB�A�A8
ConversionType
name (	B�A
report (B�A"�
AttributionModel!
ATTRIBUTION_MODEL_UNSPECIFIED 
CROSS_CHANNEL_LAST_CLICK
ADS_PREFERRED_LAST_CLICK
CROSS_CHANNEL_DATA_DRIVEN
CROSS_CHANNEL_FIRST_CLICK
CROSS_CHANNEL_LINEAR 
CROSS_CHANNEL_POSITION_BASED
CROSS_CHANNEL_TIME_DECAY	"�
GoogleAnalyticsLink
property_id (B�A�Ac
attribution_settings (2@.google.shopping.merchant.conversions.v1beta.AttributionSettingsB�A
property (	B�A"�
MerchantCenterDestination
destination (	B�Ac
attribution_settings (2@.google.shopping.merchant.conversions.v1beta.AttributionSettingsB�A
display_name (	B�A
currency_code (	B�A"�
CreateConversionSourceRequestC
parent (	B3�A�A-+merchantapi.googleapis.com/ConversionSource]
conversion_source (2=.google.shopping.merchant.conversions.v1beta.ConversionSourceB�A"�
UpdateConversionSourceRequest]
conversion_source (2=.google.shopping.merchant.conversions.v1beta.ConversionSourceB�A4
update_mask (2.google.protobuf.FieldMaskB�A"b
DeleteConversionSourceRequestA
name (	B3�A�A-
+merchantapi.googleapis.com/ConversionSource"d
UndeleteConversionSourceRequestA
name (	B3�A�A-
+merchantapi.googleapis.com/ConversionSource"_
GetConversionSourceRequestA
name (	B3�A�A-
+merchantapi.googleapis.com/ConversionSource"�
ListConversionSourcesRequestC
parent (	B3�A�A-+merchantapi.googleapis.com/ConversionSource
	page_size (B�A

page_token (	B�A
show_deleted (B�A"�
ListConversionSourcesResponseY
conversion_sources (2=.google.shopping.merchant.conversions.v1beta.ConversionSource
next_page_token (	2�
ConversionSourcesService�
CreateConversionSourceJ.google.shopping.merchant.conversions.v1beta.CreateConversionSourceRequest=.google.shopping.merchant.conversions.v1beta.ConversionSource"o�Aparent,conversion_source���N"9/conversions/v1beta/{parent=accounts/*}/conversionSources:conversion_source�
UpdateConversionSourceJ.google.shopping.merchant.conversions.v1beta.UpdateConversionSourceRequest=.google.shopping.merchant.conversions.v1beta.ConversionSource"��Aconversion_source,update_mask���`2K/conversions/v1beta/{conversion_source.name=accounts/*/conversionSources/*}:conversion_source�
DeleteConversionSourceJ.google.shopping.merchant.conversions.v1beta.DeleteConversionSourceRequest.google.protobuf.Empty"H�Aname���;*9/conversions/v1beta/{name=accounts/*/conversionSources/*}�
UndeleteConversionSourceL.google.shopping.merchant.conversions.v1beta.UndeleteConversionSourceRequest=.google.shopping.merchant.conversions.v1beta.ConversionSource"M���G"B/conversions/v1beta/{name=accounts/*/conversionSources/*}:undelete:*�
GetConversionSourceG.google.shopping.merchant.conversions.v1beta.GetConversionSourceRequest=.google.shopping.merchant.conversions.v1beta.ConversionSource"H�Aname���;9/conversions/v1beta/{name=accounts/*/conversionSources/*}�
ListConversionSourcesI.google.shopping.merchant.conversions.v1beta.ListConversionSourcesRequestJ.google.shopping.merchant.conversions.v1beta.ListConversionSourcesResponse"J�Aparent���;9/conversions/v1beta/{parent=accounts/*}/conversionSourcesG�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
/com.google.shopping.merchant.conversions.v1betaBConversionSourcesProtoPZWcloud.google.com/go/shopping/merchant/conversions/apiv1beta/conversionspb;conversionspb�A8
"merchantapi.googleapis.com/Accountaccounts/{account}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

