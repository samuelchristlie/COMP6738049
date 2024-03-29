<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
        'content',
        'sentDate',
    ];

    protected $timestamps = [
        'sentDate',
    ];

    protected $casts = [
        'membershipDate' => 'timestamp',
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
