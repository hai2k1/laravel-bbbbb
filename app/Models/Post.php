<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasDateTimeFormatter;
    use SoftDeletes;

    public function locationinformation()
    {
        return $this->belongsTo(LocationInformation::class, 'post_id');
    }
        public function basicinformationpost(){
        return $this->belongsTo(BasicInformationPost::class,'post_id');
    }
}
