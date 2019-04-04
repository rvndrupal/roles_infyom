<?php

namespace App\Repositories;

use App\Models\Proveedores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ProveedoresRepository
 * @package App\Repositories
 * @version April 4, 2019, 7:34 pm UTC
 *
 * @method Proveedores findWithoutFail($id, $columns = ['*'])
 * @method Proveedores find($id, $columns = ['*'])
 * @method Proveedores first($columns = ['*'])
*/
class ProveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Proveedores::class;
    }
}
