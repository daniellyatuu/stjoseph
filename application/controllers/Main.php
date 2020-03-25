<?php
defined('BASEPATH') OR exit('no direct script accesss allowed');

class Main extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $context['title']='Home';
        $this->load->view('headers/Header.php', $context);
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/Index.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function aboutus(){
        $context['title']='About-us';
        $this->load->view('headers/Header.php' , $context);
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/about_us.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function admission(){
        $context['title']='Admission';
        $this->load->view('headers/Header.php', $context);
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/admission.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function values(){
        $context['title']='Core-values';
        $this->load->view('headers/Header.php', $context);
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/core_values.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function contact(){
        $context['title']='Contact-us';
        $this->load->view('headers/Header.php', $context);
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/contact.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function facilities(){
        $this->load->view('headers/Header.php');
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/facilities.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function philosophy(){
        $context['title']='Philosophy';
        $this->load->view('headers/Header.php', $context);
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/philosophy.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }

    public function teacher(){
        $this->load->view('headers/Header.php');
        $this->load->view('includes/Navbar.php');
        $this->load->view('contents/teacher_info.php');
        $this->load->view('footers/Footer_text.php');
        $this->load->view('footers/Footer.php');
    }
}
?>