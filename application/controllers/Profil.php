<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'userrole');
		$this->load->model('hijab_model');
		$this->load->model('Keranjang_model');
		$this->load->model('Penjualan_model');
		$this->load->model('Detail_model');
		$this->load->model('User_model');
	}
	public function index()
	{
		$data['judul'] = "halaman profil";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['profil'] = $this->userrole->getBy();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view("layout/header_shop", $data);
		$this->load->view("profil/vw_profil", $data);
		$this->load->view("layout/footer_shop", $data);
	}
	public function hijab()
	{
		$data['user'] = $this->userrole->getBy();
		$data['hijab'] = $this->hijab_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view("profil/vw_hijab", $data);
	}
	public function keranjang($id)
	{
		$data['keranjang'] = $this->Keranjang_model->get();
		$data['judul'] = "Detail Hijab";
		$data['user'] = $this->userrole->getBy();
		$data['hijab'] = $this->hijab_model->getById($id);
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required', [
			'required' => "Jumlah Wajib di isi"
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header_shop", $data);
			$this->load->view("profil/vw_keranjang", $data);
			$this->load->view("layout/footer_shop");
		} else {
			$data = [
				'id_user' => $this->session->userdata('id'),
				'id_hijab' => $this->input->post('id'),
				'jumlah' => $this->input->post('jumlah'),
				'total' => $this->input->post('total'),
				'tanggal' => $this->input->post('tanggal'),
			];
			$this->Keranjang_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			hijab berhasil ditambahkan ke keranjang!</div>');
			redirect('Profil/detail');
		}
	}
	public function detail()
	{
		$data['keranjang'] = $this->Keranjang_model->get();
		$data['judul'] = "Detail Keranjang";
		$data['user'] = $this->userrole->getBy();
		$data['hijab'] = $this->hijab_model->get();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view("layout/header_shop", $data);
		$this->load->view("profil/vw_detail_keranjang", $data);
		$this->load->view("layout/footer_shop");
	}
	public function delKeranjang($id)
	{
		$this->Keranjang_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
			Data berhasil dihapus dari keranjang!</div>');
		redirect('Profil/detail');
	}
	
	public function pesanan()
	{
		$jumlah_beli = count($this->input->post('hijab'));
		$data_p = [
			'no_penjualan' => $this->input->post('no_penjualan'),
			'id_user' => $this->session->userdata('id'),
			'tanggal' => $this->input->post('tanggal'),
			'total_bayar' => $this->input->post('bayar'),
			'alamat' => $this->input->post('alamat'),
			'pembayaran' => $this->input->post('pembayaran'),
			'keterangan' => $this->input->post('keterangan'),
		];
		$upload_image = $_FILES['gambar']['name'];
		if ($upload_image) {
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['upload_path'] = './assets/img/pembayaran/';
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$new_image = $this->upload->data('file_name');
				$this->db->set('gambar', $new_image);
			} else {
				echo $this->upload->display_errors();
			}
		}
		$data_detail = [];
		for ($i = 0; $i < $jumlah_beli; $i++) {
			array_push($data_detail, ['id_hijab' => $this->input->post('hijab')[$i]]);
			$data_detail[$i]['no_penjualan'] = $this->input->post('no_penjualan');
			$data_detail[$i]['id_user'] = $this->session->userdata('id');
			$data_detail[$i]['jumlah'] = $this->input->post('jumlah_p')[$i];
			$data_detail[$i]['total'] = $this->input->post('total_p')[$i];
		}
		if ($this->Penjualan_model->insert($data_p, $upload_image) && $this->Detail_model->insert($data_detail)) {
			for ($i = 0; $i < $jumlah_beli; $i++) {
				$this->hijab_model->min_stok($data_detail[$i]['jumlah'], $data_detail[$i]['id_hijab']) or die('gagal min stok');
			}
			$id_us = $this->session->userdata('id');
			$this->Keranjang_model->delete_all($id_us);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
					Pesanan berhasil dibuat!!</div>');
			redirect('Profil/hijab');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> 
					Pesanan gagal dibuat!!</div>');
			redirect('Profil/hijab');
		}
	}
	public function pembelian()
	{
		$data['judul'] = "Data Pembelian";
		$data['user'] = $this->User_model->getBy();
		$data['pembelian'] = $this->Penjualan_model->getByUser();
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->load->view('layout/header_shop', $data);
		$this->load->view('profil/pembelian_user', $data);
		$this->load->view('layout/footer_shop', $data);
	}
	public function home()
	{
		$this->load->view('profil/home');
	}
	public function story()
	{
		$this->load->view('profil/story');
	}

	public function statusbeli($id)
	{
		$data['judul'] = "Ubah Data Pembelian";
		$data['user'] = $this->userrole->getBy();
		$data['pembelian'] = $this->Penjualan_model->getByUser2($id);
		$data['detailbeli'] = $this->Detail_model->getByUser($id);
		$data['jlh'] = $this->Keranjang_model->jumlah();
		$this->form_validation->set_rules('status', 'Status', 'required', [
			'required' => 'Status Wajib di isi'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header_table", $data);
			$this->load->view("profil/detail_beli", $data);
			$this->load->view("layout/footer_table");
		} else {
			$status = $this->input->post('status');
			$nojual = $this->input->post('no_penjualan');
			$this->Penjualan_model->updatestatus($status, $nojual);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Status Berhasil
			DiUbah!</div>');
			redirect('Profil/pembelian');
		}
	}

}
	//function index(){
	//    $data['judul'] = "Halaman Profil";
	//	$data['user'] = $this->userrole->getBy();
	//    $this->load->view("layout/header", $data);
	//    $this->load->view("profil/vw_profil", $data);
	//    $this->load->view("layout/footer");
	//