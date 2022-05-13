<?php

namespace App\Models;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    protected $fillable = ["start","end","movie_id"];

    public function movie()
    {
        return $this->BelongsTo(Movie::class);
    }
}
