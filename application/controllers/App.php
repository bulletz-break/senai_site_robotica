<?php
defined('BASEPATH') OR exit('Sem acesso direto :D');

class App extends CI_Controller {
    public function index() { return $this->home(); }

    public function home() {
        $this->Page->append('js', 'bootstrap.bundle.min', base_url('assets/bootstrap/js/'));
        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE));

        $this->Page->append('main', $this->load->view('content/home', [], TRUE));

        $this->load->view('page', ['page' => $this->Page->build()]);
    }
}