<?php namespace App\Controllers\web;
use App\Controllers\BaseController;
use App\Models\Catalogos\UsuariosModel;
use \CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController {
    public function login(){

        $this->_loadDefaultView([],'login');
        return $this->_redirectAuth();
    }


    public function login_post(){
        $user = new UsuariosModel();

        helper('user');
        $usuario = $this->request->getPost('usuario');
        $clave = $this->request->getPost('clave');
        $estado = 'ACTIVO';
        $buscarUsuario = $user->select('usuarioId,usuario,clave,rolId,estado')->where('usuario',$usuario)->first();
        $buscarUsuarioActivo = $user->select('usuarioId,usuario,clave,rolId,estado')->where('usuario',$usuario)->where('estado',$estado)->first();

        if (!$buscarUsuario) {
            return redirect()->back()->with('message','Usuario incorrecto');
        }else if(!$buscarUsuarioActivo){
            return redirect()->back()->with('message','Usuario Inactivo, contacta con administración');
        }
        if (verifyKey($clave,$buscarUsuario['clave'])) {
            unset($buscarUsuario['clave']);
            $session = session();
            $session->set($buscarUsuario);
            return $this->_redirectAuth();
        }else{
            return redirect()->back()->with('message','Contraseña incorrecta');
        }

    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to("/login");

    }
    private function _redirectAuth(){
        $session = session();
        if ($session->rolId=='1') {
            return redirect()->to("/SeleccionarCiclo")->with('message','Bienvenido: '.$session->usuario);
        }
   }

   private function _loadDefaultView($data,$view){

    echo view("user/templates/header");
    echo view("user/control/$view",$data);
    echo view("user/templates/footer");
}


}