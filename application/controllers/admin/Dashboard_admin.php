<?php

class Dashboard_admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Admin';
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templates_admin/footer');
    }
}
