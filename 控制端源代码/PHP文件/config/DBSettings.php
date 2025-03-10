<?php 
class DatabaseSettings
{
	var $settings;
	function getSettings()
	{
		// 请正确输入你数据库的相关信息
		// 数据库地址一般保持默认即可
		$settings['dbhost'] = 'localhost';
		// 数据库名称
		$settings['dbname'] = 'wp';
		// 数据库用户名
		$settings['dbusername'] = 'root';
		// 数据库密码 
		$settings['dbpassword'] = '';

		return $settings;
	}
} 

