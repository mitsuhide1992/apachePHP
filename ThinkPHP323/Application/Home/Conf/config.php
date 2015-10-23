<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
	    'sql/bidemo' => array('bidemo/querytest', 'status=1')
	),
	'DB_CONFIG1' => array(
		'DB_TYPE'   => 'mysql', // 数据库类型
		'DB_HOST'   => '127.0.0.1', // 服务器地址
		'DB_NAME'   => 'bi-demo', // 数据库名
		'DB_USER'   => 'root', // 用户名
		'DB_PWD'    => 'root', // 密码
		'DB_PORT'   => 3306, // 端口
		'DB_PREFIX' => '', // 数据库表前缀 
		'DB_CHARSET'=> 'utf8', // 字符集
		'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
	)
	
);