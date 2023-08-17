<?php
defined('BASEPATH') or exit('no direct script access allowed');
class blog extends CI_Controller {
    public function home(){
        $this->load->view('blog/home');
    }
    public function about(){
        echo "Ini halaman 'About'";
    } 
    public function contact(){
        echo "Ini Halaman 'Contact'";
    }  
    public function article(){
        echo "Ini Halaman 'Article'";
    }
    public function faq(){
        echo "Ini Halaman 'Faq'";
    }
} 