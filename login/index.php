<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/7/5
 * Time: 14:16
 */

$params=array_merge($_GET, $_POST);
foreach ($params as $k => $v)
{
    
}
$result = json_encode($params);
echo $result;