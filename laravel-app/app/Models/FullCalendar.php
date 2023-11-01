<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FullCalendar extends Model
{
    use HasFactory;

    protected $table = 'calendar';

    protected $fillable = [
        'email',
        'content_calendar',
        'date_pick_ticket',
    ];
}
