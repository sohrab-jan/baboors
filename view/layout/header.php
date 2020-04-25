<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>قالب رایگان سایت پزشکی و سلامت Pharma :: دریافت شده از وب روبیک</title>

    <!-- CSS Styles -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="public/default/fonts/icomoon/style.css">

    <link rel="stylesheet" href="public/default/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/default/css/magnific-popup.css">
    <link rel="stylesheet" href="public/default/css/jquery-ui.css">
    <link rel="stylesheet" href="public/default/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/default/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="public/default/css/aos.css">
    <link rel="stylesheet" href="public/defaultcss/style.css">
    <link rel="stylesheet" href="public/default/css/style.css">
    <script src="public/default/js/jquery-3.3.1.min.js"></script>
</head>
<body class="rtl">
<div class="site-wrap">
    <div class="site-navbar py-2">
        <!-- Start Search Box -->
        <div class="search-wrap">
            <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="جستجو کنید...">
                </form>
            </div>
        </div>
        <!-- End Search Box -->

        <!-- Start Navbar Section -->
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                        <a href="index.php?c=index&a=index" class="js-logo-clone">قالب Pharma</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <li class="active"><a href="index.php?c=index&a=index">صفحه نخست</a></li>
                            <li><a href="index.php?c=pro&a=list">محصولات</a></li>
                            <li class="has-children">
                                <a href="#">منوی کشویی</a>
                                <ul class="dropdown">
                                    <li><a href="#">دارو ها</a></li>
                                    <li class="has-children">
                                        <a href="#">ویتامین ها</a>
                                        <ul class="dropdown">
                                            <li><a href="#">ویتامین C</a></li>
                                            <li><a href="#">ویتامین D</a></li>
                                            <li><a href="#">ویتامین A</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">لوازم بهداشتی</a></li>
                                    <li><a href="#">لوازم آرایشی</a></li>

                                </ul>
                            </li>
                            <li><a href="index.php?c=about&a=list">درباره ما</a></li>
                            <li><a href="index.php?c=contact&a=add">تماس با ما</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="index.php?c=basket&a=detail" class="icons-btn d-inline-block bag">
                        <span class="icon-shopping-bag"></span>

                        <?php
                            if (isset($_SESSION['user_id'])){
                                echo "<span class=\"number\">";
                                include_once 'admin/model/Mbasket.php';
                                $basket=new basket();
                                $ress=count($basket->basket_list_count($_SESSION['user_id']));
                                echo $ress;
                                echo " </span>";
                            }
                            ?>
                    </a>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
                <div class="log">
                    <?php
                    if(!isset($_SESSION['user_id'])){
                        echo "کاربر محترم ، خوش آمدید.";
                        echo "<a href='index.php?c=user&a=login'>ورود </a>";
                        echo "<a href='index.php?c=user&a=register'>ثبت نام  </a>";

                    }else{
                        echo $_SESSION['user_name'].  "  عزیز ، خوش آمدید.";
                        echo "<a href='index.php?c=user&a=logout'>خروج </a>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- End Navbar Section -->
    </div>