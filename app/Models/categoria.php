<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $table = 't_categoria';
    protected $primaryKey = 'id_categoria';
    protected $fillable = [
        'nombre'
    ];
    protected $hidden = [
        'create_at',
        'update_at'
    ];
}
