<?php
    class Mprofile {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function update($data,$id) {
            $this->db->query('UPDATE clients SET nom=:nom,prenom=:prenom,pseudo=:pseudo,email=:email,adresse=:adresse WHERE id=:id');
    
            //Bind values
            $this->db->bind(':id', $id);
            $this->db->bind(':nom', $data['nom']);
            $this->db->bind(':prenom', $data['prenom']);
            
            $this->db->bind(':pseudo', $data['pseudo']);
            $this->db->bind(':email', $data['email']);

            $this->db->bind(':adresse', $data['adresse']);
           

            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function findUserByEmail($email) {
            //Prepared statement
            $this->db->query('SELECT * FROM clients WHERE email = :email');
    
            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);
            $this->db->execute();
          
            //Check if email is already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
        public function verifypass($data,$id) {
            $this->db->query('SELECT * FROM clients WHERE id = :id');
    
            //Bind value
            $this->db->bind(':id', $id);
            
    
            $row = $this->db->single();
            if(password_verify($data['pass'],$row->mdp)){
            return false ;}
            else{
                return true ;
            }
        }
        

        public function updatepass($data,$id) {
            $this->db->query('SELECT * FROM clients WHERE id = :id');
    
            //Bind value
            $this->db->bind(':id', $id);
            
    
            $row = $this->db->single();
            var_dump($row);
            if(password_verify($data['pass'],$row->mdp)){
                // Hash password
            $data['newpass'] = password_hash($data['newpass'],PASSWORD_BCRYPT);
                
            $this->db->query('UPDATE users SET mdp=:mdp where id=:id');
            $this->db->bind(':id', $id);
            $this->db->bind(':mdp', $data['newpass']);
            
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

            }
    
        }


        public function updateimg($image,$id) {
           
                
            $this->db->query('UPDATE clients SET photo=:img where id=:id');
            $this->db->bind(':id', $id);
            $this->db->bind(':img', $image);
            
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

            }
       
    }