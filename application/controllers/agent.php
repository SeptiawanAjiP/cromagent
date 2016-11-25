<?php
/**
* agent controller
*/
class Agent extends CI_Controller {	

	function __construct() {
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
	}

	function Index($pg = 0) {
		//login page
        $this->session->set_userdata('notice', "");
        $this->load->view('agent/page_head');
        $this->load->view('contents/login');
        $this->load->view('agent/page_end2');
	}

    function login(){
        //konfirmasi login
        $this->load->model('agent_model');
        $user = $this->agent_model->confirm_login($this->input->post('id'), $this->input->post('pass'));
        $data['idAgent'] = $this->input->post('id');
        $data['user'] = $user;
        $this->load->vars($data);

        $this->load->view('agent/confirm_login');
    }

    function logout(){
        $this->load->view('agent/logout');
    }

    //fungsi lama -----------------
    function agent_web($pg = 1){

        $this->load->model('agent_model');
        $shopList = $this->agent_model->list_shop($pg);
        $data['shopList'] = $shopList;
        

        $this->load->view('agent/page_head');
        $this->load->view('agent/header');
        $this->load->view('agent/left_sidebar');
        
        //isi web
        switch ($pg) {
            case 1:
                $page = 'welcome';
                break;
            case 2:
                $page = 'user_registration';
                break;
            case 3:
                $page = 'view_user';
                break;
            case 4:
                $page = 'statistic_user';
                break;
            case 5:
                $page = 'customer_statistic';
                break;
            case 6:
                $page = 'customer_form';
                $data['warung'] = $this->agent_model->get_idWarung();
                break;
            case 7:
                $page = 'barcode_generator';
                break;
            default:
                $page = 'welcome';
        }
        $this->load->vars($data);
        $this->load->view('contents/'.$page);

        $this->load->view('agent/page_end2');
    }

    function save_warung(){
        $this->session->set_userdata('notice', "Data succesfully registered");
        $this->load->model('agent_model');
        $this->agent_model->new_shop();
        $this->agent_web();
    }

    function entry_customer(){
        $this->session->set_userdata('notice', "Data succesfully registered");
        $this->load->model('agent_model');
        $this->agent_model->new_customer();
        $this->agent_web();
    }

    function coba(){
        $text = $this->input->post("idKTP");
        $this->set_bar($text);
    }

    private function set_bar($text)
    {
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        Zend_Barcode::render('code128', 'image', array('text'=>$text), array());
    }
    //fungsi lama end---------------------
}
?>