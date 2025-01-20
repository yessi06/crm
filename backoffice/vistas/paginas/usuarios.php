<?php

if ($usuario["perfil"] != "admin") {

  echo '<script>
  window.location = "' . $ruta . 'backoffice/inicio";
  </script>';
  return;
}

$item = null;
$valor = null;
$usuarios = ControladorUsuarios::ctrMostrarusuarios($item, $valor);
?>

<div class="content-wrapper" style="min-height: 1058.31px;">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Usuarios</h1>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
            <li class="breadcrumb-item active">Usuarios</li>
          </ol>
        </div>

      </div>
    </div>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Usuarios registrados</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">

        <table class="table table-striped table-bordered dt-responsive tablaUsuarios" width="100%">

          <thead>
            <tr>
              <th>#</th>
              <th>Foto</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>País</th>
              <th>Verificacion</th>
              <th>Fecha de Creacion</th>
            </tr>
          </thead>
          <tbody>

            <!--  <?php foreach ($usuarios as $key => $value): ?>

             <tr>
              <td><?php echo ($key + 1); ?></td>
              <td><img src="<?php echo $value["foto"] ?>" class="img-fluid" width="30px"></td>
              <td><?php echo $value["nombre"] ?></td>
              <td><?php echo $value["email"] ?></td>
              <td><?php echo $value["pais"] ?></td>
              <td><?php echo $value["verificacion"] ?></td>
              <td><?php echo $value["fecha"] ?></td>
            </tr>
            
          <?php endforeach ?> -->

          </tbody>
        </table>
      </div>

      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
  </section>
</div>

<script src="vistas/js/usuarios.js"></script>