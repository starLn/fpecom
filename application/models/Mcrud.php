<?php

class Mcrud extends CI_Model {

	public function get_all_data($tabel) {
		$q = $this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data) {
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id) {
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id) {
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $pk, $id) {
		$this->db->where($pk, $id);
		$this->db->delete($tabel);
	}

	public function join_produk_toko($id) {
        $this->db->select('p.*, k.namaKat');
        $this->db->from('tbl_produk as p');
        $this->db->join('tbl_kategori as k','k.idkat = p.idKat', 'LEFT');
        $this->db->where('p.idToko', $id);  
        $query = $this->db->get();
        //var_dump($query->result_array()); die;
        return $query;
    }

	public function get_product_limit($limit = 4) {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->order_by('idProduk', 'desc');
        $this->db->limit($limit);  
        $query = $this->db->get();
        //var_dump($query->result_array()); die;
        return $query;
    }

	public function insert_order($data) {
        $this->db->insert('tbl_order', $data);
        $lastId = $this->db->insert_id();
        return (isset($lastId)) ? $lastId : FALSE;
    }
}