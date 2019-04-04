<?php

namespace App\Repositories;

use App\Models\Alumnos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AlumnosRepository
 * @package App\Repositories
 * @version April 4, 2019, 7:29 pm UTC
 *
 * @method Alumnos findWithoutFail($id, $columns = ['*'])
 * @method Alumnos find($id, $columns = ['*'])
 * @method Alumnos first($columns = ['*'])
*/
class AlumnosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alumnos::class;
    }
}
