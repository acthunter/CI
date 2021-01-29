 <?php 	
 /**
   * 
   */
  class ekspedisi_model extends CI_Model
  {
  	
  	public function __construct()
  	{
  		parent::__construct();
  		$this->load->database();
  	}

  	function createData($data)
  	{
  		
  		$this->db->insert('member', $data);
  	}

    public function ekspedisi_list()
      {
        $this->db->select('*');
        $this->db->from('member');
        $query = $this->db->get();
        return $query->result();
      }

    public function login($data)
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username',$data['username']);
    $this->db->where('password',$data['password']);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
      return true;
    }else{
      return false;
    }
  }

  public function user_info($uname)
  {
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $uname);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    }else{
      return false;
    }
  }

  public function deleteData($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('member');
  }

  public function editData($data,$id)
  {
    $this->db->where('id',$id);
    $this->db->update('member',$data);
  }

  public function info_member($id)
  {
    $this->db->select('*');
    $this->db->from('member');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->result();
  }

} ?>