<?php
include 'class/MyClassConfig.php';
include 'class/Display.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$display    =    new Display;
$action     =   $_REQUEST['do'];

switch ($action) {
    case 'login' : $display->login_user($_POST['username'],$_POST['password']);
    
}