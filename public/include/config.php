<?php
session_start();
ob_start();
$db= new PDO("mysql:host=localhost;dbname=pharmecy","root","");