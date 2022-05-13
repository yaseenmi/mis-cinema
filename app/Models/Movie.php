<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Screen;
use App\Models\Ticket;
use App\Models\Time;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['slug','name','image','description','price','type','display'];
   
    public function screens()
    {
        return $this->belongsToMany(Screen::class,'movie_screen');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function time()
    {
        return $this->HasMany(Time::class);
    }
}
