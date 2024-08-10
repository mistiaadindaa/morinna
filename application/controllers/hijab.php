<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hijab extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('hijab_model');
	}

	public function index()
	{
		$data['judul'] = "";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hijab'] = $this->hijab_model->get();
        $this->load->view("layout/header_table", $data);
        $this->load->view("hijab/vw_hijab", $data);
        $this->load->view("layout/footer_table");
	}

    public function tambah()
	{	
		$data['judul'] = "";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hijab'] = $this->hijab_model->get();

		$this->form_validation->set_rules('nama_hijab', 'nama_hijab', 'required', [
			'required' => 'Nama Hijab Wajib di isi'
		]);
		$this->form_validation->set_rules('warna', 'Warna', 'required', [
			'required' => 'Warna Hijab Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
			'required' => 'Hijab Wajib di isi',
			'integer' => 'Hijab harus Angka'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);

		if($this->form_validation->run()==false){
			$this->load->view("layout/header_table", $data);
			$this->load->view("hijab/vw_tambah_hijab", $data);
			$this->load->view("layout/footer_table");
		}
		else{
			$data = [
				'nama_hijab' => $this->input->post('nama_hijab'),
				'warna' => $this->input->post('warna'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/hijab/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$this->hijab_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success"
			role="alert">Data Hijab Berhasil Ditambah!</div>');
			redirect('hijab');
		}
	}
	public function edit($id)
	{
		$data['judul'] = "";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['hijab'] = $this->hijab_model->getById($id);

		$this->form_validation->set_rules('nama_hijab', 'Nama_hijab', 'required', [
			'required' => 'Nama Jilbab Wajib di isi'
		]);
		$this->form_validation->set_rules('warna', 'Warna', 'required', [
			'required' => 'Warna Wajib di isi'
		]);
		$this->form_validation->set_rules('harga', 'Harga', 'required', [
			'required' => 'Harga Wajib di isi'
		]);
		$this->form_validation->set_rules('stok', 'Stok', 'required|integer', [
			'required' => 'Jilbab Wajib di isi',
			'integer' => 'Jilbab harus Angka'
		]);
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', [
			'required' => 'Keterangan Wajib di isi'
		]);

		if($this->form_validation->run()==false){
			$this->load->view("layout/header_table", $data);
			$this->load->view("hijab/vw_ubah_hijab", $data);
			$this->load->view("layout/footer_table");
		}
		else{
			$data = [
				'nama_hijab' => $this->input->post('nama_hijab'),
				'warna' => $this->input->post('warna'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok'),
				'keterangan' => $this->input->post('keterangan'),
			];
			$upload_image = $_FILES['gambar']['name'];
			if($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/hijab/';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('gambar')) {
					$old_image = $data['hijab']['gambar'];
					if($old_image != 'default.jpg') {
						unlink(FCPATH.'assets/img/hijab/'.$old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				}
				else{
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->hijab_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Hijab Berhasil Diubah!</div>');
			redirect('hijab');
		}
	}
	public function hapus($id){
		$this->hijab_model->delete($id);
		$error = $this->db->error();
 		if ($error['code'] != 0) {
 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon 
			fas fa-info-circle"></i>Data Hijab tidak dapat dihapus (sudah berelasi)!</div>');
 		}
		else {
 			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i 
			class="icon fas fa-check-circle"></i>Data Hijab Berhasil Dihapus!</div>');
 		}
		redirect('hijab');
	}
}
