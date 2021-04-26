<?php 

namespace App\Controllers;
use App\Models\Model_dep;

class Departement extends BaseController
{
    
    public function __construct()
    {
		$this->Model_dep = new Model_dep();
		helper ('form');
    }

	public function index()
	{
		$data = array(
            'tittle' => 'Departement', 
            'dep' => $this->Model_dep->all_data(),
			'isi' => 'v_dep'
	);
		return view('layout/v_wrapper',$data);
	}

	public function tambah()
    {
		$data = array('nama_dep' => $this->request->getPost('nama_dep'));
		$this->Model_dep->tambah($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Tambah');
		return redirect()->to(base_url('departement'));
	}
	
	public function edit($id_dep)
    {
		$data = array(
			'id_dep' => $id_dep,
			'nama_dep' => $this->request->getPost('nama_dep'),
	);
		$this->Model_dep->edit($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Update');
		return redirect()->to(base_url('departement'));
	}
	
	public function delete($id_dep)
    {
		$data = array(
			'id_dep' => $id_dep,
	);
		$this->Model_dep->delete_data($data);
		session()->setFlashdata('pesan', 'Data Berhasil di Hapus');
		return redirect()->to(base_url('departement'));
    }
	//--------------------------------------------------------------------
}
