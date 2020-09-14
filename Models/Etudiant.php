<?php
    class Etudiant
    {
        private $id_etudiant;
        private $nom;
        private $prenom;
        

        function getIdEtudiant() { 
            return $this->idetudiant; 
        } 

        function getNom() { 
            return $this->nom; 
        } 

        function setNom($nom) {  
            return $this->nom = $nom; 
        } 

        function getPrenom() { 
            return $this->prenom; 
        } 

        function setPrenom($prenom) {  
            return $this->prenom = $prenom; 
        }

        public function Connexion_bdd()
        {
            // var_dump(test);die;
            try{
                $bdd =new PDO('mysql:host=localhost;dbname=ecole', "root", "admin");
                // var_dump($bdd);die;
            }
            catch(PDOException $e){
                print "Erreur";
                die;
            }
            return $bdd;
        }

        public function creation_etudiant($nom,$prenom)
        {
            $connexion_creation=$this->Connexion_bdd();            
            
            $sql_create_etudiant=$connexion_creation->prepare("INSERT INTO etudiant (nom, prenom)
             VALUES ('$nom', '$prenom')");

            if(!$sql_create_etudiant->execute()){
                die("ATTENTION!!!!");
            }
            var_dump($nom);die;
            header("Location: index.php");
        }
    }

?>