<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'content',
        'sent_date',
    ];

    protected $dates = [
        'sent_date',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'from');
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'to');
    }
}
