<?php
include_once "admin/model/Mindex.php";
include_once "admin/model/Mpro.php";
$pro=new pro();
$result=$pro->list_pro();

include_once "view/index/index.php";
