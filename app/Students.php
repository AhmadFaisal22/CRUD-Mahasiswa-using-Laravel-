<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $fillable =['nama','nim','fakultas','jurusan'];
}
