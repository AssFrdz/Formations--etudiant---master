<?php
if(session_status() === PHP_SESSION_NONE) session_start();
include 'models/model.php';
$action=$_REQUEST['action']??"";
include 'controllers/controller.php';
