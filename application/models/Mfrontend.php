<?php

class Mfrontend extends CI_Model{

   public function get_all_kategori(){
       return $this->db->get('tbl_kategori');
   } 

   public function get_all_kota(){
       return $this->db->get('tbl_kota');
   }

   public function input_data($data, $table){
   	$this->db->insert($table,$data);
   }

   public function get_like($key, $value, $idkategori) {
    $this->db->where('idKat', $idkategori);
    $this->db->like($key, $value);
    return $this->db->get('tbl_produk');
}

public function paginate_produk($limit, $start, $query, $idkategori) {
    $this->db->like('namaProduk', $query);
    $this->db->where('idKat', $idkategori);
    $this->db->limit($limit, $start);
    $query = $this->db->get('tbl_produk');

    return $query->result();
}

}