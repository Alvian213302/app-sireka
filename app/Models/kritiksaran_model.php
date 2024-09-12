<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritiksaran_model extends Model
{
    protected $table = 'kritiksaran';

    protected $fillable = ['nama_lengkap', 'kritiksaran', 'created_at', 'updated_at' ];
}
