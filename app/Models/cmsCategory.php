<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Illuminate\Database\Eloquent\SoftDeletes;

class cmsCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
}
