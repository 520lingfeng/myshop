<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // 主键ID
    protected $primaryKey = 'userid';

    /**
     * 默认情况下，Eloquent会默认数据表中存在created_at和updated_at这两个字段
     * 不需要这两个字段 设置为false
     * 该模型是否被自动维护时间戳
     * @var bool
     */
    public $timestamps = false;
}
