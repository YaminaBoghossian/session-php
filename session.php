<?php
session_start();
$nom = $_POST['nom'];
$_SESSION['nom'] = 'nom';
?>