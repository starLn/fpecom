<?php 

/**
 * 
 */
class Mongkir extends CI_Model
	{
		public function get_all_data($tabel){
			$q=$this->db->get($tabel);
			return $q;
		}

		public function insert($tabel, $data){
			$this->db->insert($tabel, $data);
		}

		public function get_by_id($tabel, $id){
			return $this->db->get_where($tabel, $id);
		}

		public function update($tabel, $data, $pk, $id){
			$this->db->where($pk, $id);
			$this->db->update($tabel, $data);
		}
		public function delete($tabel, $id)
	    {
	        $this->db->where($id);
			$this->db->delete($tabel);
	    }
	    public function join_tbl($tabel, $tbl_join1, $tbl_join2, $join1, $join2, $join3){
	    	$this->db->join($tbl_join1, $join1);
	    	$this->db->join($tbl_join2, $join2, $join3);
	    	return $this->db->get($tabel);
	    }
//	    public function join($tabel, $tbl_join, $join){
//	    	$this->db->join($tbl_join, $join);
//
//	    	return $this->db->get($tabel);
//	    }
//
//	    public function get_all_ongkir() {
// 			$this->db->select('*');
// 			$this->db->from('tbl_biaya_kirim');
// 			$this->db->join('tbl_kurir','tbl_kurir.idKurir = tbl_biaya_kirim.idKurir');
// 			$this->db->join('tbl_kota','tbl_kota.idKota = tbl_biaya_kirim.idKotaAsal');
// 			$this->db->order_by('idBiayaKirim', 'DESC');
// 			return $this->db->get()->result_array();
//		}

	   
	}