<?php

session_start();

include 'config.php'; 

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: panier.php');
    exit;
}

$id = (int) $_GET['id'];

if (!isset($_SESSION['panier']) || !is_array($_SESSION['panier'])) {
    header('Location: panier.php');
    exit;
}

if (isset($_SESSION['panier'][$id])) {
    unset($_SESSION['panier'][$id]);
}

header('Location: panier.php');
exit;
?>