<?php

namespace App\Admin\Repositories;

use App\Models\Street as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Street extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
