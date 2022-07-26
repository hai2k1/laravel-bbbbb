<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class BasicInformationPost extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'basic_information_post';
    
}
