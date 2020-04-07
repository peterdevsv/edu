<?php namespace App\Controllers;
use App\Models\SeleccionarCicloModel;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundException;

class SeleccionarCiclo extends BaseController {

  public function index(){

    $datos = new SeleccionarCicloModel();

    $data = [
      'selectCiclo' => $datos->asObject()
      ->select('cof_aper_ciclo.*, cof_aper_ciclo.ciclo as ciclo')
      ->paginate(10),
      'pager' => $datos->pager
    ];
    $this->_loadDefaultView( 'Listado de usuarios',$data,'index');
  }

private function _loadDefaultView($title,$data,$view){

  $dataHeader =[
    'title' => $title
  ];

  echo view("dashboard/templates/header",$dataHeader);
  echo view("dashboard/seleccionarCiclo/$view",$data);
  echo view("dashboard/templates/footer");
}


}
