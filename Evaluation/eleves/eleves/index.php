<?php
/**
 * Created by PhpStorm.
 * User: Pascal.BENZONANA
 * Date: 16.12.2019
 * Time: 14:23
 */

session_start();

require "controler/controler.php";

$action = $_GET['action'];

if (isset($_GET['action'])) {
    $action = $_GET['action'];


    switch ($action) {
        case 'listofbooks' :
            books();
            break;
        default :
            home();
            break;
    }
}
else{
    home();
}