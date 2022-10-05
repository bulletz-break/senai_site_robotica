<?php
defined('BASEPATH') OR exit('Sem acesso direto :D');

class App extends CI_Controller {
    public function index() { return $this->home(); }

    public function home() {
        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE)); // Carregando menu de navegação principal

        $this->Page->append('main', $this->load->view('content/home', [], TRUE)); // Carregando conteúdo da página inicial

        $this->Page->append('footer', $this->load->view('footer/rodape', [], TRUE)); // Carregando rodapé

        $this->load->view('page', ['page' => $this->Page->build()]); // Mostrando a página
    }

    public function equipe($team) {
        $equipes = [ // Equipes presentes no Cyber-S
            'organizacao' => [
                'titulo' => 'Integrantes da equipe de Organização e Método',
                'integrantes' => [
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
                ]
            ],
            'engenharia' => [
                'titulo' => 'Integrantes da equipe de Engenharia e Tecnologia',
                'integrantes' => [
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
                        'label' => 'thiago',
                        'name'  => 'Thiago Carlos Ferreira',
                        'desc'  => 'Descrição do integrante da equipe aqui'
                    ],
                    [
                        'label' => 'vitor',
                        'name'  => 'Vitor Hugo Silva',
                        'desc'  => 'Vitor Hugo Silva, 16 anos, Operador de Suporte Técnico em Tecnologia da Informação Pela Petrobrás'
                    ]
                ]
            ],
            'merito' => [
                'titulo' => 'Integrantes da equipe de Mérito',
                'integrantes' => [
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
                ]
            ],
            'tecnico-e-mentores' => [
                'titulo' => 'Professor responsável - Técnico',
                'integrantes' => [
                    [
                        'label' => 'chicao',
                        'name'  => 'Francisco Carlos Ferreira',
                        'desc'  => 'Grande Chico, 53 anos, Instrutor do SENAI "Santos Dumont". Engenheiro Pós-Graduado e Técnico da equipe CYBER-S'
                    ],
                    [
                        'label' => 'clarissa',
                        'name'  => 'Clarissa Bassini Rocha Rodrigues',
                        'desc'  => 'Clarissa Bassini, 21 anos, cursando Técnico de Mecatrônica pela GM e Mentora da equipe CYBER-S'
                    ],
                    [
                        'label' => 'carlos',
                        'name'  => 'Carlos Eduardo Teixeira',
                        'desc'  => 'Carlos Eduardo, Mentor da equipe CYBER-S'
                    ]
                ]
            ]
        ];

        $this->Page->append('css', 'equipe', base_url('assets/css/content/'));
        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE));

        $this->Page->append('main', $this->load->view('content/equipe', [ // Carregando página de exibição dos integrantes da equipe
            'equipe' => $equipes[$team], // Carregando dados dos integrantes de acordo com a equipe
            'team' => $team
        ], TRUE));
        
        $this->Page->append('footer', $this->load->view('footer/rodape', [], TRUE));

        $this->load->view('page', ['page' => $this->Page->build()]);
    }

    public function doc($team) {
        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE)); // Carregando menu de navegação principal

        $this->Page->append('main', $this->load->view('content/documentacao', [], TRUE)); // Carregando conteúdo da página inicial

        $this->Page->append('footer', $this->load->view('footer/rodape', [], TRUE)); // Carregando rodapé

        $this->load->view('page', ['page' => $this->Page->build()]); // Mostrando a página
    }

    public function patrocinador($patrocinio) {
        $patrocinadores = [
            'audaz' => [
                'svg' => '<path class="fil0" d="M263 215c37,67 49,89 88,161l75 0 -163 -301 -164 301 75 0c40,-73 51,-92 89,-161z"/><path class="fil1" d="M917 182l54 40 72 -39 -126 -1zm-791 11c0,0 51,33 55,36 29,14 56,24 87,33 79,24 153,37 236,44 90,7 167,6 256,-9 64,-13 119,-29 173,-66 2,-1 18,-12 23,-15l-54 -39 161 1 -87 135 -4 -66c-5,5 -13,11 -18,15 -57,39 -120,56 -188,68 -93,13 -172,12 -265,2 -84,-10 -159,-26 -239,-54 -30,-12 -58,-23 -86,-40 -7,-4 -52,-35 -50,-45z"/><path class="fil2" d="M598 181l0 128c0,15 -4,28 -11,39 -7,11 -17,19 -30,25 -12,5 -27,8 -43,8 -16,0 -29,-2 -40,-7 -12,-5 -21,-13 -27,-23 -7,-10 -10,-23 -10,-39l0 -131 48 0 0 118c0,7 1,14 3,19 2,6 5,11 9,14 4,3 10,5 18,5 14,0 24,-4 28,-13 5,-8 7,-20 7,-36l0 -107 48 0z"/><path class="fil2" d="M605 377l0 -196 70 0c14,0 28,2 40,7 12,5 23,12 33,21 9,8 17,19 22,31 6,12 8,25 8,39 0,14 -2,26 -8,38 -5,12 -13,23 -22,31 -9,9 -20,16 -33,21 -13,5 -26,8 -40,8l-70 0zm50 -154l0 112 15 0c8,0 16,-1 23,-4 7,-3 13,-7 19,-13 5,-5 9,-11 12,-18 3,-7 4,-14 4,-21 0,-7 -1,-15 -4,-22 -3,-7 -7,-13 -12,-18 -5,-5 -11,-9 -19,-12 -7,-3 -15,-4 -23,-4l-15 0z"/><path class="fil0" d="M845 306l19 -35 19 35 -38 0zm77 71l50 0 -108 -199 -108 199 50 0 19 -35 78 0 19 35z"/>',
                ''
            ]
        ];

        $this->Page->append('header', $this->load->view('header/top_bar', [], TRUE)); // Carregando menu de navegação principal

        $this->Page->append('main', $this->load->view('content/patrocinadores', [
            'patrocinadores' => [
                'audaz' => $patrocinadores['audaz']
            ]
        ], TRUE));

        $this->Page->append('footer', $this->load->view('footer/rodape', [], TRUE)); // Carregando rodapé

        $this->load->view('page', ['page' => $this->Page->build()]); // Mostrando a página
    }
}