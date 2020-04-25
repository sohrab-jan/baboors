<?php
include_once 'model/Mbasket.php';
$basket=new basket();
switch ($action){
    case 'list':
    $resuult=$basket->basket_pay_list();

        break;

}

include_once "view/$controller/$action.php";


