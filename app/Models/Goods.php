<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    // 商品表
    protected $table = 'goods';
    protected $guarded = [];
    public $timestamps = false;
}
