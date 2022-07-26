<?php

namespace App\Admin\Repositories;

use App\Models\Ward as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Ward extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

}
