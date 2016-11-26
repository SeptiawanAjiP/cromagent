<?php
/**
* agent controller
*/
class Agent extends CI_Controller {	

	function __construct() {
		parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('array');
	}

	function Index($pg = 0) {
		//login page
        $this->session->set_userdata('notice', "");
        $this->load->view('agent/page_head');
        $this->load->view('contents/login');
        $this->load->view('agent/page_end1');
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
    
    function dashboard(){
        $this->load->model('agent_model');
        $user = $this->agent_model->groupMap();
        $data['LocsE'] = $user;
        $this->load->vars($data);

        $this->load->view('agent/page_head');
        $this->load->view('agent/header');
        $this->load->view('agent/left_sidebar');
        $this->load->view('agent/page_wrapper');

        $this->load->view('contents/group_map');

        $this->load->view('agent/page_wrapper_end');
        $this->load->view('agent/page_end2');
    }

    function singleShop($idWarung){
        $this->load->model('agent_model');
        $user = $this->agent_model->shopDetail($idWarung);
        $data['LocsE'] = $user;
        $this->load->vars($data);

        $this->load->view('agent/page_head');
        $this->load->view('agent/header');
        $this->load->view('agent/left_sidebar');
        $this->load->view('agent/page_wrapper');

        $this->load->view('contents/group_map');

        $this->load->view('agent/page_wrapper_end');
        $this->load->view('agent/page_end2');
    }

    function page_navigation($pg = 1){

        $this->load->model('agent_model');
        $user = $this->agent_model->groupMap();
        $data['LocsE'] = $user;
        $this->load->vars($data);

        $this->load->view('agent/page_head');
        $this->load->view('agent/header');
        $this->load->view('agent/left_sidebar');
        $this->load->view('agent/page_wrapper');
        $page = 'welcome';
        switch ($pg) {
            case 1:
                //dashboard
                $page = 'group_map';
                break;
            case 2:
                //shop list
                break;
            case 3:
                //shop registration
                $page = 'form_shop';
                break;
            case 4:
                //dashboard
                break;
            case 5:
                //dashboard
                break;
            case 6:
                //customer registration
                $page = 'form_customer';
                break;
            case 7:
                //dashboard
                break;
            case 8:
                //dashboard
                break;
            case 9:
                //ticket request
                $page = 'form_ticket';
                break;
            case 10:
                //dashboard
                break;
            default:
                # code...
                break;
        }

        $this->load->view('contents/'.$page);

        $this->load->view('agent/page_wrapper_end');
        $this->load->view('agent/page_end2');
    }

    //fungsi lama -----------------
    function agent_web($pg = 1){

        $this->load->model('table_model');
        //for table example
        $data['title_table'] = 'Summary Warung';
        $data['vari']  = $this->table_model->table_variabel(1);
        $data['width'] = $this->table_model->table_width(1);
        //$data['content'] = $this->tabel_model->table_content();
        $this->load->vars($data);

        $this->load->view('agent/page_head');
        $this->load->view('agent/header');
        $this->load->view('agent/left_sidebar');
        $this->load->view('agent/page_wrapper');

        //content
        $this->load->view('contents/table');
        //$this->load->view('contents/group_map');

        $this->load->view('agent/page_wrapper_end');
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
