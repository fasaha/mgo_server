<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/7/5
 * Time: 15:49
 */
require_once "../base/BaseApi.php";
class index extends BaseApi
{

}

$a = new index();
$a->init();
echo json_encode($_REQUEST);