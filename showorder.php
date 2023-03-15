<?php

$orderid = $_POST['ordernummer'];

$iconByStatusList=array("preparing"=>"fa-solid fa-kitchen-set", "delivering"=>"fa-solid fa-person-biking", "delivered"=>"fa-solid fa-pizza-slice");
$iconByStatus=(object)$iconByStatusList;

$labelByStatusList=array("preparing"=>"Bereiden", "delivering"=>"Onderweg", "delivered"=>"Bezorgd");
$labelByStatus=(object)$labelByStatusList;

include 'mysql_select.php';
include 'showorder_view.php';