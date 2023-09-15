<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Históricos Universitario</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php include_once "contenido/extensiones.php"; ?>
 <!-- Template Main CSS File -->
 <link href="assets/css/style.css" rel="stylesheet">
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
      <h1>Registro Nro. 1</h1>     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
       
        <div class="col-lg-12">

          <div class="card shadow-lg" style="border-top:solid 3px blue;">
            <div class="card-body">
              <!-- <h5 class="card-title">Default Tabs Justified</h5> -->
              <br><br>
              <!-- Default Tabs -->
              <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">Portada</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="objetivo-tab" data-bs-toggle="tab" data-bs-target="#objetivo-justified" type="button" role="tab" aria-controls="objetivo" aria-selected="false">Objetivos</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="descipcion-tab" data-bs-toggle="tab" data-bs-target="#descipcion-justified" type="button" role="tab" aria-controls="descipcion" aria-selected="false">Descripción</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="false">Testimonios</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                  <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="false">Imágenes</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabjustifiedContent">

                  <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <center>  <h3>Portada</h3></center>
                     
                
                    <br>
                    <div class="row m-3">
                        <div class="col-md-6 col-sm-12">
                          <label for="validationCustom01" class="form-label">Nombre Actividad</label>
                          <input type="text" class="form-control  shadow-sm" id="validationCustom01" disabled>
                        
                        </div>
                        <div class="col-md-3 col-sm-6">
                          <label for="validationCustom02" class="form-label">Fecha</label>
                          <input type="date" class="form-control shadow-sm" id="validationCustom02" value="<?php echo date("Y-m-d"); ?>" disabled>                       
                        </div>
                    
                      
                        <div class="col-md-3 col-sm-6">
                          <label for="validationCustom04" class="form-label">Organización</label>
                          <select class="form-select shadow-sm" id="validationCustom04" disabled>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                        
                        </div>
                        <div class="col-md-3 col-sm-6 mt-2">
                          <label for="validationCustom04" class="form-label">Propósito</label>
                          <select class="form-select shadow-sm" id="validationCustom04" disabled>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                        
                        </div>
                    
                    </div>
                  
                    <div class="row m-3">
                  
                        <div class="col-md-12" style="text-align:right;">
                          <button class="btn btn-primary rounded-button" type="button">Editar</button>
                        </div>
                    </div>
                  </div>                 

                  <div class="tab-pane fade" id="objetivo-justified" role="tabpanel" aria-labelledby="objetivo-tab">
                  <br>
                   <center> <h3>Objetivos</h3></center>
                   <br>

                   <div class="row">
                  
                      <div class="col-md-12">
                          <div class="alert alert-success" role="alert"> <b>Lo que desean lograr con la meta trazada </b> <br><br>
                          <b>Ejemplos de como empezar : </b> <br>
                            - Despertar... <br>
                            - Motivar... <br>
                            - Animar... <br>                        
                          </div>                      
                      </div>
                    </div>
                    <br>
                    <div class="row m-3">
                  
                      <div class="col-md-12" style="text-align:right;">
                        <button class="btn btn-primary rounded-button" type="button">Agregar Objetivos</button>
                      </div>
                    </div>
                    <br>
                    <div class="row m-1">
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">  <br>                                               
                            <p class="card-text">DESPERTAR EN LOS NIÑOS EL DESEO DE SERVIR EN UNA MISION</p>                           
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">   <br>                                               
                            <p class="card-text">MOTIVAR A LOS NIÑOS A SEGUIR CON EL ESTUDIO DE LAS ESCRITURAS</p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">  <br>                                                
                            <p class="card-text">ANIMAR A LOS NIÑOS A NO TENER MIEDO DE COMPARTIR EL EVANGELIO</p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                    
                    </div>
                  </div>

                  <div class="tab-pane fade" id="descipcion-justified" role="tabpanel" aria-labelledby="descipcion-tab">
                  <br>
                   <center> <h3>Descripción</h3></center>
                   <br>
                   <div class="row">
                  
                      <div class="col-md-12">
                          <div class="alert alert-success" role="alert"> <b>Sugerencia de que escribe en este punto:</b> <br>
                          <b>DETALLAR: </b> <br>
                            - Como fue la actividad <br>
                            - Poner cuantos participaron Y Cuantos se esperaban. <br>
                            - Que alcance tuvo la actividad en los hnos. <br>
                            - Escriba los esfuerzos y el apoyo que su organización hizo por ayudar a lograr la meta de su actividad. <br>
                            - Sí Logro los objetivos de su meta. <br>  <br>    
                            
                            <b>IMPORTANTE INCLUIR: </b> <br>
                            - Como líder describa como ud ha sentido la inspiración del señor y ha sentido la mano de dios guiando sus esfuerzos
                          </div>                      
                      </div>
                    </div>
                    <br>
                    <div class="row m-3">
                  
                      <div class="col-md-12" style="text-align:right;">
                        <button class="btn btn-primary rounded-button" type="button">Agregar Descripción</button>
                      </div>
                    </div>
                    <br>
                    <div class="row m-1">
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">  <br>                                               
                            <p class="card-text">PARTICIPABAN DE LA ACTIVIDAD LOS NIÑOS DE 7 A 11 AÑOS, FUERON 23 NIÑOS, 15 HNOS MAYORES VOLUNTARIOS Y 6 LIDERES DE LA PRIMARIA</p>                           
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">   <br>                                               
                            <p class="card-text">LA ACTIVIDAD EMPEZABA A LAS 08:00 AM HASTA LAS 18:00 PM </p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">  <br>                                                
                            <p class="card-text">LOS NIÑOS LLEGARON ACOMPAÑADOS DE SUS PADRES CON SUS MALETAS, ESCRITURAS Y PLACAS MISIONALES QUE LES FUE ENTREGADO A CADA NIÑO EN UN SOBRE JUNTO CON SU LLAMAMIENTO MISIONAL</p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">   <br>                                               
                            <p class="card-text">AL EMPEZAR LA REUNION SE LE ASIGNO A CADA NIÑO UN COMPAÑERO Y SE LES DIJO LAS REGLAS MISIONALES QUE DEBIAN CUMPLIR, SE COMPARTIO UN RICO DESYUNO, PARA LUEGO COMENZAR CON EL ESTUDIO DE LAS ESCRITURAS Y DEL TEMA (EL PLAN DE SALVACION) CON EL CUAL ELLOS SALDRIAN A PROSELITAR, IGUAL RECIBIERON LA VISITA DE LOS MISIONEROS DE TIEMPO COMPLETO PARA DARLES ALGUNOS CONSEJOS DE COMO PRESENTARSE Y DAR UNA CHARLA A LOS INVESTIGADORES, TAMBIEN COMPARTIERON DE UN DELICIOSO ALMUERZO</p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">   <br>                                               
                            <p class="card-text">POR LA TARDE LOS NIÑOS SALIERON A PROSELITAR ACOMPAÑADOS DE UNA PAREJA DE HNOS MAYORES A FAMILIAS MENOS ACTIVAS O QUE ESTAN RECIBIENDO LAS CHARLAS, ELLOS ESTABAN TAN EMOCIONADOS Y ANSIOSOS POR SALIR AL CAMPO MISIONAL Y ENSEÑAR LO QUE HABIAN APRENDIDO</p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card shadow-lg" style="border-left: solid 3px blue;">
                          <div class="card-body">   <br>                                               
                            <p class="card-text">AL FINALIZAR EL DIA SE TERMINO CON UNA REUNION Y SE ENTREGO A CADA NIÑO SU CARTA DE RELEVO CON HONOR. </p>
                            <p class="card-text"><a href="#" class="btn btn-primary">Editar</a> &nbsp;&nbsp; <a href="#" class="btn btn-danger">Quitar</a></p>                         
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>

                  <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                      <br>
                     <center> <h3>Testimonios</h3></center>
                     <br>
                      <div class="row m-3">
                  
                        <div class="col-md-12" style="text-align:right;">
                          <button class="btn btn-primary rounded-button" type="button">Nuevo Testimonio</button>
                        </div>
                      </div>
                      <br>
                      <div class="row m-1">
                        <div class="col-md-6">
                          <div class="card shadow-lg" style="border-left: solid 3px blue;">
                            <div class="card-body">
                              <h5 class="card-title">Jorge Moron</h5>                          
                              <p class="card-text">Fue una actividad muy bonita, todos pudimos conocernos mejor y estar mas unidos. Aprendimos tambien sobre el valor de la autosuficiencia y como debemos ahorrar para estar preparados antes cualquier adversidad</p>
                              <p class="card-text"><a href="#" class="btn btn-primary">Editar</a></p>                         
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="card shadow-lg" style="border-left: solid 3px blue;">
                            <div class="card-body">
                              <h5 class="card-title">Isabel Quiroga</h5>                          
                              <p class="card-text">Fue una actividad muy bonita, todos pudimos conocernos mejor y estar mas unidos. Aprendimos tambien sobre el valor de la autosuficiencia y como debemos ahorrar para estar preparados antes cualquier adversidad</p>
                              <p class="card-text"><a href="#" class="btn btn-primary">Editar</a></p>                         
                            </div>
                          </div>
                        </div>


                      </div>
                  </div>

                  <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                      <br>
                    <center>  <h3>Imagenes</h3></center>
                    <br>
                          <div class="row m-3">
                      
                            <div class="col-lg-4 col-md-10 mt-2">
                            
                              <input type="file" class="form-control">
                             
                            </div>
                            <div class="col-lg-2 col-md-2 mt-2">                              
                              <button class="btn btn-primary rounded-button" type="button">Subir</button>
                            </div>
                        </div>

                      <br>
                      <div class="row m-3">
                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Card with an image on top -->
                            <div class="card shadow-lg" onclick="">
                              <img src="assets/img/card.jpg" class="card-img-top" alt="..." >
                              <div class="card-body">      
                                <br>         
                                <p class="card-text">fecha: 2023-09-09</p>
                              </div>
                            </div><!-- End Card with an image on top -->
                          </div>

                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Card with an image on top -->
                            <div class="card shadow-lg" onclick="">
                              <img src="assets/img/card.jpg" class="card-img-top" alt="..." >
                              <div class="card-body">      
                                <br>         
                                <p class="card-text">fecha: 2023-09-09</p>
                              </div>
                            </div><!-- End Card with an image on top -->
                          </div>

                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- Card with an image on top -->
                            <div class="card shadow-lg" onclick="">
                              <img src="assets/img/card.jpg" class="card-img-top" alt="..." >
                              <div class="card-body">      
                                <br>         
                                <p class="card-text">fecha: 2023-09-09</p>
                              </div>
                            </div><!-- End Card with an image on top -->
                          </div>
                      </div>
                  </div>
              </div><!-- End Default Tabs -->

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