<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{
    public $table = 'detail_penjualan';
    public $id = 'detail_penjualan.id';
    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->select('k.*, h.nama_hijab as nama_hijab, h.harga as harga');
        $this->db->from('keranjang k');
        $this->db->join('hijab h', 'k.id_hijab = h.id');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id)
    {
        $this->db->select('d.*,r.nama as nama, h.nama_hijab as hijab');
        $this->db->from('detail_penjualan d');
        $this->db->join('user r', 'd.id_user = r.id');
        $this->db->join('hijab h', 'd.id_hijab = h.id');
        $this->db->where('d.no_penjualan', $id);;
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getByUser($id)
    {
        $idu = $this->session->userdata('id');
        $this->db->select('d.*,h.nama_hijab as nama_hijab');
        $this->db->from('detail_penjualan d');        
        $this->db->join('hijab h', 'd.id_hijab = h.id');
        $this->db->where('d.no_penjualan', $id. 'AND d.id_user=' . $idu);
        $this->db->where('d.id_user=' .$idu);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

        public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    
    function charts()
    {
        $this->db->select('d.*, h.nama_hijab as hiijab, sum(d.jumlah) as jum');
        $this->db->from('detail_penjualan d');
        $this->db->join('hijab h', 'd.id_hijab = h.id');
        $this->db->group_by('d.id_hijab');
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>