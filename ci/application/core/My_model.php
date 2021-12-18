<?php

class My_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    function create($table,$formArray)
    {
        // $this->db->where("");
        
        $this->db->insert($this->table,$formArray);
    }
    
    function createPosition($table,$Id,$formArray)
    {
    
        return  $this->db->insert($this->table,$formArray);
    }
    function all(){
          return $info  = $this->db->get($this->table)->result_array();

   }

   function get($colid,$Id)
   {
       $this->db->where($colid,$Id);
       
     return $info = $this->db->get($this->table)->row_array();
   }
   function Update($table,$colid,$Id,$formArray)
   {
    $this->db->where($colid,$Id);
   return $q = $this->db->update($this->table,$formArray);
   }
   function delete ($table,$colid,$Id)
   {
    $this->db->where($colid,$Id);
    $this->db->delete($this->table);
   }
 





}





?>