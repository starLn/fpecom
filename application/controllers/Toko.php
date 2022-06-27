<?php

class Toko extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mfrontend');
		$this->load->model('Mtoko');
		$this->load->model('Mcrud');
	}

	public function main($idToko){
		$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
		$data['namaToko']=$this->Mtoko->get_toko($idToko)->row_object();
		$this->template->load('layout_frontend','frontend/menu_toko', $data);
	}

	public function index(){
		$data['toko']=$this->Mcrud->get_all_data('tbl_toko')->result();
		$this->template->load('layout_admin','admin/toko/toko',$data);
		}
	
		public function add(){ 
		  $this->template->load('layout_admin','admin/toko/toko_add');
		}
	
		public function aktif($id){
		  $dataUpdate = array('StatusAktif'=>'Y');
		  $this->Mcrud->update('tbl_toko', $dataUpdate, 'idToko', $id);
		  redirect('toko');
		}
	
		public function non_aktif($id){
		  $dataUpdate = array('StatusAktif'=>'N');
		  $this->Mcrud->update('tbl_toko', $dataUpdate, 'idToko', $id);
		  redirect('toko');
		}
	
		public function user_toko_detail(){
		 $data['kategori']=$this->Mfrontend->get_all_kategori()->result();
		 $this->template->load('layout_frontend', 'frontend/user_toko_detail',$data);
		}
	
		public function dashboard_toko(){
			$data['kategori']=$this->Mfrontend->get_all_kategori('')->result();
			$this->template->load('layout_frontend', 'frontend/dashboard_toko',$data);
		  }

	public function produk($idToko){
		$data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
		$data['toko'] = $this->Mtoko->get_toko($idToko)->row();
		$data['idToko'] = $idToko;
		$data['produk'] = $this->Mcrud->join_produk_toko($idToko)->result();
		$this->template->load('layout_frontend','frontend/toko_produk', $data);
	}

	public function create_produk($idToko){
		$data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
		$data['toko'] = $this->Mtoko->get_toko($idToko)->row();
		$data['idToko'] = $idToko;
		$this->template->load('layout_frontend','frontend/toko_create_produk', $data);
	}

	public function edit_produk($idToko){
		$data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
		$data['toko'] = $this->Mtoko->get_toko($idToko)->row();
		$data['idToko'] = $idToko;
		$this->template->load('layout_frontend','frontend/toko_create_produk', $data);
	}

	public function insert_produk(){
		$idKat = $this->input->post('kategori');
		$idToko = $this->input->post('id_toko');
		$namaProduk = $this->input->post('namaProduk');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$berat = $this->input->post('berat');
		$deskripsiProduk = $this->input->post('deskripsi');

		$config['upload_path'] = './assets/upload_produk/';
		$config['allowed_types'] = 'jpg|png|jpeg';

		$this->load->library('upload', $config);

		if($this->upload->do_upload('foto')){
			$data_file = $this->upload->data();

			$data_insert=array('idKat' => $idKat,
								'idToko' => $idToko, 
								'namaProduk' => $namaProduk,
								'harga' => $harga,
								'stok' => $stok,
								'berat' => $berat,
								'foto' => $data_file['file_name'],
								'deskripsiProduk' => $deskripsiProduk);
			$this->Mtoko->insert_produk($data_insert);
			redirect('toko/produk/'.$idToko);
			//print_r($data_insert);
		} else {
			echo "gagal";
			redirect('toko/create_produk/'.$idToko);
		}
	}

	public function detail($id) {
		$data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $data['toko'] = $this->Mcrud->get_by_id('tbl_toko', ['idKonsumen' => $this->session->userdata('id'), 'idToko' => $id])->row();
        $this->template->load('layout_frontend', 'frontend/menu_toko', $data);
	}

	public function store_toko() {
		$this->form_validation->set_rules('nama_toko','nama toko','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');

		if($this->form_validation->run() != false){
            $nama = $this->input->post('nama_toko');
            $deskripsi = $this->input->post('deskripsi');

            $dataInsert = [
				'namaToko'=> $nama,
				'deskripsi'=> $deskripsi,
				'logo'=> $this->_uploadImage(),
				'statusAktif'=> "Y",
				'idKonsumen'=> $this->session->userdata('id'),
			];

			$this->Mcrud->insert('tbl_toko', $dataInsert);

			$this->session->set_flashdata('success', 'Toko berhasil dibuat');
			redirect('member1/toko');
		}else{
			$this->session->set_flashdata('error', validation_errors());
            redirect('toko/create_toko');
		}
    }

    private function _uploadImage() {
        $config['upload_path']          = './assets/logo/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = uniqid();
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('logo')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

	public function delete_produk($id) {
        $data['produk'] = $this->Mcrud->get_by_id('tbl_produk', ['idProduk' => $id])->row();
        $this->Mcrud->delete('tbl_produk', 'idProduk', $id);

        redirect('/toko/produk/'.$data['produk']->idToko);
    }
}