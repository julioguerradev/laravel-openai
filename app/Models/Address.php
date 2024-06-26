<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    // ELE SÓ MANDOA PARA O BANCO OS DADOS DESSE ARRAY
    protected $fillable = [
        'city',
        'state'
    ];

    public function clients(): HasMany{
        return $this->hasMany(Client::class);
    }
}
