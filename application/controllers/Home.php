<?php

class Home extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mfrontend');
        $this->load->model('Mcrud');
        $this->load->model('Mmember');
    }

    public function index(){
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['produkbaru'] = $this->Mcrud->get_product_limit(4)->result();
        $this->template->load('layout_frontend','frontend/home', $data);
    }

    public function register(){
        $data['kota']=$this->Mfrontend->get_all_kota()->result();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/register', $data);
    }

    public function act_reg(){
       $this->load->library('form_validation');

       $this->form_validation->set_rules('namaKonsumen','Nama','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('password_confirm','Password_confirm','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('kota','kota','required');
        $this->form_validation->set_rules('no_telpon','No_telpon','required');
        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/home/register');
        } else {

        $nama = $this->input->post('namaKonsumen');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password_confirm = $this->input->post('password_confirm');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $no_telpon = $this->input->post('no_telpon');
        $data=array(

        'username' =>$username,
        'password' =>$password,
        'namaKonsumen' =>$nama,
        'alamat' =>$alamat,
        'idkota' =>$kota,
        'email' =>$email,
        'tlpn' =>$no_telpon,
        'statusAktif'=>'Y' );
        $this->Mfrontend->input_data($data, 'tbl_member');
        redirect('home/login');
        
    }
}

    public function login() {
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $this->template->load('layout_frontend','frontend/login', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    } 
    
    public function detail_produk($id) {
        $data['produk'] = $this->Mcrud->get_by_id('tbl_produk', ['idProduk' => $id])->row();
        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();
        $data['komentar'] = $this->Mmember->get_komentar($id)->result();
        $this->template->load('layout_frontend', 'frontend/detail_produk', $data);
    }

    public function pencarian(){
        if (isset($_POST['kategori'])) {
            $this->session->set_userdata('kategori_search', $this->input->post('kategori'));
            $this->session->set_userdata('q_search', $this->input->post('kata'));

            $kategori = $this->input->post('kategori');
            $q = $this->input->post('kata');
        } else {
            $kategori = $this->session->userdata('kategori_search');
            $q = $this->session->userdata('q_search');
        }

        $data['kategori'] = $this->Mfrontend->get_all_kategori()->result();

        $jumlah = $this->Mfrontend->get_like('namaProduk', $q, $kategori)->num_rows();
        $this->load->library('pagination');
        $config['base_url'] = site_url().'/home/cari';
        $config['total_rows'] = $jumlah;
        $config['per_page'] = 8;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['q'] = $q;

        $data['produk'] = $this->Mfrontend->paginate_produk($config['per_page'], $from, $q, $kategori);
        $this->template->load('layout_frontend', 'frontend/cari', $data);
    }
}