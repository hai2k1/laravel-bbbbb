<?php

namespace App\Admin\Repositories;

use App\Models\LocationInformation as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class LocationInformation extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
