<?php
    class Mcart {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function addCart($data){
            $this->db->query('INSERT INTO cart (product_id,qte) 
            VALUES(:product_id,:qte)');
    
            //Bind values
            $this->db->bind(':product_id', $data['product_id']);
            
            $this->db->bind(':qte', $data['qte']);
             //Execute function
             if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }



        public function getFromcart(){
            
            $this->db->query('SELECT * FROM cart' );
        
            $pc = $this->db->resultSet();
            return($pc);


        }


        public function deletecart($item_id){
            $this->db->query('DELETE FROM cart where product_id = :product_id ');
            //Bind value
            $this->db->bind(':product_id', $item_id);
            
            
            
            return($this->db->execute());


        }


        public function getqte($product_id){
            $this->db->query('SELECT  SUM(qte) AS qte_total
            FROM cart
            where product_id=:product_id ');
            $this->db->bind(':product_id', $product_id);
            $row = $this->db->single();
            $reslt=$row->qte_total;
            return($reslt);
            
        }
        
    }