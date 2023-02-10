<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chuyenmuc extends Model
{
    use HasFactory;
    protected $table = 'chuyenmucs';
    protected $fillable = [
        'name_column',
        'status',
    ];
}
