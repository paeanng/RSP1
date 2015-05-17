<?php

class User_Model extends TinyMVC_Model
{

    function update($fname, $lname, $email, $empno){
        
        
        $this->db->where('empno=?', $empno); 

       return  $this->db->update('user',array('fname'=>$fname, 'lname'=>$lname, 'email'=>$email));
        
    }
    
    function update_email($new_email, $empno)
    {
        $this->db->query_one('UPDATE user SET email=? where empno=?',array($new_email, $empno));

    }
    
}