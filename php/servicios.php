<?php include('header.php') ?>
    <style>
        body {
            background-color: #f0f8eb;
            /* Verde muy claro */
            color: #000000;
            /* Negro */
        }

        .text-primary {
            color: #28a745 !important;
            /* Verde Bootstrap */
        }

        .service-item {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            /* Sombra suave */
        }

        .service-item h5 {
            color: #000000;
            /* Negro */
        }

        /* Estilo para las imágenes */
        .service-image {
            width: 100%;
            height: 200px;
            /* Altura fija para todas las imágenes */
            object-fit: cover;
            /* Para ajustar la imagen en su contenedor */
        }
    </style>

<!-- ENCABEZADO -->
<div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">SERVICIOS</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="PRINCIPAL.php">INICIO</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">SERVICIOS</p>
                </div>
            </div>
        </div>
    </div>
<!-- ENCABEZADO -->

    <!-- Servicio Inicio -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
                <h1>Tours y Servicios de Viaje</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Guía de Viaje</h5>
                        <p class="m-0">"Descubre el mundo con nuestra guía de viaje experta. Desde los destinos más exóticos hasta los rincones más encantadores, te llevaremos en un viaje lleno de descubrimientos, aventuras y momentos inolvidables. Deja que nuestra experiencia sea tu mejor compañera."</p>
                    </div>
                    <img src="/img/guia.jpg" alt="Imagen Guía de Viaje" class="service-image">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Reserva de Boletos</h5>
                        <p class="m-0">Simplifica tu viaje reservando tus boletos con nosotros. Con acceso a una amplia red de aerolíneas y destinos, garantizamos comodidad, conveniencia y excelentes tarifas. Viaja con tranquilidad y disfruta de un proceso de reserva sin complicaciones."</p>
                    </div>
                    <img src="/img/boleto.jpg" alt="Imagen Reserva de Boletos" class="service-image">
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Reserva de Hoteles</h5>
                        <p class="m-0">"Haz que tu estadía sea inolvidable con nuestras opciones de reserva de hoteles. Desde lujosos resorts hasta acogedores alojamientos locales, te ofrecemos variedad, calidad y el mejor servicio. Reserva con nosotros y convierte cada noche en una experiencia excepcional."</p>
                    </div>
                    <img src="/img/hotel.jpg" alt="Imagen Reserva de Hoteles" class="service-image">
                </div>
            </div>
        </div>
    </div>
    <!-- Servicio Fin -->
    <!-- Testimonio Inicio -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonios</h6>
                <h1>Lo que dicen nuestros clientes</h1>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="text-center pb-4">
                            <img class="img-fluid mx-auto" src="/img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                            <div class="testimonial-text bg-white p-4 mt-n5">
                                <p class="mt-5">"¡Increíble experiencia! Nuestro viaje organizado por esta agencia fue simplemente perfecto. Desde la atención personalizada hasta los detalles cuidadosamente planificados, cada momento fue mágico. Definitivamente volveremos a reservar con ustedes."</p>
                                <h5 class="text-truncate">Mario Quijada</h5>
                                <span>Ingeniero Civil</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="img-fluid mx-auto" src="/img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                            <div class="testimonial-text bg-white p-4 mt-n5">
                                <p class="mt-5">"Quedamos encantados con el servicio de reserva de boletos. Rápido, eficiente y con excelentes precios. Gracias a esto, pudimos disfrutar de unas vacaciones sin preocupaciones y con toda la comodidad que necesitábamos."</p>
                                <h5 class="text-truncate">Daniela Peralta</h5>
                                <span>Licenciada</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="img-fluid mx-auto" src="/img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                            <div class="testimonial-text bg-white p-4 mt-n5">
                                <p class="mt-5">"La guía de viaje fue excepcional. Nos llevó a descubrir lugares asombrosos que nunca habríamos encontrado por nuestra cuenta. Además, sus conocimientos y recomendaciones hicieron que nuestro viaje fuera aún más enriquecedor."</p>
                                <h5 class="text-truncate">Luis Martinez</h5>
                                <span>Ministro de Educacion</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-center">
                            <img class="img-fluid mx-auto" src="/img/testimonial-4.jpg" style="width: 100px; height: 100px;">
                            <div class="testimonial-text bg-white p-4 mt-n5">
                                <p class="mt-5">"La reserva de hoteles superó nuestras expectativas. Nos encontramos con alojamientos de alta calidad y un servicio impecable. Cada lugar en el que nos hospedamos fue una experiencia única y memorable."</p>
                                <h5 class="text-truncate">Carlos Ojeda</h5>
                                <span>Futbolista Profesional</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Testimonio Fin -->

    <?php include('footer.php') ?>
