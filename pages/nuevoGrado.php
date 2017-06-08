<?php
  require "../utilities/php/grados/consultar.php";
?>
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
                    <h1 class="page-header">Nuevo Grado</h1>
                </div>
            </div>

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#new_doc" aria-expanded="true">Agregar nuevo grado</a>
                  </h4>
                </div>
                
                <div id="new_doc" class="panel-collapse collapse">
            <!-- /.Aca va el vacil de la pagina -->
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-12">
                                  <form id="Form" role="form">
                                      <div class="form-group">
                                          <label>Nombre grado:</label>
                                          <input id="nombre_grado" name="nombre_grado" class="form-control" placeholder="Ingrese el nombre del grado"/>
                                      </div>

                                      

                                      <label id="grados" value="grados"></label>

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
            </div>
          </div>

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#tab_doc">Ver</a>
                  </h4>
                </div>
                <div id="tab_doc" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h2>Administrador de grados</h2>
                    <p>Seleccione una opcion:</p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                              $Consulta = "SELECT * From grados";
                              $Result = Ejecucion($Consulta , array());
                              foreach ($Result as $fila) {
                                echo '
                                <tr>
                                  <td id="name-'.$fila['id_grado'].'" data="'.$fila['nombre_grado'].'">'.$fila['nombre_grado'].'
                                  </td>
                                  
                                  <td>
                                    <div class="btn-group">
                                      <button id="BtnEliminar" data-id="'.$fila['id_grado'].'" onclick="EliminarDato(this);"  type="button" class="btn btn-primary">Eliminar</button>
                                      <button id="BtnModificar" data-id="'.$fila['id_grado'].'" onclick="CargarDatos(this);"  type="button" class="btn btn-primary">Modificar</button>
                                    </div>
                                  </td>
                                </tr>';
                              }
                            ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            
            </div>
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
    

      <script type="text/javascript">

      function CargarDatos(data)
      {
        $('#tab_doc').collapse('hide');
        $('#new_doc').collapse('show');
        var id = $(data).attr('data-id');
        $("#nombre_grado").val($('#name-' + id).attr('data'));
        $("#id_grado").val(id);
        //$(task).attr('hr-tm-id')
      }

      function EliminarDato(data)
      {
        //Si es uno nuevo
        $.ajax({
            type: "POST",
            url: "../utilities/php/grados/delete.php",
            data: {id_docen : $(data).attr('data-id')},
            success: function(resp) {
              //Aca vemos el return de la funcion php
              console.log(resp);
              $('#nombre_grado').val("");
            }
        });
      }

        $(document).ready(function() {

        $('#new_doc').collapse();
            $('.BtnGuardar').click(function(){

            var obtener = $("#Form").serialize();
            if($('#id_grado').val() == "")
            {
              //Si es uno nuevo
              $.ajax({
                  type: "POST",
                  url: "../utilities/php/grados/insert.php",
                  data: obtener,
                  success: function(resp) {
                    //Aca vemos el return de la funcion php
                    console.log(resp);
                    $('#nombre_grado').val("");
                  }
              });
            }
            else {
              //Si actualiza
              $.ajax({
                  type: "POST",
                  url: "../utilities/php/grados/update.php",
                  data: obtener,
                  success: function(resp) {
                    //Aca vemos el return de la funcion php
                    console.log(resp);
                    $('#nombre_grado').val("");
                  }
              });
            }
                return false; //Agregamos el Return para que no Recargue la Pagina al Enviar el Formulario
          });
        });
      </script>
    
	</body>
</html>