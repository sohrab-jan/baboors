<?php
include_once "admin/model/Muser.php";
$user=new user();
switch ($action) {
    case "login":
        if ($_POST) {
            $data = $_POST['frm'];
//            var_dump($data['username']);die('d');
            $res = $user->login_user($data);
            $password = sha1($data['password']);
            if ($password == $res['password']) {
//                echo 'کاربر یافت شد.';
                $_SESSION['user_id'] = $res['id'];
                $_SESSION['user_name'] = $res['name'];
//                echo $_SESSION['user_id'].' --'.$_SESSION['user_name'] ;
                header("location:index.php?c=index&a=index");
            } else {
                header("location:index.php?c=user&a=login&login=error");
            }
        }
        break;
    case 'logout':
        session_destroy();
        header("location:index.php?c=user&a=login&logout=ok");
        break;
    case 'register':
        if ($_POST) {
            $data=$_POST['frm'];
            $data['password']=sha1($data['password']);
//            var_dump($data);
//            die('dd');
            $res=$user->add_user($data);
                header("location:index.php?c=index&a=index");
        }
        break;


}
require_once "view/$controller/$action.php";
