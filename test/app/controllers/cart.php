<?php
class cart extends Controller {
    public function __construct() {
        
            $this->cartModel = $this->model('Mcart');
            $this->productModel = $this->model('modelProduit');
        
    }


 
    public function deleteCart(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'product_id' => trim($_POST['product_id']),
                
            ];
            
            $reslt=$this->cartModel->deleteCart($data['product_id']);
            
            if($reslt){
                header('Location: '.URLROOT.'/cart/viewCart');
                
            }
        }
    
    
    
    
    }
        
    
    
    
    
   
    public function addCart(){
        if($_SERVER['REQUEST_METHOD'] == 'POST')
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         

           $data = [
               
               'product_id' => trim($_POST['item_id']),
               'qte' => trim($_POST['qte'])
           ];
           if (isset($_SESSION['pseudo'])){
           $this->cartModel->addCart($data) ;
            //Redirect to the login page
            header('location:'.URLROOT.'/pages/produit_details'); } 
         else {
            die('Il faut se connecter');

        }
    
    }
    public function viewCart(){

        $data=$this->cartModel->getFromcart(); //donne fl carte

        $aa= $this->productModel->getAllProduct(); //donne fl produit 

        $this->view('cart',$data,$aa);

    }
           
           
    
           
    
    
        
       
    

}