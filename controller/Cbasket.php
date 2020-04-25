<?php
include_once 'admin/model/Mbasket.php';
$basket=new basket();
switch ($action){
    case 'detail':
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $result = $basket->list_basket($user_id);

        }
        else{
            header("location:index.php?c=user&a=login");
        }
        break;
    case 'delete':
        $id=$_GET['id'];
        $result=$basket->delete_basket($id);
        header("location:index.php?c=basket&a=detail");
        break;
    case 'add':
        if (isset($_SESSION['user_id'])) {
            $pro_id = $_GET['pro_id'];
            $user_id = $_SESSION['user_id'];
            $basket->add_basket($pro_id, $user_id);
            header('location:index.php?c=basket&a=detail');
        }
        else {
            header("location:index.php?c=user&a=login");
        }
        break;
    case 'ajax':
        $pro_id=$_GET['pro_id'];
        $quantity=$_GET['quantity'];
        $basket->basket_ajax($pro_id,$quantity);
        break;
    case 'check':
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $result = $basket->list_basket($user_id);
        }
        break;
    case 'pay':
    case 'check':
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $result = $basket->basket_pay($user_id);
            header('location:index.php?c=index&a=index');
        }
        break;
}

include_once "view/$controller/$action.php";
