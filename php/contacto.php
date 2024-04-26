<?php include 'header.php'; ?>
    <style>
        body {
            background-color: #e6f2e5;
            /* Verde suave */
        }

        .label-green {
            color: #28a745;
            /* Verde claro */
        }

        .input-black {
            color: #000000;
            /* Negro */
        }

        .contact-form {
            background-color: #ffffff;
            /* Blanco */
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        #carousel-container {
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 30px;
        }

        #carousel-title {
            background-color: #ffffff;
            /* Blanco */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            padding: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        #carousel-images {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        #carousel-images img {
            border-radius: 10px;
        }

        #map-container {
            max-width: 100%;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            margin-bottom: 30px;
        }

        #map {
            width: 100%;
            height: 300px;
            /* Altura ajustable del mapa */
            border-radius: 10px;
        }

        .carousel-item {
            position: relative;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            /* Fondo semi-transparente para mayor legibilidad */
            color: white;
            /* Texto en color blanco para mayor contraste */
            padding: 20px;
            border-radius: 10px;
        }
    </style>


<!-- ENCABEZADO -->
<div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">CONTACTANOS</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="PRINCIPAL.php">INICIO</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">CONTACTANOS</p>
                </div>
            </div>
        </div>
    </div>
<!-- ENCABEZADO -->



    <!-- Contact and Carousel Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <!-- Contact Form -->
                <div class="col-lg-6 mb-4">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-group">
                                <label for="name" class="label-green">NOMBRE:</label>
                                <input type="text" class="form-control input-black" id="name" placeholder="Ingrese su nombre" required="required" data-validation-required-message="Por favor, ingrese su nombre" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="lastname" class="label-green">APELLIDO:</label>
                                <input type="text" class="form-control input-black" id="lastname" placeholder="Ingrese su apellido" required="required" data-validation-required-message="Por favor, ingrese su apellido" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="email" class="label-green">CORREO:</label>
                                <input type="email" class="form-control input-black" id="email" placeholder="Ingrese su correo electrónico" required="required" data-validation-required-message="Por favor, ingrese su correo electrónico" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="address" class="label-green">DIRECCIÓN:</label>
                                <input type="text" class="form-control input-black" id="address" placeholder="Ingrese su dirección" required="required" data-validation-required-message="Por favor, ingrese su dirección" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="label-green">NÚMERO DE TELÉFONO:</label>
                                <input type="tel" class="form-control input-black" id="phone" placeholder="Ingrese su número de teléfono" required="required" data-validation-required-message="Por favor, ingrese su número de teléfono" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success py-3 px-4" type="submit" id="sendMessageButton">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Carousel -->
                <div class="col-lg-6">
                    <div id="carousel-container">
                        <div id="carousel-title">
                            <h2 class="text-center">ANÍMATE A VIAJAR</h2>
                            <p class="text-center">Recuerda que la vida no es para siempre</p>
                        </div>
                        <div id="carousel-images" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active text-center">
                                    <img class="d-block w-100" src="/img/italia.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block text-center">
                                        <h5>ITALIA</h5>
                                        <p>Descubre la magia de Italia mientras te pierdes en sus calles empedradas, saboreas la deliciosa cocina italiana</p>
                                    </div>
                                </div>
                                <!-- Agrega más imágenes aquí -->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/francia.avif" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block text-center">
                                        <h5>TORRE EIFFEL</h5>
                                        <p>Descubre la magia y la grandeza de la Torre Eiffel en un viaje inolvidable a Francia.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/australia.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block text-center">
                                        <h5>AUSTRALIA</h5>
                                        <p>Explora la maravillosa diversidad natural y cultural de Australia en un viaje único.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/inglaterra.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block text-center">
                                        <h5>INGLATERRA</h5>
                                        <p>Descubre la majestuosidad histórica y la vibrante vida moderna de Inglaterra.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/img/españa.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block text-center">
                                        <h5>ESPAÑA</h5>
                                        <p>Embárcate en un viaje a España y sumérgete en su rica cultura.</p>
                                    </div>
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carousel-images" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-images" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact and Carousel End -->

    <!-- Map Container -->
    <div id="map-container" class="container text-center">
        <h2>DIRECCIÓN <i class="fas fa-map-marker-alt"></i></h2>
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7721.418167633918!2d-90.5055757!3d14.615641200000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sgt!4v1712867923736!5m2!1ses!2sgt" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <?php include 'footer.php'; ?>
