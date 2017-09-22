<?php
namespace app\addons\card\common;
use yii\web\Controller;
class CommonController extends Controller
{
	public $layout = false;
	public function init()
	{
		parent::init();
		header("Content-type:text/html; charset=utf-8");
	}
	public function test()
	{
		echo  'hello';
	}

	public function dexit($data = '')
    {
        if (is_array($data)) {
            echo json_encode($data);
        } else {
            echo $data;
        }
        exit();
    }

    public function arr2_arr1($arrdata,$v)
    {
        $arrs = array();
        foreach ($arrdata as $key => $value) {
            $arrs[] = $value[$v];
        }
        return $arrs;
    }

    public function clear_html($array)
    {
        if (!is_array($array))
            return trim(htmlspecialchars($array, ENT_QUOTES));
            foreach ($array as $key => $value) {
                if (is_array($value)) {
                    $this->clear_html($value);
                } else {
                    $array[$key] = trim(htmlspecialchars($value, ENT_QUOTES));
                }
            }
        return $array;
    }
}