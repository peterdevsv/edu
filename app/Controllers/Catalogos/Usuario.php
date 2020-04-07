<?php namespace App\Controllers\Catalogos;
use App\Models\Catalogos\PersonaModel;
use App\Models\Catalogos\RolesModel;
use App\Models\Catalogos\UsuariosModel;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundException;

class Usuario extends BaseController {

  public function index(){
   
    $user = new UsuariosModel();

    $data = [
      'users' => $user->asObject()
      ->select('cof_usuarios.*, cof_personas.nombres as nombres,cof_personas.apellidos as apellidos,cof_rol.nombreRol as nombreRol')
      ->join('cof_personas','cof_personas.personaId = cof_usuarios.personaId')
      ->join('cof_rol','cof_rol.rolId = cof_usuarios.rolId')->findAll()
    ];
    $this->_loadDefaultView( 'Listado de usuarios',$data,'index');
  }

  public function new(){
   $user = new UsuariosModel();
   $persona = new PersonaModel();
   $roles = new   RolesModel();

   $validation =  \Config\Services::validation();
   $this->_loadDefaultView('Crear usuario',['validation'=>$validation, 'user'=> new UsuariosModel(),'personas' => $persona->asObject()->findAll(),'rol' => $roles->asObject()->findAll(),'usuarios' => $user->asObject()->findAll()],'new');

 }
 public function create(){
  helper("user");


  $user = new UsuariosModel();

  if($this->validate('users')){
   $id = $user->insert([
    'personaId' =>$this->request->getPost('personaId'),
    'usuario' =>$this->request->getPost('usuario'),
    'clave' =>hashClave($this->request->getPost('clave')),
    'rolId' => $this->request->getPost('rolId'),
    'estado' => 'EN PROCESO',
  ]);

   return redirect()->to('/Catalogos/usuario')->with('message', 'usuario creado con éxito.');
 }
 return redirect()->back()->withInput();
}
public function edit($id = null){

  $user = new UsuariosModel();
  $persona = new PersonaModel();
  $roles = new   RolesModel();
  if ($user->find($id) == null)
  {
    throw PageNotFoundException::forPageNotFound();
  }  

  $validation =  \Config\Services::validation();
  $this->_loadDefaultView('Actualizar usuario',
    ['validation'=>$validation,'user'=> $user->asObject()->find($id),'personas' => $persona->asObject()->findAll(),'rol' => $roles->asObject()->findAll(),'usuarios' => $user->asObject()->findAll() ],'edit');
}
public function update($id = null){
  helper("user");
  $user = new UsuariosModel();

  if ($user->find($id) == null)
  {
    throw PageNotFoundException::forPageNotFound();
  }  
  if($this->validate('userUpdate')){
    $user->update($id, [
      'personaId' =>$this->request->getPost('personaId_editar'),
      'usuario' =>$this->request->getPost('usuario'),
      'clave' =>hashClave($this->request->getPost('clave')),
      'rolId' => $this->request->getPost('rolId_editar'),
      'estado' =>$this->request->getPost('estado_editar'),
    ]);
    return redirect()->to('/Catalogos/usuario')->with('message', 'Usuario editado con éxito.');
  }
  return redirect()->back()->withInput();
}

public function delete($id = null){

  $user = new UsuariosModel();

  if ($user->find($id) == null)
  {
    throw PageNotFoundException::forPageNotFound();
  }  

  $user->delete($id);

  return redirect()->to('/Catalogos/usuario')->with('message', 'usuario eliminado con éxito.');
  
}


private function _loadDefaultView($title,$data,$view){

  $dataHeader =[
    'title' => $title
  ];

  echo view("dashboard/templates/header",$dataHeader);
  echo view("Catalogos/user/$view",$data);
  echo view("dashboard/templates/footer");
}


}
