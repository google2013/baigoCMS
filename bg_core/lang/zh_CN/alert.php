<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
	exit("Access Denied");
}

/*------提示信息------
x开头为错误
y开头为成功
------------------*/
return array(
	/*@@@@@@ x-1---- SSO @@@@@@*/

	/*++++++ x-1-1-- 数据 ++++++*/
	"y010101" => "用户注册成功",
	"x010101" => "用户注册失败",
	"y010102" => "用户存在",
	"x010102" => "用户不存在",
	"y010103" => "更新用户成功",
	"x010103" => "没有做任何修改",
	"y010104" => "删除用户成功",
	"x010104" => "未删除任何用户",
	"y010105" => "创建用户表成功",
	"x010105" => "创建用户表失败",
	"y010106" => "更新用户表成功",
	"x010106" => "没有做任何修改",
	"y010107" => "删除用户表成功",
	"x010107" => "未删除任何表",

	/*++++++ x-1-2-- 验证 ++++++*/
	"x010201" => "请输入用户名",
	"x010202" => "用户名不能超过 10 中文，30 英文",
	"x010203" => "用户名只能使用英文字母、数字、中文和下划线",
	"x010204" => "用户名中含有禁止注册的词汇",
	"y010205" => "该用户名可以注册",
	"x010205" => "该用户名已存在",

	"x010206" => "请输入 E-mail",
	"x010207" => "E-mail 不能超过 300 中文，900 英文",
	"x010208" => "E-mail 格式错误",
	"x010209" => "该 E-mail 不允许注册",
	"x010210" => "该 E-mail 禁止注册",
	"y010211" => "该 E-mail 可以注册",
	"x010211" => "该 E-mail 已存在",

	"x010212" => "请输入密码",
	"x010213" => "密码错误",

	"x010214" => "昵称不能超过 10 中文，30 英文",

	/*++++++ x-1-3-- 权限 ++++++*/

	/*++++++ x-1-4-- 状态 ++++++*/
	"y010401" => "用户登录成功",
	"x010401" => "用户被禁用",



	/*@@@@@@ x-2---- 管理员 @@@@@@*/

	/*++++++ x-2-1-- 数据 ++++++*/
	"y020101" => "创建管理员成功",
	"x020101" => "创建管理员失败",
	"y020102" => "管理员存在",
	"x020102" => "管理员不存在",
	"y020103" => "更新管理员成功",
	"x020103" => "没有做任何修改",
	"y020104" => "删除管理员成功",
	"x020104" => "未删除任何管理员",
	"y020105" => "创建管理员表成功",
	"x020105" => "创建管理员表失败",
	"y020106" => "更新管理员表成功",
	"x020106" => "没有做任何修改",
	"y020107" => "删除管理员表成功",
	"x020107" => "未删除任何表",
	"y020108" => "更新个人信息成功",
	"x020108" => "禁止更新个人信息",
	"y020109" => "修改密码成功",
	"x020109" => "禁止修改密码",

	/*++++++ x-2-2-- 验证 ++++++*/
	"x020201" => "请输入用户名",
	"x020202" => "用户名不能超过 10 中文，30 英文",
	"x020203" => "用户名只能使用英文字母、数字、中文和下划线",
	"x020204" => "用户存在，请使用授权为管理员",
	"x020205" => "用户不存在，请使用创建管理员",
	"x020206" => "管理员已存在",

	"x020207" => "请输入 E-mail",
	"x020208" => "E-mail 不能超过 300 中文，900 英文",
	"x020209" => "E-mail 格式错误",

	"x020210" => "请输入密码",
	"x020211" => "两次密码输入不一致",

	"x020212" => "备注不能超过 10 中文，30 英文",
	"x020213" => "请选择状态",
	"x020214" => "请选择群组",
	"x020215" => "请确认密码",
	"x020216" => "昵称不能超过 10 中文，30 英文",
	"x020217" => "请输入新密码",

	/*++++++ x-2-3-- 权限 ++++++*/
	"x020301" => "您没有浏览管理员的权限",
	"x020302" => "您没有创建管理员的权限",
	"x020303" => "您没有编辑管理员的权限",
	"x020304" => "您没有删除管理员的权限",
	"x020305" => "您没有加入群组的权限",
	"x020306" => "不能编辑自己",

	/*++++++ x-2-4-- 状态 ++++++*/
	"x020401" => "管理员被禁用",
	"x020402" => "管理员尚未登录",
	"x020403" => "登录校验错误",
	"x020404" => "登录超时，请保存好相关信息，重新登录",



	/*@@@@@@ x-3---- 系统 @@@@@@*/

	/*++++++ x-3-1-- 数据 ++++++*/
	"x030101" => "验证码错误",
	"x030102" => "令牌错误",
	"y030103" => "创建数据表成功",
	"x030104" => "创建 SSO 管理员表失败",
	"x030105" => "更新 SSO 管理员表失败",

	"x030106" => "创建 SSO 用户表失败",

	"x030107" => "创建 SSO 应用表失败",
	"x030108" => "插入 SSO 应用数据失败",
	"x030109" => "创建 SSO 日志表失败",
	"x030110" => "SSO 返回错误",

	"x030111" => "无法连接数据库服务器",
	"x030112" => "选择的数据库不存在",
	"y030113" => "升级数据库成功",

	/*++++++ x-3-2-- 验证 ++++++*/
	"x030201" => "请输入 4 位验证码",
	"x030202" => "至少选择一项",
	"x030203" => "请选择具体操作",
	"x030204" => "请输入数据库服务器地址",
	"x030205" => "请输入数据库名称",
	"x030206" => "请输入数据库用户名",
	"x030207" => "请输入数据库密码",
	"x030208" => "请输入数据库字符编码",
	"x030209" => "请输入数据表名前缀",
	"x030210" => "请选择是否打开数据库调试模式",
	"x030211" => "请输入数据库服务器端口",

	/*++++++ x-3-3-- FTP ++++++*/
	"x030301" => "FTP 服务器连接失败", //创建目录成功
	"x030302" => "FTP 服务器登录失败", //创建目录失败
	"x030303" => "FTP 上传文件失败", //创建目录失败
	"x030304" => "FTP 删除文件失败", //删除文件成功
	"x030305" => "FTP 创建目录失败", //删除文件失败

	/*++++++ x-3-4-- 状态 ++++++*/
	"x030401" => "正在验证",
	"x030402" => "验证过程出错",
	"x030403" => "系统已安装",
	"y030404" => "数据库设置成功",
	"x030404" => "数据库未正确设置",
	"y030405" => "基本设置成功",
	"y030406" => "访问方式设置成功",
	"y030407" => "上传设置成功",
	"y030408" => "SSO 设置成功",
	"x030408" => "SSO 已安装",
	"y030409" => "创建管理员成功",
	"y030410" => "执行自动部署第一步成功",
	"y030411" => "安装成功",
	"x030412" => "数据表未正确创建",
	"x030413" => "SSO 需要执行安装程序",
	"x030414" => "SSO 需要执行升级程序",
	"x030415" => "需要执行安装程序",
	"x030416" => "需要执行升级程序",
	"x030417" => "服务器环境检查未通过",
	"x030418" => "服务器环境检查未通过",
	"x030419" => "数据库未正确设置",


	/*@@@@@@ x-4---- 群组 @@@@@@*/

	/*++++++ x-4-1-- 数据 ++++++*/
	"y040101" => "创建群组成功",
	"x040101" => "创建群组失败",
	"y040102" => "群组存在",
	"x040102" => "群组不存在",
	"y040103" => "更新群组成功",
	"x040103" => "没有做任何修改",
	"y040104" => "删除群组成功",
	"x040104" => "未删除任何群组",
	"y040105" => "创建群组表成功",
	"x040105" => "创建群组表失败",
	"y040106" => "更新群组表成功",
	"x040106" => "没有做任何修改",
	"y040107" => "删除群组表成功",
	"x040107" => "未删除任何表",

	/*++++++ x-4-2-- 验证 ++++++*/
	"x040201" => "请输入组名",
	"x040202" => "组名不能超过 10 中文，30 英文",
	"y040203" => "该组名可以注册",
	"x040203" => "该组名已存在",
	"x040204" => "备注不能超过 10 中文，30 英文",
	"x040205" => "请选择类型",
	"x040206" => "获取群组 ID 错误",
	"x040207" => "请选择状态",

	/*++++++ x-4-3-- 权限 ++++++*/
	"x040301" => "您没有浏览群组的权限",
	"x040302" => "您没有创建群组的权限",
	"x040303" => "您没有编辑群组的权限",
	"x040304" => "您没有删除群组的权限",

	/*++++++ x-4-3-- 权限 ++++++*/
	"x040401" => "群组被禁用",


	/*@@@@@@ x-5---- 应用 @@@@@@*/

	/*++++++ x-5-1-- 数据 ++++++*/
	"y050102" => "应用存在",
	"x050102" => "应用不存在",

	/*++++++ x-5-2-- 验证 ++++++*/
	"x050203" => "获取应用 ID 错误",
	"x050204" => "应用 ID 必须为数字",

	"x050212" => "不允许访问的 IP 地址",
	"x050213" => "禁止访问的 IP 地址",

	"x050214" => "无通信密钥",
	"x050215" => "通信密钥最长 64 位",
	"x050216" => "通信密钥只能使用英文字母和数字",
	"x050217" => "通信密钥错误",

	"x050218" => "请选择是否同步",

	/*++++++ x-5-3-- 权限 ++++++*/
	"x050305" => "本应用没有用户注册权限",
	"x050306" => "本应用没有用户登录权限",
	"x050307" => "本应用没有获取用户信息权限",
	"x050308" => "本应用没有编辑用户权限",
	"x050309" => "本应用没有删除用户权限",
	"x050310" => "本应用没有验证用户名权限",
	"x050311" => "本应用没有验证 E-mail 权限",
	"x050312" => "本应用没有生成签名权限",
	"x050313" => "本应用没有验证签名权限",
	"x050314" => "本应用没有加密权限",
	"x050315" => "本应用没有解密权限",

	/*++++++ x-5-4-- 状态 ++++++*/
	"x050402" => "应用被禁用",



	/*@@@@@@ x-6---- 设置 @@@@@@*/

	/*++++++ x-6-1-- 数据 ++++++*/
	"y060101" => "创建设置项成功",
	"x060101" => "创建设置项失败",
	"y060102" => "设置项存在",
	"x060102" => "设置项不存在",
	"y060103" => "更新设置项成功",
	"x060103" => "没有做任何修改",
	"y060104" => "删除设置项成功",
	"x060104" => "未删除任何设置项",
	"y060105" => "创建设置表成功",
	"x060105" => "创建设置表失败",
	"y060106" => "更新设置表成功",
	"x060106" => "没有做任何修改",
	"y060107" => "删除设置表成功",
	"x060107" => "未删除任何表",

	/*++++++ x-6-2-- 验证 ++++++*/
	"x060201" => "请输入",
	"x060202" => "不能超过 300 中文，900 英文",
	"x060203" => "格式错误",

	/*++++++ x-6-3-- 权限 ++++++*/
	"x060301" => "您没有基本设置的权限",
	"x060302" => "您没有上传设置的权限",
	"x060303" => "您没有 SSO 设置的权限",
	"x060304" => "您没有访问方式设置的权限",
	"x060305" => "您没有生成设置的权限",
	"x060306" => "您没有数据库设置的权限",

	/*++++++ x-6-4-- 状态 ++++++*/
	"y060401" => "基本设置成功",
	"y060402" => "上传设置成功",
	"y060403" => "SSO 设置成功",
	"y060404" => "访问方式设置成功",
	"y060405" => "数据库设置成功",



	/*@@@@@@ x-7---- 附件数据 @@@@@@*/

	/*++++++ x-7-1-- 数据 ++++++*/
	"y070101" => "创建附件数据成功",
	"x070101" => "创建附件数据失败",
	"y070102" => "附件数据存在",
	"x070102" => "附件数据不存在",
	"y070103" => "更新附件数据成功",
	"x070103" => "没有做任何修改",
	"y070104" => "删除附件数据成功",
	"x070104" => "未删除任何附件数据",
	"y070105" => "创建附件表成功",
	"x070105" => "创建附件表失败",
	"y070106" => "更新附件表成功",
	"x070106" => "没有做任何修改",
	"y070107" => "删除附件表成功",
	"x070107" => "未删除任何表",

	/*++++++ x-7-2-- 验证 ++++++*/
	"x070201" => "请选择要上传的文件",
	"x070202" => "不允许上传的类型",
	"x070203" => "上传文件不能超过",
	"x070204" => "同时上传不能超过",

	/*++++++ x-7-3-- 权限 ++++++*/
	"x070301" => "您没有浏览附件的权限",
	"x070302" => "您没有上传的权限",
	"x070303" => "您没有编辑附件的权限",
	"x070304" => "您没有删除附件的权限",

	/*++++++ x-6-4-- 状态 ++++++*/
	"y070401" => "上传成功",
	"y070402" => "生成缩略图成功",
	"x070402" => "未生成缩略图",
	"y070403" => "上传初始化成功",
	"y070404" => "插入图片成功",
	"x070405" => "尚未设置允许上传类型",



	/*@@@@@@ x-8---- 上传类型 @@@@@@*/

	/*++++++ x-8-1-- 数据 ++++++*/
	"y080101" => "创建 MIME 成功",
	"x080101" => "创建 MIME 失败",
	"y080102" => "MIME 存在",
	"x080102" => "MIME 不存在",
	"y080103" => "更新 MIME 成功",
	"x080103" => "没有做任何修改",
	"y080104" => "删除 MIME 成功",
	"x080104" => "未删除任何 MIME",
	"y080105" => "创建 MIME 表成功",
	"x080105" => "创建 MIME 表失败",
	"y080106" => "更新 MIME 表成功",
	"x080106" => "没有做任何修改",
	"y080107" => "删除 MIME 表成功",
	"x080107" => "未删除任何表",

	/*++++++ x-8-2-- 验证 ++++++*/
	"x080201" => "请输入 MIME",
	"x080202" => "MIME 不能超过 300 字符",
	"x080203" => "请输入扩展名",
	"x080204" => "扩展名不能超过 10 字符",
	"x080205" => "备注不能超过 100 中文，300 英文",
	"x080206" => "该类型已存在",

	/*++++++ x-8-3-- 权限 ++++++*/
	"x080301" => "您没有浏览 MIME 的权限",
	"x080302" => "您没有创建 MIME 的权限",
	"x080303" => "您没有编辑 MIME 的权限",
	"x080304" => "您没有删除 MIME 的权限",

	/*++++++ x-8-4-- 状态 ++++++*/



	/*@@@@@@ x-9---- 缩略图 @@@@@@*/

	/*++++++ x-9-1-- 数据 ++++++*/
	"y090101" => "创建缩略图成功",
	"x090101" => "创建缩略图失败",
	"y090102" => "缩略图存在",
	"x090102" => "缩略图不存在",
	"y090103" => "更新缩略图成功",
	"x090103" => "没有做任何修改",
	"y090104" => "删除缩略图成功",
	"x090104" => "未删除任何缩略图",
	"y090105" => "创建缩略图表成功",
	"x090105" => "创建缩略图表失败",
	"y090106" => "更新缩略图表成功",
	"x090106" => "没有做任何修改",
	"y090107" => "删除缩略图表成功",
	"x090107" => "未删除任何表",

	"y090110" => "刷新缩略图缓存成功",
	"x090110" => "刷新缩略图缓存失败",

	/*++++++ x-9-2-- 验证 ++++++*/
	"x090201" => "请输入最大宽度",
	"x090202" => "宽度必须为数字",
	"x090203" => "请输入最大高度",
	"x090204" => "高度必须为数字",
	"x090205" => "请选择缩略图类型",
	"x090206" => "该缩略图已存在",

	/*++++++ x-9-3-- 权限 ++++++*/
	"x090301" => "您没有浏览缩略图的权限",
	"x090302" => "您没有创建缩略图的权限",
	"x090303" => "您没有编辑缩略图的权限",
	"x090304" => "您没有删除缩略图的权限",

	/*++++++ x-9-4-- 状态 ++++++*/



	/*@@@@@@ x10---- 文件夹 @@@@@@*/

	/*++++++ x10-1-- 文件夹 ++++++*/
	"y100101" => "创建文件夹成功",
	"x100101" => "创建文件夹失败",
	"y100102" => "文件夹存在",
	"x100102" => "文件夹不存在",
	"y100103" => "更新文件夹成功",
	"x100103" => "没有做任何修改",
	"y100104" => "删除文件夹成功",
	"x100104" => "未删除任何文件夹",

	/*++++++ x10-2-- php 上传处理 ++++++*/
	"x100201" => "上传的文件超过了 php.ini 的设置", //上传的文件超过了 php.ini 中的设置
	"x100202" => "上传文件的大小超过了表单的设置", //上传文件的大小超过了表单的设置
	"x100203" => "文件只有部分被上传", //文件只有部分被上传
	"x100204" => "没有文件被上传", //没有文件被上传
	"x100206" => "找不到临时文件夹", //找不到临时文件夹
	"x100207" => "文件写入失败", //找不到临时文件夹



	/*@@@@@@ x11---- 栏目 @@@@@@*/

	/*++++++ x11-1-- 数据 ++++++*/
	"y110101" => "创建栏目成功",
	"x110101" => "创建栏目失败",
	"y110102" => "栏目存在",
	"x110102" => "栏目不存在",
	"y110103" => "更新栏目成功",
	"x110103" => "没有做任何修改",
	"y110104" => "删除栏目成功",
	"x110104" => "未删除任何栏目",
	"y110105" => "创建栏目表成功",
	"x110105" => "创建栏目表失败",
	"y110106" => "更新栏目表成功",
	"x110106" => "没有做任何修改",
	"y110107" => "删除栏目表成功",
	"x110107" => "未删除任何表",

	"y110109" => "创建栏目索引成功",
	"x110109" => "创建栏目索引失败",

	"y110110" => "刷新栏目缓存成功",
	"x110110" => "创建栏目缓存失败",

	/*++++++ x11-2-- 验证 ++++++*/
	"x110201" => "请输入栏目名称",
	"x110202" => "栏目名称不能超过 100 中文，300 英文",
	"x110203" => "栏目名称已存在",
	"x110204" => "栏目别名不能超过 300 字符",
	"x110205" => "栏目别名只能使用英文字母和数字",
	"x110206" => "栏目别名已存在",
	"x110207" => "URL 前缀不能超过 3000 字符",
	"x110208" => "URL 前缀格式错误",
	"x110209" => "请输入栏目内容",
	"x110210" => "请输入跳转至",
	"x110211" => "跳转至不能超过 300 字符",
	"x110212" => "跳转至格式错误",
	"x110213" => "请选择隶属栏目",
	"x110214" => "请选择栏目模板",
	"x110215" => "请选择栏目类型",
	"x110216" => "请选择栏目状态",
	"x110217" => "获取栏目 ID 错误",
	"x110218" => "该栏目为跳转",
	"x110219" => "请选择排序方式",
	"x110220" => "输入的 ID 错误",
	"x110221" => "不能隶属于本栏目",
	"x110222" => "只能选择普通栏目",
	"x110223" => "请输入每页显示数",
	"x110224" => "每页显示数必须为数字",

	/*++++++ x11-3-- 权限 ++++++*/
	"x110301" => "您没有浏览栏目的权限",
	"x110302" => "您没有创建栏目的权限",
	"x110303" => "您没有编辑栏目的权限",
	"x110304" => "您没有删除栏目的权限",

	/*++++++ x11-4-- 状态 ++++++*/
	"x110401" => "尚未创建栏目",



	/*@@@@@@ x12---- 文章 @@@@@@*/

	/*++++++ x12-1-- 数据 ++++++*/
	"y120101" => "创建文章成功",
	"x120101" => "创建文章失败",
	"y120102" => "文章存在",
	"x120102" => "文章不存在",
	"y120103" => "更新文章成功",
	"x120103" => "没有做任何修改",
	"y120104" => "删除文章成功",
	"x120104" => "未删除任何文章",
	"y120105" => "创建文章表成功",
	"x120105" => "创建文章表失败",
	"y120106" => "更新文章表成功",
	"x120106" => "没有做任何修改",
	"y120107" => "删除文章表成功",
	"x120107" => "未删除任何表",
	"y120108" => "创建文章视图成功",
	"x120108" => "创建文章视图失败",
	"y120109" => "创建文章索引成功",
	"x120109" => "创建文章索引失败",

	/*++++++ x12-2-- 验证 ++++++*/
	"x120201" => "请输入文章标题",
	"x120202" => "文章标题不能超过 100 中文，300 英文",
	"x120203" => "TAG 不能超过 100 中文，300 英文",
	"x120204" => "链接不能超过 900 字符",
	"x120205" => "链接格式错误",
	"x120206" => "摘要不能超过 300 中文，900 英文",
	"x120207" => "请选择隶属于栏目",
	"x120208" => "请选择状态",
	"x120209" => "请选择保存至",
	"x120210" => "请输入发布时间",
	"x120211" => "时间格式错误",
	"x120212" => "获取文章 ID 错误",
	"x120213" => "该文章为跳转",

	/*++++++ x12-3-- 权限 ++++++*/
	"x120301" => "您没有浏览文章的权限",
	"x120302" => "您没有创建文章的权限",
	"x120303" => "您没有编辑文章的权限",
	"x120304" => "您没有删除文章的权限",

	/*++++++ x12-4-- 状态 ++++++*/
	"x120401" => "您不是该文章的作者",



	/*@@@@@@ x13---- TAG @@@@@@*/

	/*++++++ x13-1-- 数据 ++++++*/
	"y130101" => "创建 TAG 成功",
	"x130101" => "创建 TAG 失败",
	"y130102" => "TAG 存在",
	"x130102" => "TAG 不存在",
	"y130103" => "更新 TAG 成功",
	"x130103" => "没有做任何修改",
	"y130104" => "删除 TAG 成功",
	"x130104" => "未删除任何 TAG",
	"y130105" => "创建 TAG 表成功",
	"x130105" => "创建 TAG 表失败",
	"y130106" => "更新 TAG 表成功",
	"x130106" => "没有做任何修改",
	"y130107" => "删除 TAG 表成功",
	"x130107" => "未删除任何表",

	/*++++++ x13-2-- 验证 ++++++*/
	"x130201" => "请输入 TAG",
	"x130202" => "TAG 不能超过 10 中文，30 英文",
	"x130203" => "TAG 已存在",
	"x130204" => "请选择 TAG 状态",

	/*++++++ x13-3-- 权限 ++++++*/
	"x130301" => "您没有浏览 TAG 的权限",
	"x130302" => "您没有创建 TAG 的权限",
	"x130303" => "您没有编辑 TAG 的权限",
	"x130304" => "您没有删除 TAG 的权限",



	/*@@@@@@ x14---- 标记 @@@@@@*/

	/*++++++ x14-1-- 数据 ++++++*/
	"y140101" => "创建标记成功",
	"x140101" => "创建标记失败",
	"y140102" => "标记存在",
	"x140102" => "标记不存在",
	"y140103" => "更新标记成功",
	"x140103" => "没有做任何修改",
	"y140104" => "删除标记成功",
	"x140104" => "未删除任何标记",
	"y140105" => "创建标记表成功",
	"x140105" => "创建标记表失败",
	"y140106" => "更新标记表成功",
	"x140106" => "没有做任何修改",
	"y140107" => "删除标记表成功",
	"x140107" => "未删除任何表",

	/*++++++ x14-2-- 验证 ++++++*/
	"x140201" => "请输入标记",
	"x140202" => "标记不能超过 10 中文，30 英文",
	"x140203" => "标记已存在",
	"x140204" => "请选择标记状态",

	/*++++++ x14-3-- 权限 ++++++*/
	"x140301" => "您没有浏览标记的权限",
	"x140302" => "您没有创建标记的权限",
	"x140303" => "您没有编辑标记的权限",
	"x140304" => "您没有删除标记的权限",



	/*@@@@@@ x15---- 栏目从属 @@@@@@*/

	/*++++++ x15-1-- 数据 ++++++*/
	"y150101" => "创建栏目从属成功",
	"x150101" => "创建栏目从属失败",
	"y150102" => "栏目从属存在",
	"x150102" => "栏目从属不存在",
	"y150103" => "更新栏目从属成功",
	"x150103" => "没有做任何修改",
	"y150104" => "删除栏目从属成功",
	"x150104" => "未删除任何栏目从属",
	"y150105" => "创建栏目从属表成功",
	"x150105" => "创建栏目从属表失败",
	"y150106" => "更新栏目从属表成功",
	"x150106" => "没有做任何修改",
	"y150107" => "删除栏目从属表成功",
	"x150107" => "未删除任何表",
	"y150109" => "创建从属表索引成功",
	"x150109" => "创建从属表索引失败",



	/*@@@@@@ x16---- TAG 从属 @@@@@@*/

	/*++++++ x16-1-- 数据 ++++++*/
	"y160101" => "创建 TAG 从属成功",
	"x160101" => "创建 TAG 从属失败",
	"y160102" => "TAG 从属存在",
	"x160102" => "TAG 从属不存在",
	"y160103" => "更新 TAG 从属成功",
	"x160103" => "没有做任何修改",
	"y160104" => "删除 TAG 从属成功",
	"x160104" => "未删除任何 TAG 从属",
	"y160105" => "创建 TAG 从属表成功",
	"x160105" => "创建 TAG 从属表失败",
	"y160106" => "更新 TAG 从属表成功",
	"x160106" => "没有做任何修改",
	"y160107" => "删除 TAG 从属表成功",
	"x160107" => "未删除任何表",
	"y160108" => "创建 TAG 视图成功",
	"x160108" => "创建 TAG 视图失败",
	"y160109" => "创建 TAG 从属索引成功",
	"x160109" => "创建 TAG 从属索引失败",



	/*@@@@@@ x17---- 调用 @@@@@@*/

	/*++++++ x17-1-- 数据 ++++++*/
	"y170101" => "创建调用成功",
	"x170101" => "创建调用失败",
	"y170102" => "调用存在",
	"x170102" => "调用不存在",
	"y170103" => "更新调用成功",
	"x170103" => "没有做任何修改",
	"y170104" => "删除调用成功",
	"x170104" => "未删除任何调用",
	"y170105" => "创建调用表成功",
	"x170105" => "创建调用表失败",
	"y170106" => "更新调用表成功",
	"x170106" => "没有做任何修改",
	"y170107" => "删除调用表成功",
	"x170107" => "未删除任何表",

	/*++++++ x17-2-- 验证 ++++++*/
	"x170201" => "请输入调用名称",
	"x170202" => "调用名称不能超过 100 中文，300 英文",
	"x170203" => "调用名称已存在",
	"x170204" => "请选择调用类型",
	"x170205" => "请选择生成文件类型",
	"x170206" => "请选择状态",
	"x170207" => "请输入显示数",
	"x170208" => "必须为数字",
	"x170209" => "请输入排除数",
	"x170210" => "必须为数字",
	"x170211" => "请输入显示字数",
	"x170212" => "显示字数必须为数字",
	"x170213" => "获取调用 ID 错误",
	"x170214" => "不能超过 300 字符",
	"x170215" => "只能使用英文、数字、下划线与减号",
	"x170216" => "至少选择一项",

	/*++++++ x17-3-- 权限 ++++++*/
	"x170301" => "您没有浏览调用的权限",
	"x170302" => "您没有创建调用的权限",
	"x170303" => "您没有编辑调用的权限",
	"x170304" => "您没有删除调用的权限",



	/*@@@@@@ x18---- 专题 @@@@@@*/

	/*++++++ x18-1-- 数据 ++++++*/
	"y180101" => "创建专题成功",
	"x180101" => "创建专题失败",
	"y180102" => "专题存在",
	"x180102" => "专题不存在",
	"y180103" => "更新专题成功",
	"x180103" => "没有做任何修改",
	"y180104" => "删除专题成功",
	"x180104" => "未删除任何专题",
	"y180105" => "创建专题表成功",
	"x180105" => "创建专题表失败",
	"y180106" => "更新专题表成功",
	"x180106" => "没有做任何修改",
	"y180107" => "删除专题表成功",
	"x180107" => "未删除任何表",

	/*++++++ x18-2-- 验证 ++++++*/
	"x180201" => "请输入专题名称",
	"x180202" => "专题名称不能超过 100 中文，300 英文",
	"x180203" => "专题内容不能超过 1000 中文，3000 英文",
	"x180204" => "获取专题 ID 出错",
	"x180205" => "请选择状态",

	/*++++++ x18-3-- 权限 ++++++*/
	"x180301" => "您没有浏览专题的权限",
	"x180302" => "您没有创建专题的权限",
	"x180303" => "您没有编辑专题的权限",
	"x180304" => "您没有删除专题的权限",



	/*@@@@@@ x19---- 应用 @@@@@@*/

	/*++++++ x19-1-- 数据 ++++++*/
	"y190101" => "创建应用成功",
	"x190101" => "创建应用失败",
	"y190102" => "应用存在",
	"x190102" => "应用不存在",
	"y190103" => "更新应用成功",
	"x190103" => "没有做任何修改",
	"y190104" => "删除应用成功",
	"x190104" => "未删除任何应用",
	"y190105" => "创建应用表成功",
	"x190105" => "创建应用表失败",
	"y190106" => "更新应用表成功",
	"x190106" => "没有做任何修改",
	"y190107" => "删除应用表成功",
	"x190107" => "未删除任何表",

	/*++++++ x19-2-- 验证 ++++++*/
	"x190201" => "请输入应用名称",
	"x190202" => "应用名称不能超过 10 中文，30 英文",
	"x190203" => "获取应用 ID 错误",
	"x190204" => "应用 ID 必须为数字",

	"x190205" => "备注不能超过 10 中文，30 英文",
	"x190206" => "请选择状态",

	"x190207" => "请输入通知接口 URL",
	"x190208" => "通知接口 URL 不能超过 3000 字符",
	"x190209" => "通知接口 URL 格式错误",

	"x190210" => "允许 IP 地址最长不能超过 3000 英文",
	"x190211" => "禁止 IP 地址最长不能超过 3000 英文",
	"x190212" => "不允许访问的 IP 地址",
	"x190213" => "禁止访问的 IP 地址",

	"x190214" => "无通信密钥",
	"x190215" => "通信密钥最长 64 位",
	"x190216" => "通信密钥格式错误",
	"x190217" => "通信密钥错误",

	"x190218" => "请选择是否同步",

	/*++++++ x19-3-- 权限 ++++++*/
	"x190301" => "您没有浏览应用的权限",
	"x190302" => "您没有创建应用的权限",
	"x190303" => "您没有编辑应用的权限",
	"x190304" => "您没有删除应用的权限",

	"x190305" => "本应用没有用户注册权限",
	"x190306" => "本应用没有用户登录权限",
	"x190307" => "本应用没有获取用户信息权限",
	"x190308" => "本应用没有编辑用户权限",
	"x190309" => "本应用没有删除用户权限",
	"x190310" => "本应用没有验证用户名权限",
	"x190311" => "本应用没有验证 E-mail 权限",
	"x190312" => "本应用没有生成签名权限",
	"x190313" => "本应用没有验证签名权限",
	"x190314" => "本应用没有加密权限",
	"x190315" => "本应用没有解密权限",

	/*++++++ x19-4-- 状态 ++++++*/
	"x190402" => "应用被禁用",



	/*@@@@@@ x20---- 自定义表单 @@@@@@*/

	/*++++++ x20-1-- 数据 ++++++*/
	"y200101" => "创建自定义表单成功",
	"x200101" => "创建自定义表单失败",
	"y200102" => "自定义表单存在",
	"x200102" => "自定义表单不存在",
	"y200103" => "更新自定义表单成功",
	"x200103" => "没有做任何修改",
	"y200104" => "删除自定义表单成功",
	"x200104" => "未删除任何自定义表单",
	"y200105" => "创建自定义表单表成功",
	"x200105" => "创建自定义表单表失败",
	"y200106" => "更新自定义表单表成功",
	"x200106" => "没有做任何修改",
	"y200107" => "删除自定义表单表成功",
	"x200107" => "未删除任何表",

	/*++++++ x20-2-- 验证 ++++++*/
	"x200201" => "请输入表单名称",
	"x200202" => "表单名称不能超过 30 中文，90 英文",
	"x200203" => "表单已存在",
	"x200204" => "表单 ID 必须为数字",
	"x200205" => "请选择表单类型",
	"x200206" => "请选择表单状态",

	/*++++++ x20-3-- 权限 ++++++*/
	"x200301" => "您没有浏览自定义表单的权限",
	"x200302" => "您没有创建自定义表单的权限",
	"x200303" => "您没有编辑自定义表单的权限",
	"x200304" => "您没有删除自定义表单的权限",

	/*++++++ x20-4-- 状态 ++++++*/
	"x200402" => "自定义表单被禁用",
);
