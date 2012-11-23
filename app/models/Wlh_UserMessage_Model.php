<?php 

class Wlh_UserMessage_Model extends CI_Model {
	
	protected $TableName  =   'wlh_usermessage';
    public $pk = 'id';
	public function __construct()
	{
		parent::__construct();
	}
	
	//用户登录处理函数
    public function login($user,$pass)
    {
        $map = array('username'=>$user,'password'=>$pass,'isnull(dr,0)'=>0);
        $query = $this->db->where($map)->get($this->TableName);
        if($query->num_rows()>0 )
        {
            $row = $query->row();
            return true;
        }else{
            return false;
        }
    }
	
}