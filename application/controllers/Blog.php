<?php
defined('BASEPATH') or exit('no direct script access allowed');
class blog extends CI_Controller {
    public function home(){
        $data['title'] = 'Home';
        $this->load->view('blog/home', $data);
    }
    public function about(){
        $data['title'] = 'About';
        $this->load->view('blog/about', $data);
    } 
    public function contact(){
        $data['title'] = 'Contact';
        $this->load->view('blog/contact', $data);
    }  
    public function article(){
        $data['title'] = 'article';
        $this->load->view('blog/article', $data);
    }
    public function faq(){
        $data['title'] = 'FAQ';
        $this->load->view('blog/faq', $data);
    }
} 