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

	    <!-- Morris Charts CSS -->
	    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

      <script src="../vendor/jquery/jquery.min.js"></script>
      <script type="text/javascript">

      </script>
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
                          Agrega un nuevo docente ...
                      </div>
                      <div class="panel-body">
                          <div class="row">
                              <div class="col-lg-6">
                                  <form role="form">
                                      <div class="form-group">
                                          <label>Text Input with Placeholder</label>
                                          <input class="form-control" placeholder="">
                                      </div>

                                      <div class="form-group">
                                          <label>File input</label>
                                          <input type="file">
                                      </div>

                                      <div class="form-group">
                                          <label>Text area</label>
                                          <textarea class="form-control" rows="3"></textarea>
                                      </div>

                                      <button type="submit" class="btn btn-default">Agregar</button>
                                      <button type="reset" class="btn btn-default">Limpiar</button>
                                  </form>
                              </div>
                              <!-- /.col-lg-6 (nested) -->
                              <div class="col-lg-6">
                                  <form role="form">
                                    <div class="form-group">
                                        <label>Selects</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Inline Radio Buttons</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                        </label>
                                    </div>
                                  </form>
                              </div>
                              <!-- /.col-lg-6 (nested) -->
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

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	</body>
</html>
