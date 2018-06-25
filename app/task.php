<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = [
        'name', 'projectss_id','user_id','days','hours','company_id',
    ];
}
