<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    // 菜单表
    protected $table = 'menuses';
    protected $guarded = [];
    public $timestamps = false;
}
