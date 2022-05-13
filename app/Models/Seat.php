<?php

namespace App\Models;
use App\Models\Screen;
use App\Models\Ticket;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    protected $fillable = ['screen_id','seat_number','row_number','isReserved'];

    public function screen()
    {
        return $this->BelongsTo(Screen::class);
    }
    public function ticket()
    {
        return $this->BelongsTo(Ticket::class);

    }
}
