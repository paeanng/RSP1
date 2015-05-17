<?php

class Form_Model extends TinyMVC_Model
{

    function get_status($empno){
        
        return $this->db->query_one('select status from form1 where empno=?',array($empno)); 
        
    }
    
    function save_form1($empno, $input1, $input2, $status){
        
        return $this->db->insert('form1',array('empno'=>$empno,'input1'=>$input1, 'input2'=>$input2,'status'=>$status));
        
    }
    
    
    function action_form1(){
        
        $this->db->select('empno', 'fname', 'lname'); // set selected columns
        $this->db->from('user');  // set from what table(s)
        $this->db->join('form1','user','form1.empno=user.empno'); // join tables on (optional) condition
        $this->db->query();
            while($row = $this->db->next()) {
            $rows[] = $row;
        }
        
        return $rows;
        
    }
    
    
}