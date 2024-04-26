<?php
include('header.php');
?>


<!-- Carousel Inicio -->
<div class="container-fluid p-0" id="carousel">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="../img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3 text-center" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"><strong>Viaja y Disfruta</strong></h4>
                        <h1 class="display-3 text-white font-weight-bold mb-md-4">Vamos a Conocer el Mundo Juntos</h1>
                        <a href="" class="btn btn-success py-md-3 px-md-5 mt-3 reserva-btn">Reserva Ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="../img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="p-3 text-center" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"><strong>Viaja y Disfruta</strong></h4>
                        <h1 class="display-3 text-white font-weight-bold mb-md-4">Vamos a Conocer el Mundo Juntos</h1>
                        <a href="" class="btn btn-success py-md-3 px-md-5 mt-3 reserva-btn">Reserva Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
    </button>
</div>
<!-- Carousel Fin -->


    <!-- Reserva Inicio -->
    <div class="container-fluid reserva mt-5 pb-5 position-relative" id="reserva">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <label for="">Destino:</label>
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Seleccione el Destino</option>
                                        <option value="1">AMERICA</option>
                                        <option value="2">EUROPA</option>
                                        <option value="3">ASIA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <label for="">Fecha de Salida:</label>
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Fecha de Salida" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <label for="fecha retorno">Fecha de Retorno:</label>
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Fecha de Retorno" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <label for="">Duracion:</label>
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Tiempo del Viaje</option>
                                        <option value="1">5 Dias</option>
                                        <option value="2">10 Dias</option>
                                        <option value="3">15 Dias</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    <a href="" class="btn btn-primary py-md-3 px-md-5 mt-3 reserva-btn">Enviar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reserva Fin -->

    <!-- Nosotros Inicio -->
    <div class="container-fluid py-5" id="nosotros">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="../img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Acerca de Nosotros</h6>
                        <h1 class="mb-3">Te Daremos los Mejores Viajes a los Mejores Precios</h1>
                        <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="../img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="../img/about-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="" class="btn btn-primary mt-1">Reserva Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nosotros Fin -->

    <!-- Beneficios Inicio-->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" id= "icono" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Precios Unicos</h5>
                            <p class="m-0">Nuestros precios bajos haran que nunca quieres ddejar de viajar por el mundo</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" id= "icono" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Excelente Servicio</h5>
                            <p class="m-0">Servicio de calidad, reconocido munidalmente por nuestros miles de clientes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" id= "icono" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Covertura Mundial</h5>
                            <p class="m-0">Te llevamos a cualquier parte del mundo y te llevamos de vuelta a tu hogar sin problemas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Beneficios Fin -->

    
    <!-- Destinos Inicio -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 id="DESTINOS"  class="text-primary text-uppercase"  style="letter-spacing: 5px;">DESTINOS FANTASTICOS</h6>
                <h1>NUESTROS DESTINOS MAS EXPLORADOS</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../img/destination-1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="contacto.php">
                            <h5 class="text-white">ESTADOS UNIDOS</h5>
                            <span>100 DESTINOS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../img/destination-2.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="contacto.php">
                            <h5 class="text-white">INGLATERRA</h5>
                            <span>100 DESTINOS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../img/destination-3.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="contacto.php">
                            <h5 class="text-white">Australia</h5>
                            <span>100 DESTINOS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../img/destination-4.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="contacto.php">
                            <h5 class="text-white">India</h5>
                            <span>100 DESTINOS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../img/destination-5.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="contacto.php">
                            <h5 class="text-white">SURAFRICA</h5>
                            <span>100 DESTINOS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="../img/destination-6.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="contacto.php">
                            <h5 class="text-white">Indonesia</h5>
                            <span>100 DESTINOS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destinos Fin    -->


     <!-- Servicios Inicio -->
     <div class="container-fluid py-5" id="SERVICIOS">
        <div class="container pt-5 pb-3">
            <div  class="text-center mb-3 pb-3">
                <h6 id="SERVICIOS" class="text-primary text-uppercase" style="letter-spacing: 5px;">SERVICIOS</h6>
                <h1>Servicios de Tours y Viajes</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Guia de Viaje</h5>
                        <p class="m-0">Uno de nuestros guias profesionales te llevará a lo largo de tu viaje y te llevará a donde estan las mejores atracciones turisticas</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket de Reservacion</h5>
                        <p class="m-0">Te enviamos un ticket de reservacion para evitar los malos entendidos y que tu reservacion reservacion sea aun mas formal que con otros servicios</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket de Hospedaje</h5>
                        <p class="m-0">Te enviamos tu ticket de hospedaje para que puedas alojarte comoda y rapidamente en el hotel y que puedas descansar despues de vivir experiencias unicas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Servicios Fin -->


     <!-- Inicio Paquetes -->
     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">PAQUETES</h6>
                <h1>Paquetes de Viaje Perfectos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../img/package-1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Londres</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre lugares asombrosos con nosotros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(500)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../img/package-2.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Tailandia</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>10 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre lugares asombrosos con nosotros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(1,500)</small></h6>
                                    <h5 class="m-0">$800</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../img/package-3.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Hawaii</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>5 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre lugares asombrosos con nosotros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(500)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../img/package-4.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Playa Blanca</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre lugares asombrosos con nosotros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$400</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../img/package-5.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Cancun</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre lugares asombrosos con nosotros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(300)</small></h6>
                                    <h5 class="m-0">$350</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../img/package-6.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Europa</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>20 dias</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">Descubre lugares asombrosos con nosotros</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(750)</small></h6>
                                    <h5 class="m-0">$950</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Paquetes -->



     <!-- Inicio Equipo -->
     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">NUESTROS EQUIPO</h6>
                <h1>Nuestros Guias Mas Experimentados</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://gt.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">CARMEN ORTIZ</h5>
                            <p class="m-0">Guia Asiatica</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://gt.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">MARTIN RODRIGUEZ</h5>
                            <p class="m-0">Guia Europeo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://gt.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">PAOLA TORRES</h5>
                            <p class="m-0">Guia Africana</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../img/team-4.jpg" alt="">
                            <div class="team-social">
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a id="redes" class="btn btn-outline-primary btn-square" href="https://gt.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h5 class="text-truncate">ERNESTO DE LA CRUZ</h5>
                            <p class="m-0">Guia Americano</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Equipo -->


    <a href="#" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <?php
include('footer.php');
?>


