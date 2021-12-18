<?php

class Organizations_model extends  My_model
{
  public $table="organizations";
 
  public $colid = "o_id";
 
  public  function __construct()
  {
      parent::__construct();
     
  }
  
     function create($table,$formArray)
     {
        
 
         return parent::create($this->table,$formArray);
     }

     function createPosition($table,$Id,$formArray)
     {
        $table="positions";

         return parent::createPosition($this->table,$this->Id,$formArray);
     }
     function all(){
           return $organizations  = $this->db->get($this->table)->result_array();

    }
    function get($colid,$Id)  
    {
          return parent::get($this->colid,$Id); 
    
        }

    function Update ($table,$colid,$Id,$formArray)
    {
  
    return parent::Update($this->table,$this->colid,$Id,$formArray);

    }
    function delete($table,$colid,$Id)
    {
    
    return parent::delete($this->table,$this->colid,$Id);
    }
   
}
?>