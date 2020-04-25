<?php
include_once 'admin/model/Mpro.php';
$pro=new pro();
switch ($action){
    case 'list':
        $result=$pro->list_pro();
        break;
    case 'detail':
        $id=$_GET['id'];
        $result=$pro->edit_pro($id);
        break;
}

include_once "view/$controller/$action.php";


