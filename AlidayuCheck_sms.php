<?php
/**
 * Created by PhpStorm.
 * User: ZH
 * Date: 2016/7/20
 * Time: 11:12
 */
require "./alidayu_sms/TopSdk.php";

date_default_timezone_set('Asia/Shanghai');
$appkey = '23408281';
$secret = '818c7a628bc558c747bba5aa92617293';

$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;
$c->format = "json";
$req = new AlibabaAliqinFcSmsNumQueryRequest;
//$req->setBizId("1234^1234");
$req->setRecNum("18825146518");
$req->setQueryDate("20160720");
$req->setCurrentPage("1");
$req->setPageSize("10");
$resp = $c->execute($req);
echo var_dump($resp);