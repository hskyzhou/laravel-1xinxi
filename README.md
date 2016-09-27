# laravel-1xinxi
laravel5.2 for 1xinxi(第翼信息)

### 服务商
	1. http://sms.1xinxi.cn/  第一短信(第翼短信)

##安装
	1. composer require hsky/laravel-1xinxi
	
	2. config/app.php 下 providers 数组添加
		```php
			'providers' => [
				...
				Hsky/XinXi/XinXiServiceProvider::class
			]
		```
	
	3. [可选] config/app.php  下 aliases数组 添加
		```php
			'aliases' => [
				'Xinxi' => Hsky/XinXi/Facades/XinXiFacade::class,
			]
		```
	