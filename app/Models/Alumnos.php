<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Alumnos
 * @package App\Models
 * @version April 4, 2019, 7:29 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 * @property string telefono
 */
class Alumnos extends Model
{

    public $table = 'alumnos';
    


    public $fillable = [
        'nombre',
        'apellidos',
        'telefono'
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
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'telefono' => 'required'
    ];

    
}
