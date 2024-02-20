<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // ELE SÓ MANDOA PARA O BANCO OS DADOS DESSE ARRAY
    protected $fillable = [
        'commission_rate',
        'name'
    ];
}
