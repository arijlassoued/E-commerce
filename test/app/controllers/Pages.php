<?php
class Pages extends Controller {
    public function __construct() {
        
            $this->userModel = $this->model('modelProduit');
        
    }
    public function index(){ 
        $data =$data =$this->userModel->getAllProduct();
        $aa =$this->userModel->getProductByPrix();
        $dump =$this->userModel->getProductByCategorie();
        $this->view('index',$data,$aa,$dump) ;
    }
    public function categ1(){
        $data =$this->userModel->getProductByCategorie();
        
        $this->view('categ1',$data) ;
    }
    public function categ2(){
        $data =$this->userModel->getProductByCategoriee();
        $this->view('categ2',$data) ;
    }
    public function categ3(){
        $data =$this->userModel->getProductByCategorieee();
        $this->view('categ3',$data) ;
    }

    
}

