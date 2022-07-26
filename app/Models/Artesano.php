<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Artesano
 * @package App\Models
 * @version July 25, 2022, 3:31 pm UTC
 *
 * @property string $nombre
 * @property string $documento
 * @property string $direccion
 */
class Artesano extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'artesanos';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombre',
        'documento',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'documento' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'documento' => 'required',
        'direccion' => 'required'
    ];

    
}
