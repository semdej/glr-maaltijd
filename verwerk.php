<?php
    session_start();

     $adress = $_SESSION['adress'];
     $name = $_POST['name'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $product1 = $_POST['pizzas'];
     $product2 = $_POST['drinks'];

     if ($product1 === 'margarita') {
         $price1 = '7.80';
     } elseif ($product1 === 'marinara') {
         $price1 = '8';
     } elseif ($product1 === 'capricciosa') {
         $price1 = '8.30';
     } elseif ($product1 === 'quattroformaggi') {
         $price1 = '8';
     }

     if ($product2 === 'cocacola') {
         $price2 = '2.30';
     } elseif ($product2 === 'cocacolazero') {
         $price2 = '2.25';
     } elseif ($product2 === 'sprite') {
         $price2 = '2.15';
     } elseif ($product2 === 'redbull') {
         $price2 = '3';
     }

     $totaal = $price1 + $price2;

    $iconByStatusList=array("preparing"=>"fa-solid fa-kitchen-set", "delivering"=>"fa-solid fa-person-biking", "delivered"=>"fa-solid fa-pizza-slice");
    $iconByStatus=(object)$iconByStatusList;

    $labelByStatusList=array("preparing"=>"Uw bestelling wordt op dit moment bereid", "delivering"=>"Uw bestelling is onderweg", "delivered"=>"Uw bestelling is bezorgd, eet smakelijk!");
    $labelByStatus=(object)$labelByStatusList;


     function generateRandomString($length = 10)
     {
         return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
     }

     $orderid = generateRandomString();


    include 'mysql_insert.php';
    include 'mysql_select.php';
    include 'verwerk_view.php';
