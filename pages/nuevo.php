<!DOCTYPE html>
<html>
	<head>
		<title>Escuela Salesiana María Mazzarello</title>
		<meta charset="utf-8"/>
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	    <!-- Custom Fonts -->
	    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	</head>
	<body>

    <div id="wrapper">

			<!--Sidebar-->
			<?php include "../utilities/sidebar.php"; ?>

        <!-- Inicio -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nuevo Docente</h1>
                </div>
            </div>


            <!-- /.Aca va el vacil de la pagina -->
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Agregar nuevo docente.
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-12">
                                  <form id="Form" role="form">
                                      <div class="form-group">
                                          <label>Nombre docente:</label>
                                          <input id="nombre_docen" name="nombre_docen" class="form-control" placeholder="Ingrese el nombre del docente"/>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Edad docente:</label>
                                            <input id="edad_docen" name="edad_docen" class="form-control" placeholder="Ingrese la edad"/>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Estado Civil:</label>
                                            <select id="est_civ" name="est_civ" class="form-control">
                                              <option>Soltero/a</option>
                                              <option>Casado/a</option>
                                              <option>Divorciado/a</option>
                                              <option>Acompañado/a</option>
                                              <option>Viudo/a</option>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <label>Nacionalidad:</label>
                                          <input id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Ingrese la nacionalidad"/>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <label for="dtp_input1" class=" control-label">Fecha de nacimiento:</label>
                                          <div class="input-group date form_datetime " data-date="2016-01-01T" data-date-format="YYYY MM dd" data-link-field="dtp_input1">
                                              <input class="form-control" size="16" name="fecha_nacimiento" type="text" id="datetimepicker" readonly>
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                          </div>
                                          <input type="hidden" id="dtp_input1"  /><br/>
                                      </div>

                                      <div class="form-group">
                                          <label>Dirección</label>
                                          <textarea class="form-control" name="direccion" rows="4"></textarea>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Teléfono casa:</label>
                                            <input id="tel_casa" name="tel_casa" class="form-control" placeholder="Teléfono de la casa del docente"/>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Teléfono cel:</label>
                                            <input id="tel_cel" name="tel_cel" class="form-control" placeholder="Teléfono celular del docente"/>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="form-group">
                                            <label>Teléfono trabajo:</label>
                                            <input id="tel_trab" name="tel_trab" class="form-control" placeholder="Teléfono segundo trabajo del docente"/>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <label>File input</label>
                                          <input type="file">
                                      </div>

                                      <label id="docentes" value="docentes"></label>

                                      <button id="BtnAgregar" type="submit" class="btn btn-default">Agregar</button>
                                      <button type="reset" class="btn btn-default">Limpiar</button>
                                  </form>

                              </div>
                              
                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

     <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
      <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

      <script type="text/javascript">
        
        $(document).ready(function() {

          $('#BtnAgregar').click(function(){

            var obtener = $("#Form").serialize();
            if($('#nombre_docen').val() == "")
            {
              alert("No puedes dejar vacios los campos");
            }
            else {
              $.ajax({
                  type: "POST",
                  url: "../utilities/php/insert.php",
                  data: obtener,
                  success: function(resp) {
                    //Aca vemos el return de la funcion php
                    console.log(resp);
                    $('#nombre_docen').val("");
                  }
              });
            }
                return false; //Agregamos el Return para que no Recargue la Pagina al Enviar el Formulario
          });
        });
      </script>
    <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        format: "yyyy/mm/dd",
        pickTime: false,
        startView: 'decade',
        minView: 'month',
        autoclose: true,
        todayBtn: true,
        pickerPosition: "bottom-left"
        });
    </script>
	</body>
</html>
