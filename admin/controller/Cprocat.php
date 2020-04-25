<?php
include_once 'model/Mprocat.php';
$procat=new procat();
switch ($action){
    case 'add':
        $cat_id=$procat->list_procat_catid();
        if($_POST){
            $data=$_POST['frm'];
            $procat->add_procat($data);
        }
        break;
    case 'list':
        $result=$procat->list_procat();
//        var_dump($result);die('ddd');
        break;
    case 'delete':
        $id=$_GET['id'];
        $procat->delete_procat($id);
        header('location:index.php?c=procat&a=list');
        break;
    case 'edit':
        $id=$_GET['id'];
        $res=$procat->edit_procat($id);
        $list_procat=$procat->list_procat_catid();
//        var_dump($res);die('ddd');
        if($_POST){
            $data=$_POST['frm'];
            $edit=$procat->edit_procat_done($data,$id);
        }
        break;
}

include_once "view/$controller/$action.php";


