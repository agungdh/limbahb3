<?php

class Neraca extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_neraca');
		$this->load->helper('url');
	}

	function index()
	{
		$data['neraca'] = $this->m_neraca->tampil_data()->result();
		$this->load->view('tampil_neraca',$data);
	}

	function tambah ()
	{
		$this->load->view('input_neraca');
	}

	function tambah_aksi()
	{
		$id = $this->input->post('id');
		$nama_limbah = $this->input->post('nama_limbah');
		$sumber_limbah = $this->input->post('sumber_limbah');
		$sisa_limbah_lalu = $this->input->post('sisa_limbah_lalu');
		$jmlh_limbah_masuk = $this->input->post('jmlh_limbah_masuk');
		$jmlh_limbah_keluar = $this->input->post('jmlh_limbah_keluar');
		$sisa_limbah_tps = $this->input->post('sisa_limbah_tps');
		$tujuan_limbah_keluar = $this->input->post('tujuan_limbah_keluar');

		$data = array(
			'id' => $id,
			'nama_limbah' => $nama_limbah,
			'sumber_limbah' => $sumber_limbah,
			'sisa_limbah_lalu' => $sisa_limbah_lalu,
			'jmlh_limbah_masuk' => $jmlh_limbah_masuk,
			'jmlh_limbah_keluar' => $jmlh_limbah_keluar,
			'sisa_limbah_tps' => $sisa_limbah_tps,
			'tujuan_limbah_keluar' => $tujuan_limbah_keluar
			 );
		$last_id = $this->m_neraca->input_data($data, 'neraca');

		redirect('crud/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_neraca->hapus_data($where, 'neraca');
		redirect('neraca/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['neraca'] = $this->m_neraca->edit_data($where,'neraca')->result();
		$this->load->view('edit_neraca',$data);
	}

	function update()
	{	$id = $this->input->post('id');
		$nama_limbah = $this->input->post('nama_limbah');
		$sumber_limbah = $this->input->post('sumber_limbah');
		$sisa_limbah_lalu = $this->input->post('sisa_limbah_lalu');
		$jmlh_limbah_masuk = $this->input->post('jmlh_limbah_masuk');
		$jmlh_limbah_keluar = $this->input->post('jmlh_limbah_keluar');
		$sisa_limbah_tps = $this->input->post('sisa_limbah_tps');
		$tujuan_limbah_keluar = $this->input->post('tujuan_limbah_keluar');
	 
		$data = array(

			'id' => $id,
			'nama_limbah' => $nama_limbah,
			'sumber_limbah' => $sumber_limbah,
			'sisa_limbah_lalu' => $sisa_limbah_lalu,
			'jmlh_limbah_masuk' => $jmlh_limbah_masuk,
			'jmlh_limbah_keluar' => $jmlh_limbah_keluar,
			'sisa_limbah_tps' => $sisa_limbah_tps,
			'tujuan_limbah_keluar' => $tujuan_limbah_keluar
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_neraca->update_data($where, $data, 'neraca');
		redirect('neraca/index');
	}

}

?>