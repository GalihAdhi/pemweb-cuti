<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konfigurasi extends Model
{
    use HasFactory;

    protected $table = 'konfigurasi';

    protected $fillable = [
        'code',
        'value',
        'created_by',
        'updated_by',
        'deleted_by'
    ];
}
