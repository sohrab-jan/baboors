<?php
include_once 'model/Mpro.php';
$pro=new pro();
switch ($action){
    case 'add':
        if($_POST){
            $data=$_POST['frm'];
//            var_dump($procat_main);die('ll');
            $exts=array('image/jpeg','image/png');
            $to=$pro->uploaderImage('img',"public/uploader",$exts);
            $pro->add_pro($data,$to);
        }
        break;
    case 'list':
        $result=$pro->list_pro();
        break;
    case 'delete':
        $id=$_GET['id'];
        $pro->delete_pro($id);
        header('location:index.php?c=pro&a=list');
        break;
    case 'edit':
        $id=$_GET['id'];
        $res=$pro->edit_pro($id);
        $procat_main=$pro->list_main_procat();
//        var_dump($res);die('ddd');
        if($_POST){
            $data=$_POST['frm'];
            $file=$_FILES['img'];
            $edit=$pro->edit_pro_done($data,$id);
//            $exts=array('image/jpeg','image/png');
//            $to=$pro->uploaderImage($file,"public/uploader",$exts);
        }
        break;
}

include_once "view/$controller/$action.php";


