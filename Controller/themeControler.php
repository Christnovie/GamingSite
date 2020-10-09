<?php
/**
 * Projet : gaming Site
 * Nom : themeController.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 08.10.2020
 */

/**
 *function for rediriged in the gaming theme
 */
function gaming($page){
    $_GET["page"] = $page;
    require_once("gaming/gamingIndex.php");
}
/**
 *function for rediriged in the anime theme
 */
function anime($page){
    $_GET["page"] = $page;
    require_once("anime/animeIndex.php");
}
