<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
        $this->load->view('login-page');
//        $this->load->model('login_model');
//
//		$data['s_data']=$this->login_model->student_id();
//
//		$this->load->view('login-page',$data);
	}

    public function login_validation(){
        $this->form_validation->set_rules('user_id','User Id','trim|xss_clean|min_length[3]');
        $this->form_validation->set_rules('password','Password','trim|xss_clean|min_length[4]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('login-page');
        }else{
           $this->home_page();

        }
    }

//    public function home_page(){
//        $this->load->view('HomePage');
//    }
}

