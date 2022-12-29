<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Makul
 * @package App\Models
 * @version December 28, 2022, 10:13 am UTC
 *
 * @property string $nama_makul
 * @property string $nama_dosen
 * @property integer $jumlah_mahasiswa
 * @property integer $sks
 * @property string $ruangan
 */
class Makul extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'makuls';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_makul',
        'nama_dosen',
        'jumlah_mahasiswa',
        'sks',
        'ruangan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nama_makul' => 'string',
        'nama_dosen' => 'string',
        'jumlah_mahasiswa' => 'integer',
        'sks' => 'integer',
        'ruangan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_makul' => 'required',
        'nama_dosen' => 'required',
        'jumlah_mahasiswa' => 'required',
        'sks' => 'required',
        'ruangan' => 'required'
    ];

    
}
