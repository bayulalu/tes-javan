<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $guarded = ['id'];
    public $timestamps = FALSE;
    protected $table = 'biodata';
}
