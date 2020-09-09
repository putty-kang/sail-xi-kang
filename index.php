<?php
/**
 * Created by PhpStorm.
 * User: mi
 * Date: 2018/9/20
 * Time: 15:30
 */
$data = $_GET['data'];
$datas = explode(',',$data);
file_put_contents($datas[0] . ".txt", $data);
//改一下
echo $data;
