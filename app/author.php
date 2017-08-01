<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
    protected $public = 'author';
    protected $fillable = ['nama'];
    protected $visible = ['nama'];
    public $timestamps = true;
}
