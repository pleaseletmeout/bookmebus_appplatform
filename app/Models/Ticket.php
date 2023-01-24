<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $primaryKey = 'ticket_id';

    protected $fillable = [
        'booked_seat',
        'schedule_id',
        'date',
        'id'
    ];
}
