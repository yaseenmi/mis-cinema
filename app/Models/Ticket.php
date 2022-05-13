<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Screen;
use App\Models\Seat;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Movie;

class Ticket extends Model
{
    use HasFactory;
   
    protected $fillable = ["screen_id","user_id","movie_id","seat_id","reservation_id","time_id"];

public function screen()
{
    return $this->HasMany(Screen::class);

}

public function seat()
{
    return $this->HasMany(Seat::class);

}

public function time()
{
    return $this->HasMany(time::class);

}

public function movie()
{
    return $this->HasMany(movie::class);

}

public function reservation()
{
    return $this->HasMany(Reservation::class);

}

public function user_id()
{
    return $this->HasMany(User::class);

}

}
