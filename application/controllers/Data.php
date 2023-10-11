<?php
defined('BASEPATH') or exit('no direct script access allowed');
class Data extends CI_Controller
{
    public function siswa()
    {
        /**memanggil data */
        $this->db->select('*');
        $this->db->from('siswa');
        /**get() disini untuk memanggil data dari phpmyadmin */
        $name_check = $this->db->get();
        $data['name_data'] = $name_check; // dibaca : $data dengan nama "name_data" adalah $name_check
        $data['title'] = 'Nama Siswa';
        $this->load->view('data/siswa/index', $data);
    }
    public function siswa_add(){
        // dibaca : $data dengan nama title adalah 'tambah nama siswa' => ini akan dijadikan sebagai judul add_siswa
        $data['title'] = 'Tambah Nama Siswa'; 
        $this->load->view('data/siswa/siswa_add', $data);
    }
    public function siswa_save(){
        $name = $this->input->post('nama-siswa');
        $alias = $this->input->post('julukan-siswa');
        // array untuk nama_siswa
        $save['nama_siswa'] = $name;
        $save['julukan'] = $alias;
        // insert('nama_database_yang_ada_di_phpmyadmin', $variable_array);
        $this->db->insert('siswa', $save);
        /**
         *  redirect() digunakan untuk data kembalian
         *  (maksudnya supaya kembali ke halaman utama)
         **/ 
        redirect(base_url('data/siswa'));
    }
    public function siswa_remove(){
        // koma disini maksudnya adalah koma
        $this->db->where('id', $this->uri->segment(3));
        // insert('nama_database_yang_ada_di_phpmyadmin', $variable_array);
        $this->db->delete('siswa');
        redirect(base_url('data/siswa'));
    }
}