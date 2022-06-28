<?= $this->extend('formaStandar') ?>
<?= $this->section('contenido') ?>

<body id="#page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand2" href="#">
            <img class="image2" src="/assets/assets/img/logo2.png" >
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/registro') ?>">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/login') ?>">Acceder</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">¡Encontrar a tu mascota</h1>
                <h2 class="masthead-subheading mb-0">nunca había sido tan fácil!</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
</header>

<header class="masthead2 text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h3 class="masthead-heading mb-0">Encuentra a tu amigo perruno 
                     gracias a Huellitas. Con nuestra placa la cual contiene un codigo QR, si se llega a extraviar, cualquier persona podra escanearla y enviarte un mensaje junto a sus datos y asi poder juntarte lo mas pronto con tu fiel amigo.</h3>
            </div>
        </div>
</header>

        </header>

    <!-- Footer-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="/assets/assets/img/imagen3.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Nuestra Misión</h2>
                        <p>.....</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="/assets/assets/img/imagen4.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Nuestra Visión.</h2>
                        <p>......</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid rounded-circle" src="/assets/assets/img/imagen5.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Nuestros Valores.</h2>
                        <p>......</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-black, footer text-center">
        <div class="container px-5">
        <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Ubicación:</h4>
                        <p class="lead mb-0">
                            Region Metropolitana
                            <br />
                            Santiago, de Chile.
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Encuentranos en:</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Contactos:</h4>
                        <p class="lead mb-0">
                            Teléfono: 22-7774034
                            
                            <br />
                            Email: Huellitas@contacto.cl
                            
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
        </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>


<?= $this->endSection() ?>