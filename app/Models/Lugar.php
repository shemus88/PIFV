<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Lugar as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Lugar extends Authenticatable
{
    use HasFactory;
    protected $table ='lugares';
    public function lugares()
    {
        return $this->HasMany(Lugares::class);
    }
}
