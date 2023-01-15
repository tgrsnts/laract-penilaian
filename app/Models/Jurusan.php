<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}
