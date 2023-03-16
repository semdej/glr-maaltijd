<?php

$orderid = $_POST['ordernummer'];

$iconByStatusList=array("preparing"=>"fa-solid fa-kitchen-set", "delivering"=>"fa-solid fa-person-biking", "delivered"=>"fa-solid fa-pizza-slice");
$iconByStatus=(object)$iconByStatusList;

$labelByStatusList=array("preparing"=>"Uw bestelling wordt op dit moment bereid", "delivering"=>"Uw bestelling is onderweg", "delivered"=>"Uw bestelling is bezorgd, eet smakelijk!");
$labelByStatus=(object)$labelByStatusList;

include 'mysql_select.php';
include 'showorder_view.php';