<?php
/**
 * Created by PhpStorm.
 * User: mi
 * Date: 2018/9/20
 * Time: 15:30
 */
include_once "deviceInterface.php";
$interfaceModel = new deviceInterface();
$data = $_GET['data'];
$datas = explode(',',$data);
file_put_contents($datas[0] . ".txt", $data);
if (count($datas) == 17) {
    $result = $interfaceModel->MPM6881($datas);
} else {
    $result = "data structure error";
}
echo $result;