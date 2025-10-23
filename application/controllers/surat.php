<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends CI_Controller {

    public function index()
    {
        $this->load->view('surat_form');
    }

    public function hasil()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'pekerjaan' => $this->input->post('pekerjaan'),
            'tinggi' => $this->input->post('tinggi'),
            'berat' => $this->input->post('berat'),
            'bmi' => $this->input->post('bmi'),
            'tekanan_darah' => $this->input->post('tekanan_darah'),
            'golongan_darah' => $this->input->post('golongan_darah')
        ];

        $this->load->view('surat_hasil', $data);
    }
}
