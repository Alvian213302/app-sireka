<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eksepdisi_model extends Model
{
    protected $table = 'ekspedisi';

    protected $fillable = [
        'name', 'email', 'password', 'nomor_telepon', 'remember_token'
    ];
}
