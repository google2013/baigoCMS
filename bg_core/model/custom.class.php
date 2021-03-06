<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if(!defined("IN_BAIGO")) {
    exit("Access Denied");
}

/*-------------自定义字段-------------*/
class MODEL_CUSTOM {

    private $obj_db;
    public $customStatus = array();
    public $customTypes = array();
    public $customFormats = array();

    function __construct() { //构造函数
        $this->obj_db   = $GLOBALS["obj_db"]; //设置数据库对象
        $this->obj_dir  = new CLASS_DIR();
    }


    /**
     * mdl_create_table function.
     *
     * @access public
     * @return void
     */
    function mdl_create_table() {
        foreach ($this->customStatus as $_key=>$_value) {
            $_arr_status[] = $_key;
        }
        $_str_status = implode("','", $_arr_status);

        foreach ($this->customTypes as $_key=>$_value) {
            $_arr_types[] = $_key;
        }
        $_str_types = implode("','", $_arr_types);

        foreach ($this->customFormats as $_key=>$_value) {
            $_arr_formats[] = $_key;
        }
        $_str_formats = implode("','", $_arr_formats);

        $_arr_customCreat = array(
            "custom_id"          => "smallint NOT NULL AUTO_INCREMENT COMMENT 'ID'",
            "custom_name"        => "varchar(90) NOT NULL COMMENT '名称'",
            "custom_type"        => "enum('" . $_str_types . "') NOT NULL COMMENT '类型'",
            "custom_opt"         => "varchar(1000) NOT NULL COMMENT '选项'",
            "custom_status"      => "enum('" . $_str_status . "') NOT NULL COMMENT '状态'",
            "custom_order"       => "smallint NOT NULL COMMENT '排序'",
            "custom_parent_id"   => "smallint NOT NULL COMMENT '父字段'",
            "custom_cate_id"     => "smallint NOT NULL COMMENT '栏目 ID'",
            "custom_format"      => "enum('" . $_str_formats . "') NOT NULL COMMENT '格式'",
            "custom_require"     => "tinyint(1) NOT NULL COMMENT '是否必须'",
        );

        $_num_mysql = $this->obj_db->create_table(BG_DB_TABLE . "custom", $_arr_customCreat, "custom_id", "自定义字段");

        if ($_num_mysql > 0) {
            $_str_alert = "y200105"; //更新成功
        } else {
            $_str_alert = "x200105"; //更新成功
        }

        return array(
            "alert" => $_str_alert, //更新成功
        );
    }


    function mdl_create_index() {
        $_str_alert = "y200109";
        $_arr_indexRow    = $this->obj_db->show_index(BG_DB_TABLE . "custom");

        $is_exists        = false;
        foreach ($_arr_indexRow as $_key=>$_value) {
            if (in_array("order", $_value)) {
                $is_exists = true;
                break;
            }
        }

        $_arr_customIndex = array(
            "custom_order",
            "custom_id",
        );

        $_num_mysql = $this->obj_db->create_index("order", BG_DB_TABLE . "custom", $_arr_customIndex, "BTREE", $is_exists);

        if ($_num_mysql < 1) {
            $_str_alert = "x200109";
        }

        return array(
            "alert" => $_str_alert, //更新成功
        );
    }


    /**
     * mdl_column function.
     *
     * @access public
     * @return void
     */
    function mdl_column() {
        $_arr_colRows = $this->obj_db->show_columns(BG_DB_TABLE . "custom");

        foreach ($_arr_colRows as $_key=>$_value) {
            $_arr_col[] = $_value["Field"];
        }

        return $_arr_col;
    }


    function mdl_column_custom() {
        $_arr_colRows = $this->obj_db->show_columns(BG_DB_TABLE . "article_custom");

        $_arr_col = array();

        if ($_arr_colRows) {
            foreach ($_arr_colRows as $_key=>$_value) {
                $_arr_col[] = $_value["Field"];
            }
        }

        return $_arr_col;
    }


