﻿<?php
/**
 * 海关的申报系统接口
 * API文档在申报系统（i.kjb2c.com）->电商天地
 */
header("Content-Type:text/html;charset=UTF-8");
date_default_timezone_set("Asia/Shanghai");

//include_once ROOT_PATH. 'languages/zh_cn/common.php';
include_once ROOT_PATH. 'httputils/httpRequest.php';

// 海关接口总函数
// 下面所有的接口都调用这个函数来接发数据
// 该函数仅在该文件内部使用
function hg_OrderReportApi($xmlstr=null, $msgtype=null) {
    if ($xmlstr != null && $msgtype != null) {
        $url = $GLOBALS['_LANG']['kj_api_url'];
        $userid = $GLOBALS['_LANG']['kj_userid'];
        $pwd = $GLOBALS['_LANG']['kj_pwd'];
        //$timestamp = date('Y-m-d H:m:s');
        $timestamp = date('Y-m-d H:m:s', time()+3600); // 主站在国内，有可能要换成上面的时间戳
        $sign = md5($userid . $pwd . $timestamp);
        //$timestamp = urlencode($timestamp); 与海关API文档里写的不符，并不需要encode
        $customs = $GLOBALS['_LANG']['kj_customs'];

        $postField = array("userid" => $userid,"timestamp" => $timestamp,"sign" => $sign,"xmlstr" => $xmlstr,"msgtype" => $msgtype ,"customs" => $customs);

        $httpRequest = getHttpRequest($url, $postField);
        $result = curl_exec($httpRequest);
        curl_close($httpRequest);

        return $result;
    }
    return "";
}

/** 备案商品查询
 * @param null $ProductId     货号
 * @param null $DsSku         电商sku
 * @return mixed|null
 */
function hg_GetGoods($ProductId=null, $DsSku=null) {
    if ($ProductId == null && $DsSku == null) return "";

    $CustomsCode = $GLOBALS["_LANG"]["kj_customs_code"];
    $OrgName = $GLOBALS["_LANG"]["kj_org_name"];
    $msgType = 'cnec_jh_getgoods';
    $xml = "<?xml version='1.0' encoding='UTF-8'?>";
    $xml .= "<Massage><Header>";
    $xml .= "<CustomsCode>" . $CustomsCode . "</CustomsCode>";
    $xml .= "<OrgName>" . $OrgName . "</OrgName>";
    $xml .= "<ProductId>" . $ProductId . "</ProductId>";
    $xml .= "<DsSku>" . $DsSku . "</DsSku>";
    $xml .= "</Header></Massage>";
    $res = hg_OrderReportApi($xml, $msgType);
    return simplexml_load_string($res);
}

/** 备案用户查询
 * @param null $UserAccount    用户的跨境城账号
 * @return SimpleXMLElement
 */
function hg_GetAccount($UserAccount=null) {
    if ($UserAccount == null) return "";

    $Website = $GLOBALS["_LANG"]["kj_web_code"];
    $msgType = 'cnec_jh_account';
    $xml = "<?xml version='1.0' encoding='UTF-8'?>";
    $xml .= "<Massage><Header>";
    $xml .= "<OrderFrom>" . $Website . "</OrderFrom>";
    $xml .= "<Account>" . $UserAccount . "</Account>";
    $xml .= "</Header></Massage>";
    return simplexml_load_string(hg_OrderReportApi($xml, $msgType));
}

/**
 * 网站本地实名记录，海关接口需要用到这些数据
 * @param null $info
 */
function hg_RecordRealName($info=null) {
    if ($info == null) return;

    $sql = "UPDATE " . $GLOBALS['ecs']->table('users') . " SET real_name='" . $info['real_name'] . "', real_id='" . $info['id_num'] . "', real_phone='" . $info['phone'] . "', real_email='" . $info['email'] . "' WHERE user_id='" . $info['user_id'] . "'";
    $GLOBALS['db']->query($sql);
}

