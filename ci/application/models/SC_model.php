<?php

class SC_model extends  CI_model
{

  public  function __construct()
  {
      parent::__construct();
     
  }
  function all(){
    return $studcourse  = $this->db->get('or_po')->result_array();

}
    
  function deletecourses($o_id,$p_id)
  {
    $record=array(
      'o_id'=>$o_id,
      'p_id'=>$p_id,
    );
   $this->db->where($record);
  return $q = $this->db->delete('or_po',$record);
  }

  function getCourse($o_id,$p_id)
    {
      $record=array(
        'o_id'=>$o_id,
        'p_id'=>$p_id,
      );
        $this->db->where($record);
        
      return $studcourse = $this->db->get('or_po')->row_array();
    }
 
  

      function save($o_id,$p_id)
     {
         $data = array(
             'o_id'=>$o_id,
             'p_id'=>$p_id,
         );
         $this->db->where($data);
      $query = $this->db->get('or_po');
      $this->db->reset_query();
      if($query->num_rows()>0)
      {
       
        $this->db->where($data)->update('or_po',$data);

      }
      else{

        $this->db->where($data)->insert('or_po',$data);
      }
     }

function getC($o_id)
{

  $this->db->select('*');
  $this->db->from('or_po');
  $this->db->join('organizations', 'organizations.o_id = or_po.o_id');
  $this->db->join('positions', 'positions.p_id = or_po.p_id');
  $this->db->where('or_po.o_id',$o_id);
    $q = $this->db->get();
  return $q->result();


}
function getC($p_id)
{

  $this->db->select('*');
  $this->db->from('or_po');
  $this->db->join('organizations', 'organizations.o_id = or_po.o_id');
  $this->db->join('positions', 'positions.p_id = or_po.p_id');
  $this->db->where('or_po.o_id',$o_id);
    $q = $this->db->get();
  return $q->result();


}
    
}

?>