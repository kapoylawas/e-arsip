<?php 

namespace App\Controllers;
use App\Models\Model_kategori;

class Kategori extends BaseController
{

    public function __construct()
    {
		$this->Model_kategori = new Model_kategori();
		helper ('form');
    }

	public function index()
	{
		$data = array(
            'tittle' => 'Kategori', 
            'kategori' => $this->Model_kategori->all_data(),
			'isi' => 'v_kategori'
	);
		return view('layout/v_wrapper',$data);
	}

	public function tambah()
    {
		$data = array('nama_kategori' => $this->request->getPost('nama_kategori'));
		$this->Model_kategori->tambah($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
		return redirect()->to(base_url('kategori'));
	}
	
	public function edit($id_kategori)
    {
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_kategori' => $this->request->getPost('nama_kategori'),
	);
		$this->Model_kategori->edit($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Update');
		return redirect()->to(base_url('kategori'));
	}
	
	public function delete($id_kategori)
    {
		$data = array(
			'id_kategori' => $id_kategori,
	);
		$this->Model_kategori->delete_data($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Hapus');
		return redirect()->to(base_url('kategori'));
    }
	//--------------------------------------------------------------------
}
