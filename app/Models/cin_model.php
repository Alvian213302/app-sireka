<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cin_model extends Model
{
    protected $table = 'cin';

    protected $fillable = ['maskapai', 'no_surat', 'notice', 'created_at', 'updated_at' ];
}
