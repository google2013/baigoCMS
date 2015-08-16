{* opt_form.tpl 系统设置界面 *}
{$cfg = [
	title          => "{$adminMod.opt.main.title} - {$adminMod.opt.sub.base.title}",
	menu_active    => "opt",
	sub_active     => "base",
	baigoValidator => "true",
	baigoSubmit    => "true",
	tokenReload    => "true",
	str_url        => "{$smarty.const.BG_URL_ADMIN}ctl.php?mod=opt"
]}

{include "{$smarty.const.BG_PATH_SYSTPL_ADMIN}default/include/admin_head.tpl" cfg=$cfg}

	<li><a href="{$smarty.const.BG_URL_ADMIN}ctl.php?mod=opt&act_get=base">{$adminMod.opt.main.title}</a></li>
	<li>{$adminMod.opt.sub.base.title}</li>

	{include "{$smarty.const.BG_PATH_SYSTPL_ADMIN}default/include/admin_left.tpl" cfg=$cfg}

	<div class="form-group">
		<ul class="nav nav-pills nav_baigo">
			<li>
				<a href="{$smarty.const.BG_URL_HELP}ctl.php?mod=admin&act_get=opt" target="_blank">
					<span class="glyphicon glyphicon-question-sign"></span>
					{$lang.href.help}
				</a>
			</li>
		</ul>
	</div>

	<form name="opt_form" id="opt_form">
		<input type="hidden" name="token_session" class="token_session" value="{$common.token_session}">
		<input type="hidden" name="act_post" value="base">

		<div class="panel panel-default">
			<div class="panel-body">

				{include "{$smarty.const.BG_PATH_SYSTPL_ADMIN}default/include/opt_form.tpl" cfg=$cfg}

				<div class="form-group">
					<label for="opt_BG_SITE_TPL" class="control-label">{$lang.label.tpl}<span id="msg_BG_SITE_TPL">*</span></label>
					<select name="opt[BG_SITE_TPL]" id="opt_BG_SITE_TPL" class="validate form-control">
						{foreach $tplData.tplRows as $key=>$value}
							{if $value["type"] == "dir"}
								<option {if $smarty.const.BG_SITE_TPL == $value.name}selected{/if} value="{$value.name}">{$value.name}</option>
							{/if}
						{/foreach}
					</select>
				</div>

				<div class="form-group">
					<label for="opt_BG_SITE_EXCERPTTYPE" class="control-label">{$lang.label.excerptDefault}<span id="msg_BG_SITE_EXCERPTTYPE">*</span></label>
					<select name="opt[BG_SITE_EXCERPTTYPE]" id="opt_BG_SITE_EXCERPTTYPE" class="validate form-control">
						{foreach $tplData.excerptType as $key=>$value}
							<option {if $smarty.const.BG_SITE_EXCERPTTYPE == $key}selected{/if} value="{$key}">{$value}</option>
						{/foreach}
					</select>
				</div>

				<div class="form-group">
					<button type="button" id="go_submit" class="btn btn-primary">{$lang.btn.save}</button>
				</div>

			</div>
		</div>

	</form>

{include "{$smarty.const.BG_PATH_SYSTPL_ADMIN}default/include/admin_foot.tpl" cfg=$cfg}

	<script type="text/javascript">
	opts_validator_form.opt_BG_SITE_TPL = {
		length: { min: 1, max: 0 },
		validate: { type: "select" },
		msg: { id: "msg_BG_SITE_TPL", too_few: "{$alert.x060201}{$lang.label.tpl}" }
	};

	opts_validator_form.opt_BG_SITE_EXCERPTTYPE = {
		length: { min: 1, max: 0 },
		validate: { type: "select" },
		msg: { id: "msg_BG_SITE_EXCERPTTYPE", too_few: "{$alert.x060201}{$lang.label.excerptDefault}" }
	};

	var opts_submit_form = {
		ajax_url: "{$smarty.const.BG_URL_ADMIN}ajax.php?mod=opt",
		text_submitting: "{$lang.label.submitting}",
		btn_text: "{$lang.btn.ok}",
		btn_close: "{$lang.btn.close}",
		btn_url: "{$cfg.str_url}"
	};

	$(document).ready(function(){
		var obj_validate_form = $("#opt_form").baigoValidator(opts_validator_form);
		var obj_submit_form   = $("#opt_form").baigoSubmit(opts_submit_form);
		$("#go_submit").click(function(){
			if (obj_validate_form.validateSubmit()) {
				obj_submit_form.formSubmit();
			}
		});
	})
	</script>

{include "{$smarty.const.BG_PATH_SYSTPL_ADMIN}default/include/html_foot.tpl" cfg=$cfg}

