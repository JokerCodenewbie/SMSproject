<?php

require 'sms.php';
$sms = new Sms( array('api_key' => 'XXXXXXXXXXXXXXXXXXXXXXXX' , 'use_ssl' => FALSE ) );

//send 单发接口
$res = $sms->send( array('13761428267') , '验证码：19272【铁壳网络】');
if( $res ){
    if( isset( $res['error'] ) &&  $res['error'] == 0 ){
        echo 'success';
    }else{
        echo 'failed,code:'.$res['error'].',msg:'.$res['msg'];
    }
}else{
    var_dump( $sms->last_error() );
}
exit;

//deposit 余额查询
$res = $sms->get_deposit();
if( $res ){
    if( isset( $res['error'] ) &&  $res['error'] == 0 ){
        echo 'desposit:'.$res['deposit'];
    }else{
        echo 'failed,code:'.$res['error'].',msg:'.$res['msg'];
    }
}else{
    var_dump( $sms->last_error() );
}
exit;









