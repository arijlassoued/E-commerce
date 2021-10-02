<?php
class users extends Controller {
    public function __construct() {
        
            $this->userModel = $this->model('User');
        
    }
    public function inscrie(){ 
        $data = [
            
            'last_name' => '',
            'first_name' => '',
            'pseudo' => '',
            'email' => '',
            'addresse' => '',
            'sexe' => '',
            'telephone' => '',
            'password' => '',
            'confirmPassword' => '',
            'first_nameError' => '',
            'last_nameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
                //recuperer les champs remplis par le client ainsi les erreurs qui peut le faire
                  $data = [
                    'last_name' => trim($_POST['nom']),
                    'first_name' => trim($_POST['prenom']),
                    'pseudo' => trim($_POST['pseudo']),
                    'email' => trim($_POST['email']),
                    'addresse' => trim($_POST['adr']),
                    'sexe' => trim($_POST['choix1']),
                    'telephone' =>trim($_POST['tel']),
                    'password' => trim($_POST['password']),
                    'confirmPassword' =>trim($_POST['password2']),
                    'first_nameError' => '',
                    'last_nameError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => ''
                ];
            
                $pseudoValidation = "/^[a-zA-Z0-9]*$/";
                $nameValidation = "/^[a-zA-Z]*$/";
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

                 //Validate first_name on letters
            if (empty($data['first_name'])) {
                $data['first_nameError'] = 'Please enter first_name.';
            } elseif (!preg_match($nameValidation, $data['first_name'])) {
                $data['first_nameError'] = 'Name can only contain letters .';
            }
              //Validate last_name on letters
              if (empty($data['last_name'])) {
                $data['last_nameError'] = 'Please enter last_name.';
            } elseif (!preg_match($nameValidation, $data['last_name'])) {
                $data['last_nameError'] = 'Name can only contain letters .';
            }
            

            //Validate email
            /* if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }*/
            // Validate password on length, numeric values,
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
              } elseif(strlen($data['password']) < 6){
                $data['passwordError'] = 'Password must be at least 8 characters';
              } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
              }
  
              //Validate confirm password
               if (empty($data['confirmPassword'])) {
                  $data['confirmPasswordError'] = 'Please enter password.';
              } else {
                  if ($data['password'] != $data['confirmPassword']) {
                  $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                  }
              }
               // Make sure that errors are empty
            if (empty($data['first_nameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);

                //Register user from model function
                if ($this->userModel->inscrit($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'');
                } else {
                    die('Something went wrong.');
                }
            }
            
        }
       $this->view('inscrie', $data);

    
    
  
    }
    public function login() {
        $data = [
            
            'email' => '',
            'mdp' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            

            $data = [
                'email' => trim($_POST['email']),
                'mdp' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
                
            ];
            //Validate username
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter a email.';
            }

            //Validate password
            if (empty($data['mdp'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
        
          
      
            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                

                $user = $this->userModel->Veriflogin($data['email'], $data['mdp']);
                
                
                if ($user) {
                    
                    
                    $_SESSION['user_id'] = $user->id;
                    
                    $_SESSION['pseudo'] = $user->pseudo;
                    $_SESSION['email'] = $user->email;
                    header('location:' . URLROOT . '/pages/index');
                } 
                else {
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';

                    $this->view('login', $data);
                }
            }

        } 
        else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('login', $data);
    }
    public function logOut() {
        
        
        session_destroy();
        $this->view('index');
        exit;

        

    }
    

    
    
}

