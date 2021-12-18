<?php

class Nominee_model extends My_model
{
  public $table="nominees";
  public $colid = "n_id";
  public  function __construct()
  {
      parent::__construct();
  }
    
  function create($table,$formArray)
  {
      
      return parent::create($this->table,$formArray);
  }
     function all(){
           return $teacher  = $this->db->get($this->table)->result_array();

    }
    function allVoters(){
      return $voters  = $this->db->get('voters')->result_array();

}
function createVoter($formArray)
  {
      
    $this->db->insert('voters',$formArray);
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
    function getP()
    {
      $this->db->select('*');
$this->db->from('positions');
$this->db->rightjoin('nominees','nominees.p_id = positions.p_id');
$this->db->get();
    }
}
?>