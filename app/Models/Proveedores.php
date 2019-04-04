<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Proveedores
 * @package App\Models
 * @version April 4, 2019, 7:34 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 * @property string direccion
 */
class Proveedores extends Model
{

    public $table = 'proveedores';
    


    public $fillable = [
        'nombre',
        'apellidos',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellidos' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellidos' => 'required'
    ];

    
}
