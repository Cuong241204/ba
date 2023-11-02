<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    use HasFactory;

    protected $table = 'message';
    protected $fillable = [
        'from_user_id',
        'to_user_td',
        'content_message',
        'send_at'
    ];

}
