@include('header')
@include('main')


<body style="background-color: #F5F5DC">

    <div style="background-color: #b469ae">
        <img src="imgs/img1.jpg" class="img-fluid w-100 d-block d-sm-none h-75" alt="..." />
        <img src="imgs/img1.jpg" class="img-fluid w-100 d-none d-sm-block" alt="..." />


        <div class="container text-center pt-5 pb-5">
            <div class="container ">
                <div class="row">
                    <div class="col-12">
                        <!-- Imagem para telas pequenas -->
                        <img src="graphics/ufadpelSVG.svg" class="img-fluid w-50 d-block d-sm-none mx-auto h-75" alt="Imagem 1">
                        <!-- Imagem para telas grandes -->
                        <img src="graphics/ufadpelSVG.svg" class="img-fluid w-50 d-none d-sm-block mx-auto" alt="Imagem 2">
                    </div>
                </div>
            </div>
            <h1 style="color: white">QUEM SOMOS</h1>
            <br>
            <br>
            <p>Seja bem-vindo à Assembleia de Deus Pelotas Norte, uma igreja comprometida com a pregação do Evangelho de
                Cristo e com o cuidado espiritual de cada membro. Fundada com o propósito de levar a Palavra de Deus a
                todos os corações, nossa igreja tem se destacado pelo amor e dedicação à obra do Senhor.
                <br><br>
        </div>


        <div class="container pt-5 pb-5">
            <h1 style="color: white"class="text-center">SUPERINTENDÊNCIA</h1>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6 position-relative text-center">
                        <img src="imgs/icone1.jpg" class="img-fluid rounded-3 w-100">
                        <div class="position-absolute bottom-0 start-1 text-white p-2 rounded">
                            <h3 class="m-0">Joãozinho</h3>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative text-center">
                        <img src="imgs/icone1.jpg" class="img-fluid rounded-3 w-100">
                        <div class="position-absolute bottom-0 start-1 text-white p-2 rounded">
                            <h3 class="m-0">Joãozinho</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-5 pb-5">
                <h1 style="color: white"class="text-center">Sigam nossas redes-sociais</h1>
                <div class="d-flex gap-3 mb-2 mb-lg-0 ms-lg-auto justify-content-center">
                    <a href="https://www.instagram.com/adnorteonline" target="_blank" class="d-inline-block">
                        <i class="fab fa-instagram" style="font-size: 30px; color: black;"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61552326531887" target="_blank"
                        class="d-inline-block">
                        <i class="fab fa-facebook" style="font-size: 30px; color: black;"></i>
                    </a>
                    <a href="https://w.app/AdPelotasNorte" target="_blank" class="d-inline-block">
                        <i class="fab fa-whatsapp" style="font-size: 30px; color: black;"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


</body>
@include('rodape')
