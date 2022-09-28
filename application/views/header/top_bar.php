<nav id="top_bar" class="bg-dark py-3">
    <ul id="top_bar_list" class="h-100 align-items-end container-fluid row m-0">
        <!-- Logotipo -->
        <li class="container col-3 p-0 align-items-end">
            <div class="w-50">
                <div>
                    <a class="navbar-brand" href="<?=base_url('app/home');?>">
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 798 191">
                            <defs>
                                <image id="img1" href="data:image/png;base64,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"/>
                            </defs>
                            <style>
                            </style>
                            <use id="Background" href="#img1" x="0" y="0"/>
                        </svg>
                    </a>
                </div>
            </div>
        </li>
        <!-- Menus -->
        <li class="col-md-8 p-0 d-flex align-items-end justify-content-end">
            <div class="dropdown px-2">
                <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Equipes
                </button>
                <ul class="dropdown-menu row">
                    <li>
                        <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/organizacao')?>"> Organização e Método </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/engenharia')?>"> Engenharia </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/merito')?>"> Mérito Científico </a>
                    </li>
                    <li>
                        <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/tecnico-e-mentores')?>"> Técnico e Mentores </a>
                    </li>
                </ul>
            </div>
            <div class="dropdown px-2">
                <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Patrocinadores
                </button>
                <ul class="dropdown-menu row justify-content-center align-items-center">
                    <li>
                        <a class="dropdown-item text-dark" href="<?=base_url('app/patrocinador/audaz')?>"> Audaz Global </a>
                    </li>
                </ul>
            </div>
            <div class="dropdown px-2">
                <div>
                    <button class="btn text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        Desenvolvimento
                    </button>
                    <ul class="dropdown-menu row">
                        <li class="dropstart d-flex">
                            <button class="btn text-dark dropdown-toggle w-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Documentação
                            </button>
                            <ul class="dropdown-menu row">
                                <li>
                                    <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/')?>"> Organização e Método </button>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/')?>"> Engenharia </button>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/')?>"> Mérito Científico </button>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="<?=base_url('app/equipe/')?>"> Técnico </button>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button class="btn text-dark w-100" style="text-align: left;"> Progresso </button>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
    <div class="py-5 d-flex flex-column align-items-end position-fixed bottom-0 end-0 p-0" style="z-index: 99; max-width: 85px;" id="top_bar_social_media_container">
        <!-- Instagram -->
        <div class="px-4 py-0 pt-5 py-2" id="top_bar_social_media_ig">
            <a href="https://www.instagram.com/cybersenai/" target="_blank">
                <svg class="w-100" id="top_bar_social_media_svg_ig" viewBox="0 0 20 20"><path fill="gray" d="M14.52,2.469H5.482c-1.664,0-3.013,1.349-3.013,3.013v9.038c0,1.662,1.349,3.012,3.013,3.012h9.038c1.662,0,3.012-1.35,3.012-3.012V5.482C17.531,3.818,16.182,2.469,14.52,2.469 M13.012,4.729h2.26v2.259h-2.26V4.729z M10,6.988c1.664,0,3.012,1.349,3.012,3.012c0,1.664-1.348,3.013-3.012,3.013c-1.664,0-3.012-1.349-3.012-3.013C6.988,8.336,8.336,6.988,10,6.988 M16.025,14.52c0,0.831-0.676,1.506-1.506,1.506H5.482c-0.831,0-1.507-0.675-1.507-1.506V9.247h1.583C5.516,9.494,5.482,9.743,5.482,10c0,2.497,2.023,4.52,4.518,4.52c2.494,0,4.52-2.022,4.52-4.52c0-0.257-0.035-0.506-0.076-0.753h1.582V14.52z"></path></svg>
            </a>
        </div>
        <!-- Facebook -->
        <div class="px-4 py-0 py-2" id="top_bar_social_media_fb">
            <a href="https://www.facebook.com/cybersenai" target="_blank">
                <svg class="w-100" id="top_bar_social_media_svg_fb" viewBox="0 0 20 20"><path fill="gray" d="M11.344,5.71c0-0.73,0.074-1.122,1.199-1.122h1.502V1.871h-2.404c-2.886,0-3.903,1.36-3.903,3.646v1.765h-1.8V10h1.8v8.128h3.601V10h2.403l0.32-2.718h-2.724L11.344,5.71z"></path></svg>
            </a>
        </div>
        <!-- Tik Tok -->
        <div class="px-4 py-0 py-2" id="top_bar_social_media_tk">
            <a href="https://www.tiktok.com/@cybersenai" target="_blank">
                <svg class="w-100" id="top_bar_social_media_svg_tk" viewBox="0 0 24 24"><path fill="gray" d="M12.525.02c1.31-.02 2.61-.01 3.91-.02c.08 1.53.63 3.09 1.75 4.17c1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97c-.57-.26-1.1-.59-1.62-.93c-.01 2.92.01 5.84-.02 8.75c-.08 1.4-.54 2.79-1.35 3.94c-1.31 1.92-3.58 3.17-5.91 3.21c-1.43.08-2.86-.31-4.08-1.03c-2.02-1.19-3.44-3.37-3.65-5.71c-.02-.5-.03-1-.01-1.49c.18-1.9 1.12-3.72 2.58-4.96c1.66-1.44 3.98-2.13 6.15-1.72c.02 1.48-.04 2.96-.04 4.44c-.99-.32-2.15-.23-3.02.37c-.63.41-1.11 1.04-1.36 1.75c-.21.51-.15 1.07-.14 1.61c.24 1.64 1.82 3.02 3.5 2.87c1.12-.01 2.19-.66 2.77-1.61c.19-.33.4-.67.41-1.06c.1-1.79.06-3.57.07-5.36c.01-4.03-.01-8.05.02-12.07z"/></svg>
            </a>
        </div>
    </div>
</nav>