<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class P_users extends Model
{
    //指定表名
    protected $table = 'p_users';
    //指定主键
    protected $primaryKey = "user_id";
    //关闭时间戳
    public $timestamps=false;
}

