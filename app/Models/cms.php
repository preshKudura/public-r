<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cms extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function imageVideo(): HasMany{
        return $this->hasMany(imageGallery::class);
       }
}
