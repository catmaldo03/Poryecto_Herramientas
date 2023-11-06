<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg bg-light px-3 py-1">
                    <div class="container-fluid">
                        <div>
                            <img src="imagen/logo.png" alt="catg-logo" class="nav-logo">
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Herramientas</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Noticias</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Magister</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Cotizacion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class ="row">
           <div class="col-md-6">
            Texto de algo
           </div>
           <div class="col-md-6">
            Imagen
           </div> 
        </div>

        <div class="column">
            <div class="row-xl-8 text-center">
                <div class="banner">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> 
            </div>
            <div class="row-xl-4 text-center">
                Contexto Magister
            </div>
        </div>
        <div class="column">
            <div class="row-xl-8">
                <div class="row">
                    <div class="col-xl-6 text-center">
                        <div class="banner">
                            Slider de malla
                        </div> 
                    </div>
                    <div class="col-xl-6 text-center">
                        <div class="banner">
                            video promocional
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row-xl-4 text-center">
                requisitos maguister
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
<footer class="p-2">
  <div class="row">
    <div class="col-md-3">
        <img src="imagen/logo.png" alt="catg-logo" class="footer-logo catg">
    </div>
    <div class="col-md-6">
        <p class="text-center">Centro Austral de Tecnología Genómica</p>
        <p class="text-center">Universidad de Magallanes</p>
        <p class="text-center">Avenida Bulnes #01855, Punta Arenas, Chile</p>
        <p class="text-center">contacto: roberto.uribe@umag.cl - marcelo.navarrete@umag.cl</p>
        <p class="text-center">Copyright @ 2020 Centro Austral de Tecnología Genómica.</p>
    </div>
    <div class="col-md-3">
        <img src="imagen/002.png" alt="catg-logo" class="footer-logo umag">
    </div>
  </div>
</footer>
</html>
<style>
    .nav-logo {
        max-width: 100px;
        height: auto;
    }

    .navbar-nav {
        position: absolute;
        left: 60%;
    }
    footer {
        font-size: 10px;
    }
    .footer-logo {
        max-width: 150px;
        height: auto; 
        padding: auto;
    }
    .catg{
        text-align: left;  
        padding-left: 25px;
    }
    .umag{
        text-align: right;  
        padding-right: 25px;
    }
</style>
