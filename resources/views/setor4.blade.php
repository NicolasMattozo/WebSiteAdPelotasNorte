@include('main')
@include('header')

<body style="background-color: #F5F5DC">
<div id="container">
    <div class="container text-center mt-5">
        <h2>SETOR 1</h2>
    </div>
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
        <div class="container mb-5 mt-5">
            <div class="container">
                <div id="imageSlider" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="2"></button>
                    </div>

                    <!-- Slides -->
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="imgs/img1.jpg" class="d-block w-100 d-md-none vh-100" alt="Beautiful Mountain">
                            <img src="imgs/img1.jpg" class="d-block w-100 d-none d-md-block" alt="Beautiful Mountain">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Beautiful Mountain</h5>
                                <p>A stunning view of a snow-capped mountain during sunset.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/img2.jpg" class="d-block w-100 d-md-none vh-100" alt="Serene Beach">
                            <img src="imgs/img2.jpg" class="d-block w-100 d-none d-md-block" alt="Serene Beach">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Serene Beach</h5>
                                <p>A peaceful beach with golden sands and crystal-clear water.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/img3.jpg" class="d-block w-100 d-md-none vh-100" alt="Lush Forest">
                            <img src="imgs/img3.jpg" class="d-block w-100 d-none d-md-block" alt="Lush Forest">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Lush Forest</h5>
                                <p>A dense forest with towering trees and vibrant green foliage.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>



    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col"><i class="fa-solid fa-clock"></i></i></th>
                <th scope="col">Dias de Culto</th>
                <th scope="col">Horário</th>
                <th scope="col">Departamento</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="col"><i class="fa-solid fa-arrow-right"></i></th>
                <th scope="row">Terça-Feira</th>
                <td>19:30hrs</td>
                <td>Familia</td>

              </tr>
              <tr>
                <th scope="col"><i class="fa-solid fa-arrow-right"></i></th>
                <th scope="row">Quinta-Feira</th>
                <td>19:30hrs</td>
                <td>Umadpel</td>

              </tr>
              <tr>
                <th scope="col"><i class="fa-solid fa-arrow-right"></i></th>
                <th scope="row">Sabado</th>
                <td>19:30hrs</td>
                <td>Ebenezer</td>

              </tr>
              <tr>
                <th scope="col"><i class="fa-solid fa-arrow-right"></i></th>
                <th scope="row">Domingo</th>
                <td>19:30hrs</td>
                <td>Ufadpel</td>

              </tr>
            </tbody>
          </table>
  </div>
  @include('maps')
  </div>
</body>
  @include('rodape')
