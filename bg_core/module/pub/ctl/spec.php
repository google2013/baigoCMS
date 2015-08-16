<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

include_once(BG_PATH_INC . "common_pub.inc.php"); //载入后台通用
include_once(BG_PATH_CONTROL_PUB . "ctl/spec.class.php"); //载入文章类

$ctl_spec = new CONTROL_SPEC();
switch ($GLOBALS["act_get"]) {
	case "show":
		$arr_specRow = $ctl_spec->ctl_show();
		if ($arr_specRow["alert"] != "y180102") {
			header("Location: " . BG_URL_ROOT . "index.php?mod=alert&act_get=show&alert=" . $arr_specRow["alert"]);
			exit;
		}
	break;

	default:
		$arr_specRow = $ctl_spec->ctl_list();
	break;
}
