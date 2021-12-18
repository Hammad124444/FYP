<?php



class User_model extends CI_model
{
    public $table="info";

    public  function __construct()
    {
        parent::__construct();
      
    }

    public function email_exists($email)
	{
		$this->db->where('email',$email);
		$query=$this->db->get($this->table);
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

 
     function create($formArray)
     {
         $this->db->insert($this->table,$formArray);
     }
     function all(){
           return $info  = $this->db->get($this->table)->result_array();

    }

    function get($infoId)
    {
        $this->db->where('id',$infoId);
        
      return $info = $this->db->get($this->table)->row_array();
    }
    function Update ($infoId,$formArray)
    {
     $this->db->where('id',$infoId);
     $this->db->update($this->table,$formArray);
    }
    function delete ($infoId)
    {
     $this->db->where('id',$infoId);
     $this->db->delete($this->table);
    }
  
 public function val($name,$email){
    $this->db->where('name',$name);
    $this->db->where('email',$email);
    $result = $this->db->get($this->table);
    return $result;
}

}
?>