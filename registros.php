<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Históricos Universitario</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include_once "contenido/extensiones.php"; ?>

  <style>
    .rounded-button {
      padding: 10px 20px; /* Ajusta el padding según tus preferencias */
      border-radius: 20px; /* Define el radio de los bordes para hacerlo redondeado */
    
      border: none; /* Elimina el borde */
      cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
      font-size: 16px; /* Tamaño del texto */
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.6);
      text-align: right;
    }
  </style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<?php include_once "contenido/encabezado.php"; ?>

<?php include_once "contenido/menu.php"; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Lista de Registros</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card shadow-lg"  style="border-top:solid 3px blue;">
            <div class="card-body">
              

              <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                      <h5 class="card-title">Filtros</h5>
                    </button>                   
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                      <div class="row m-3">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                          <label for="" class="form-label">Nombre Actividad</label>
                          <input type="text" class="form-control" id="validationCustom01">                        
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                          <label for="" class="form-label">Organizacion</label>
                          <select class="form-select" id="validationCustom04">
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>  
                        </div>                       
                      </div>
                      <div class="row m-3">
                  
                          <div class="col-md-12" style="text-align:right;">
                            <button class="btn btn-primary rounded-button" type="button">Filtrar</button>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
               
             
              </div><!-- End Accordion without outline borders -->

            </div>
          </div>

        </div>

        <div class="col-lg-12">     

          <div class="card shadow-lg" style="border-top:solid 3px blue;">
            <div class="card-body">
              <h5 class="card-title">Resultado</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                    <th scope="col"> </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                    <td><button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href = 'registro.php'"><i class="bi bi-search"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Developer</td>
                    <td>35</td>
                    <td>2014-12-05</td>
                    <td><button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href = 'registro.php'"><i class="bi bi-search"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Finance</td>
                    <td>45</td>
                    <td>2011-08-12</td>
                    <td><button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href = 'registro.php'"><i class="bi bi-search"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Angus Grady</td>
                    <td>HR</td>
                    <td>34</td>
                    <td>2012-06-11</td>
                    <td><button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href = 'registro.php'"><i class="bi bi-search"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Raheem Lehner</td>
                    <td>Dynamic Division Officer</td>
                    <td>47</td>
                    <td>2011-04-19</td>
                    <td><button class="btn btn-secondary btn-sm" type="button" onclick="window.location.href = 'registro.php'"><i class="bi bi-search"></i></button></td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include_once "contenido/piePagina.php"; ?>


  <?php include_once "contenido/extensionesFooter.php"; ?>

</body>

</html>