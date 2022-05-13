<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MovieScreen extends Model
{
    use HasFactory;

    protected $table = "movie_screen";

    protected $fillable = ["movie_id","screen_id"];
    
    public $timestamps = false;

}
