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
                    <h1 class="page-header">Nueva Alumna</h1>
                </div>
            </div>

            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#new_doc" aria-expanded="true">Agregar nueva alumna</a>
                  </h4>
                </div>
                
                <div id="new_doc" class="panel-collapse collapse">
            <!-- /.Aca va el vacil de la pagina -->
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" href="#new_doc" aria-expanded="true">Agregar nueva alumna</a>
                          </h4>
                      </div>

                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-12">
                                  <form id="Form" role="form">
                                      <div class="form-group">
                                          <label>Nombre alumna:</label>
                                          <input id="nombre_alum" name="nombre_alum" class="form-control" placeholder="Ingrese el nombre de la alumna"/>
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

                                      <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <label>Grado de ingreso:</label>
                                              <select id="grad_ingr" name="grad_ingr" class="form-control">
                                                <option>Seleccione un grado</option>
                                                <?php
                                                    $Consulta = "SELECT * From grados";
                                                    $Result = Ejecucion($Consulta , array());
                                                    foreach ($Result as $fila) {
                                                      echo '
                                                      
                                                        <option id="'.$fila['id_grado'].'" value="'.$fila['id_grado'].'" data="'.$fila['id_grado'].'">'.$fila['nombre_grado'].'</option>
                                                        ';
                                                    }
                                                  ?>
                                              </select>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                          <div class="form-group">
                                              <label>Escuela de procedencia:</label>
                                              <input id="escuela_pro" name="escuela_pro" class="form-control" placeholder="Ingrese la escuela de procedencia"/>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <label>Nombre del padre:</label>
                                          <input id="nomb_padr" name="nomb_padr" class="form-control" placeholder="Ingrese el nombre del padre"/>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label>DUI del padre</label>
                                              <input id="dui_padr" name="dui_padr" class="form-control" placeholder="Ingrese el número de DUI del padre"/>
                                          </div>
                                        </div>
                                        <div class="col-md-9">
                                          <div class="form-group">
                                              <label>Profesión del padre</label>
                                              <input id="prof_padr" name="prof_padr" class="form-control" placeholder="Ingrese la profesión del padre"/>
                                          </div>
                                        </div>
                                      </div>


                                      <div class="form-group">
                                          <label>Nombre de la madre:</label>
                                          <input id="nomb_madr" name="nomb_madr" class="form-control" placeholder="Ingrese el nombre de la madre"/>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                              <label>DUI de la madre</label>
                                              <input id="dui_mdr" name="dui_madr" class="form-control" placeholder="Ingrese el número de DUI de la madre"/>
                                          </div>
                                        </div>
                                        <div class="col-md-9">
                                          <div class="form-group">
                                              <label>Profesión de la madre</label>
                                              <input id="prof_madr" name="prof_madr" class="form-control" placeholder="Ingrese la profesión de la madre"/>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                          <label>Matrimonio</label>
                                          <label class="radio-inline">
                                              <input type="radio" name="matrimonio" id="matrimonio" value="1" checked>Si
                                          </label>
                                          <label class="radio-inline">
                                              <input type="radio" name="matrimonio" id="matrimonio" value="0">No
                                          </label> 
                                      </div>

                                      <div class="form-group">
                                          <label>Dirección alumna:</label>
                                          <textarea class="form-control" name="direccion_alum" rows="4"></textarea>
                                      </div>

                                      <div class="form-group">
                                          <label>Dirección padre:</label>
                                          <textarea class="form-control" name="direccion_padr" rows="4"></textarea>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Teléfono Habitación:</label>
                                            <input id="tel_hab" name="tel_hab" class="form-control" placeholder="Teléfono de habitación"/>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Teléfono celular:</label>
                                            <input id="tel_cel" name="tel_cel" class="form-control" placeholder="Teléfono celular"/>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Teléfono oficina de papá:</label>
                                            <input id="tel_trab" name="tel_trab_pa" class="form-control" placeholder="Teléfono oficina papá"/>
                                          </div>
                                        </div>
                                        <div class="col-md-3">
                                          <div class="form-group">
                                            <label>Teléfono oficina de mamá:</label>
                                            <input id="tel_trab_mama" name="tel_trab_ma" class="form-control" placeholder="Teléfono oficina mamá"/>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label>Religión</label>
                                        <input id="religion" name="religion" class="form-control" placeholder="Ingrese la religion" />
                                      </div>

                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Bautismo</label>
                                              <label class="radio-inline">
                                                  <input type="radio" name="bautismo" id="bautismo" value="1" checked>Si
                                              </label>
                                              <label class="radio-inline">
                                                  <input type="radio" name="bautismo" id="bautismo" value="0">No
                                              </label> 
                                          </div>
                                        </div>

                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Primera comunión</label>
                                              <label class="radio-inline">
                                                  <input type="radio" name="comunion" id="comunion" value="1" checked>Si
                                              </label>
                                              <label class="radio-inline">
                                                  <input type="radio" name="comunion" id="comunion" value="0">No
                                              </label> 
                                          </div>
                                        </div>

                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label>Confirma</label>
                                              <label class="radio-inline">
                                                  <input type="radio" name="confirma" id="confirma" value="1" checked>Si
                                              </label>
                                              <label class="radio-inline">
                                                  <input type="radio" name="confirma" id="confirma" value="0">No
                                              </label> 
                                          </div>
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-5">
                                          <div class="form-group">
                                            <label>Persona responsable</label>
                                            <label class="radio-inline">
                                              <input type="radio" name="responsable" id="responsable" value="Papa">Papá
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="responsable" id="responsable" value="Mapa">Mamá
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="responsable" id="responsable" value="Abuelos">Abuelos
                                            </label>
                                          </div>
                                        </div>
                                        <div class="col-md-7">
                                          <div class="form-group">
                                            <label>Nombre de la persona responsable:</label>
                                            <input id="nomb_resp" name="nomb_resp" class="form-control" placeholder="Ingrese el nombre del responsable"/>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label>La alumna padece alguna enfermedad:</label>
                                        <input id="enfermedad" name="enfermedad" class="form-control" placeholder="Ingrese enfermedad que padece"/>
                                      </div>

                                      <div class="form-group">
                                        <label>La alumna toma algún medicamento:</label>
                                        <input id="medicamento" name="medicamento" class="form-control" placeholder="Ingrese el medicamento">
                                      </div>

                                      <div class="form-group">
                                          <label>Foto de la alumna:</label>
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
        </div>
        </div>
            <!-- Comienza la tabla -->
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#tab_doc">Ver</a>
                  </h4>
                </div>
                <div id="tab_doc" class="panel-collapse collapse">
                  <div class="panel-body">
                    <h2>Administrador de alumnas</h2>
                    <p>Seleccione una opcion:</p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Fecha de nacimiento</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                              $Consulta = "SELECT * From alumnas";
                              $Result = Ejecucion($Consulta , array());
                              foreach ($Result as $fila) {
                                echo '
                                <tr>
                                  <td id="name-'.$fila['id_alum'].'" data="'.$fila['nomb_alum'].'">'.$fila['nomb_alum'].'
                                  </td>
                                  <td id="name-'.$fila['id_alum'].'" data="'.$fila['fecha_nac'].'">'.$fila['fecha_nac'].'
                                  </td>
                                  <td>
                                    <div class="btn-group">
                                      <button id="BtnEliminar" data-id="'.$fila['id_alum'].'" onclick="EliminarDato(this);"  type="button" class="btn btn-primary">Eliminar</button>
                                      <button id="BtnModificar" data-id="'.$fila['id_alum'].'" onclick="CargarDatos(this);"  type="button" class="btn btn-primary">Modificar</button>
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
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
      <script type="text/javascript" src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>

      <script type="text/javascript">
        
        $(document).ready(function() {
          $('#new_doc').collapse();
          $('#BtnAgregar').click(function(){

            var obtener = $("#Form").serialize();
            if($('#nombre_alum').val() == "")
            {
              alert("No puedes dejar vacios los campos");
            }
            else {
              $.ajax({
                  type: "POST",
                  url: "../utilities/php/alumnas/insert.php",
                  data: obtener,
                  success: function(resp) {
                    //Aca vemos el return de la funcion php
                    console.log(resp);
                    $('#nombre_alum').val("");
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