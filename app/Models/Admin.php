<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // 管理员表
    protected $table = 'admins';
    protected $guarded = [];
    public $timestamps = false;
}
