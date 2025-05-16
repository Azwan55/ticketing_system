<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
     protected $fillable = [
        'name',
        'email',
        'status',
        'phone',
        'level',
        'msg',
    ];

    protected $table = 'ticket';
}
