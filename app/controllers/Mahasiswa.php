<?php

class Mahasiswa extends Controller{

public function index()
{
    $data['judul'] = 'daftar mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header');
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
    
}

}

?>