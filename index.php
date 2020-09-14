<?php

    require_once "./Vues/header.html";
    require_once "./Controlleurs/etudiantControlleur.php";

    $etudiant = new EtudiantControlleur;

    $etudiant->ajouter_un_etudiant();




?>