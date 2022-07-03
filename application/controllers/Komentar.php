<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Mcrud', 'Mlogin']);
        $this->load->model('Mmember');
        $this->load->model('Mfrontend');
        if ($this->session->userdata('id') ??  redirect('home/login'));
    }


    public function tambah_komentar($id)
    {
        $isi = $this->input->post('komentar');
        $data_komentar = array(
            'idProduk' => $id,
            'idMember' => $this->session->userdata('id'),
            'isi' => $isi,
            'tanggalKomentar' =>  date(' Y-m-d H:i:s ')
        );

        $this->Mmember->insert_komentar($data_komentar);
        $this->session->set_flashdata('success', 'Komentar berhasil ditambahkan');

        redirect('home/detail_produk/' . $id);
    }

    public function hapus_komentar($id, $idproduk)
    {
        $this->Mcrud->delete('tbl_komentar', 'idKomentar', $id);
        $this->session->set_flashdata('notif', 'Berhasil dihapus');
        redirect('home/detail_produk/' . $idproduk);
    }
}
