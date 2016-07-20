<?php
/**
 * Created by PhpStorm.
 * User: ZH
 * Date: 2016/7/20
 * Time: 16:16
 */

namespace Customize;


class AliSMSSend
{
    //接收号码
    public $recphone;
    //短信内容
    public $message;

    //请求地址 http
    protected $httpurl = "http://gw.api.taobao.com/router/rest";
    //请求地址 https
    protected $httpsurl = "https://eco.taobao.com/router/rest";
    //阿里大鱼短信应用appkey
    protected $appkey = "23408281";
    //阿里大鱼短信应用appsecret
    protected $appsecret = "818c7a628bc558c747bba5aa92617293";
    //响应格式，可选“xml/json”
    protected $format = "json";
    //公共回传参数
    protected $extend = "123456";
    //短信类型
    protected $SmsType = "nomal";
    //短信签名
    protected $SmsFreeSignName = "阿里大鱼";
    //短信模板ID
    protected $SmsTemplateCode = "SMS_12520739";



    public function __construct($recphone = "",$message = ""){
        $this->recphone = $recphone;
        $this->message = $message ;
    }

    public function SendMessage(){
        $c = new TopClient;
        $c->appkey = $this->appkey;
        $c->secretKey = $this->appsecret;
        $c->format = $this->format;
        $req = new AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend($this->extend);
        $req->setSmsType($this->SmsType);
        $req->setSmsFreeSignName($this->SmsFreeSignName);
        $req->setSmsParam($this->message);
        $req->setRecNum($this->recphone);
        $req->setSmsTemplateCode($this->SmsTemplateCode);
        $resp = $c->execute($req,$this->httpsurl);
        return $resp;
    }



}