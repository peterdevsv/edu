<?php namespace App\Models\Catalogos;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table = 'cof_rol';
    protected $primaryKey = 'rolId';
    protected $allowedFields = ['rolId','nombreRol'];
}