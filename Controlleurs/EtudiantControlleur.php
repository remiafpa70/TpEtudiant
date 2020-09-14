<?php

    require_once "./Models/Etudiant.php";
    
    

Class EtudiantControlleur
{
    public function ajouter_un_etudiant()
    {
         require_once "./Vues/formulaire_inssertion_etudiant.php";

         $nouvel_instance_etudiant = new Etudiant();    

        if (isset($_POST['submit'])) 
        {
            echo ('avant $nom');var_dump($_POST);var_dump($nouvel_instance_etudiant);

            $nom = $nouvel_instance_etudiant->setNom($_POST['nom']);
            echo ('$_POST');
            var_dump($_POST['nom']);
            echo ('$nouvel_instance_etudiant');
            var_dump($nouvel_instance_etudiant);
            echo ('$nom');
            var_dump($nom);

            $prenom = $nouvel_instance_etudiant->setPrenom($_POST['prenom']);
            echo ('$prenom');var_dump($_POST['prenom']);var_dump($nouvel_instance_etudiant);var_dump($prenom);


            $nouvel_instance_etudiant->creation_etudiant($nom,$prenom);
        }
    }
}

?>