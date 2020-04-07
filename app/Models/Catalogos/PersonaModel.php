<?php namespace App\Models\Catalogos;

use CodeIgniter\Model;

class PersonaModel extends Model
{
    protected $table = 'cof_personas';
    protected $primaryKey = 'personaId';
    protected $allowedFields = ['personaId','DUI','carnet','nombres','apellidos','tipoPersona','estadoCivil','sexo','direccion','telefono','email','fechaNacimiento','fechaIngreso','anioIngreso','estado','fechaTraslado','usuarioTraslado'];

}
