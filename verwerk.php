<?php

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $product1 = $_POST['product1'];
    $price1 = $_POST['price1'];
    $product2 = $_POST['product2'];
    $price2 = $_POST['price2'];
    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    $orderid = generateRandomString();

    include 'mysql_insert.php';
    include 'mysql_select.php';
    include 'verwerk_view.php';