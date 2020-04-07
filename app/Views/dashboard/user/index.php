<?= view("dashboard/edu/menu"); ?>
</div>
</div>
<div class="top_nav">
  <?= view("dashboard/edu/navbar"); ?>
  <?= view("dashboard/partials/_session"); ?>
</div>
<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel" style="border: 60%">
        <div class="x_title">
          <h2>Configuración de usuarios</h2>
          <div class="clearfix"></div>
        </div>
        <div class="x_content" style="background: #fff;border: 1px solid #E1E1E1;padding-top: 10px;border-radius: 10px">
          <div class="clearfix"></div>
          <div class="col-md-12">
            <div class="x_content">
              <div class="x_content">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card-box table-responsive">
                      <a href="/catalogos/usuario/new" title="Crear" class="btn btn-success mb-12" style="margin-left: 19px"><i class="fa fa-plus"></i> Crear</a>
                      <div class="clearfix"></div>
                      <table id="tablaUsuarios" class="display table table-bordered responsive nowrap" style="width:100%">
                       <thead style="background:#2A3F54;">
                        <tr>
                          <th style="color: #fff">Id</th>
                          <th style="color: #fff" >Nombres</th>
                          <th style="color: #fff">Apellidos</th>
                          <th style="color: #fff">Usuario</th>
                          <th style="color: #fff">Rol</th>
                          <th style="color: #fff">Estado</th>
                          <th style="color: #fff">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php $num=0;  foreach ($users as $key => $u): ?>

                       <?php if ($u->estado =='ACTIVO'){
                        $u->estado ='<font color="green" style="font-weight:bold;">ACTIVO</font>';

                      }elseif ($u->estado =='RETIRADO') {
                        $u->estado ='<font color="red" style="font-weight:bold;">RETIRADO</font>';

                      }elseif ($u->estado =='EN PROCESO') {
                        $u->estado ='<font color="#1D79B9" style="font-weight:bold;">EN PROCESO</font>';
                      }
                      ?>
                      <tr>
                       <td><?= $num+=1; ?></td>
                       <td><?= $u->nombres ?></td>
                       <td><?= $u->apellidos ?></td>
                       <td><?= $u->usuario ?></td>
                       <td><?= $u->nombreRol ?></td>
                       <td><?= $u->estado ?></td> 
                       <td>
                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" class="float-right ml-2 btn btn-primary btn-sm" href="/catalogos/usuario/edit/<?= $u->usuarioId?>"><i class="fa fa-pencil"></i></a>
                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Borrar" class="float-right btn btn-danger btn-sm ml-2"  onclick="confirmarBorrar()"><i class="fa fa-trash"></i></button>
                      </td>
                    </tr>
                  <?php endforeach?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<br><br><br><br>
</div>
</div>
</div>
</div>
</div>
<script src="/js/jquery-3.4.1.slim.min.js"></script>
<script>
  function confirmarBorrar(){
    swal({   
      title: "Desea eliminar este registro",   text: "Precione confirmar para eliminar",
      type: "warning",   
      showCancelButton: true,   
      confirmButtonColor: "#DD6B55",   
      confirmButtonText: "Confirmar",   
      closeOnConfirm: false 
    }, function(){   
      swal({
        title: "ELIMINADO",
        text: "Registro eliminado con exito",
        type: "success",
      }, 
      function(){
       window.location.href = "/catalogos/usuario/delete/<?= $u->usuarioId ?>";
     })
    });
  }
  $(document).ready(function() {
    $('#tablaUsuarios').DataTable( {
      "paging":   true,
      "ordering": true,
      "info":     true,
      "language": {
        "url": "/vendors/datatables.net/españolTables.json"
      }
    } );
  } );


</script>



