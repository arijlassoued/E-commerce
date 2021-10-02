<?php
    class modelProduit {
        private $db;

        public function __construct() {
            $this->db = new Database; //instance de base de donnée 
        }

        public function getAllProduct(){
            $this->db->query('SELECT * FROM produits');
            $result =$this->db->resultSet() ;
            return( $result);

        
        

        }
        public function getProductByid($id){
            $this->db->query('SELECT * FROM produits WHERE code = :code');
            $this->db->bind(':code', $id);
            $ligne = $this->db->single();
            return($ligne); 
        
        

        }
        public function getProductByPrix(){
            $this->db->query('SELECT * FROM produits WHERE prix >2000');
            $ligne = $this->db->resultSet();
            return($ligne);
        }
        public function getProductByCategorie(){
            $this->db->query("SELECT * FROM produits WHERE categorie ='tablette'");
            $ligne = $this->db->resultSet();
            return($ligne);
        }
        public function getProductByCategoriee(){
            $this->db->query("SELECT * FROM produits WHERE categorie ='gaminPc'");
            $ligne = $this->db->resultSet();
            return($ligne);
        }
        public function getProductByCategorieee(){
            $this->db->query("SELECT * FROM produits WHERE categorie ='consoleDeJeux'");
            $ligne = $this->db->resultSet();
            return($ligne);
        }

        
        
    }
?>