/**
 * 提交进口（跨境）订单
 */
function hg_SendOrder($orderData=null) {
    if ($orderData == null) return "";

    $CustomsCode = $GLOBALS["_LANG"]["kj_customs_code"];
    $OrgName = $GLOBALS["_LANG"]["kj_org_name"];
    $msgType = 'cnec_jh_order';
    $xml = "<?xml version='1.0' encoding='UTF-8'?>";
    $xml .= "<Massage><Header>";
    $xml .= "<CustomsCode>" . $CustomsCode . "</CustomsCode>";
    $xml .= "<OrgName>" . $OrgName . "</OrgName>";
    $xml .= "<CreateTime>" . $orderData['orderCreateTime'] . "</CreateTime>";
    $xml .= "</Header><Body><Order>";
    $xml .= "<Operation>" . $orderData['Operation'] . "</Operation>";
    $xml .= $orderData['Operation'] == 1 ? "<MftNo>" . $orderData['MftNo'] . "</MftNo>" : ""; // 若订单为更新才需要填写该项
    $xml .= "<OrderShop>" . $GLOBALS['_LANG']['kj_shop_code'] . "</OrderShop>";
    //$xml .= "<OTOCode>" . $a . "</OTOCode>"; // 非必填项
    $xml .= "<OrderFrom>" . $GLOBALS['_LANG']['kj_web_code'] . "</OrderFrom>";
    //$xml .= "<PackageFlag>" . $a . "</PackageFlag>"; // 非必填项
    $xml .= "<OrderNo>" . $orderData['orderNum'] . "</OrderNo>";
    $xml .= "<PostFee>" . $orderData['postFee'] . "</PostFee>";
    //$xml .= "<InsuranceFee>" . $orderData[''] . "</InsuranceFee>"; // 非必填项
    $xml .= "<Amount>" . $orderData['payAmount'] . "</Amount>";
    $xml .= "<BuyerAccount>" . $orderData['buyerAccount'] . "</BuyerAccount>";
    $xml .= "<Phone>" . $orderData['phone'] . "</Phone>";
    $xml .= "<Email>" . $orderData['email'] . "</Email>";
    $xml .= "<TaxAmount>" . $orderData['tariffAmount'] . "</TaxAmount>";
    $xml .= "<TariffAmount>" . $orderData['tariffTaxAmount'] . "</TariffAmount>";
    $xml .= "<AddedValueTaxAmount>" . $orderData['addedvalueTaxAmount'] . "</AddedValueTaxAmount>";
    $xml .= "<ConsumptionDutyAmount>" . $orderData['consumptionTaxAmount'] . "</ConsumptionDutyAmount>";
    $xml .= "<GrossWeight>" . $orderData['weight'] . "</GrossWeight>";
    //$xml .= "<DisAmount>" . $orderData['disAmount'] . "</DisAmount>"; // 无优惠
    //$xml .= "<Promotions></Promotions>"; // 无优惠
    $xml .= "<Goods>";
    foreach($orderData['orderDetails'] as $good) {
        $xml .= "<Detail>";
        $xml .= "<ProductId>" . $good['goodsSku'] . "</ProductId>";
        $xml .= "<GoodsName>" . $good['goodsName'] . "</GoodsName>";
        $xml .= "<Qty>" . $good['quantity'] . "</Qty>";
        $xml .= "<Unit>" . $good['unit'] . "</Unit>";
        $xml .= "<Price>" . $good['price'] . "</Price>";
        $xml .= "<Amount>" . (int)($good['quantity'])*(float)($good['goodsName']) . "</Amount>";
        $xml .= "</Detail>";
    }
    $xml .= "</Goods>";
    $xml .= "</Order><Pay>";
    $xml .= "<Paytime>" . $orderData['payTime'] . "</Paytime>";
    $xml .= "<PaymentNo>" . $orderData['PaymentNo'] . "</PaymentNo>";
    $xml .= "<OrderSeqNo>" . $orderData['OrderSeqNo'] . "</OrderSeqNo>";
    $xml .= "<Source>" . $orderData['Source'] . "</Source>";
    //$xml .= "<Idnum>" . $orderData['Idnum'] . "</Idnum>"; // 非必填项
    //$xml .= "<Name>" . $orderData['Name'] . "</Name>"; // 非必填项
    //$xml .= "<MerId>" . $orderData['MerId'] . "</MerId>"; // 非必填项
    $xml .= "</Pay><Logistics>";
    $xml .= "<LogisticsNo>" . $orderData['LogisticsNo'] . "</LogisticsNo>";
    $xml .= "<LogisticsName>" . $orderData['logisticsName'] . "</LogisticsName>";
    $xml .= "<Consignee>" . $orderData['consignee'] . "</Consignee>";
    $xml .= "<Province>" . $orderData['consigneeProvince'] . "</Province>";
    $xml .= "<City>" . $orderData['consigneeCity'] . "</City>";
    $xml .= "<District>" . $orderData['consigneeDistrict'] . "</District>";
    $xml .= "<ConsigneeAddr>" . $orderData['consigneeAddr'] . "</ConsigneeAddr>";
    $xml .= "<ConsigneeTel>" . $orderData['consigneeTel'] . "</ConsigneeTel>";
    $xml .= "<MailNo>" . $orderData['mailNo'] . "</MailNo>"; // 非必填项
    //$xml .= "<GoodsName>" . $orderData['GoodsName'] . "</GoodsName>"; // 非必填项
    //$xml .= "<Default01>" . $orderData['Default01'] . "</Default01>"; // 非必填项
    $xml .= "</Logistics></Body></Massage>";
    return simplexml_load_string(hg_OrderReportApi($xml, $msgType));
}

