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
                      <div class="clearfix"></div>
                      <table id="tabla" class="display table table-bordered responsive nowrap" style="width:100%">
                       <thead style="background:#2A3F54;">
                        <tr>
                          <th style="color: #fff">Id</th>
                          <th style="color: #fff">Dui</th>
                          <th style="color: #fff">Carnet</th>
                          <th style="color: #fff">Nombres</th>
                          <th style="color: #fff">Apellidos</th>
                          <th style="color: #fff">Tipo de persona</th>
                          <th style="color: #fff">Sexo</th>
                          <th style="color: #fff">Dirección</th>
                          <th style="color: #fff">Teléfono</th>
                          <th style="color: #fff">Email</th>
                          <th style="color: #fff">Fecha de Ingreso</th>
                          <th style="color: #fff">Año de ingreso</th>
                          <th style="color: #fff">Fecha de traslado</th>
                          <th style="color: #fff">Usuario que traslado</th>
                          <th style="color: #fff">Estado</th>
                          <th style="color: #fff">Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php $num=0;  foreach ($personas as $key => $v): ?>

                       <?php if ($v->estado =='ACTIVO'){
                        $v->estado ='<font color="green" style="font-weight:bold;">ACTIVO</font>';

                      }elseif ($v->estado =='RETIRADO') {
                        $u->estado ='<font color="red" style="font-weight:bold;">RETIRADO</font>';

                      }elseif ($v->estado =='EN PROCESO') {
                        $u->estado ='<font color="#1D79B9" style="font-weight:bold;">EN PROCESO</font>';
                      }
                      ?>
                      <tr>
                       <td><?= $num+=1; ?></td>
                       <td><?= $v->DUI ?></td>
                       <td><?= $v->carnet ?></td>
                       <td><?= $v->nombres ?></td>
                       <td><?= $v->apellidos ?></td>
                       <td><?= $v->tipoPersona ?></td>
                       <td><?= $v->sexo ?></td>
                       <td><?= $v->direccion ?></td>
                       <td><?= $v->telefono ?></td>
                       <td><?= $v->email ?></td>
                       <td><?= $v->fechaIngreso ?></td>
                       <td><?= $v->anioIngreso ?></td> 
                       <td><?= $v->fechaTraslado ?></td> 
                       <td><?= $v->usuarioTraslado ?></td> 
                       <td><?= $v->estado ?></td> 
                       <td>
                        <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar" class="float-right ml-2 btn btn-primary btn-sm" href="/catalogos/personas/edit/<?= $v->personaId?>"><i class="fa fa-pencil"></i></a>
                        <button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Borrar" class="float-right btn btn-danger btn-sm ml-2"  onclick="confirmarBorrar(<?= $v->personaId ?>)"><i class="fa fa-trash"></i></button>
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
  function confirmarBorrar(id){
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
       window.location.href = "/Catalogos/personas/delete/"+id;
     })
    });
  }
  $(document).ready(function() {
    $('#tabla').DataTable( {
      "paging":   true,
      "ordering": true,
      "info":     true,
      "language": {
        "url": "/vendors/datatables.net/españolTables.json"
      }
    } );
  } );


</script>



