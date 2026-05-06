<?php
session_start();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $id_produit = (int)$GET['id'];

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    if (isset($_SESSION['panier'][$id_produit])) {
        $_SESSION['panier'][$id_produit]++;
    } else {
        $_SESSION['panier'][$id_produit] = 1;
    }
}

header("Location: panier.php");
exit();
?>