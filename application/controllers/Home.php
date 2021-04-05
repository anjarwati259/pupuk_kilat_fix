<?php 
/**
 * 
 */
class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}
	
	public function index()
	{
		$list_product = $this->home_model->list_product();
		$data = array(	'title'		=> 'PT Agrikultur Gemilang Indonesia',
						'produk'	=> $list_product,
						'isi'		=> 'home/list'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function about()
	{

		$data = array(	'title'		=> 'About Us',
						'isi'		=> 'home/about'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function product($id_produk)
	{

		$produk = $this->home_model->product($id_produk);
		$data = array(	'title'		=> 'Detail Berita',
						'produk'	=> $produk,
						'isi'		=> 'home/product'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function publikasi()
	{
		$berita = $this->home_model->listing();
		$saran = $this->home_model->listing();

		$data = array(	'title'		=> 'Publikasi',
						'berita'	=> $berita,
						'saran'		=> $saran,
						'isi'		=> 'home/publikasi'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function kontak()
	{

		$data = array(	'title'		=> 'kontak',
						'isi'		=> 'home/kontak'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	//edit data
	public function detail_berita($id_berita) 
	{
		$berita = $this->home_model->detail($id_berita);
		$saran = $this->home_model->listing();
		$data = array(	'title'		=> 'Detail Berita',
						'berita'	=> $berita,
						'saran'		=> $saran,
						'isi'		=> 'home/detail_berita'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function produk_nav(){
		$produk = $this->home_model->nav_product();
		$data = array(	
						'produk'	=> $produk,
						'isi'		=> 'home/detail_berita'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function faq(){
		$data = array(	
						'title'		=> 'FAQ',
						'isi'		=> 'home/faq'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function produk_all(){
		$data = array(	
						'title'		=> 'Variasi Produk',
						'isi'		=> 'home/produk_all'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function order(){
		$data = array(	
						'title'		=> 'Page Order',
						'isi'		=> 'home/order'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function testimoni(){
		$data = array(	
						'title'		=> 'Testimoni Produk',
						'isi'		=> 'home/testimoni_page'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function mitra(){
		$mitra = $this->home_model->list_mitra();
		$data = array(	
						'title'		=> 'Informasi Mitra',
						'mitra'		=> $mitra,
						'isi'		=> 'home/mitra'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function distributor(){
		$distributor = $this->home_model->list_distributor();
		$data = array(	
						'title'		=> 'Informasi Distributor',
						'distributor' => $distributor,
						'isi'		=> 'home/distributor'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}