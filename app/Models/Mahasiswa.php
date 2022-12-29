<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mahasiswa
 * @package App\Models
 * @version December 28, 2022, 10:02 am UTC
 *
 * @property string $nama
 * @property integer $umur
 * @property string $alamat
 * @property string $kota
 * @property string $jurusan
 */
class Mahasiswa extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahasiswas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama',
        'umur',
        'alamat',
        'kota',
        'jurusan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama' => 'string',
        'umur' => 'integer',
        'alamat' => 'string',
        'kota' => 'string',
        'jurusan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'required',
        'umur' => 'required',
        'alamat' => 'required',
        'kota' => 'required',
        'jurusan' => 'required'
    ];

    
}
