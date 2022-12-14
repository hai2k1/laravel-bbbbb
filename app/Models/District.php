<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasDateTimeFormatter;
    public $timestamps = false;
    public function cities(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class, 'city','code');
    }
}
