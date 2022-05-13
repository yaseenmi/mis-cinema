<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function ticket()
    {
        return $this->BelongsTo(Ticket::class);

    }
}
