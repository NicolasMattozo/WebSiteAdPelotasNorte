<header class="container w-25">

    <div class="content">
        <img src="graphics/logo_adnorte(2).svg" class="main_logo img-fluid d-none d-lg-block" alt="Logo ADNorte">

        <!-- Logo para celular -->
        <img src="graphics/logo_adnorte.svg" class="main_logo_phone img-fluid d-block d-lg-none" alt="Logo ADNorte">
    </div>
</header>

<!-- Início da Navbar com conteúdo dentro dela -->
<nav class="navbar navbar-expand-lg" style="background-color: rgb(255, 145, 0);">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Botão de fechar com "X" -->
            <div class="d-flex justify-content-end w-100 d-lg-none mb-2">
                <button class="btn btn-outline-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-label="Fechar menu">
                    <i class="fas fa-times" style="font-size: 24px;"></i>
                </button>
            </div>

            <!-- Menu -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active icon-link icon-link-hover" aria-current="page" href="{{ url('/') }}" style="color: white; ">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/quem_somos') }}" style="color: white;">Quem Somos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: white;">Departamentos</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/umadpel') }}" style="color: black;">Umadpel</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/ebenezer') }}" style="color: black;">Ebenezer</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/ufadpel') }}" style="color: black;">Ufadpel</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/familia') }}" style="color: black;">Família</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: white;">Congregações</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/setor1') }}" style="color: black;">Setor 1</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/setor2') }}" style="color: black;">Setor 2</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/setor3') }}" style="color: black;">Setor 3</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/setor4') }}" style="color: black;">Setor 4</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/setor5') }}" style="color: black;">Setor 5</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/setor6') }}" style="color: black;">Setor 6</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ url('/setor7') }}" style="color: black;">Setor 7</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Redes sociais -->
            <div class="d-flex gap-3 mb-2 mb-lg-0 ms-lg-auto">
                <a href="https://www.instagram.com/adnorteonline" target="_blank" class="d-inline-block">
                    <i class="fab fa-instagram" style="font-size: 30px; color: white;"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=61552326531887" target="_blank"
                    class="d-inline-block">
                    <i class="fab fa-facebook" style="font-size: 30px; color: white;"></i>
                </a>
                <a href="https://w.app/AdPelotasNorte" target="_blank" class="d-inline-block">
                    <i class="fab fa-whatsapp" style="font-size: 30px; color: white;"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
