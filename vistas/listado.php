<?php 
  
  require 'header.php';

 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h1 class="box-title">
                Tabla
                <button class="btn btn-success" onclick="mostrarForm(true)"><i class="fa fa-plus-cirlce"></i> Agregar
                </button>
              </h1>
              <div class="box-tools pull-right"></div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive" style="height: 400px;" id="listadoregistros">
              
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div> <!-- /.col -->
      </div><!-- /.row (main row) -->
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

<?php 
  
  require 'footer.php';
  
 ?>