<?php
namespace Customize;
/**
 * Created by PhpStorm.
 * User: ZH
 * Date: 2016/7/20
 * Time: 15:11
 */

require "./alidayu_customize/AlibabaAliqinFcSmsNumSendRequest.php";
require "./alidayu_customize/AlibabaAliqinFcSmsNumQueryRequest.php";
require "./alidayu_customize/RequestCheckUtil.php";
require "./alidayu_customize/ResultSet.php";
require "./alidayu_customize/TopClient.php";
require "./alidayu_customize/TopLogger.php";
require "./alidayu_customize/AliSMSSend.php";


date_default_timezone_set('Asia/Shanghai');
/*$appkey = '23408281';
$secret = '818c7a628bc558c747bba5aa92617293';

$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;
$c->format = "json";
$req = new AlibabaAliqinFcSmsNumSendRequest;
$req->setExtend("123456");
$req->setSmsType("normal");
$req->setSmsFreeSignName("阿里大鱼");
$req->setSmsParam("{\"name\":\"林先生\",\"message\":\"请尽快查收消息。\",\"time\":\"2016-07-20\"}");
$req->setRecNum("18825146518");
$req->setSmsTemplateCode("SMS_12520739");
$resp = $c->execute($req);
echo var_dump($resp);*/

$batch1 = array('18825146518','18825146518','18825146518','18825146518');
$batch2 = "18825146518,18825146518,18825146518,18825146518,18825146518,18825146518";
$one = "18825146518";
$message = "{\"name\":\"林先生\",\"message\":\"请尽快查收消息。\",\"time\":\"2016-07-20\"}";
$message1 = '{"name":"林先生","message":"请尽快查收消息","time":"2016-07-20"}';
$message2 = array("name"=>"林先生","message"=>"请尽快查收消息","time"=>"2016-07-20");
$s = new AliSMSSend($batch2,$message1);
$result = $s->SendMessage();
echo var_dump($result);