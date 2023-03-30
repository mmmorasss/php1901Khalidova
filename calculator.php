<?php
$value = $_GET['value'];
$operator = $_GET['operator'];

if($operator == "k"){
    echo $value*1024;
}else{
    echo $value/1024;
}