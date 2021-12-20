<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Espace administration du restaurant</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Panneau de configuration</a></li>
                    <li><a href="manage-category.php">Catégories</a></li>
                    <li><a href="manage-food.php">Repas</a></li>
                    <li><a href="manage-order.php"> Section des commandes</a></li>
                    <li><a href="manage-admin.php">Gérer les administrateurs</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->