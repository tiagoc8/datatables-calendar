<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datatable extends Model
{
    protected $fillable = [
        'name', 'team', 'function',
    ];
}
