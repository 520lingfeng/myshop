<?php

namespace app\index\model;

use think\Model;

class User extends Model
{
	// 设置主键 若主键ID不是以 id为名则需要设置
	// protected $pk = 'user_id';
	
	// 设置表名 如果要用的表名不是类名，则需要设置(重设表名需要全名(加前缀))
	// $protected $table = 'one_user';
	
	// 初始化 被调用时自动执行
	protected static function init()
	{

	}
}