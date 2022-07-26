<?php

namespace App\Admin\Repositories;

use App\Models\BasicInformationPost as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class BasicInformationPost extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
