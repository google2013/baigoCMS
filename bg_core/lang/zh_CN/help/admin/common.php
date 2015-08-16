<?php
return "<a name=\"ubb\"></a>
	<h3>部分 UBB 代码支持</h3>
	<p>
		在任何表单中，可以输入如下代码来实现相应的功能，最终在 Smarty 模板显示时，需调用 UBB 修饰符，详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=tpl&act_get=common#ubb\">模板</a>。
	</p>
	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">支持的 UBB 代码</div>
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"nowrap\">代码</th>
						<th class=\"nowrap\">对应 HTML</th>
						<th>说明</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"nowrap\">[b]字符[/b]</td>
						<td class=\"nowrap\">&lt;b&gt;字符&lt;/b&gt;</td>
						<td>加粗</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[code]代码[/code]</td>
						<td class=\"nowrap\">&lt;code&gt;代码&lt;/code&gt;</td>
						<td>计算机代码文本</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[del]字符[/del]</td>
						<td class=\"nowrap\">&lt;del&gt;字符&lt;/del&gt;</td>
						<td>被删除文本</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[em]字符[/em]</td>
						<td class=\"nowrap\">&lt;em&gt;字符&lt;/em&gt;</td>
						<td>强调文本</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[i]字符[/i]</td>
						<td class=\"nowrap\">&lt;i&gt;字符&lt;/i&gt;</td>
						<td>斜体字</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[kbd]字符[/kbd]</td>
						<td class=\"nowrap\">&lt;kbd&gt;字符&lt;/kbd&gt;</td>
						<td>定义键盘文本</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[s]字符[/s]</td>
						<td class=\"nowrap\">&lt;s&gt;字符&lt;/s&gt;</td>
						<td>加删除线的文本</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[u]字符[/u]</td>
						<td class=\"nowrap\">&lt;u&gt;字符&lt;/u&gt;</td>
						<td>下划线</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[br]</td>
						<td class=\"nowrap\">&lt;br&gt;</td>
						<td>换行</td>
					</tr>
					<tr>
						<td class=\"nowrap\">[hr]</td>
						<td class=\"nowrap\">&lt;hr&gt;</td>
						<td>横线</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>";