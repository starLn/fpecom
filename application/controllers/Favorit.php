<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Favorit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Mcrud', 'Mlogin']);
        $this->load->model('Mmember');
        $this->load->model('Mfrontend');
        if ($this->session->userdata('id') ??  redirect('home/login'));
    }
    public function tambah_favorit($id)
    {
        $data_favorit = array(
            'idProduk' => $id,
            'idKonsumen' => $this->session->userdata('id'),
        );
        //print_r($data_komentar);
        if ($this->Mcrud->get_by_id('tbl_favorit', $data_favorit)->num_rows() == 0) {
            $this->Mmember->insert_favorit($data_favorit);

            $this->session->set_flashdata('success', 'Barang ditambahkan ke favorit');
        } else {
            $this->session->set_flashdata('success', 'Barang sudah ada di favorit');
        }
        redirect('favorit/index');
    }
    public function index()
    {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['favorit'] = $this->Mmember->get_favorit()->result();
        $this->template->load('layout_frontend', 'frontend/favorit', $data);
    }
    public function hapus_favorit($id)
    {
        $this->Mcrud->delete('tbl_favorit', 'idFavorit', $id);
        $this->session->set_flashdata('notif', 'Berhasil dihapus');
        redirect('favorit/index');
    }
}
