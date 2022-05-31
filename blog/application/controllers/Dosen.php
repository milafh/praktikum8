<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	// untuk menmapilakn sluruh data
	public function index()
	{
		//load model & bikin objek
        $this->load->model('dosen_model', 'dosen1');

        $this->dosen1->id = 1;
        $this->dosen1->nidn = '010001123';
        $this->dosen1->nama = 'Dadang Suherman';
        $this->dosen1->gender = 'L';
        $this->dosen1->pendidikan = 'S1';

        //load model & bikin objek
        $this->load->model('dosen_model', 'dosen2');
        $this->dosen2->id = 2;
        $this->dosen2->nidn = '020001345';
        $this->dosen2->nama = 'Sri Pujiastuti';
        $this->dosen2->gender = 'P';
        $this->dosen2->pendidikan = 'S3';

        //load model & bikin objek
        $this->load->model('dosen_model', 'dosen3');
        $this->dosen3->id = 3;
        $this->dosen3->nidn = '030001908';
        $this->dosen3->nama = 'Utami';
        $this->dosen3->gender = 'P';
        $this->dosen3->pendidikan = 'S3';

        //load model & bikin objek
        $this->load->model('dosen_model', 'dosen4');
        $this->dosen4->id = 4;
        $this->dosen4->nidn = '040001125';
        $this->dosen4->nama = 'Malik Ahmad';
        $this->dosen4->gender = 'L';
        $this->dosen4->pendidikan = 'S2';

        // simpan data ke array
        $list_dosen = [$this->dosen1, $this->dosen2, $this->dosen3, $this->dosen4];

        //siapkan data untuk dikirm ke array
        $data["list_dosen"] = $list_dosen;

        //untuk mengirim data & menampilkan ke view
        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
	}
}
