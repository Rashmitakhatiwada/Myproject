<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'name', 'description', 'user_id','days','company_id',
    ];
}
