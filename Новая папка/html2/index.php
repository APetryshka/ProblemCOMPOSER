<?php
include '../../vendor/autoload.php';

use App\Controller\Auth\Login;
use App\Controller\User;


$userController = new User();
$userController -> indexAction();

$login = new Login();
$login -> indexAction();