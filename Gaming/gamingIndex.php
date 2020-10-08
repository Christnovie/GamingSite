<?php
/**
 * Projet : Gaming Site
 * Nom : gamingIndex.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 08.10.2020
 */

require "controller/navigationController.php";


if (isset($_GET['action'])) {
    $action = $_GET['page'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'anime' :
            anime($_GET['page']);
            break;

        default :
            lost();
    }
} else {
    home();
}