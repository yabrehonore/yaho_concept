<?php
// logout.php

// Démarrer la session
session_start();

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion
header('Location: login.php');
exit;
?>