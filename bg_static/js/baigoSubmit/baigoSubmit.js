/*
v1.1.3 jQuery baigoSubmit plugin 表单全选插件
(c) 2013 baigo studio - http://www.baigo.net/
License: http://www.opensource.org/licenses/mit-license.php
*/

(function($){
    $.fn.baigoSubmit = function(options) {
        "use strict";
        if(this.length < 1) {
            return this;
        }

        // support mutltiple elements
        if(this.length > 1){
            this.each(function(){
                $(this).baigoSubmit(options);
            });
            return this;
        }

        var thisForm = $(this); //定义表单对象
        var el = this;
        var _str_conn = "?";
        var _is_modal = true;

        var defaults = {
            width: 350,
            height: 220,
            class_ok: "alert-success",
            class_err: "alert-danger",
            class_submitting: "alert-info",
            text_submitting: "Submitting ...",
            btn_url: "",
            btn_text: "OK",
            btn_close: "Close",
            btn_submit: "",
            attach_key: ""
        };

        var opts = $.extend(defaults, options);

        if (typeof opts.msg_box != "undefined") {
            _is_modal = false;
        }

        //调用弹出框
        var callModal = function(_action, _alert, _msg, _attach_value) {
            var _obj_modal  = $("body .modal.baigoSubmit_model");
            var _alert_pre  = _alert.substr(0, 1);
            var _btn_href   = opts.btn_url;
            var _class      = opts.class_submitting;
            var _icon       = "option-horizontal";

            switch (_alert_pre) {
                case "x":
                    _class  = opts.class_err;
                    _icon   = "remove-sign";
                break;

                case "y":
                    _class  = opts.class_ok;
                    _icon   = "ok-sign";
                break;
            }

            if (opts.btn_url.indexOf("?")) {
                _str_conn = "&";
            }

            var _html_box = "<div class=\"modal fade baigoSubmit_model\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-body\"><h4 class=\"box_msg alert " + opts.class_submitting + "\">" + opts.text_submitting + "</h4><div class=\"box_alert\"></div></div><div class=\"modal-footer\"><a href=\"" + opts.btn_url + "\" class=\"btn btn-primary btn_jump\" target=\"_top\">" + opts.btn_text + "</a><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">" + opts.btn_close + "</button></div></div></div></div>";

            if (_obj_modal.length < 1) {
                $("body").append(_html_box);
            }

            $(".box_msg").removeClass(opts.class_ok + " " + opts.class_err + " " + opts.class_submitting);
            $(".box_msg").addClass(_class);
            $(".box_msg").html("<span class=\"glyphicon glyphicon-" + _icon + "\"></span>&nbsp;" + _msg);
            $(".box_alert").text(_alert);

            if (opts.attach_key.length > 0 && typeof _attach_value != "undefined") {
                _btn_href = opts.btn_url + _str_conn + opts.attach_key + "=" + _attach_value;
            }

            if (_alert_pre == "y") {
                $(".btn_jump").attr("href", _btn_href);
                $(".btn_jump").show();
            } else {
                $(".btn_jump").hide();
            }


            if (_action == "show") {
                $("body .modal.baigoSubmit_model").modal("show");
            } else {
                $("body .modal.baigoSubmit_model").remove();
            }


            $("body .modal.baigoSubmit_model").on("hidden.bs.modal", function() {
                $("body .modal.baigoSubmit_model").remove();
            });
        };

        var callBox = function(_action, _alert, _msg) {
            var _obj_box    = $(opts.msg_box + " .baigoSubmit_box");
            var _alert_pre  = _alert.substr(0, 1);
            var _btn_href   = opts.btn_url;
            var _class      = opts.class_submitting;
            var _icon       = "option-horizontal";

            switch (_alert_pre) {
                case "x":
                    _class  = opts.class_err;
                    _icon   = "remove-sign";
                break;

                case "y":
                    _class  = opts.class_ok;
                    _icon   = "ok-sign";
                break;
            }

            if (opts.btn_url.indexOf("?")) {
                _str_conn = "&";
            }

            var _html_box = "<div class=\"baigoSubmit_box alert " + opts.class_submitting + "\"></div>";

            if (_obj_box.length < 1) {
                $(opts.msg_box).append(_html_box);
            }

            $(".baigoSubmit_box").removeClass(opts.class_ok + " " + opts.class_err + " " + opts.class_submitting);
            $(".baigoSubmit_box").addClass(_class);
            $(".baigoSubmit_box").html("<span class=\"glyphicon glyphicon-" + _icon + "\"></span>&nbsp;" + _msg);

            if (_action == "show") {
                $(opts.msg_box + " .baigoSubmit_box").show();
            } else {
                $(opts.msg_box + " .baigoSubmit_box").remove();
            }
        };

        //确认消息
        var formConfirm = function() {
            if (typeof opts.confirm_selector == "undefined") {
                return true;
            } else {
                var _form_action = $(opts.confirm_selector).val();
                if (_form_action == opts.confirm_val) {
                    if (confirm(opts.confirm_msg)) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return true;
                }
            }
        };

        //ajax提交
        el.formSubmit = function() {
            if (formConfirm()) {
                if (opts.ajax_url.indexOf("?")) {
                    _str_conn = "&";
                } else {
                    _str_conn = "?";
                }
                $.ajax({
                    url: opts.ajax_url + _str_conn + "a=" + Math.random(), //url
                    //async: false, //设置为同步
                    type: "post",
                    dataType: "json", //数据格式为json
                    data: $(thisForm).serialize(),
                    beforeSend: function(){
                        if (_is_modal) {
                            callModal("show", "", opts.text_submitting); //输出正在提交
                        } else {
                            callBox("show", "", opts.text_submitting);
                        }
                        $(opts.btn_submit).attr("disabled", true);

                    }, //输出消息
                    success: function(_result){ //读取返回结果
                        var _attach_value   = _result[opts.attach_key];

                        if (_is_modal) {
                            callModal("remove", "x", ""); //关闭正在提交
                            callModal("show", _result.alert, _result.msg, _attach_value); //输出消息
                        } else {
                            callBox("remove", "x", "");
                            callBox("show", _result.alert, _result.msg);
                        }
                        $(opts.btn_submit).removeAttr("disabled");
                    }
                });
            }
        };

        return this;
    };

})(jQuery);