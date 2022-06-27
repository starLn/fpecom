<?php 

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function index()
    {
        $data['member']=$this->Mcrud->get_all_data('tbl_member')->result();
        $this->template->load('layout_admin','admin/member/index', $data);
    }

    // public function add() {
	// 	$this->template->load('layout_admin','admin/member/form_add');
	// }

    // public function getid($id)
    // {
    //     $dataWhere = array('idkonsumen'=>$id);
    //     $data['member'] = $this->Mcrud->get_by_id('tbl_member', $dataWhere)->row_object();
    //     $this->template->load('layout_admin','admin/member/form_edit',$data);
    // }

    // public function edit()
    // {
    //     $id = $this->input->post('id');
    //     $namaKonsumen = $this->input->post('namaKonsumen');
    //     $dataUpdate = array('namaKonsumen' => $namaKonsumen);
    //     $this->Mcrud->update('tbl_member', $dataUpdate, 'idkonsumen', $id);
    //     redirect('member');
    // }

    // public function delete($id)
    // {
    //     $where = array('idKonsumen' => $id);
    //     $this->Mcrud->delete('tbl_member', $where);
    //     $this->session->set_flashdata('notif', 'Berhasil say');
    //     redirect('Member');
    // }

    // public function aktif($id){
    //     $dataUpdate = array('statusAktif'=>'Y');
    //     $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
    //     redirect('member');
    //   }
  
    //   public function non_aktif($id){
    //     $dataUpdate = array('statusAktif'=>'N');
    //     $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
    //     redirect('member');
    //   }
    public function gantistatustidakaktif($id){
        $dataUpdate = array('statusAktif' => 'N');
        $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member');
    }
    public function gantistatusaktif($id){
        $dataUpdate = array('statusAktif' => 'Y');
        $this->Mcrud->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member');
    }
    public function add(){
        $data['kurir']=$this->Mcrud->get_all_data('tbl_kurir')->result();
        $data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
        $this->template->load('layout_admin','admin/member/form_add', $data);
    }

    public function save(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $namaKonsumen = $this->input->post('namaKonsumen');
        $alamat = $this->input->post('alamat');
        $idKota = $this->input->post('idKota');
        $email = $this->input->post('email');
        $tlpn = $this->input->post('tlpn');
        $statusAktif = $this->input->post('statusAktif');
        $dataInsert = array(
            'username'=>$username,
            'password'=>$password,
            'namaKonsumen'=>$namaKonsumen,
            'alamat'=>$alamat,
            'idKota'=>$idKota,
            'email'=>$email,
            'tlpn'=>$tlpn,
            'statusAktif'=>$statusAktif,
        );
        $this->Mcrud->insert('tbl_member', $dataInsert);
        redirect('member');
    }

    public function getid($id){
        $dataWhere = array('idKonsumen'=>$id);
        $data['member'] = $this->Mcrud->get_by_id('tbl_member', $dataWhere)->row_object();
        $this->template->load('layout_admin','admin/member/form_member_edit',$data);
    }
    public function delete($id){
        $this->db->where('idKonsumen', $id);
        $this->db->delete('tbl_member');
        redirect('member');
    }


}