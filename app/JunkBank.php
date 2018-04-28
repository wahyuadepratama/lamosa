<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class JunkBank extends Model
{
    protected $table    = "junk_bank";

    use Notifiable;

    protected $fillable = [
        'name', 'description', 'lat', 'lang', 'created_at',
    ];

    protected $guarded = [
        'photo','user_id',
    ];
}
