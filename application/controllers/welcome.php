<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function index()
    {
        $this->load->library("Forum");

        $data['subjects']=$this->forum->read_all_subject(); 
        $this->load->view('forum_view',$data);
        
    }

    function addtopic(){
    	$this->load->view('add_topic_view');
    }

    function commenttopic(){

    }
    function insert_topic(){
    	$this->load->library("Forum");
    	$this->form_validation->set_rules('lib', 'Title', 'trim|required|xss_clean');
    	$this->form_validation->set_rules('desc', 'Title', 'trim|required|xss_clean');
    	if ($this->form_validation->run()) {
    		$data=array(
    			'lib_subject' => $this->input->post('lib'),
    			'desc_subject'=>$this->input->post('desc'),
    			'id_user'=>1 //You need to add your user ID here
    			);
    		$this->forum->create_subject($data);
    		redirect('welcome');

    	} else {
    		$this->load->view('add_topic_view');
    	}
    	
    }

    function deletetopic($id_suject){
    	$this->load->library("Forum");
    	$this->forum->delete_subject($id_suject);
    	redirect('welcome');
    }

    function viewcomment($id_suject){
    	$this->load->library("Forum");
    	$data['single_topic']=$this->forum->get_subject($id_suject);
    	$data['comments']=$this->forum->get_comment_by_topic($id_suject);
    	
    	$this->load->view('comment_view',$data);
    }

}