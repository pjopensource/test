<?php
/**
 * FCKeditor保存远程图片插件
 * @author slime09(slime09@gmail.com)
 * @license LGPL
 * @version 1.02 2009.4.18
 * @copyright  Copyright (c) 2009,  LinJiong (http://topit.cn)
 * 
 */
 define('ROOT_PATH', preg_replace('/includes(.*)/i', '', str_replace('\\', '/', __FILE__)));
 if (isset($_SERVER['PHP_SELF']))
{
    define('PHP_SELF', $_SERVER['PHP_SELF']);
}
else
{
    define('PHP_SELF', $_SERVER['SCRIPT_NAME']);
}

$root_path = preg_replace('/includes(.*)/i', '', PHP_SELF);
//设置图片保存绝对路径
$saveFilePath=ROOT_PATH . '/images/upload/fckautosave';
//设置显示的链接地址
$displayUrl=$root_path .'images/upload/fckautosave';;
?>