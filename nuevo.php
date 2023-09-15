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
      <h1>Nuevo Registro</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card  shadow-lg" style="border-top:solid 3px blue;">
            <div class="card-body">
              <!-- <h5 class="card-title">Custom Styled Validation</h5>
              <p>For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. </p> -->
              <br>
              <!-- Custom Styled Validation -->
              <form class="row g-3 needs-validation"  target="_self" action="registro.php" id="nuevo" name="nuevo" novalidate>
                <div class="col-md-6 col-sm-12">
                  <label for="validationCustom01" class="form-label">Nombre Actividad <span style="color:red"> * </span></label>
                  <input type="text" class="form-control" id="validationCustom01" required>
                  <div class="invalid-feedback">
                    Debe ingresar un nombre
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <label for="validationCustom02" class="form-label">Fecha <span style="color:red"> * </span></label>
                  <input type="date" class="form-control" id="validationCustom02" value="<?php echo date("Y-m-d"); ?>" required>
                  <div class="invalid-feedback">
                    Debe ingresar una fecha
                  </div>
                </div>
            
                <div class="col-md-3 col-sm-6">
                  <label for="validationCustom04" class="form-label">Meta <span style="color:red"> * </span></label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Seleccionar..</option>
                    <option value="Obra Misional">1.- Obra Misional</option>
                    <option value="Historia Familiar">2.- Historia Familiar</option>
                    <option value="Vivir el Evangelio">3.- Vivir el Evangelio</option>
                    <option value="Cuidar de los Necesitados">4.- Cuidar de los Necesitados</option>
                  </select>
                  <div class="invalid-feedback">
                    Debe seleccionar un propósito
                  </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                  <label for="validationCustom04" class="form-label">Organización <span style="color:red"> * </span></label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Seleccionar...</option>
                    <option value="Hombres Jovenes">1.- Hombres Jovenes</option>
                    <option value="Mujeres Jovenes">2.- Mujeres Jovenes</option>
                    <option value="Quorum de Elderes">3.- Quorum de Elderes</option>
                    <option value="Sociedad de Socorro">4.- Sociedad de Socorro</option>
                    <option value="Jas">4.- Jas</option>
                    <option value="Escuela Dominical">5.- Escuela Dominical</option>
                    <option value="Historicos">6.- Historicos</option>
                    <option value="Primaria">7.- Primaria</option>
                    <option value="Obra Misional">8.- Obra Misional</option>
                    <option value="Obispado">9.- Obispado</option>
                  </select>
                  <div class="invalid-feedback">
                   Debe seleccionar una organización
                  </div>
                </div>
               
              
                <div class="col-12">
                  <button class="btn btn-primary rounded-button" type="submit">Guardar</button>
                </div>
              </form><!-- End Custom Styled Validation -->

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