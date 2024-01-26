<?php
/**
 * ===============================================
 * 版权所有 2019-2050 青岛鑫睿网络技术有限公司，并保留所有权利。
 * 网站地址: http://www.qdxinrui.net
 * ===============================================
 * Author: Alex
 * Created Time: 2020/2/25 18:48
 * Modified Time: 2020/2/25 18:48
 * Version: 2.0
 */
namespace fast;
class MessageHandler{
    const TEMP_SHOP_REGISTER_SUCCESS = 1;   // 店主注册审核通过
    const TEMP_SHOP_REGISTER_ERROR   = 2;   // 店主注册审核未通过
    const TEMP_MEMBER_TYRE_REGISTER_SUCCESS = 3;   // 车主轮胎添加成功
    const TEMP_MEMBER_TYRE_REGISTER_ERROR   = 4;   // 车主轮胎添加审核失败

    const TEMP_MEMBER_ORDER_SUCCESS = 5;   // 鼓包更换申请审核通过
    const TEMP_MEMBER_ORDER_ERROR   = 6;   // 鼓包更换申请审核未通过

    const TEMP_SHOP_ORDER_SUCCESS   = 7;   // 鼓包更换申请审核通过(门店)

    const TEMP_SHOP_ORDER_FINISH    = 8;   // 鼓包更换完成(门店)
    const TEMP_SHOP_ORDER_NO_FINISH = 9;   // 鼓包更换未完成(门店)

    const TEMP_MEMBER_ORDER_FINISH  = 10;   // 鼓包更换完成(车主)
    const TEMP_MEMBER_CLOSE_SHOP    = 11;   // 关闭门店
    
    const TEMP_MEMBER_RESCUE_APPLE_COUPON    = 12;   // 救援劵
    const TEMP_MEMBER_RESCUE_APPLE_UNCOUPON  = 13;   // 无救援劵

    const TEMP_SHOP_RESCUE_CONFIRM           = 14;   // 门店收到确认信息

    const TEMP_SHOP_FAULT_SUBMIT      = 15;   // 故障胎提交
    const TEMP_SHOP_FAULT_SUCCESS     = 16;   // 故障胎审核成功
    const TEMP_SHOP_FAULT_ERROR       = 17;   // 故障胎审核不成功

    public function run($params){
        MessageService::getInstance()->init($params);
        MessageService::getInstance()->exec();
    }
}