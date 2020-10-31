<?php
/**
 * Projet : GamingSite
 * Nom : cinemaIndex.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 31.10.2020
 */

require "cinema/controller/navigationController.php";


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