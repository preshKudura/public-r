<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'published_at' => 'datetime',
    ];
   public function scopePublished($query){
    $query->where('published_at', '<=', Carbon::now());
   }

   public function scopeFeatured($query){
    $query->where('featured', true);
   }

   public function categories(){
    return $this->belongsToMany(Category::class);
   }

   public function author(){
    return $this->belongsTo(User::class, 'user_id');
   }

   public function getExcept(){
    return Str::limit(strip_tags($this->body) , 150);
   }

   public function getReadingTime(){
   $mins = round(str_word_count($this->body) / 250);
    return ($mins <1) ? 1 : $mins;
   }
}
