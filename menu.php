<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Menu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Yummy<span>.</span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#chefs">Chefs</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <a class="btn-book-a-table" href="#book-a-table">Book a Table</a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->

    <br>

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Productos</h2>
                <p>Registra <span>Un Producto</span>Por Favor</p>
            </div>

            <div class="row g-0">

                <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/plato.jpg);" data-aos="zoom-out" data-aos-delay="50"></div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form action="" class="p-4" method="post" enctype="multipart/form-data" >
                <div class="row gy-4 ">
                            <div class="col-lg-4 col-md-6  php-email-form">
                                <input type="number" name="codigo" class="form-control" id="codigo" placeholder="Codigo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required >
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 php-email-form">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Producto" data-rule="nombre" data-msg="Please enter a valid email" required>
                                <div class="validate"></div>
                            </div>
                           <!-- <div class="col-lg-4 col-md-6 php-email-form">
                                <input type="text" class="form-control" name="categoria" id="nombre" placeholder="categoria del Producto" data-rule="nombre" data-msg="Please enter a valid email" required>
                                <div class="validate"></div>
                            </div> -->

                            <div class="col-lg-4 col-md-6 php-email-form">
                                <select class="form-control" name="categoria" id="categoria" placeholder="Categorias" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                                    <option value="" disabled selected>Categorías:</option>
                                    <?php
                                    require('config.php');
                                    $sql = "SELECT * FROM categoria";
                                    $result = mysqli_query($conectar, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>

                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 php-email-form" >
                                <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio Unitario" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 php-email-form">
                                <input type="file" class="form-control" name="foto" id="foto" placeholder="Fotografia" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group mt-3  php-email-form">
                            <textarea class="form-control" name="descripcion" rows="5" placeholder="Descripcion"></textarea required>
                            <div class="validate"></div>
                        </div>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto mb-5 php">
                            <button class="btn btn-danger php" name="action"  type="submit">Guardar</button>
                        </div>
                    </form>
                </div><!-- End Reservation Form -->

            </div>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- Guardado  -->

<!--<script>
    // Capturamos el botón
    const guardarBtn = document.getElementById('guardarBtn');

    // Agregamos un evento click al botón
    guardarBtn.addEventListener('click', function() {
        // Mostramos un mensaje en la consola para verificar que el botón se ha clicado
        console.log('Botón clicado');

        // Lanzamos el mensaje de confirmación
        Swal.fire({
            title: "Excelente",
            text: "Guardado Exitoso!",
            icon: "success"
        });
    });
</script>-->








    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Dirección</h4>
                        <p>
                            Calle 15 K 26-30 San Carlos <br>
                            Corozal-Sucre<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservación</h4>
                        <p>
                            <strong>Telefono:</strong> +57 314 55437 27<br>
                            <strong>Email:</strong> emol242004@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Abierto</h4>
                        <p>
                            <strong>Lun-Sab: 11AM</strong> - 11PM<br>
                            Domingos: Cerrado
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Siguenos</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurante Sena</span></strong>. Reservados todos los derechos
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Diseñado por <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>


<?php
    // Verifica si se ha enviado el formulario y se ha presionado el botón guardar
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
        // Incluye el archivo de configuración de la base de datos
        require('config.php');

        // Recopila los datos del formulario
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria']; // Cambiado el nombre de la variable
        $precio = $_POST['precio'];
        
        // Manejo del archivo de imagen
        $foto = $_FILES['foto']['name'];
        $foto_temp = $_FILES['foto']['tmp_name'];

        // Verifica si se cargó correctamente el archivo
        if (is_uploaded_file($foto_temp)) {
            // Ruta de destino de la imagen corregida
            $foto_destino = __DIR__ . '/assets/foto/' . $foto;
            
            $descripcion = $_POST['descripcion'];
            // Mueve el archivo cargado a la ubicación deseada
            if (move_uploaded_file($foto_temp, $foto_destino)) {
                // Prepara la consulta SQL para insertar los datos
                $sql = "INSERT INTO `restaurantedb`.`producto` (`codigo`, `nombre`, `categoria_codigo`, `precio`, `foto`, `descripcion`) VALUES ('$codigo', '$nombre', '$categoria', '$precio', '$foto', '$descripcion')";
 

                // Ejecuta la consulta SQL
                if (mysqli_query($conectar, $sql)) {
                    echo "Datos guardados correctamente.";
                } else {
                    echo "Error al guardar los datos: " . mysqli_error($conectar);
                }
            } else {
                echo "Error al mover el archivo de imagen.";
            }
        } else {
            echo "Error al cargar el archivo.";
        }

        // Cierra la conexión a la base de datos
        mysqli_close($conectar);
    }
?>
