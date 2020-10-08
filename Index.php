<?php
/**
 * Projet : Gaming Site
 * Nom : Index.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 08.10.2020
 */

require "controller/themeControler.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'gaming' :
            gaming($_GET['page']);
            break;
        case 'anime' :
            anime($_GET['page']);
            break;
        case "login":
            login($_POST);
            break;
        case 'register' :
            register($_POST);
            break;
        default :
            lost();
    }
} else {
    gaming($_POST);
}