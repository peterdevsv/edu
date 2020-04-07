<?php namespace App\Models\Catalogos;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table = 'cof_usuarios';
    protected $primaryKey = 'usuarioId';
    protected $allowedFields = ['personaId','usuario','clave','rolId','estado','ultimoIngreso','fechaTraslado','usuarioTraslado'];


}
