<?php namespace App\Models;

use CodeIgniter\Model;

class SeleccionarCicloModel extends Model
{
    protected $table = 'cof_aper_ciclo';
    protected $primaryKey = 'aperCicloId';
    protected $allowedFields = ['aperCicloId','ciclo','anio'];


}
