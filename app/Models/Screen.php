<?php

namespace App\Models;
use App\Models\Seat;
use App\Models\Movie;
use App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    use HasFactory;

    protected $fillable = ['slug','name'];

    public function seat()
    {
        return $this->HasMany(Seat::class);
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class,'movie_screen');
    }    

    public function ticket()
    {
        return $this->BelongsTo(Ticket::class);

    }
}
