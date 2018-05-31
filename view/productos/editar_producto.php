<?php
  //instancia de la clase controlador
  $controller_productos = new MVC();

  //se verifica que se haya iniciado sesion
  
  $controller_productos->verificarLoginController();
  //se ejecuta el metodo actualizarProductoControler para actualizar el producto seleccionado

  $controller_productos->actualizarProductoController();

?>


<head>
    <title>Modificación de producto</title>
  </head>
  <body class="hold-transition login-page">
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Modificación de producto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
              <li class="breadcrumb-item active"><a href="index.php?action=productos"> Gestión de Productos</a></li>
              <li class="breadcrumb-item active">Modificación de producto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <form role="form" method="post">
        <div class="row">
          <!-- left column -->
          <div class="col-sm-12">
            <!-- general form elements -->
            <div class="card card-primary">
               <div class="card-header">
                        <h3 class="card-title">Realice los cambios correspondientes y de clic en guardar</h3>
                </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body login-card-body">
                    <?php $controller_productos->getProductoController() ?>
                   <input type="submit" name="btn_actualizar" value="Guardar cambios" class="btn btn-success" onclick="confirmar();" style="float: right;">
            
               
              </div>   
            </div>
            </div> 
                
              </div>
</div>
</section>
  </body>
  <script>
      //funcion de confirmacion en caso de guardar los datos
        function confirmar(){
          var x = confirm("Seguro que deseas guardar los datos?");
          if(!x)
            event.preventDefault();
        }


      </script>
  
  </html>
