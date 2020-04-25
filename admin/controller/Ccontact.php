<?php
include_once 'model/Mcontact.php';
$contact=new contact();
switch ($action){
    case 'add':
        if ($_POST){
            $data=$_POST['frm'];
            $result=$contact->add_contact($data);
//            var_dump($data);die('dddddddd');
        }
        break;
    case 'list':
        $ress=$contact->list_contact();
//        var_dump($ress);die('ddddddd');
        break;
}

include_once "view/$controller/$action.php";


