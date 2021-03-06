<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('muser/login_service', 'login_service');
    }
    public function islogin()
    {
        $data['json'] = $this->login_service->islogin();
        $this->load->view('json_view', $data);
    }
    public function checkin()
    {
        $name = $this->input->post('name');
        $pwd = $this->input->post('pwd');

        $data['json'] = $this->login_service->checkin($name, $pwd);
        $this->load->view('json_view', $data);
    }
    public function checkout()
    {
        $data['json'] = $this->login_service->checkout();
        $this->load->view('json_view', $data); 
    }
}
