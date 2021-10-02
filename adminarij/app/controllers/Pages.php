<?php
class Pages extends Controller {
    public function __construct() {
        
            $this->userModel = $this->model('get');
        
    }

    public function index() {
        $data=$this->userModel->getuser();
       
        $this->view('index',$data );
    }
    
    public function categories() {
        $data=$this->userModel->getcat();
        
       
        $this->view('categories',$data);
    }
   
    public function deletecat(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'cat_name' => trim($_POST['cat_name']),
                
            ];
            
            $reslt=$this->userModel->deletecat($data['cat_name']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/categories');
                
            }
        }
    
    
    
    
    }
    public function deleteprod(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'Prod_name' => trim($_POST['Prod_name']),
                
            ];
            
            $reslt=$this->userModel->deleteprod($data['Prod_name']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/products');
                
            }
        }
    
    
    
    
    }

    public function deleteuser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'id_user' => trim($_POST['user_id']),
                
            ];
            
            $reslt=$this->userModel->deleteuser($data['id_user']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/customers');
                
            }
        }
    
    
    
    
    }
    public function deletadmin(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'admin_id' => trim($_POST['admin_id']),
                
            ];
            
            $reslt=$this->userModel->deletadmin($data['admin_id']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/index');
                
            }
        }
    
    
    
    
    }
    
    public function addcat() {
      
        $data = [
            
            'cat_name' => '',
            
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
          
           
    
                  $data = [
                    
                     
                    'cat_name' => trim($_POST['cat_name']),
                    
                ];
                
                if ($this->userModel->addcat($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/pages/categories');
                } else {
                    die('Something went wrong.');
                }
                
              
          
            
        }
        
    }
    public function addProd() {
      
        $data = [
            
            'code'=> '',
            'designation'=> '',
            'qte'=> '',
            'prix'=> '',
            'photo'=> '',
            'promo'=> '',
            'categorie'=> '',
            'description'=> '',
            
            
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $image='http://localhost/adminarij/public/img/'.$_FILES['item_image']['name'];
                  $data = [
                
                    'code' => trim($_POST['code']),
                    'designation' => trim($_POST['designation']),
                    'qte' => trim($_POST['qte']),
                    'prix' => trim($_POST['prix']),
                    'photo' =>  $image ,
                    'promo' => trim($_POST['promo']),
                    'categorie' => trim($_POST['categorie']),
                    'description' => trim($_POST['description']),
                    

                    
                    
                    
                ];
                
                if ($this->userModel->addprod($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/pages/products');
                } else {
                    die('Something went wrong.');
                }
                
              

        }


    }
    
    public function customers() {
        $data=$this->userModel->getusers();
        
        
       
        $this->view('customers',$data);
    }
    public function products() {
        $data=$this->userModel->getall();
        
        
       
        $this->view('products',$data);
    }


    
}
