<?php

class Auth_Model extends TinyMVC_Model
{

    function register($empno, $email, $fname, $lname, $pwd)
    {

        $this->db->insert('user',array('empno'=>$empno,'email'=>$email, 'fname'=>$fname,'lname'=>$lname,'pwd'=>$pwd));

        return " The user {$fname} {$lname} was created successfully";

    }

    function login($empno, $pwd)
    {
    
        return $this->db->query_one('select * from user where empno=? and pwd=?',array($empno, $pwd)); 
        
    }

}
