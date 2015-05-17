<?php

class Admin_Model extends TinyMVC_Model
{

    function show(){
        
        $this->db->select('*'); // set selected columns
        $this->db->from('user');  // set from what table(s)

        $this->db->query();
            while($row = $this->db->next()) {
            $rows[] = $row;
        }
        
        return $rows;
        
    }
    

    
}