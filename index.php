<!--DHALI DEVS --->
<!DOCTYPE html>
<html lang="es" xml:lang="es">

<head>
    <?php
    //include 'assets/php/conexion_db.php'; 
    include 'assets/php/functions.php';

    $site = get_info($con);
    ?>

    <!-- Basic -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?= $site['descripcion'] ?>">

    <title>
        <?= $site['nombre'] ?>
    </title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- favicon & bookmark -->
    <link rel="shortcut icon" href="<?= $site['nombre']; ?>" type="image/x-icon">
    <link rel="icon" href="<?= $site['nombre']; ?>" type="image/x-icon">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.min.css" type="text/css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" />

</head>

<body>


    <!--Main Wrapper Start-->
    <div class="wrapper" id="top">
        <!--Header Start -->

        <header class="main-header light-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 logo m-auto">
                        <a href="./" title="Baterías LTH">
                            <img src="<?= $site['logo'] ?>" widht="100%" height="100%" title="<?= $site['nombre'] ?>"
                                alt="<?= $site['nombre'] ?>" class="regular-logo">
                            <img src="<?= $site['logo'] ?>" widht="100%" height="100%" title="<?= $site['nombre'] ?>"
                                alt="<?= $site['nombre'] ?>" class="sticky-logo">
                        </a>
                    </div>
                    <div class="col-sm-7 menu-conainer m-auto">
                        <ul class="call-to-button">
                            <li><button id="phone" type="button"><i class="fas fa-phone"></i> Llama al
                                    <?= $site['phone'] ?>
                                </button></li>
                            <li><button id="whatsapp" type="button"><i class="fab fa-whatsapp"></i></button></li>
                            <li><button id="location" type="button"><i class="fas fa-map-marker-alt"></i></button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <header class="second-header position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="set-title">
                            <div class="icons">
                                <img src="assets/images/product/FULL POWER.webp" alt="<?= $site['nombre'] ?>">
                            </div>
                            <div class="legend_title">
                                <h1>¿Problemas con tu Batería?</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="set-title">
                            <div class="icons">
                                <img src="assets/images/MOTO_LTH.png" alt="<?= $site['nombre'] ?>">
                            </div>
                            <div class="legend_title">
                                <h1> ¡Estamos contigo en máximo <strong>60</strong> minutos</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Content Section Start -->
        <div class="main-container">
            <!--SLIDER INICIO-->
            <section id="home" class="height-100 hero-section light-text">
                <div class="section-background">
                    <div class="background-wrapper">
                        <div class="background-inner"
                            style="background-image: url('assets/images/bg-5.jpg'); background-repeat: no-repeat;background-position: center center; background-size: cover; background-color:#1c232d; ">
                        </div>
                    </div>
                </div>
                <div class="container double-top-padding double-bottom-padding">
                    <div class="row">
                        <div class="col-md-6 banner-content">
                            <ol class="menu-principal">
                                <li onclick="window.location.href='#centro-de-servicio';">Centros de Servicio</li>
                                <li onclick="window.location.href='#';">Venta a Domicilio</li>
                                <li onclick="window.location.href='#productos';">Productos</li>
                                <li onclick="window.location.href='#preguntas-frecuentes';">Preguntas Frecuentes</li>
                                <li onclick="window.location.href='#porque-elegirnos';">¿Porqué elegirnos?</li>
                            </ol>
                            <div class="placeholder-text">BASS LTH</div>
                        </div>
                    </div>
                    <div class="phone">
                        <div class="container-phone">
                            <img src="assets/images/phone-medium.png" alt="">
                            <div class="carousel-text">
                                <div class="text-banner owl-carousel owl-carousels">
                                    <?php
                                    $bannerData = get_banner($con);

                                    if ($bannerData !== false) {
                                        foreach ($bannerData as $bannerItem) {
                                            ?>
                                            <div class="content-t">
                                                <div>
                                                    <h2>
                                                        <?= $bannerItem['descripcion'] ?>
                                                    </h2>
                                                    <button onclick="window.location.href='<?= $bannerItem['link'] ?>';">
                                                        <i class="fas fa-user-plus"></i>
                                                        <?= $bannerItem['button'] ?>
                                                    </button>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "No se pudieron obtener datos del banner.";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CENTRO DE SERVICIO -->
            <section id="centro-de-servicio" class="design-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="heading-wrapper">
                                <h2 class="large-heading text-uppercase">Centros de Servicio</h2>
                            </div>
                            <div class="text-block text-lead">
                                <p>Wheels DAD3333 comes with new modern design to give your more driving power and
                                    thrilling experience with added stance, proportions, and a certain attitude.</p>
                            </div>
                            <div class="btn-wrapper text-center">
                                <a href="#" class="btn btn-primary has-icon"><span>Utiliza tu ubicación</span><i
                                        class="fas fa-map-marker-alt"></i></a>
                            </div><br>
                            <hr>
                            <div class="p-5">
                                <form>
                                    <div class="form-row">
                                        <div class="col-lg-6 col-sm-6">
                                            <select name="country" class="form-control">
                                                <option value="">Select Country</option>
                                                <option value="Country 1">Country 1</option>
                                                <option value="Country 2">Country 2</option>
                                                <option value="Country 3">Country 3</option>
                                                <option value="Country 4">Country 4</option>
                                                <option value="Country 5">Country 5</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <select name="sate" class="form-control">
                                                <option value="">Select State</option>
                                                <option value="State 1">State 1</option>
                                                <option value="State 2">State 2</option>
                                                <option value="State 3">State 3</option>
                                                <option value="State 4">State 4</option>
                                                <option value="State 5">State 5</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <input type="submit" class="btn fw" value="Buscar sucursal">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="img-wrapper">
                                <img src="assets/images/image-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--NUESTROS PRODUCTOS-->
            <section id="productos" class="feature-section black-bg light-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-wrapper text-center">
                                <h2 class="large-heading text-uppercase">
                                    <span><i class="fas fa-car-battery"></i></span>Nuestros Productos
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-product view_product owl-carousel">
                                <div class="item">
                                    <!---POSITIVE---->
                                    <div class="negative">
                                        <span class="fonde_0"
                                            style="background-image: url(assets/images/fondo/fonde-2.jpg)"></span>
                                        <div class="left">
                                            <div class="product">
                                                <img src="assets/images/product/LTH.webp" alt="" widht="250"
                                                    height="250" />
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="features-box">
                                                <h4>More Powerfull RIM</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                    hendrerit nisi sed sollicitudin pellentesque.
                                                </p>
                                                <button type="button">Cotiza ahora</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!---NEGATIVE---->
                                    <div class="positive">
                                        <span class="fonde_0"
                                            style="background-image: url(assets/images/fondo/fonde-1.jpg)"></span>
                                        <div class="left">
                                            <div class="features-box">
                                                <h4>More Powerfull RIM</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                    hendrerit nisi sed sollicitudin pellentesque.
                                                </p>
                                                <button type="button">Cotiza ahora</button>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="product">
                                                <img src="assets/images/product/LTH.webp" alt="" widht="250"
                                                    height="250" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PREGUNTAS FRECUENTES -->
            <section id="preguntas-frecuentes" class="variation-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-wrapper text-center">
                                <h2 class="large-heading text-uppercase"><span>LTH</span>Preguntas Frecuentes</h2>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="container-fluid">
                                <div class="questions">
                                    <div class="qu_left">
                                        <?php $img_site = get_image_site($con, 'preguntas') ?>
                                        <img src="<?= $img_site['img']; ?>" alt="<?= $img_site['meta_desc']; ?>"
                                            title="<?= $img_site['meta_desc']; ?>" width="100%" height="100%">
                                    </div>
                                    <ul>
                                        <?php
                                        $questions = get_questions($con);
                                        if ($bannerData !== false) {
                                            foreach ($questions as $q) {
                                                ?>
                                                <li>
                                                    <h3>
                                                        <?= $q['title'] ?>
                                                    </h3>
                                                    <p>
                                                        <?= $q['description'] ?>
                                                    </p>
                                                </li>
                                                <?php
                                            }
                                        } else {
                                            echo "<li>No se pudieron obtener datos del banner.</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <!--POR QUE ELEGIRNOS -->
            <section id="porque-elegirnos" class="capability-section light-gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="container">
                                <div class="why_choose heading-wrapper">
                                    <h2 class="large-heading text-uppercase"><span>LTH</span>¿Porqué Elegirnos?</h2>
                                    <p>Nuestra promesa es proporcionarte un servicio de primera
                                        calidad. Tenemos ubicaciones en varios puntos de la CDMX y
                                        el Estado de México, además, ofrecemos servicio a domicilio y
                                        trabajamos con las principales marcas del mercado.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                        </div>
                        <div class="col-md-7">
                            <h3>¡Tu vehículo esta en buenas manos!</h3>
                            <ul>
                                <li>Nuestros técnicos tienen una amplia experiencia, lo que asegura un procedimiento
                                    exitoso al
                                    cambiar la batería de tu vehículo.</li>
                                <li>Tenemos una red de centros de servicio ubicados estratégicamente para estar más
                                    cerca de ti, y
                                    seguimos expandiéndonos constantemente.</li>
                            </ul>
                        </div>
                        <div class="col-md-5">
                            <div class="testimonios">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--footer Start-->
        <footer class="site-footer">
            <div class="footer-widget-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">
                                        <?= $site['nombre'] ?>
                                    </h4>
                                </div>
                                <div class="widget-contet">
                                    <img src="<?= $site['logo'] ?>" class="footer-logo" alt="<?= $site['nombre'] ?>">
                                    <p>
                                        <?= $site['descripcion'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Menú</h4>
                                </div>
                                <div class="widget-contet footer-menu">
                                    <ul class="menu">
                                        <li><a href="#centro-de-servicio">Centros de Servicio</a></li>
                                        <li><a href="#">Venta a Domicilio</a></li>
                                        <li><a href="#productos">Productos</a></li>
                                        <li><a href="#preguntas-frecuentes">Preguntas Frecuentes</a></li>
                                        <li><a href="#porque-elegirnos">¿Porqué elegirnos?</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Contacto</h4>
                                </div>
                                <div class="widget-contet contact-info">
                                    <div class="widget-contact-info">
                                        <i class="fas fa-phone"></i>
                                        <h3>Teléfono</h3>
                                        <span><a href="tel:<?= $site['phone'] ?>">
                                                <?= $site['phone'] ?>
                                            </a></span>
                                    </div>
                                    <div class="widget-contact-info">
                                        <i class="fas fa-envelope-open"></i>
                                        <h3>Email</h3>
                                        <span><a href="mailt:<?= $site['mail'] ?>">
                                                <?= $site['mail'] ?>
                                            </a></span>
                                    </div>
                                    <div class="widget-contact-info">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <h3>Dirección</h3>
                                        <span><a href="#centro-de-servicio">Centro de Servicio</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="widget">
                                <div class="widget-heading">
                                    <h4 class="widget-title">Síguenos</h4>
                                </div>
                                <div class="widget-contet">
                                    <div class="footer-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center">
                <div class="container">
                    <div class="copyright-text">©
                        <?= date("Y") . ' ' . $site['nombre'] ?> Developed by <a target="_blank"
                            href="https://dimarketing.com.mx/"> Dimarketing </a>.
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->
    </div>
    <!--Main Wrapper End-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/cascading-select.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/onpagescroll.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/fancybox/jquery.fancybox.min.js"></script>
    <!--COMPONENTS-->
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>