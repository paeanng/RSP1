<?php

class Auth_Controller extends TinyMVC_Controller
{
    
  function login(){
      
    if(isset($_SESSION['user'])){ 
        
        
        
            echo 'Already logged in If this is not you please logout and try again, if this is an error please contact tech support';
            
        
        $this->view->display('user/index_view');
        
    }elseif( (isset($_POST['pwd']) && isset($_POST['empno']) ) && ("" != trim($_POST['empno']) && "" != trim($_POST['pwd'])) ){
        
            // Load the model
            $this->load->model('Auth_Model','auth');
        
        
            $empno = $_POST['empno'];  
            $pwd = $_POST['pwd'];  
        
        
            // Check the database for this user
            $result = $this->auth->login($empno, $pwd);  
    
            // If user not found show error
            if (!$result){
                $error = $this->view->assign('error','You have arrived at this page in error, have you forgotten your password? Have you registered for an account yet?!');
                
                $this->view->display('error_view', $error);

            }else
            {
                // Start and initialize the session
                session_start();
                $_SESSION['user'] = $result;
    
                
                if($_SESSION['user']['admin'] === "1"){
  
                    // Head to the admin display
                    $this->view->display('admin/index_view', $result);
                
                }else{

                    //head to the user display
                    $this->view->display('user/index_view', $result);
                }
            }
    
    }else{
        $this->view->display('auth/login_form_view'); 
    }
  }
    
  function logout(){
        
       session_start();
      
      if(!isset($_SESSION['user'])){ 
      
       $this->view->display('index_view');
          
      }else{
           session_destroy();  
           echo 'You have been logged  out.';
   
           $this->view->display('index_view');
      }
           
  } 
    
  function register_form(){
      
    $this->view->display('auth/register_form_view');
  
  }
    
  function register()
  {
      
   $empno = $_POST['empno'];
   $email = $_POST['email']; 
   $fname = $_POST['fname']; 
   $lname = $_POST['lname']; 
   $pwd   = $_POST['pwd'];
   
    $this->load->model('Auth_Model','auth');

    $result = $this->auth->register($empno, $email, $fname, $lname, $pwd);  
        
      echo $result;

    $this->view->display('auth/index');
    
  }    
}