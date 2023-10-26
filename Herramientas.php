<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>
    
    Herramientas
    
    
    
    
    
    
  </title>
<meta name="description" content />
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/static/css/mysite.3b45833b8716.css">
<link rel="shortcut icon" type="image/png" href="/static/favicon.3b113e02abee.ico" />

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167349853-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167349853-1');
  </script>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ea710a60a4.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/static/js/catgsite.d41d8cd98f00.js"></script>
<div class="content d-flex flex-column">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-1">
<a class="navbar-brand " href="/">
<div>
<img src="imagenes/logo.png" alt="Logo cATG" class="nav-logo">
</div>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbar-list-2">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a href="https://catg.cl/" class="nav-link">
Home </a>
</li>
<li class="nav-item">
<a href="https://catg.cl/acerca-de-nosotros/" class="nav-link">
Nosotros </a>
</li>
<li class="nav-item">
<a href="https://catg.cl/noticias/" class="nav-link">
Noticias </a>
</li>
<li class="nav-item">
<a href="https://catg.cl/herramientas/" class="nav-link">
Herramientas </a>
</li>
<li class="nav-item">
<a href="https://catg.cl/recursos/" class="nav-link">
Publicaciones </a>
</li>
<li class="nav-item">
<a href="https://catg.cl/magister-bioinformatica/" class="nav-link">
Magister Bioinformática </a>
</li>
<li class="nav-item dropdown pr-0">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Vigilancia Genómica
</a>
<div class="dropdown-menu bg-drop" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item px-3 white-color" href="https://www.minciencia.gob.cl/secuenciagenomica/" target="_blank"> Resolución Ministerial</a>
<a class="dropdown-item px-3 white-color" href="https://auspice.cov2.cl/ncov/chile-global" target="_blank"> Plataforma de Seguimiento</a>
</div>
</li>
<li class="nav-item dropdown pr-0">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Bitácoras
</a>
<div class="dropdown-menu bg-drop" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item px-3 white-color" href="https://catg.cl/bitacoras/mag1895/#/" target="_blank"> MAG1895</a>
<a class="dropdown-item px-3 white-color" href="https://catg.cl/bitacoras/mag2095/#/" target="_blank"> MAG2095</a>
</div>
</li>
<li class="nav-item dropdown pr-5">
<a class="nav-link dropdown-toggle pr-5" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Login
</a>
<div class="dropdown-menu bg-drop" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item px-3 white-color" href="https://covid19.catg.cl" target="_blank"> Sistema COVID-19</a>
<a class="dropdown-item px-3 white-color" href="https://redcap.catg.cl" target="_blank"> Sistema Redcap</a>
</div>
</li>
</ul>
</div>
</nav>
<h1 class="p-3 my-2"> Herramientas desarrolladas por cATG</h1>
<div class="container mb-4">
<span> Se han desarrollado algunas herramientas, las cuales se encuentran disponibles públicamente para ser usadas por cualquier persona: </span>
<div>
<div class="pt-4">
<div class="card text-black">
<div class="card-header"><strong>Pipeline SARS-CoV-2</strong> <small class="pl-2"> </small></div>
<div class="card-body">
<div class="card-text text-justify">
<ul><li data-block-key="i4o3p">Pipeline desarrollado en Nextflow diseñado para realizar el ensamblaje de muestras SARS-CoV-2 secuenciadas con la plataformas de Oxford Nanopore.</li></ul><p data-block-key="eglpg"></p><ul><li data-block-key="m9abx">Incluye los siguientes procesos:<ul><li data-block-key="ahhb9">Basecalling y demultiplexación (Opcional)</li><li data-block-key="9cklr">Ensamblaje y variant calling</li><li data-block-key="bk4gc">Anotación de variantes</li><li data-block-key="4fip4">Identificación de clados y linajes</li><li data-block-key="a5k6g">Metras de calidad y estadisticas</li><li data-block-key="dfk6c">Resumen en formato excel (con toda la información relevante)</li><li data-block-key="6an2t">Reporte inicial para la subida de datos a GISAID</li></ul></li></ul><p data-block-key="9bihc"></p><p data-block-key="9cm5e"></p>
Disponible en:
<a href="https://github.com/catg-umag/ncov2019-ont-nf">
https://github.com/catg-umag/ncov2019-ont-nf
</a>
</div>
</div>
</div>
</div>
<div class="pt-4">
<div class="card text-black">
<div class="card-header"><strong>Firmas mutacionales</strong> <small class="pl-2"> </small></div>
<div class="card-body">
<div class="card-text text-justify">
<ul><li data-block-key="73bkb">Pipeline para extracción de firmas mutacionales y caracterización general de éstas.</li></ul><p data-block-key="at3m1"></p><ul><li data-block-key="5nbua">Incluye los siguientes procesos:<ul><li data-block-key="bs1qf">Creación de lista de mutaciones (Opcionales)</li><li data-block-key="6nhkt">Colección de información extra de las variantes (contexto, motivo AID, SNV en locus IG)</li><li data-block-key="5cmrv">Extracción de Signatures SBS</li><li data-block-key="f7e7f">Ajuste utilizando Signatures de COSMIC</li><li data-block-key="9p4mu">Reconstrucción de Signatures</li><li data-block-key="mch8">Reporte con todos los gráficos obtenidos<br/></li></ul></li><li data-block-key="qvij">Como resultado se obtiene un archivo csv con todas las mutaciones encontradas, junto con y diferentes archivos asociados a las firmas mutaciones extraídas de las muestras.</li></ul>
Disponible en:
<a href="https://github.com/catg-umag/bcell-lymphomas-mutational-signatures">
https://github.com/catg-umag/bcell-lymphomas-mutational-signatures
</a>
</div>
</div>
</div>
</div>
<div class="pt-4">
<div class="card text-black">
<div class="card-header"><strong>Mutaciones AID</strong> <small class="pl-2"> </small></div>
<div class="card-body">
<div class="card-text text-justify">
<ul><li data-block-key="zlie5">Visualización de mutaciones en genes seleccionados en genomas de humano y ratón, destacando si existe ocurrencia en patrones asociados a contextos de AID.</li></ul>
Disponible en:
<a href="https://catg.cl/lab/tools/aid-mutations/">
https://catg.cl/lab/tools/aid-mutations/
</a>
</div>
</div>
</div>
</div>
<div class="pt-4">
<div class="card text-black">
<div class="card-header"><strong>Peptipedia</strong> <small class="pl-2"> </small></div>
<div class="card-body">
<div class="card-text text-justify">
<ul><li data-block-key="uw4nt">Peptipedia es una plataforma computacional de soporte para el estudio de péptidos y sus propiedades. Cuenta con la base de datos más grande de péptidos con actividad biológica reportada a la fecha, con un total de 100.000 secuencias, aproximadamente. Esta herramienta tiene caracterizada los péptidos desde diferentes puntos de vista, tanto de propiedades fisicoquímicas como propiedades filogenéticas y funcionales. Además, cuenta con variados servicios computacionales que permiten trabajar con secuencias para su estudio, ya sea la predicción de propiedades fisicoquímicas, caracterización filogenética y funcional, así como también métodos predictivos para clasificación de actividades biológicas. Finalmente, variadas herramientas computacionales basadas en métodos de machine learning se han incorporado para facilitar el entrenamiento de modelos predictivos y de identificación de patrones para fomentar el uso de este tipo de tecnologías en aplicaciones biotecnológicas e industriales. Actualmente, se está trabajando en la segunda versión de la plataforma, incorporando métodos para predicción de interacción con relación a células T y estudio de promiscuidad, así como la elaboración de reglas de diseño de péptidos con métodos basados en Deep generative models.</li></ul>
Disponible en:
<a href="https://peptipedia.cl">
https://peptipedia.cl
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="bg-dark text-white bottom footer">
<div class="container" style="text-align: center;" id="content-desktop">
<div class="row d-flex justify-content-between">
<div class="d-flex align-items-center">
<a href="http://www.umag.cl" target="_blank">
<img src="imagenes/logoumag.png" alt="Logo UMAG" class="footer-logo my-2" />
</a>
</div>
<div class="text-muted my-2">
<p class="mb-1">
Centro Austral de Tecnología Genómica<br/>
Universidad de Magallanes<br/>
Avenida Bulnes #01855, Punta Arenas, Chile
</p>
contacto: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94e6fbf6f1e6e0fbbae1e6fdf6f1d4e1f9f5f3baf7f8">[email&#160;protected]</a> - <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="761b170415131a195818170017040413021336031b171158151a">[email&#160;protected]</a>
<p class="mb-0"> Copyright @ 2020 Centro Austral de Tecnología Genómica.
</p>
</div>
<div class="d-flex align-items-center">
<img src="imagenes/catg.svg" alt="Logo cATG" class="footer-logo my-2" />
</div>
</div>
</div>
<div class="container" style="text-align: center;" id="content-mobile">
<div class="row content-center ">
<div class="text-muted my-2 ">
<p class="mb-1">
<br>
Centro Austral de Tecnología Genómica<br/>
Universidad de Magallanes<br/>
Avenida Bulnes #01855,Punta Arenas, Chile
</p>
contacto: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2d5f424f485f594203585f444f486d58404c4a034e41">[email&#160;protected]</a> - <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f424e5d4c4a434001414e594e5d5d4a5b4a6f5a424e48014c43">[email&#160;protected]</a>
</div>
</div>
<div class="row content-center">
<a href="http://www.umag.cl" target="_blank">
<img src="imagenes/catg.svg" alt="Logo UMAG" class="footer-logo my-2 mr-3" />
</a>
<img src="imagenes/catg.svg" alt="Logo cATG" class="footer-logo my-2" />
</div>
<div class="text-muted my-2 ">
Copyright @ 2019 Centro Austral de Tecnología Genómica.
</div>
</div>
</footer>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    $(function ($) {
      let url = window.location.href;
      $("nav ul li a").each(function () {
        if (this.href === url) {
          $(this).closest("li").addClass("active");
        }
      });
    });

    $("#resources-list a").on("click", function (e) {
      e.preventDefault();
      $(this).tab("show");
    });
  </script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81ae877c7e30259d","r":1,"version":"2023.10.0","token":"17c751354a4c4b268d3270c254b51264"}' crossorigin="anonymous"></script>
</body>
</html>
<style>
  #content-desktop {
    display: block;
  }

  #content-mobile {
    display: none;
  }

  @media screen and (max-width: 786px) {

    #content-desktop {
      display: none;
    }

    #content-mobile {
      display: block;
    }

  }


  #desktop {
    display: block;
  }

  #mobile {
    display: none;
  }

  @media screen and (max-width: 992px) {

    #desktop {
      display: none;
    }

    #mobile {
      display: block;
    }

  }

  @media screen and (max-width: 570px) {
    #desktop {
      display: block;
    }

    #mobile {
      display: none;
    }

  }

  @media (min-width: 776px) {
    .modal-dialog {
      max-width: 800px;
      width: 800px;
    }
  }

  @media (min-width: 1200px) {
    .modal-dialog {
      max-width: 1000px;
      width: 1000px;
    }
  }

  @media (max-width: 991px) {
  .bg-drop{
    background-color:inherit;
  }
  .white-color{
    color:white;
  }
  }

</style>
