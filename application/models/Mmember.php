<?php

class Mmember extends CI_Model
{

	public function get_status()
	{
		return $this->db->get_where('status', array('idKonsumen' => $this->session->userdata('id')))->result();
	}

	public function cek_login($u, $p)
	{
		$q = $this->db->get_where('tbl_member', array('username' => $u, 'password' => $p));
		return $q;
	}

	public function get_toko_by_member()
	{
		$id = $this->session->userdata('id');
		$q = $this->db->get_where('tbl_toko', array('idKonsumen' => $id));
		return $q;
	}

	public function insert_toko($data)
	{
		$this->db->insert('tbl_toko', $data);
	}

	public function get_komentar($id)
	{
		$this->db->select('k.*, m.namaKonsumen');
		$this->db->from('tbl_komentar as k');
		$this->db->join('tbl_member as m', 'm.idKonsumen = k.idMember', 'LEFT');
		$this->db->where('k.idProduk', $id);
		return $this->db->get();
	}

	public function insert_komentar($data)
	{
		$this->db->insert('tbl_komentar', $data);
	}

	public function insert_favorit($data)
	{
		$this->db->insert('tbl_favorit', $data);
	}



	public function get_favorit()
	{
		$this->db->select('k.idFavorit, m.*');
		$this->db->from('tbl_favorit as k');
		$this->db->join('tbl_produk as m', 'm.idProduk = k.idProduk', 'LEFT');
		$this->db->where('k.idKonsumen', $this->session->userdata('id'));
		return $this->db->get();
	}
}
