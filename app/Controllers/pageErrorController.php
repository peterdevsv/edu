<?php namespace App\Controllers;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundException;

class pageErrorController extends BaseController {

  public function index(){

    $this->_loadDefaultView( 'pageError');
  }

private function _loadDefaultView($view){

  echo view("dashboard/edu/$view");
  echo view("dashboard/templates/footer");
}


}