    function mdl_alert_table() {
        foreach ($this->customTypes as $_key=>$_value) {
            $_arr_types[] = $_key;
        }
        $_str_types = implode("','", $_arr_types);

        foreach ($this->customFormats as $_key=>$_value) {
            $_arr_formats[] = $_key;
        }
        $_str_formats = implode("','", $_arr_formats);

        $_arr_col     = $this->mdl_column();
        $_arr_alert   = array();

        if (!in_array("custom_order", $_arr_col)) {
            $_arr_alert["custom_order"] = array("ADD", "smallint NOT NULL COMMENT '排序'");
        }

        if (!in_array("custom_parent_id", $_arr_col)) {
            $_arr_alert["custom_parent_id"] = array("ADD", "smallint NOT NULL COMMENT '父字段'");
        }

        if (!in_array("custom_cate_id", $_arr_col)) {
            $_arr_alert["custom_cate_id"] = array("ADD", "smallint NOT NULL COMMENT '栏目 ID'");
        }

        if (!in_array("custom_opt", $_arr_col)) {
            $_arr_alert["custom_opt"] = array("ADD", "varchar(1000) NOT NULL COMMENT '选项'");
        }

        if (!in_array("custom_format", $_arr_col)) {
            $_arr_alert["custom_format"] = array("ADD", "enum('" . $_str_formats . "') NOT NULL COMMENT '格式'");
        }

        $_arr_customData = array(
            "custom_format" => $_arr_formats[0],
        );
        $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "LENGTH(custom_format) < 1"); //更新数据

        if (!in_array("custom_require", $_arr_col)) {
            $_arr_alert["custom_require"] = array("ADD", "tinyint(1) NOT NULL COMMENT '是否必须'");
        }

        if (in_array("custom_target", $_arr_col)) {
            $_arr_alert["custom_target"] = array("DROP");
        }

        if (in_array("custom_type", $_arr_col)) {
            $_arr_customData = array(
                "custom_type" => "decimal"
            );
            $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "custom_type='int'");

