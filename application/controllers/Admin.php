<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function dashboardAdmin()
    {
        $this->load->view('admin/dashboard');
    }

    public function detailData()
    {
        $this->load->view('admin/detail');
    }
}
