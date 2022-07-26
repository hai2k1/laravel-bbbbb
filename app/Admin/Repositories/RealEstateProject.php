<?php

namespace App\Admin\Repositories;

use App\Models\RealEstateProject as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class RealEstateProject extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
