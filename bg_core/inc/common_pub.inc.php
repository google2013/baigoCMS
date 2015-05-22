<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

include_once(BG_PATH_INC . "common_global.inc.php");
include_once(BG_PATH_CLASS . "mysqli.class.php"); //载入数据库类
include_once(BG_PATH_CLASS . "base.class.php"); //载入基类

header("Content-Type: text/html; charset=utf-8");

if (!defined("BG_DB_PORT")) {
	define("BG_DB_PORT", "3306");
}

$_cfg_host = array(
	"host"      => BG_DB_HOST,
	"name"      => BG_DB_NAME,
	"user"      => BG_DB_USER,
	"pass"      => BG_DB_PASS,
	"charset"   => BG_DB_CHARSET,
	"debug"     => BG_DB_DEBUG,
	"port"      => BG_DB_PORT,
);

$GLOBALS["obj_db"]      = new CLASS_MYSQLI($_cfg_host); //设置数据库对象

if (!$GLOBALS["obj_db"]->connect()) {
	header("Location: " . BG_URL_ROOT . "db_conn_err.html");
	exit;
}

if (!$GLOBALS["obj_db"]->select_db()) {
	header("Location: " . BG_URL_ROOT . "db_select_err.html");
	exit;
}

$GLOBALS["obj_base"]    = new CLASS_BASE(); //初始化基类

include_once(BG_PATH_CLASS . "tpl_pub.class.php");
include_once(BG_PATH_MODEL . "spec.class.php");
include_once(BG_PATH_MODEL . "cate.class.php");
include_once(BG_PATH_MODEL . "articlePub.class.php");
include_once(BG_PATH_MODEL . "tag.class.php");
include_once(BG_PATH_MODEL . "call.class.php");
include_once(BG_PATH_MODEL . "attach.class.php");
include_once(BG_PATH_MODEL . "thumb.class.php"); //载入上传模型
include_once(BG_PATH_FUNC . "callDisplay.func.php");
