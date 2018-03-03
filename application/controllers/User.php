<?php

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_limbah');
		$this->load->helper('url');
	}

	function index()
	{
		$data['limbah'] = $this->m_limbah->tampil_data()->result();
		$this->load->view('tampil_limbah',$data);
	}

	function tambah ()
	{
		$this->load->view('input_limbah');
	}

	function tambah_aksi()
	{
		$id_limbah = $this->input->post('id_limbah');
		$jenis_limbah = $this->input->post('jenis_limbah');
		$foto = $this->input->post('foto');
		$jumlah = $this->input->post('jumlah');
		$masa_berlaku = $this->input->post('masa_berlaku');
		$sumber = $this->input->post('sumber');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$keterangan = $this->input->post('keterangan');

		$data = array(
			'id_limbah' => $id_limbah,
			'jenis_limbah' => $jenis_limbah,
			'jumlah' => $jumlah,
			'masa_berlaku' => $masa_berlaku,
			'sumber' => $sumber,
			'tgl_masuk' => $tgl_masuk,
			'tgl_keluar' => $tgl_masuk,
			'keterangan' => $keterangan
			 );
		$last_id = $this->m_limbah->input_data($data, 'limbah');

		if ($_FILES['foto']['size']==0) {
			redirect(base_url('user/tambah?file_kosong=1'));	
		}
		
			$ekstensi_diperbolehkan	= array('jpg','png','bmp');
			$nama = $_FILES['foto']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			//awal
			//tengah
			//akhir
			//end() -> akhir
			$ukuran	= $_FILES['foto']['size'];
			$file_tmp = $_FILES['foto']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 5242880){			
					if(move_uploaded_file($file_tmp, 'assets/images/'.$last_id.'.jpg')){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						// echo 'GAGAL MENGUPLOAD FILE';
						redirect(base_url('user/tambah?upload_gagal=1'));
					}
				}else{
					redirect(base_url('user/tambah?file_kebesaran=1'));	
					// echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				redirect(base_url('user/tambah?ekstensi_salah=1'));	
				// echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

		redirect('user/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_limbah->hapus_data($where, 'limbah');
		redirect('user/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['limbah'] = $this->m_limbah->edit_data($where,'limbah')->result();
		$this->load->view('edit_limbah',$data);
	}

	function update()
	{	$id = $this->input->post('id');
		$id_limbah = $this->input->post('id_limbah');
		$jenis_limbah = $this->input->post('jenis_limbah');
		// $foto = $this->input->post('foto');
		$jumlah = $this->input->post('jumlah');
		$masa_berlaku = $this->input->post('masa_berlaku');
		$sumber = $this->input->post('sumber');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$keterangan = $this->input->post('keterangan');
	 
		$data = array(

			'id_limbah' => $id_limbah,
			'jenis_limbah' => $jenis_limbah,
			'jumlah' => $jumlah,
			'masa_berlaku' => $masa_berlaku,
			'sumber' => $sumber,
			'tgl_masuk' => $tgl_masuk,
			'tgl_keluar' => $tgl_keluar,
			'keterangan' => $keterangan
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_limbah->update_data($where, $data, 'limbah');
		redirect('user/index');
	}

}


?>