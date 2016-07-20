<?php
/**
 * Created by PhpStorm.
 * User: ZH
 * Date: 2016/7/18
 * Time: 12:08
 */
$cars = array();
$cars[0] = "first";
echo count($cars);

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "\n";
}

$str = "/tmp////";
echo rtrim($str,'\\/');
echo dirname(__FILE__);