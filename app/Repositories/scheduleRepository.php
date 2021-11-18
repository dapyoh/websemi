<?php

namespace App\Repositories;

use App\Models\schedule;
use App\Repositories\BaseRepository;

/**
 * Class scheduleRepository
 * @package App\Repositories
 * @version October 26, 2021, 7:28 pm UTC
*/

class scheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CebuPacific',
        'Date',
        'Time'
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
        return schedule::class;
    }
}
