<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // view dashboard
    public function dashboardUser()
    {
        $this->load->view('user/dashboard');
    }

    // view tambah data
    public function tambahData()
    {
        $this->load->view('user/tambahData');
    }

    // proses simpan data
    public function userSimpanPasien()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');

        // koneksi ke database
        include_once($_SERVER['DOCUMENT_ROOT'] . '/crud/database/dbLokal.php');
        $db = new dbLokal();

        $db->simpanDataPasien($nama, $alamat);
        $this->session->set_flashdata('berhasil_simpan', 'Data pasien berhasil disimpan');
        redirect(base_url('user/dashboardUser'));
    }

    // proses delete data
    public function deleteData()
    {
        $idPasien = $this->input->get('id');

        // koneksi ke database
        include_once($_SERVER['DOCUMENT_ROOT'] . '/crud/database/dbLokal.php');
        $db = new dbLokal();

        $db->deleteDataPasien($idPasien);
        $this->session->set_flashdata('berhasil_hapus', 'Data pasien berhasil dihapus');
        redirect(base_url('user/dashboardUser'));
    }
}
