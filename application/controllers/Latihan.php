<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Latihan extends CI_Controller {
    public function home() {
        $data['title'] = 'Home';
        $this->load->view('latihan/home');
    }
}