<?php
/**
 * Created by PhpStorm.
 * User: ZH
 * Date: 2016/7/19
 * Time: 15:43
 */
require './luosimao_sms/Sms.php';
$sms = new Sms( array('api_key' => 'afffe1c2baeb9813496144126caeef87' , 'use_ssl' => FALSE ) );

//send 单发接口
/*$res = $sms->send( '18825146518' , '验证码：19272【海量云图技术有限公司】');
if( $res ){
    if( isset( $res['error'] ) &&  $res['error'] == 0 ){
        echo 'success';
    }else{
        echo 'failed,code:'.$res['error'].',msg:'.$res['msg'];
    }
}else{
    var_dump( $sms->last_error() );
}
exit;*/

//send_batch 批量发送接口
$res = $sms->send_batch( array('18825124959','15705119017') , array('提醒内容：请查看微信群“以后这个群”【南雄602】'));
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









