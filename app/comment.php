<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'body','url', 'commenatable_type', 'user_id','commentable_id',
    ];
}}
