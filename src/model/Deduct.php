<?php
/**
 * Created by xiaowei.wang
 * CreateTime: 16/7/6 下午5:22
 * Description:
 */

namespace Paymax\model;


use Paymax\config\PaymaxConfig;

class Deduct extends ApiResource
{
    public static function create($params = null)
    {
        return self::_request(DeductConfig::$API_BASE_URL.DeductConfig::$CREATE_CHARGE,$params);
    }

    public static function retrieve($chargeId)
    {
        if (empty($chargeId)){
            return 'chargeId can not be blank.';
        }
        return self::_request(DeductConfig::$API_BASE_URL.DeductConfig::$CREATE_CHARGE.'/'.$chargeId);
    }
}
