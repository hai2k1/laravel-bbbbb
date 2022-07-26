<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class LocationInformation extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'location_information';
    
}
