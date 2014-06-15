<?php


define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
require_once(ROOT_PATH . '/' . ADMIN_PATH . '/includes/lib_goods.php');

if ($_REQUEST['act'] == 'comment')
{
$goods_id = intval($_REQUEST['goods_id']);
/* 商品信息 */
$sql = "SELECT * FROM " . $ecs->table('goods') . " WHERE goods_id = '$goods_id'";
$goods = $db->getRow($sql);
$goods_name = $goods['goods_name'];

$smarty->assign('goods_id', $goods_id);
$smarty->assign('goods_name', $goods_name);
$smarty->display('comment.htm');
}
/*------------------------------------------------------ */
//-- 评论预览
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'comment_preview')
{
check_authz_json('goods_manage');

/* 配置信息 */
$goods_id       = intval($_REQUEST['goods_id']);
$taourl = $_POST['taourl'];
$keywords = $_POST['keyword'];
$max_num = $_POST['maxNum'];

if(empty($taourl))
{
$link[] = array('text' => $_LANG['go_back'], 'href' => 'javascript:history.back(-1)');
sys_msg('淘宝商品地址不能为空', 0, $link);
exit;
}


$tmall_content = file_get_contents($taourl);
if(empty($tmall_content))
{
$link[] = array('text' => $_LANG['go_back'], 'href' => 'javascript:history.back(-1)');
sys_msg('淘宝商品地址无效', 0, $link);
exit;
}



preg_match_all ( '/valReviewsApi\"\:\"(.*?)\",/i', $tmall_content, $reviews_url);
$reviews_url = $reviews_url[1][0];




if(empty($reviews_url))
{
$link[] = array('text' => $_LANG['go_back'], 'href' => 'javascript:history.back(-1)');
sys_msg('获取淘宝商品评论地址失败', 0, $link);
exit;
}


//采10页
$page=10;

for($i=1;$i<=$page;$i++)
{

$pageContents = '';

$reviews_url  = str_replace('currentPage','',$reviews_url);
$reviews_url = $reviews_url."&currentPage=$i";


//评论内容
$pageContents =  file_get_contents($reviews_url);
$pageContents = iconv('GB2312', 'UTF-8', $pageContents); //默认采用UTF-8编码，如网站采用GBK请将此段注释掉

//获取评论内容
preg_match_all ( '/rateContent\"\:\"(.*?)\",\"/i', $pageContents, $match1);
//获取用户列表
preg_match_all ( '/displayUserNick\"\:\"(.*?)\",\"/i', $pageContents, $match2);
//获取评论时间
preg_match_all ( '/rateDate\"\:\"(.*?)\",\"/i', $pageContents, $match3);
//获取评论时间

$comment_list[] = $match1[1];
$user_list[] = $match2[1];
$dateList[] = $match3[1];
}

$comment_list_temp = array();
$user_list_temp = array();
$dateList_temp = array();
foreach($comment_list as $key=>$val)
{
foreach($val as $k=>$v)
{
$comment_list_temp[$user_list[$key][$k]]=$v;
//$user_list_temp[] = $user_list[$key][$k];
$dateList_temp[$user_list[$key][$k]] = $dateList[$key][$k];
}
}




$comment_list = $comment_list_temp;
$dateList = $dateList_temp;


$comments = array();
$i = 0;
foreach($comment_list as $key=>$val)
{


if($i>=$max_num)
{
continue;
}

if(!empty($keywords))
{
if(strpos($val,$keywords)==false)
{
continue;
}
}



$comments[$key]['comment_type'] = 0;
$comments[$key]['id_value'] = $goods_id;
$comments[$key]['email'] = '';
$comments[$key]['user_name'] = $key;

//评论内容
$comments[$key]['content'] = $val;
//评论等级
$rank = mt_rand(4,5); //默认4和5随机等级
$comments[$key]['comment_rank'] = $rank;


if(isset($dateList[$key]))
{
$time = strtotime(str_replace('.','-',$dateList[$key]));
}
else
{
$time = gmtime();
}

$comments[$key]['add_time'] = $time;
$comments[$key]['ip_address'] = real_ip();
$comments[$key]['status'] = 1;
$comments[$key]['parent_id'] = 0;
$comments[$key]['user_id'] = 0;
$comments[$key]['goods_name'] = "$goods_name";
$comments[$key]['format_time'] = local_date($GLOBALS['_CFG']['time_format'], $time);
$comments[$key]['id'] = $i;

$i++;
}


$arrdata['result'] = 'success';
$arrdata['data'] = $comments;
$arrdata['count'] = count($comments);

//报错处理
if($arrdata['result'] == 'error'){
exit($arrdata['data']);
}

//获取评论，插入数据库
if($arrdata['result'] == 'success'){
$_SESSION['comment_arrdata'] = $arrdata;
$smarty->assign('comment_list', $arrdata['data']);
}

$smarty->assign('goods_id', $goods_id);
$smarty->assign('goods_name', $goods_name);
$smarty->assign('c_count', $arrdata['count']);
$smarty->assign('c_goods', '<a href="../goods.php?id='.$goods_id.'" target="_blank" >查看商品</a>');
$smarty->assign('source_url', $arrdata['source_url']);
$smarty->assign('c_manage', "<a href='comment_manage.php?act=list' target='_blank' >进入评论后台管理</a>");


$smarty->display('comment_preview.htm');
}

