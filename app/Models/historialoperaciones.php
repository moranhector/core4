<?php

namespace App\Models;

use Eloquent as Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class historialoperaciones
 * @package App\Models
 * @version August 12, 2022, 2:57 pm UTC
 *
 * @property string $tipooperacion
 * @property string $usuario
 * @property string $expediente
 * @property string $id_expediente
 * @property string $CODIGO_REPARTICION_DESTINO
 * @property string $REPARTICION_USUARIO
 * @property string $DESTINATARIO
 */
class historialoperaciones extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'historialoperaciones';
    

    //protected $dates = ['deleted_at'];



    public $fillable = [
        'TIPO_OPERACION',
        'registrado_at',
        'USUARIO',
        'EXPEDIENTE',
        'ID_EXPEDIENTE',
        'CODIGO_REPARTICION_DESTINO',
        'REPARTICION_USUARIO',
        'DESTINATARIO'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tipooperacion' => 'string',
        'usuario' => 'string',
        'expediente' => 'string',
        'id_expediente' => 'string',
        'CODIGO_REPARTICION_DESTINO' => 'string',
        'REPARTICION_USUARIO' => 'string',
        'DESTINATARIO' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipooperacion' => 'required',
        'usuario' => 'required',
        'expediente' => 'required',
        'id_expediente' => 'required',
        'CODIGO_REPARTICION_DESTINO' => 'required',
        'REPARTICION_USUARIO' => 'required',
        'DESTINATARIO' => 'required'
    ];

    
}
