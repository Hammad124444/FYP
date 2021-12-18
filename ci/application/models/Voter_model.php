<?php

class Voter_model extends My_model
{
  public $table="voters";
  public $colid = "v_id";
  public  function __construct()
  {
      parent::__construct();
  }

  function create($table,$formArray)
  {
      
      return parent::create($this->table,$formArray);
  }
    function all(){
      return $voters  = $this->db->get($this->table)->result_array();

}

    function get($colid,$Id)  
    {
          return parent::get($this->colid,$Id); 
    
        }
    function Update($table,$colid,$Id,$formArray)
    {
      return parent::Update($this->table,$this->colid,$Id,$formArray);

    }
    function delete($table,$colid,$Id)
    {
   
    return parent::delete($this->table,$this->colid,$Id);
    }

    public function val($voterID){
      $this->db->where('voterID',$voterID);
      $result = $this->db->get($this->table);
      return $result;
    }

    function getP()
    {
      $this->db->select('*');
$this->db->from('positions');
$this->db->rightjoin('nominees','nominees.p_id = positions.p_id');
$this->db->get();
    }
}


?>