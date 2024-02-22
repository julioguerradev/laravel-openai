<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesCommission extends Model
{
    // MAPEANDO ESTRUTURA DA VIEW
    protected $table     = 'sales_commission_view';
    public $incrementing = false;
    public $timestamps   = false;
}
