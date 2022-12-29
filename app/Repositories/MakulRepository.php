<?php

namespace App\Repositories;

use App\Models\Makul;
use App\Repositories\BaseRepository;

/**
 * Class MakulRepository
 * @package App\Repositories
 * @version December 28, 2022, 10:13 am UTC
*/

class MakulRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_makul',
        'nama_dosen',
        'jumlah_mahasiswa',
        'sks',
        'ruangan'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Makul::class;
    }
}
