# laravel-1xinxi
laravel5.2 for 1xinxi(第翼信息)

### 服务商
1. http://sms.1xinxi.cn/  第一短信(第翼短信)

##安装
- composer require hsky/laravel-1xinxi
- config/app.php 下 providers 数组添加

```php
	'providers' => [
		...
		Hsky\XinXi\XinXiServiceProvider::class
	]
```

- [可选] config/app.php  下 aliases数组 添加

```php
	'aliases' => [
		'Xinxi' => Hsky\XinXi\Facades\XinXiFacade::class,
	]
```

- 使用

	- 发送普通短信[有定义短信模板]

```php
	/**
	 * 支持多手机号发送
	 *  @param  $verify  string 验证码
	 *  @param  $mobile  string|array
	 *  @param  $sendTime  datetime  发送时间 
	 *  @param  $extno  int  扩展码
	 */
	Xinxi::sendNormalInfo($verify, $mobile, $sendTime = '', $extno = '');
```
eg:  Xinxi::sendNormalInfo('1234', '13112345678', '2016-9-28 5:24:24', '')

	- 发送自定义短信[不需要短信模板]

```php
	/**
	 * 支持多手机号发送
	 *  @param  $content  string 验证码
	 *  @param  $mobile  string|array
	 *  @param  $sendTime  datetime  发送时间 
	 *  @param  $extno  int  扩展码
	 */
	Xinxi::sendCustomInfo($content, $mobile, $sendTime = '', $extno = '');
```
eg:  Xinxi::sendCustomInfo('自定义发送内容', '13112345678', '2016-9-28 5:24:24', '')