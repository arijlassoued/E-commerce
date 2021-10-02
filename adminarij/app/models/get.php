<?php
    class get{
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getuser(){
            $this->db->query('SELECT * FROM admins ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
        public function getall(){
            $this->db->query('SELECT * FROM produits ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
        public function getcat(){
            $this->db->query('SELECT nom FROM categorie ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);
           


        }
        public function addprod($data) {
            var_dump($data);
           
            $this->db->query('INSERT INTO produits (code,designation,qte,prix,photo,description,categorie,promo) 
            VALUES(:code,:designation,:qte,:prix,:photo,:description,:categorie,:promo)');
    
            //Bind values
            $this->db->bind(':code', $data['code']);
            $this->db->bind(':designation', $data['designation']);
            $this->db->bind(':qte', $data['qte']);
            $this->db->bind(':prix', $data['prix']);
            $this->db->bind(':photo', $data['photo']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':categorie', $data['categorie']);
            $this->db->bind(':promo', $data['promo']);
         
          //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function addcat($data) {
           
           
            $this->db->query('INSERT INTO categorie (nom) 
            VALUES(:cat_name)');
    
            //Bind values
            $this->db->bind(':cat_name', $data['cat_name']);
           
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        
        
        public function deleteprod($code){
            $this->db->query('DELETE FROM produits where code = :code ');
            //Bind value
            $this->db->bind(':code', $code);
            
            
            
            return($this->db->execute());


        }
        public function deletecat($cat_name){
            $this->db->query('DELETE FROM categorie where nom = :nom ');
            //Bind value
            $this->db->bind(':nom', $cat_name);
            
            
            
            return($this->db->execute());


            
        }
    
        public function deleteuser($user_id){
            $this->db->query('DELETE FROM clients where id = :user_id ');
            //Bind value
            $this->db->bind(':user_id', $user_id);
            
            
            
            return($this->db->execute());


        }
        public function deletadmin($admin_id){
            $this->db->query('DELETE FROM admins where id_admin = :admin_id ');
            //Bind value
            $this->db->bind(':admin_id', $admin_id);
            
            
            
            return($this->db->execute());


        }
        
        public function getusers(){
            $this->db->query('SELECT * FROM clients ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
  
        
    }
