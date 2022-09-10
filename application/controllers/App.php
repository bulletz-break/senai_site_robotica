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

    public function equipe($team) {
        $equipes = [ // Equipes presentes no Cyber-S
            'engenharia' => [
                [
                    'label' => 'aninha',
                    'name'  => 'Aninha Pacheco',
                    'desc'  => 'Ana Clara Pacheco Ramos, 19 anos, Operadora de Suporte Técnico em Tecnologia da Informação pela Petrobrás'
                ],
                [
                    'label' => 'livia',
                    'name'  => 'Lívia Vieira Jacó',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'milena',
                    'name'  => 'Milena Vitória Euclides',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'mayara',
                    'name'  => 'Mayara Gabrielle Ribeiro',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ]
            ],
            'organizacao' => [
                [
                    'label' => 'arthur',
                    'name'  => 'Arthur Figueira',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'bruno',
                    'name'  => 'Bruno Mendes',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'luiz',
                    'name'  => 'Luiz Eurico',
                    'desc'  => 'Luiz Eurico da Silva Neto, 16 anos, Operador de Suporte Técnico em Tecnologia da Informação pela Petrobrás'
                ],
                [
                    'label' => 'thiago',
                    'name'  => 'Thiago Carlos Ferreira',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'vitor',
                    'name'  => 'Vitor Hugo Silva',
                    'desc'  => 'Vitor Hugo Silva, 16 anos, Operador de Suporte Técnico em Tecnologia da Informação Pela Petrobrás'
                ]
            ],
            'merito' => [
                [
                    'label' => 'gabriel',
                    'name'  => 'Gabriel Machini',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'leonardo',
                    'name'  => 'Leonargo Augusto Rente',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'lucas',
                    'name'  => 'Lucas Gabriel Ribeiro',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ]
            ],
            'tecnico' => [
                [
                    'label' => 'chicao',
                    'name'  => 'Francisco Carlos Ferreira',
                    'desc'  => 'Ele, o Homem, uma lenda, uma máquina, Chico, O Grande'
                ]
            ],
            'mentor' => [
                [
                    'label' => 'clarissa',
                    'name'  => 'Clarissa Bassini',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ],
                [
                    'label' => 'carlos',
                    'Carlos Eduardo Teixeira',
                    'desc'  => 'Descrição do integrante da equipe aqui'
                ]
            ]
        ];

        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE));

        $this->Page->append('main', $this->load->view('content/equipe', [ // Carregando página de exibição dos integrantes da equipe
            'equipe' => $equipes[$team] // Carregando dados dos integrantes de acordo com a equipe
        ], TRUE));

        $this->Page->append('footer', $this->load->view('footer/rodape', [], TRUE));

        $this->load->view('page', ['page' => $this->Page->build()]);
    }
}