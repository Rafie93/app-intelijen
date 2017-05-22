<?php
class Template{
    protected $_CI;
    public function __construct(){
        $this->_CI=&get_instance();
    }
    

    public function admin($admin,$data=null){
        $data['content']=$this->_CI->load->view($admin,$data,true);
        $data['header']=$this->_CI->load->view('header',$data,true);
        $data['sidekiri']=$this->_CI->load->view('side-kiri',$data,true);
        $data['sidekiri']=$this->_CI->load->view('side-kiri',$data,true);
        $this->_CI->load->view('template_admin.php',$data);
    }
     public function kepala($kepala,$data=null){
        $data['content']=$this->_CI->load->view($kepala,$data,true);
        $data['header']=$this->_CI->load->view('header',$data,true);
        $data['sidekiri']=$this->_CI->load->view('side-kiri2',$data,true);
        $this->_CI->load->view('template_kepala.php',$data);
    }

}