/*------------------------------------------------------ */
//-- 批量导入评论
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'comment_batch_import')
{

check_authz_json('goods_manage');
$ids = isset($_POST['checkboxes']) ?  $_POST['checkboxes'] : array();
$auto_clear = empty($_POST['auto_clear']) ? 0 : $_POST['auto_clear'];

//清除该商品下的所有评论
if($auto_clear==1){
$sql = "DELETE FROM " .$ecs->table('comment') ." WHERE id_value=".$_GET['goods_id'];
$result = $db->query($sql);
}

$arrdata = $_SESSION['comment_arrdata'];


//报错处理
if($arrdata['result'] == 'error'){
exit($arrdata['data']);
}


//获取评论，插入数据库
if($arrdata['result'] == 'success'){


//取出商品下的历史评论,过滤重复的用户名
$array_name = array();
$sql = "SELECT distinct user_name FROM " .$ecs->table('comment') ." WHERE id_value=".$_GET['goods_id'];
$names = $db->getAll($sql);
for($i=0; $i<count($names); $i++){
$array_name[] = $names[$i]['user_name'];
}


foreach($arrdata['data'] as $comment){


	if(in_array($comment['id'],$ids)){
	
		$user_name =$comment['user_name'];
		
		//去重复
		if(in_array($user_name,$array_name)){
		continue;
		}
		$comment_type = $comment['comment_type'];
		$id_value = $comment['id_value'];
		$email = $comment['email'];
		$user_name = $_POST['user_name'][$comment['id']];
		$content = $_POST['content'][$comment['id']];
		$comment_rank = $_POST['comment_rank'][$comment['id']];
		$add_time = strtotime($_POST['add_time'][$comment['id']]);
		$ip_address =$comment['ip_address'];
		$status =$_POST['is_show'][$comment['id']];
		$parent_id =$comment['parent_id'];
		$user_id =$comment['user_id'];
		$goods_id =$_POST['goods_id'];
		$buy_num =$_POST['buy_num'];
		$buy_time =$_POST['buy_time'];
		$password=time();//随便弄个密码
		$reg_date = strtotime($_POST['add_time'][$comment['id']])-30*24*3600;
		$ip = '';
		
		if(check_user($user_name) == true){
			$user_name = $user_name . "_" . time();
		}
		
		$sql = "INSERT INTO " .$ecs->table('comment') ."(comment_type, id_value, email, user_name, content, comment_rank, add_time, ip_address, status, parent_id, user_id) VALUES " ."('" .$comment_type. "', '" .$id_value. "', '$email', '$user_name', '" .$content."', '".$comment_rank."', '".$add_time."', '".$ip_address."', '$status', '$parent_id', '$user_id')";
		$db->query($sql);
		
		
		//添加用户到用户表
		$db->query('INSERT INTO ' . $GLOBALS['ecs']->table("users") . "(`email`, `user_name`, `password`, `reg_time`, `last_login`, `last_ip`) VALUES ('$email', '$user_name', '$password', '$reg_date', '$reg_date', '$ip')");
		
		$userid = $db->getOne("SELECT user_id FROM " . $GLOBALS['ecs']->table("users") . " WHERE user_name = '" . $user_name . "'");
		
		//添加虚拟订单到订单表
		
		$order_sn = get_order_sn();
		$order_status = 5;
		$shipping_status = 2;
		$pay_status = 2;
		$addtime = strtotime($_POST['add_time'][$comment['id']])-($buy_time*24*3600);
		$pay_time = strtotime($_POST['add_time'][$comment['id']])-($buy_time*24*3600);
		$goods_number = rand(1,$buy_num);
		$goods_info = $db->getRow("SELECT goods_name,goods_sn,market_price,shop_price FROM " . $GLOBALS['ecs']->table("goods") . " WHERE goods_id = " . $goods_id);
		
		$db->query('INSERT INTO ' . $GLOBALS['ecs']->table("order_info") . "(`order_sn`, `user_id`, `order_status`, `shipping_status`, `pay_status`, `add_time`, `pay_time`) VALUES ('$order_sn', '$userid', '$order_status', '$shipping_status', '$pay_status', '$addtime', '$pay_time')");
		
		$orderid = $db->getOne("SELECT order_id FROM " . $GLOBALS['ecs']->table("order_info") . " WHERE order_sn = '" . $order_sn . "'");
		
		
		$db->query('INSERT INTO ' . $GLOBALS['ecs']->table("order_goods") . "(`order_id`, `goods_id`, `goods_name`, `goods_sn`, `goods_number`, `market_price`, `goods_price`, `send_number`, `is_real`) VALUES ('$orderid', '$goods_id', '".$goods_info['goods_name']."', '".$goods_info['goods_sn']."', '$goods_number', ".$goods_info['market_price'].", ".$goods_info['shop_price'].", '$goods_number', 1)");
		
	}

}

}

unset($_SESSION['comment_arrdata']);
$link[] = array('href' => 'goods.php?act=list', 'text' => "进入商品列表");
sys_msg("批量评论订单成功", 1, $link);
}

function get_order_sn()
{
    mt_srand((double) microtime() * 1000000);

    return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
}

function check_user($user_name){
	$sql = "SELECT user_id FROM " . $GLOBALS['ecs']->table("users"). " WHERE user_name='$user_name'";
	$row = $GLOBALS['db']->getOne($sql);
	if ($row > 0){
		return true;
	}else{
		return false;
	}
}
?>