/**
 * 提交进口（跨境）订单支付信息
 * 调用完进口订单接口后调用此接口以提交与支付机构的交互信息
 */
function hg_SendPayment($Data=null) {
    if ($Data == null) return "";

    $CustomsCode = $GLOBALS["_LANG"]["kj_customs_code"];
    $OrgName = $GLOBALS["_LANG"]["kj_org_name"];
    $msgType = 'cnec_jh_pay';
    $xml = "<?xml version='1.0' encoding='UTF-8'?>";
    $xml .= "<Massage><Header>";
    $xml .= "<CustomsCode>" . $CustomsCode . "</CustomsCode>";
    $xml .= "<OrgName>" . $OrgName . "</OrgName>";
    $xml .= "<CreateTime>" . $Data['CreateTime'] . "</CreateTime>";
    $xml .= "</Header><Body><Pay>";
    $xml .= "<MftNo>" . $Data['MftNo'] . "</MftNo>";
    $xml .= "<PaymentNo>" . $Data['PaymentNo'] . "</PaymentNo>";
    $xml .= "<OrderSeqNo>" . $Data['OrderSeqNo'] . "</OrderSeqNo>";
    $xml .= "<Amount>" . $Data['Amount'] . "</Amount>";
    $xml .= "<CurrCode>" . 'RMB' . "</CurrCode>"; // 申报系统API目前仅限RMB
    $xml .= "<Source>" . $Data['Source'] . "</Source>";
    $xml .= "<Idnum>" . $Data['Idnum'] . "</Idnum>";
    $xml .= "<Name>" . $Data['Name'] . "</Name>";
    $xml .= "<Phone>" . $Data['Phone'] . "</Phone>";
    $xml .= "<Email>" . $Data['Email'] . "</Email>";
    //$xml .= "<MerId>" . $Data['MerId'] . "</MerId>"; // 非银联不需要填
    $xml .= "</Pay></Body></Massage>";
    return simplexml_load_string(hg_OrderReportApi($xml, $msgType));
}

?>