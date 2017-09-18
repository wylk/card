<?php
namespace app\addons\card\common;
use yii\web\Controller;
class CommonController extends Controller
{
	public $layout = false;
	public function init()
	{
		parent::init();
		header("Content-type: text/html; charset=utf-8");
	}
	public function test()
	{
		echo  'hello';
	}
}