<?php 

class MyAccount extends CI_Controller {
	
	 protected $defaultModel ='WLH_UserMessage_Model';
	
	 public function __construct(){
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
	 }
	
	 public function checkUser(){
		if($this->input->isPOST())
        {            
			if($this->model->login($_POST['username'],$POST['password']))
            {
                echo '�����ɹ�����';
            }
            else
            {
                echo '����ʧ�ܣ���';
            }
        }
	 }
	 
	 
}

/* End of file myaccount.php */
/* Location: ./application/controllers/myaccount.php */