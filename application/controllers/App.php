<?php
defined('BASEPATH') OR exit('Sem acesso direto :D');

class App extends CI_Controller {
    public function index() { return $this->home(); }

    public function home() {
        $this->Page->append('js', 'bootstrap.bundle.min', base_url('assets/bootstrap/js/')); // Carregando bootstrap para dropdown
        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE)); // Carregando menu de navegação principal

        $this->Page->append('main', $this->load->view('content/home', [], TRUE)); // Carregando conteúdo da página inicial

        $this->Page->append('footer', $this->load->view('footer/rodape', [], TRUE)); // Carregando rodapé

        $this->load->view('page', ['page' => $this->Page->build()]); // Mostrando a página
    }

    public function equipe() {
        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE));
        $this->Page->append('footer', $this->load->view(''));

    }
}