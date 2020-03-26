<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    // 子菜单表
    protected $table = 'submenus';
    protected $guarded = [];
    public $timestamps = false;
}
