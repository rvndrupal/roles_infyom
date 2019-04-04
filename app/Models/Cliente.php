<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Cliente
 * @package App\Models
 * @version April 4, 2019, 7:12 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 */
class Cliente extends Model
{

    public $table = 'clientes';
    


    public $fillable = [
        'nombre',
        'apellidos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellidos' => 'string'
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
