<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/backup_disaster_recovery.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class BackupDisasterRecovery
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/cloud/securitycenter/v1/backup_disaster_recovery.protogoogle.cloud.securitycenter.v1"�
BackupDisasterRecovery
backup_template (	
policies (	
host (	
applications (	
storage_pool (	
policy_options (	
profile (	
	appliance (	
backup_type	 (	6
backup_create_time
 (2.google.protobuf.TimestampB�
"com.google.cloud.securitycenter.v1BBackupDisasterRecoveryProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
