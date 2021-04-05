<?php 

/**
 * 
 */
class Home_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//listing all kategori
	public function listing(){
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->order_by('id_berita','asc');
		$query = $this->db->get();
		return $query->result();
	}
	//detail
	public function detail($id_berita){
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->where('id_berita', $id_berita);
		$this->db->order_by('id_berita','desc');
		$query = $this->db->get();
		return $query->row();
	}
	//load menu navbar produk
	public function nav_product()
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->order_by('id','asc');
		$query = $this->db->get();
		return $query->result();
	}
	//load menu navbar produk
	public function product($id_produk)
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->where('id', $id_produk);
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->row();
	}
	//load menu navbar produk
	public function list_product()
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->result();
	}
	//load menu navbar produk
	public function list_mitra()
	{
		$this->db->select('*');
		$this->db->from('tb_mitra');
		$this->db->order_by('id_mitra','desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function list_distributor()
	{
		$this->db->select('*');
		$this->db->from('tb_distributor');
		$this->db->order_by('id_distributor','desc');
		$query = $this->db->get();
		return $query->result();
	}
}