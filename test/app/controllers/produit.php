<?php
class produit extends Controller {
    public function __construct() {
        
            $this->userModel = $this->model('modelProduit');
        
    }
    
        
    //affiche tous les produits     
    public function afficheProd(){
            
        $data =$this->userModel->getAllProduct();
           
        $this->view('produit',$data) ;

    }
    //affiche les proprietés de mon produit 
    public function propriete(){
        $code= $_GET["code"] ;
        $data =$this->userModel->getProductByid($code) ;
        $this-> view('produit_detail',$data);
    }
     
         
        
      

}


?>