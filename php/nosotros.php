<?php include('header.php'); ?>

    <style>
        body {
            background-color: #f0f8eb;
            /* Verde muy claro */
            color: #000000;
            /* Negro */
        }

        /* Estilos para el mensaje de bienvenida */
        .welcome-message {
            text-align: center;
            padding: 100px 0;
        }

        /* Estilos para la imagen de bienvenida */
        .welcome-image {
            display: block;
            margin: auto;
            max-width: 50%;
            height: auto;
            margin-bottom: 50px;
            /* Espacio debajo de la imagen */
        }

        /* Estilos para el contenido después de la imagen */
        .content-after-image {
            margin-top: 50px;
            /* Espacio arriba del contenido después de la imagen */
        }

        /* Estilos para el fondo del header */
        .header-section {
            background-color: #ffffff;
            /* Color de fondo blanco */
        }
    </style>


<!-- ENCABEZADO -->
<div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">NOSOTROS</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="PRINCIPAL.php">INICIO</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">NOSOTROS</p>
                </div>
            </div>
        </div>
    </div>
<!-- ENCABEZADO -->

    <!-- Mensaje de bienvenida -->
    <div class="welcome-message">
        <h1>Bienvenido a Tu Agencia de Viajes</h1>
        <p>Descubre las mejores experiencias de viaje con nosotros.</p>
    </div>

    <!-- Imagen de bienvenida -->
    <img src="/img/acerca.jpg" alt="Imagen Bienvenida" class="welcome-image">

    <!-- Contenido después de la imagen -->
    <div class="content-after-image">
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

        <!-- Registro Start -->
        <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <div class="mb-4">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Oferta Mega</h6>
                            <h1 class="text-black"><span class="text-black">30% DE DESCUENTO</span> EN LUNA DE MIEL</h1>
                        </div>
                        <p class="text-black">"¡Haz que tu luna de miel sea aún más especial con nuestro exclusivo descuento del 30%! Disfruta de momentos inolvidables en destinos paradisíacos y crea recuerdos que durarán toda la vida. ¡No pierdas esta oportunidad única, reserva ahora y vive una experiencia de ensueño!"</p>
                        <ul class="list-inline text-black m-0">
                            <li class="py-2"><i class="fa fa-check text-black mr-3"></i>"Descubre el romance en su máxima expresión con nuestra luna de miel, donde cada detalle está diseñado para crear momentos inolvidables junto a tu ser querido."</li>
                            <li class="py-2"><i class="fa fa-check text-black mr-3"></i>"Sumérgete en destinos idílicos y disfruta de la magia de la luna de miel, donde la tranquilidad, el lujo y la aventura se fusionan para crear una experiencia única y emocionante."</li>
                            <li class="py-2"><i class="fa fa-check text-black mr-3"></i>"Con nuestros paquetes de luna de miel, te garantizamos un viaje lleno de sorpresas, romance y momentos inolvidables que te inspirarán a explorar el mundo juntos."</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="card border-0">
                            <div class="card-header bg-success text-center p-4">
                                <h1 class="text-white m-0">Regístrate Ahora</h1>
                            </div>
                            <div class="card-body rounded-bottom bg-white p-5">
                                <form id="registrationForm" action="procesar_registro.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control p-4" name="nombre" placeholder="Tu nombre" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control p-4" name="correo" placeholder="Tu correo electrónico" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select px-4" name="destino" style="height: 47px;">
                                            <option selected>Selecciona un destino</option>
                                            <option value="1">IC'EST PARIS, FRANCIA</option>
                                            <option value="2">INGLATERRA</option>
                                            <option value="3">AUSTRALIA</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button class="btn btn-success btn-block py-3" type="submit">Registrarse Ahora</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- Registro End -->
    <!-- Modal de confirmación -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="confirmationModalLabel">¡Excelente!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Se te enviará la oferta a tu correo electrónico. ¡Gracias por preferirnos!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    
    <?php include('footer.php'); ?>
