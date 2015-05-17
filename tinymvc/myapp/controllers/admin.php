<?php

/**
 * admin.php
 *
 */

class Admin_Controller extends TinyMVC_Controller
{
  function index()
  {
      session_start();
      
      if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "1"){
          
      
          $this->view->display('admin/index_view');
      }else{
      
          echo 'Please login to access this area';
         
          $this->view->display('index_view');
      }
      
  }
    
  function action()
  {
 
      session_start();
     
        // Only let in logged in admins
        if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "1"){    
        
         $this->load->model('Form_Model','form'); 
            
            $result = $this->form->action_form1();
            $this->view->assign('result', $result);
          echo 'ACTIONABLE ITEMS';    
          $this->view->display('admin/action_view');
            
      }else{
      
          echo 'Please login to access this area';
          $this->view->display('index_view');
      }
  }    
  
// Show the applicants with current forms    
    
  function show()
  {
 
      session_start();
      
        if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "1"){
      
          echo 'ADMIN#SHOW'; 
            
         
          $this->load->model('Admin_Model','admin');    
           
            // Get all current users from DB
            $result = $this->admin->show();   
            
            
            $this->view->assign('result', $result);


          $this->view->display('admin/show_view');
            
      }else{
      
          echo 'Please login to access this area';
          $this->view->display('index_view');
      }
  }
        
    
  function current()
  {
 
      session_start();
      
        if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "1"){
      
          echo 'ADMIN#SHOW'; 
            
         
          $this->load->model('Admin_Model','admin');    
           
            // Get all current users from DB
            $result = $this->admin->show();   
            
            
            $this->view->assign('result', $result);


          $this->view->display('admin/show_view');
            
      }else{
      
          echo 'Please login to access this area';
          $this->view->display('index_view');
      }
  }
    
      function past()
  {
 
      session_start();
      
        if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "1"){
      
          echo 'ADMIN#SHOW'; 
            
         
          $this->load->model('Admin_Model','admin');    
           
            // Get all current users from DB
            $result = $this->admin->show();   
            
            
            $this->view->assign('result', $result);


          $this->view->display('admin/show_view');
            
      }else{
      
          echo 'Please login to access this area';
          $this->view->display('index_view');
      }
  }

    
    
  function contact()
  {
 
      session_start();
      
        if(isset($_SESSION['user']) && $_SESSION['user']['admin'] === "1"){
      
          echo 'ADMIN#CONTACT';    
          $this->view->display('admin/index_view');
            
      }else{
      
          echo 'Please login to access this area';
          $this->view->display('index_view');
      }
  }
}