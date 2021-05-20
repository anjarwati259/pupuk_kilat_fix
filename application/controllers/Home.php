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

		$data = array(	'title'		=> 'TENTANG KAMI',
						'isi'		=> 'home/about'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function product($id_produk)
	{

		$produk = $this->home_model->product($id_produk);
		$data = array(	'title'		=> 'DETAIL BERITA',
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

		$data = array(	'title'		=> 'KONTAK',
						'isi'		=> 'home/kontak'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	//edit data
	public function detail_berita($id_berita) 
	{
		$berita = $this->home_model->detail($id_berita);
		$saran = $this->home_model->listing();
		$data = array(	'title'		=> 'DETAIL BERITA',
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
						'title'		=> 'VARIASI PRODUK',
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
		$testi = $this->home_model->testi();
		$kategori = $this->home_model->kategori();

		$data = array(	
						'title'		=> 'TESTIMONI PRODUK',
						'kategori'	=> $kategori,
						'testi' 	=> $testi,
						'isi'		=> 'home/testimoni_page'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function kategori($kate){
		$testimoni = $this->home_model->read($kate);
		$kategori = $this->home_model->kategori();
		$testi = $this->home_model->testi();
		$data = array(	
						'title'		=> 'TESTIMONI PRODUK',
						'kategori'	=> $kategori,
						'testi' 	=> $testimoni,
						'isi'		=> 'home/testimoni_page'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function mitra(){
		$mitra = $this->home_model->list_mitra();
		$data = array(	
						'title'		=> 'INFORMASI MITRA',
						'mitra'		=> $mitra,
						'isi'		=> 'home/mitra'
						); 
		$this->load->view('layout/wrapper', $data, FALSE);
	}
	public function distributor(){
		$distributor = $this->home_model->list_distributor();
		$data = array(	
						'title'		=> 'INFORMASI DISTRIBUTOR',
						'distributor' => $distributor,
						'isi'		=> 'home/distributor'
						);
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}