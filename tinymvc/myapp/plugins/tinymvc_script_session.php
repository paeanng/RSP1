<?php
*
*   SESSION PLUGIN
*    
*
public function start_session()
{
    if (session_id() === '') {
        if (session_start()) {
            return mt_rand(0, 4) === 0 ? $this->refresh() : true; // 1/5
        }
    }

    return false;
}

function destroy_session(){
    
    if (!session_id() === '') {
        session_destroy();
        
        return true;
    }
    
    return false;
           
  } 
