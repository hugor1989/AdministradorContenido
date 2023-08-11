<?php 
error_reporting(0);
require_once ("header.php");
require_once ("menu.php");
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ALTA DE DIPLOMADO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">CG</a></li>
              <li class="breadcrumb-item active">Alta de Diplomados</li>
            </ol>
          </div>
        </div>
      </div>
  </section>


  <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
  <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Módulo para agregar Diplomados a la plataforma</h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <label>Nombre completo del Diplomado</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="nombrecurso" name="nombrecurso" placeholder="Nombre del usuario" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
                  </div>                
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Buscar</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-success"  onclick="buscaCursoRegistrado()">Buscar / Agregar</button>
                  </div>                
                </div>
              </div>
            </div>
            <div class="row" id="tablaListado">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="col-sm-12" id="tabladatos">
                  </div>
                  </div>                
                </div>
              </div>
          </div>          
        </div>

          <div class="card card-default" id="datosDomicilio" style="display: none">
          <div class="card-header">
            <h3 class="card-title">Datos generales del Diplomado</h3>
            <div class="card-tools">
            </div>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Modalidad</label>
                  <?php 
                  $query="select * from cg_cat_cursosmodalidad where mod_estatus=1";
                  $res = mysqli_query($con,$query);
                  ?>
                  <select class="form-control select2 select2" id="modalidad" name="modalidad">
                                <?php
                                while ($Usuario = mysqli_fetch_array($res)) {
                                    echo '<option value="' . $Usuario['mod_id'] . '">'.strtoupper($Usuario['mod_nombre']). '</option>';
                                }
                                ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tipo</label>
                  <?php 
                  $query="select * from cg_cat_cursostipo where tipo_id=2";
                  $res = mysqli_query($con,$query);
                  ?>
                  <select class="form-control select2 select2" id="tipo" name="tipo">
                                <?php
                                while ($Usuario = mysqli_fetch_array($res)) {
                                    echo '<option value="' . $Usuario['tipo_id'] . '">'.strtoupper($Usuario['tipo_nombre']). '</option>';
                                }
                                ?>
                  </select>               
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-6">
                <div class="form-group">
                  <label>Categoria</label>
                  <?php 
                  $query="select * from cg_cat_cursoscategorias where cat_estatus=1";
                  $res = mysqli_query($con,$query);
                  ?>
                  <select class="form-control select2 select2" id="categoria" name="categoria">
                                <?php
                                while ($Usuario = mysqli_fetch_array($res)) {
                                    echo '<option value="' . $Usuario['cat_id'] . '">'.strtoupper($Usuario['cat_nombre']). '</option>';
                                }
                                ?>
                  </select> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Profesor</label>
                  <?php 
                  $query="select * from cg_usuarios where usr_idRol=3 and usr_estatus=1";
                  $res = mysqli_query($con,$query);
                  ?>
                  <select class="form-control select2 select2" id="profesor" name="profesor">
                                <?php
                                while ($Usuario = mysqli_fetch_array($res)) {
                                    echo '<option value="' . $Usuario['usr_idUsuario'] . '">'.strtoupper($Usuario['usr_nombre']). '</option>';
                                }
                                ?>
                  </select> 
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Inscripción</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="inscripcion" name="inscripcion" placeholder="Costo de la inscripción">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Costo del diplomado de un solo pago</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="costounpago" name="costounpago" placeholder="Costo de un solo pago">
                  </div> 
                </div>
              </div>
            </div>

           <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label>Fecha de Inicio del Diplomado</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" value="<?php echo $hoy ?>" id="fechaInicio" name="fechaInicio"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker" >
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div> 
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Activo en Página</label>
                  <select class="custom-select form-control-border" id="pagina" name="pagina" required>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                    </select> 
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label>Activo en Plataforma</label>
                  <select class="custom-select form-control-border" id="plataforma" name="plataforma" required>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                    </select>           
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Imagen para portada</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="archivoportada" name="archivoportada" accept=".jpg" required>
                      </div>
                    </div> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Imagen para contenido</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="archivocontenido" name="archivocontenido" accept=".jpg" required>
                      </div>
                    </div> 
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>PDF para programa</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="archivoprograma" name="archivoprograma" accept=".pdf" required>
                      </div>
                    </div> 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Imagen para bases</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="archivobases" name="archivocontenido" accept=".jpg" required>
                      </div>
                    </div> 
                </div>
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Calendario PDF</label>
                  <div class="input-group">
                      <div class="custom-file">
                        <input type="file" id="archivoportada" name="archivoportada" accept=".pdf" required>
                      </div>
                    </div> 
                </div>
              </div>
            </div>

            <hr color="red">

 <div class="row">
    <div class="col-md-12"> 
      <div class="form-group">
          <div class="table-responsive">
            <table class="table table-bordered" id="dynamic_field3">
              <tr>
                <td><b>Módulo #</b></td>
                <td><b>Nombre</b></td>
                <td><b>Fecha</b></td>
                <td><b>Acciones</b></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="modulono[]" placeholder="Número de Modulo"></td>
                <td><input type="text" class="form-control" name="nombremodulo[]" placeholder="Nombre del módulo"></td>
                <td><input type="text" class="form-control" name="fechamodulo[]" placeholder="Fecha del modulo" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask></td>
                <td><button type="button" name="add3" id="add3" class="btn btn-success">Agregar Más</button></td>
              </tr>
            </table>
          </div>        
      </div>
    </div>
  </div>

  <hr color="red">


  <div class="row">
    <div class="col-md-12"> 
      <div class="form-group">
          <div class="table-responsive">
            <table class="table table-bordered" id="dynamic_field2">
              <tr>
                <td><b>Costo por módulo</b></td>
                <td><b>Fecha antes de pago</b></td>
                <td><b>Acciones</b></td>
              </tr>
              <tr>
                <td><input type="text" class="form-control" name="costomodulo[]" placeholder="Costo por módulo antes de fecha"></td>
                <td><input type="text" class="form-control" name="fechamoduloa[]" placeholder="Fecha antes de pago" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy-mm-dd" data-mask></td>
                <td><button type="button" name="add2" id="add2" class="btn btn-success">Agregar Más</button></td>
              </tr>
            </table>
          </div>        
      </div>
    </div>
  </div>


            <div class="card-footer" id="botonenviar">
            <button type="button" class="btn btn-success" onclick="registraCurso()">Dar de alta el Diplomado</button>
          </div>
            </div>
          </div>
        </div>
        </div>        
    </section>
  </div>
</form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
require_once ("footer.php");
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="plugins/dropzone/min/dropzone.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="dist/js/funciones_cursos.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('yyyy-mm-dd', { 'placeholder': 'yyyy-mm-dd' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('#reservationdate2').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'YYYY-MM-DD hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'YYYY-MM-DDs'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

</body>
</html>

<script type="text/javascript">
    
</script>

<?php 
if ($_GET['response']=='true') { ?>
    <script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $(document).ready(function() {
      Toast.fire({
        icon: 'success',
        title: ' El curso se genero correctamente, ya esta disponible para ser utilizado'
      })
    });
    });
</script>
<?php } ?>

