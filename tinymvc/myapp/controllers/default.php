<?php

/**
 * default.php
 *
 * default application controller
 *
 * @package		TinyMVC
 * @author		Monte Ohrt
 */

class Default_Controller extends TinyMVC_Controller
{
  function index()
  {

    $this->view->display('index_view');
  }
    
  function about()
  {
 
    $this->view->display('about_view');
  }

  function contact()
  {
 
    $this->view->display('contact_view');
  }
}

