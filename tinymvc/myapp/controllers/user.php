<?php

class User_Controller extends TinyMVC_Controller
{    
    
  function index(){ 
      
      session_start();
      
      if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "0"){
          
      
          $this->view->display('user/index_view');
      }else{
      
          echo 'Please login to access this area';
          $this->view->display('index_view');
      }
      
      
  }
    
function edit(){
    
    session_start();
    
    if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "0")
    {

        if(!isset($_POST['update'])){


            $data['email'] = $_SESSION['user']['email'];
            $data['fname'] = $_SESSION['user']['fname'];
            $data['lname'] = $_SESSION['user']['lname'];

            if(isset($_POST)){

            }

            $this->view->display('user/edit_view', $data);
        }else{

            $this->load->model('User_Model','user');

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];        

            $empno = $_SESSION['user']['empno'];

            $result = $this->user->update($fname, $lname, $email, $empno); 


                $data['fname'] = $_SESSION['user']['fname'] = $_POST['fname'];
                $data['lname'] = $_SESSION['user']['lname']= $_POST['lname'];
                $data['email'] = $_SESSION['user']['email']= $_POST['email'];

                echo 'Your details were updated succsessfully';
                $this->view->display('user/index_view', $data);


        }

    }else{

              echo 'Please login to access this area';
              $this->view->display('index_view');
          }
  } 
    
    
           
    
          
}


      
                