            $_arr_customData = array(
                "custom_type" => "text"
            );
            $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "custom_type='varchar'");

            $_arr_customData = array(
                "custom_type" => "text"
            );
            $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "custom_type='enum'");

            $_arr_alert["custom_type"] = array("CHANGE", "enum('" . $_str_types . "') NOT NULL COMMENT '选项'", "custom_type");

            $_arr_customData = array(
                "custom_type" => $_arr_types[0],
            );
            $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "LENGTH(custom_type) < 1"); //更新数据
        }

        $_str_alert = "y200111";

        if ($_arr_alert) {
            $_reselt = $this->obj_db->alert_table(BG_DB_TABLE . "custom", $_arr_alert);

            if ($_reselt) {
                $_str_alert = "y200106";
            }
        }

        return array(
            "alert" => $_str_alert,
        );
    }


    /**
     * mdl_submit function.
     *
     * @access public
     * @param mixed $num_customId
     * @param mixed $str_customName
     * @param mixed $str_customType
     * @param mixed $str_customStatus
     * @return void
     */
    function mdl_submit() {

        $_arr_customData = array(
            "custom_name"        => $this->customSubmit["custom_name"],
            "custom_type"        => $this->customSubmit["custom_type"],
            "custom_opt"         => $this->customSubmit["custom_opt"],
            "custom_status"      => $this->customSubmit["custom_status"],
            "custom_parent_id"   => $this->customSubmit["custom_parent_id"],
            "custom_cate_id"     => $this->customSubmit["custom_cate_id"],
            "custom_format"      => $this->customSubmit["custom_format"],
            "custom_require"     => $this->customSubmit["custom_require"],
        );

        if ($this->customSubmit["custom_id"] < 1) {

            $_num_customId = $this->obj_db->insert(BG_DB_TABLE . "custom", $_arr_customData);

            if ($_num_customId > 0) { //数据库插入是否成功
                $_str_alert = "y200101";
            } else {
                return array(
                    "alert" => "x200101",
                );
            }

        } else {
            $_num_customId = $this->customSubmit["custom_id"];
            $_num_mysql  = $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "custom_id=" . $_num_customId);

            if ($_num_mysql > 0) {
                $_str_alert = "y200103";
            } else {
                return array(
                    "alert" => "x200103",
                );
            }
        }

        return array(
            "custom_id"    => $_num_customId,
            "alert"  => $_str_alert,
        );
    }


    /**
     * mdl_read function.
     *
     * @access public
     * @param mixed $str_custom
     * @param string $str_readBy (default: "custom_id")
     * @param int $num_notThisId (default: 0)
     * @param int $num_parentId (default: 0)
     * @return void
     */
    function mdl_read($str_custom, $str_readBy = "custom_id", $num_notId = 0) {
        $_arr_customSelect = array(
            "custom_id",
            "custom_name",
            "custom_type",
            "custom_opt",
            "custom_status",
            "custom_parent_id",
            "custom_cate_id",
            "custom_format",
            "custom_require",
        );

        switch ($str_readBy) {
            case "custom_id":
                $_str_sqlWhere = $str_readBy . "=" . $str_custom;
            break;
            default:
                $_str_sqlWhere = $str_readBy . "='" . $str_custom . "'";
            break;
        }

        if ($num_notId > 0) {
            $_str_sqlWhere .= " AND custom_id<>" . $num_notId;
        }

        $_arr_customRows = $this->obj_db->select(BG_DB_TABLE . "custom",  $_arr_customSelect, $_str_sqlWhere, "", "", 1, 0); //检查本地表是否存在记录

        if (isset($_arr_customRows[0])) {
            $_arr_customRow = $_arr_customRows[0];
        } else {
            return array(
                "alert" => "x200102", //不存在记录
            );
        }

        $_arr_customRow["custom_opt"] = fn_jsonDecode($_arr_customRow["custom_opt"], "decode");
        $_arr_customRow["alert"]      = "y200102";

        return $_arr_customRow;
    }


    /**
     * mdl_list function.
     *
     * @access public
     * @param string $str_status (default: "")
     * @param string $str_target (default: "")
     * @param int $num_parentId (default: 0)
     * @return void
     */
    function mdl_list($num_no, $num_except = 0, $arr_search = array(), $num_level = 1) {
        $_arr_updateData = array(
            "custom_order" => "custom_id",
        );

        $_num_mysql = $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_updateData, "custom_order=0", true); //更新数据

        $_arr_customSelect = array(
            "custom_id",
            "custom_name",
            "custom_type",
            "custom_opt",
            "custom_status",
            "custom_parent_id",
            "custom_cate_id",
            "custom_format",
            "custom_require",
        );

        $_str_sqlWhere = $this->sql_process($arr_search);

        //print_r($_str_sqlWhere);

        $_arr_customRows = $this->obj_db->select(BG_DB_TABLE . "custom",  $_arr_customSelect, $_str_sqlWhere, "", "custom_order ASC, custom_id ASC", $num_no, $num_except);

        foreach ($_arr_customRows as $_key=>$_value) {
            $_arr_customRows[$_key]["custom_opt"]    = fn_jsonDecode($_value["custom_opt"], "decode");
            $_arr_customRows[$_key]["custom_level"]  = $num_level;
            $arr_search["parent_id"] = $_value["custom_id"];
            $_arr_customRows[$_key]["custom_childs"] = $this->mdl_list(1000, 0, $arr_search, $num_level + 1);
        }

        return $_arr_customRows;
    }


    /**
     * mdl_count function.
     *
     * @access public
     * @param string $str_key (default: "")
     * @param string $str_target (default: "")
     * @return void
     */
    function mdl_count($arr_search = array()) {

        $_str_sqlWhere      = $this->sql_process($arr_search);

        $_num_customCount   = $this->obj_db->count(BG_DB_TABLE . "custom", $_str_sqlWhere); //查询数据

        /*print_r($_arr_userRow);
        exit;*/

        return $_num_customCount;
    }


    function mdl_order($str_orderType = "", $num_doId = 0, $num_targetId = 0, $num_parentId = 0) {
        //处理重复排序号
        $_str_sqlDistinct = "SELECT custom_id FROM " . BG_DB_TABLE . "custom WHERE custom_order IN (SELECT custom_order FROM " . BG_DB_TABLE . "custom GROUP BY custom_order HAVING COUNT(custom_order) > 1) ORDER BY custom_id DESC" ;
        $_obj_reselt      = $this->obj_db->query($_str_sqlDistinct);
        $_arr_row         = $this->obj_db->fetch_assoc($_obj_reselt);

        if ($_arr_row) {
            $_arr_selectData = array(
                "custom_id",
            );

            $_arr_lastRows  = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, "", "", "custom_id DESC", 1, 0); //读取倒数第一排序号
            if (isset($_arr_lastRows[0])) {
                $_arr_lastRow   = $_arr_lastRows[0];

                $_arr_updateData = array(
                    "custom_order" => $_arr_row["custom_id"] + 1,
                );

                $_str_sqlWhere = "custom_id=" . $_arr_row["custom_id"];

                $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_updateData, $_str_sqlWhere, true); //所有小于本条大于目标记录的数据排序号加1
            }
        }
        //end

        //
        $_arr_selectData = array(
            "custom_order",
        );

        switch ($str_orderType) {
            case "order_first":
                $_str_sqlWhere = "custom_parent_id=" . $num_parentId;
                $_arr_firstRows = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, $_str_sqlWhere, "", "custom_order ASC", 1, 0); //读取第一排序号
                if (isset($_arr_firstRows[0])) {
                    $_arr_firstRow  = $_arr_firstRows[0];
                }

                $_str_sqlWhere  = "custom_id=" . $num_doId . " AND custom_parent_id=" . $num_parentId;
                $_arr_doRows    = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, $_str_sqlWhere, "", "", 1, 0); //读取本条排序号
                if (isset($_arr_doRows[0])) {
                    $_arr_doRow     = $_arr_doRows[0];
                } else {
                    return array(
                        "alert" => "x200217",
                    );
                    }

                $_arr_targetData = array(
                    "custom_order" => "custom_order+1",
                );
                $_str_sqlWhere = "custom_order<" . $_arr_doRow["custom_order"] . " AND custom_parent_id=" . $num_parentId;
                $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_targetData, $_str_sqlWhere, true); //所有小于本条的数据排序号加1

                $_arr_doData = array(
                    "custom_order" => $_arr_firstRow["custom_order"],
                );
                $_str_sqlWhere = "custom_id=" . $num_doId . " AND custom_parent_id=" . $num_parentId;
                $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_doData, $_str_sqlWhere); //更新本条排序号为1
            break;

            case "order_last":
                $_str_sqlWhere  = "custom_parent_id=" . $num_parentId;
                $_arr_lastRows  = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, $_str_sqlWhere, "", "custom_order DESC", 1, 0); //读取倒数第一排序号
                if (isset($_arr_lastRows[0])) {
                    $_arr_lastRow   = $_arr_lastRows[0];
                }

                $_str_sqlWhere  = "custom_id=" . $num_doId . " AND custom_parent_id=" . $num_parentId;
                $_arr_doRows    = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, $_str_sqlWhere, "", "", 1, 0); //读取本条排序号
                if (isset($_arr_doRows[0])) {
                    $_arr_doRow     = $_arr_doRows[0];
                } else {
                    return array(
                        "alert" => "x200217",
                    );
                    }

                $_arr_targetData = array(
                    "custom_order" => "custom_order-1",
                );
                $_str_sqlWhere = "custom_order>" . $_arr_doRow["custom_order"] . " AND custom_parent_id=" . $num_parentId;
                $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_targetData, $_str_sqlWhere, true); //所有大于本条的数据排序号减1

                $_arr_doData = array(
                    "custom_order" => $_arr_lastRow["custom_order"],
                );
                $_str_sqlWhere = "custom_id=" . $num_doId . "AND custom_parent_id=" . $num_parentId;
                $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_doData, $_str_sqlWhere); //更新本条排序号为最大
            break;

            case "order_after":
                $_str_sqlWhere = "custom_id=" . $num_targetId . " AND custom_parent_id=" . $num_parentId;
                $_arr_targetRows    = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, $_str_sqlWhere, "", "", 1, 0); //读取目标记录排序号
                if (isset($_arr_targetRows[0])) {
                    $_arr_targetRow     = $_arr_targetRows[0];
                } else {
                    return array(
                        "alert" => "x200220",
                    );
                    }

                $_str_sqlWhere      = "custom_id=" . $num_doId . " AND custom_parent_id=" . $num_parentId;
                $_arr_doRows    = $this->obj_db->select(BG_DB_TABLE . "custom", $_arr_selectData, $_str_sqlWhere, "", "", 1, 0); //读取本条排序号
                if (isset($_arr_doRows[0])) {
                    $_arr_doRow     = $_arr_doRows[0];
                } else {
                    return array(
                        "alert" => "x200217",
                    );
                    }

                //print_r($_arr_doRow);

                if ($_arr_targetRow["custom_order"] > $_arr_doRow["custom_order"]) { //往下移
                    $_arr_targetData = array(
                        "custom_order" => "custom_order-1",
                    );
                    $_str_sqlWhere = "custom_order>" . $_arr_doRow["custom_order"] . " AND custom_order<=" . $_arr_targetRow["custom_order"] . " AND custom_parent_id=" . $num_parentId;
                    $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_targetData, $_str_sqlWhere, true); //所有大于本条小于目标记录的数据排序号减1

                    $_arr_doData = array(
                        "custom_order" => $_arr_targetRow["custom_order"],
                    );
                } else {
                    $_arr_targetData = array(
                        "custom_order" => "custom_order+1",
                    );
                    $_str_sqlWhere = "custom_order<" . $_arr_doRow["custom_order"] . " AND custom_order>" . $_arr_targetRow["custom_order"] . " AND custom_parent_id=" . $num_parentId;
                    $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_targetData, $_str_sqlWhere, true); //所有大于本条小于目标记录的数据排序号减1

                    $_arr_doData = array(
                        "custom_order" => $_arr_targetRow["custom_order"] + 1,
                    );
                }

                $_str_sqlWhere = "custom_id=" . $num_doId . " AND custom_parent_id=" . $num_parentId;
                $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_doData, $_str_sqlWhere); //更新本条排序号为目标记录排序号
            break;
        }

        return array(
            "alert" => "y200103",
        );
    }


    function mdl_status($str_status) {
        $_str_customId = implode(",", $this->customIds["custom_ids"]);

        $_arr_customData = array(
            "custom_status" => $str_status,
        );

        $_num_mysql = $this->obj_db->update(BG_DB_TABLE . "custom", $_arr_customData, "custom_id IN (" . $_str_customId . ")"); //更新数据

        //如车影响行数小于0则返回错误
        if ($_num_mysql > 0) {
            $_str_alert = "y200103";
        } else {
            $_str_alert = "x200103";
        }

        return array(
            "alert" => $_str_alert,
        ); //成功
    }


    /**
     * mdl_del function.
     *
     * @access public
     * @param mixed $this->customIds["custom_ids"]
     * @return void
     */
    function mdl_del() {
        $_str_customIds = implode(",", $this->customIds["custom_ids"]);

        $_num_mysql = $this->obj_db->delete(BG_DB_TABLE . "custom",  "custom_id IN (" . $_str_customIds . ")"); //删除数据

        //如车影响行数小于0则返回错误
        if ($_num_mysql > 0) {
            $_str_alert = "y200104";
        } else {
            $_str_alert = "x200104";
        }

        return array(
            "alert" => $_str_alert,
        ); //成功
    }


    function mdl_cache($is_reGen = false) {
        if ($is_reGen || !file_exists(BG_PATH_CACHE . "sys/custom_list.php")) {
            $_arr_column_custom  = $this->mdl_column_custom();

            $_arr_customRows  = $this->mdl_list(1000, 0, "", "enable");

            $_str_outPut      = "<?php" . PHP_EOL;
            $_str_outPut     .= "return array(" . PHP_EOL;
                $_str_outPut     .= "\"article_customs\" => array(" . PHP_EOL;

                foreach ($_arr_column_custom as $_key=>$_value) {
                    $_str_outPut .= "\"" . $_value . "\",";
                }

                $_str_outPut     .= "),";
                $_str_outPut     .= "\"custom_list\" => array(" . PHP_EOL;
                    $_str_outPut     .= $this->cache_process($_arr_customRows);
                $_str_outPut     .= "),";
            $_str_outPut     .= ");";

            $_num_size = $this->obj_dir->put_file(BG_PATH_CACHE . "sys/", "custom_list.php", $_str_outPut);
        }

        $_arr_cacheReturn = include_once(BG_PATH_CACHE . "sys/custom_list.php");

        return $_arr_cacheReturn;
    }


    function input_submit() {
        if (!fn_token("chk")) { //令牌
            return array(
                "alert" => "x030206",
            );
        }

        $this->customSubmit["custom_id"] = fn_getSafe(fn_post("custom_id"), "int", 0);

        if ($this->customSubmit["custom_id"] > 0) {
            $_arr_customRow = $this->mdl_read($this->customSubmit["custom_id"]);
            if ($_arr_customRow["alert"] != "y200102") {
                return $_arr_customRow;
            }
        }

        $_arr_customName = validateStr(fn_post("custom_name"), 1, 90);
        switch ($_arr_customName["status"]) {
            case "too_short":
                return array(
                    "alert" => "x200201",
                );
            break;

            case "too_long":
                return array(
                    "alert" => "x200202",
                );
            break;

            case "ok":
                $this->customSubmit["custom_name"] = $_arr_customName["str"];
            break;
        }

        $_arr_customParentId = validateStr(fn_post("custom_parent_id"), 1, 0);
        switch ($_arr_customParentId["status"]) {
            case "too_short":
                return array(
                    "alert" => "x200207",
                );
            break;

            case "ok":
                $this->customSubmit["custom_parent_id"] = $_arr_customParentId["str"];
            break;
        }

        $_arr_customCateId = validateStr(fn_post("custom_cate_id"), 1, 0);
        switch ($_arr_customCateId["status"]) {
            case "too_short":
                return array(
                    "alert" => "x200213",
                );
            break;

            case "ok":
                $this->customSubmit["custom_cate_id"] = $_arr_customCateId["str"];
            break;
        }


        if ($this->customSubmit["custom_parent_id"] > 0 && $this->customSubmit["custom_parent_id"] == $this->customSubmit["custom_id"]) {
            return array(
                "alert" => "x200208",
            );
        }


        $_arr_customRow = $this->mdl_read($this->customSubmit["custom_name"], "custom_name", $this->customSubmit["custom_id"]);
        if ($_arr_customRow["alert"] == "y200102") {
            return array(
                "alert" => "x200203",
            );
        }

        $_arr_customType = validateStr(fn_post("custom_type"), 1, 0);
        switch ($_arr_customType["status"]) {
            case "too_short":
                return array(
                    "alert" => "x200211",
                );
            break;

            case "ok":
                $this->customSubmit["custom_type"] = $_arr_customType["str"];
            break;
        }

        $_arr_customFormat = validateStr(fn_post("custom_format"), 1, 0);
        switch ($_arr_customFormat["status"]) {
            case "too_short":
                return array(
                    "alert" => "x200205",
                );
            break;

            case "ok":
                $this->customSubmit["custom_format"] = $_arr_customFormat["str"];
            break;
        }

        $_arr_customStatus = validateStr(fn_post("custom_status"), 1, 0);
        switch ($_arr_customStatus["status"]) {
            case "too_short":
                return array(
                    "alert" => "x200206",
                );
            break;

            case "ok":
                $this->customSubmit["custom_status"] = $_arr_customStatus["str"];
            break;
        }

        $this->customSubmit["custom_require"] = fn_getSafe(fn_post("custom_require"), "int", 0);

        $_arr_customOpt = fn_post("custom_opt");

        if ($this->customSubmit["custom_type"] == "radio" || $this->customSubmit["custom_type"] == "select") {
            $this->customSubmit["custom_opt"]     = fn_jsonEncode($_arr_customOpt[$this->customSubmit["custom_type"]], "encode");
        } else {
            $this->customSubmit["custom_opt"]     = "";
        }

        $this->customSubmit["alert"]          = "ok";

        return $this->customSubmit;
    }


    /**
     * input_ids function.
     *
     * @access public
     * @return void
     */
    function input_ids() {
        if (!fn_token("chk")) { //令牌
            return array(
                "alert" => "x030206",
            );
        }

        $_arr_customIds = fn_post("custom_ids");

        if ($_arr_customIds) {
            foreach ($_arr_customIds as $_key=>$_value) {
                $_arr_customIds[$_key] = fn_getSafe($_value, "int", 0);
            }
            $_str_alert = "ok";
        } else {
            $_str_alert = "x030202";
        }

        $this->customIds = array(
            "alert"      => $_str_alert,
            "custom_ids" => $_arr_customIds,
        );

        return $this->customIds;
    }


    private function cache_process($_arr_customRows) {
        $_str_outPut = "";

        foreach ($_arr_customRows as $_key=>$_value) {
            $_str_outPut .= $_key . " => array(" . PHP_EOL;
                $_str_outPut .= "\"custom_id\" => " . $_value["custom_id"] . "," . PHP_EOL;
                $_str_outPut .= "\"custom_name\" => \"" . $_value["custom_name"] . "\"," . PHP_EOL;
                $_str_outPut .= "\"custom_parent_id\" => " . $_value["custom_parent_id"] . "," . PHP_EOL;
                $_str_outPut .= "\"custom_cate_id\" => " . $_value["custom_cate_id"] . "," . PHP_EOL;

                if (isset($_value["custom_childs"])) {
                    $_str_childs = $this->cache_process($_value["custom_childs"]);
                    $_str_outPut .= "\"custom_childs\" => array(" . PHP_EOL;
                    $_str_outPut .= $_str_childs . PHP_EOL;
                    $_str_outPut .= ")," . PHP_EOL;
                }

            $_str_outPut .= ")," . PHP_EOL;
        }

        return $_str_outPut;
    }


    private function sql_process($arr_search = array()) {
        if (isset($arr_search["parent_id"])) {
            $_str_sqlWhere = "custom_parent_id=" . $arr_search["parent_id"];
        } else {
            $_str_sqlWhere = "custom_parent_id=0";
        }

        if (isset($arr_search["key"]) && $arr_search["key"]) {
            $_str_sqlWhere .= " AND custom_name LIKE '%" . $arr_search["key"] . "%'";
        }

        if (isset($arr_search["status"]) && $arr_search["status"]) {
            $_str_sqlWhere .= " AND custom_status='" . $arr_search["status"] . "'";
        }

        return $_str_sqlWhere;
    }
}
