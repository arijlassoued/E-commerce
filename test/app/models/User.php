<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database; //instance de base de donnée 
        }
     
    //insertion les données de client a l'aide de methode query 
    //chaque fct passe par 3 etapes : prepation requete-bind(param)-execution(ligne-plusieurs) 
         public function inscrit($data){ 
            $this->db->query('INSERT INTO clients (nom,prenom,pseudo,email,adresse,tel,mdp,genre) VALUES(:nom,:prenom,:pseudo,:email,:adresse,:tel,:mdp,:genre) ');
            $this->db->bind(':nom',$data['last_name']);
            $this->db->bind(':prenom',$data['first_name']);
            $this->db->bind(':pseudo',$data['pseudo']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':adresse',$data['addresse']);
            $this->db->bind(':tel',$data['telephone']);
            $this->db->bind(':mdp',$data['password']);
            $this->db->bind(':genre',$data['sexe']);
            
            if($this->db->execute() ){

                return true ;
            }
            else {
                return false ; 
            }

        }
       
        public function Veriflogin($email,$mdp){
            $this->db->query('SELECT * FROM clients WHERE email=:email '); //tout les données de client a travers email 
            $this->db->bind(':email',$email) ; //email ecrit par client  

            $utilisateur = $this->db->single() ; 
            //il faut ajouter condition d'existance de mdp 
            if(isset($utilisateur->mdp)){
                $pass= $utilisateur->mdp ; 
        
            }
            else{
                $pass = 0 ; 
            }
            if(password_verify($mdp,$pass)){
                return $utilisateur ;
            }
            else{
                return false ; 
            }
        }
        public function getuser($id){
            $this->db->query('SELECT * FROM clients WHERE id=:id_user ');
           
    
            //Bind values
            $this->db->bind(':id_user', $id);
           
             //Execute function
             
                return ($this->db->single());
           
            
        }
                





    }
?>