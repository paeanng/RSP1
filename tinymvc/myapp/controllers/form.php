<?php


class Form_Controller extends TinyMVC_Controller
{
  function index()
  {
      $this->view->display('form/index_view');
  }
    
 function form_check(){
     
     session_start();
     
     if(isset($_SESSION['user'])){
         
            // Load the model
            $this->load->model('Form_Model','form');

            $empno = $_SESSION['user']['empno'];      

            // Check the database for this user
            $result = $this->form->get_status($empno);      


            var_dump($result);     
     
                $status = $result['status'];
                switch ($status) {

                    case "1":
                                   echo 'form 1 has been submitted pending review from your co\'ordinator';
                            
                                   $this->view->display('user/form_view');
                        break;
                    case "2":
                                    echo 'The initial form has been processed please please commence part 2';
                        break;
                    case "3":
                                    echo '3';
                        break;
                    case "4":
                                    echo '4';
                        break;
                    default:
                         // Initiate form
                         $this->view->display('form/form_view');
                        break;
                }
         
        }else{ 
            
            // If no user session
            echo 'Please login to access this area';
            $this->view->display('index_view');
            
         }
 } 
    
    
    
  function form1()
  {
    session_start();
      
    if(isset($_SESSION['user'])){
       
        // Load email script    
        $this->load->script('email');
        // Load the model
        $this->load->model('Form_Model','form'); 
        
        $empno = $_SESSION['user']['empno'];
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $status = 1;
        
        // Check the database for this user
        $result = $this->form->save_form1($empno, $input1, $input2, $status); 
        
        var_dump($result);
        
        echo 'your form application has been submitted and an email has been sent to the unit coordinator for response';

        send_mail();
        
        $this->view->display('form/index_view');
    }else{
        echo 'You must login to be here';
        $this->view->display('index_view');
    }
  }
    
  function form2()
  {
    session_start();
      
    if(isset($_SESSION['user'])){
        
        echo 'your form application has been submitted and an email has been sent to the unit coordinator for response';

        $this->view->display('form/index_view');
    }else{
        echo 'You must login to be here';
        $this->view->display('index_view');
    }
  }    


}