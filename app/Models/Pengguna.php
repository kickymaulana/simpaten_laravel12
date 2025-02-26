<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'pengguna';
    protected $guarded = [];
    protected $primaryKey = 'no_hp';
    public $incrementing = false;
    protected $keyType = 'string';
}
