<?php

namespace App\Repositories;

use App\Models\projects;
use App\Repositories\BaseRepository;

/**
 * Class projectsRepository
 * @package App\Repositories
 * @version December 18, 2020, 6:13 pm UTC
*/

class projectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'date_receipt',
        'predication_number',
        'predication_date',
        'approximate_value',
        'finish_date'
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
        return projects::class;
    }
}
