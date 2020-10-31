<?php
/**
 * Projet : gaming Site
 * Nom : home.php
 * Auteur : Christnovie.KIALA-BI
 * Date : 08.10.2020
 */
$title = "Skarfox gaming - Home";

ob_start();
$rows = 0; // Column count
?>

<?php
$content = ob_get_clean();
require 'gaming/view/gabarit.php';
?>
