<?php
return "<a name=\"list\"></a>
	<h3>专题列表</h3>
	<p>文件名：<span class=\"text-primary\">spec_list.tpl</span></p>
	<p>
		显示网站内所有的专题。
	</p>
	<div class=\"panel panel-default\">
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"nowrap\">键名</th>
						<th class=\"nowrap\">类型</th>
						<th class=\"nowrap\">说明</th>
						<th>备注</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"nowrap\">tplData.specRows</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">专题列表</td>
						<td>详情请查看 <a href=\"#specRow\">specRow</a>。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">tplData.search</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">搜索参数</td>
						<td>显示专题列表所需要的搜索参数，查看 <a href=\"#search_list\">tplData.search</a>。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">tplData.query</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">搜索参数序列化字符串</td>
						<td>搜索参数序列化为字符串以后的结果。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">tplData.pageRow</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">分页参数</td>
						<td>详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=tpl&act_get=page\">分页参数</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<p>&nbsp;</p>

	<a name=\"search_list\"></a>
	<h4><code>{\$tplData.search}</code> 数组</h4>

	<p>显示文章列表所需要的搜索参数。</p>

	<div class=\"panel panel-default\">
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"nowrap\">键名</th>
						<th class=\"nowrap\">类型</th>
						<th class=\"nowrap\">说明</th>
						<th>备注</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"nowrap\">page_ext</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">扩展名</td>
						<td>仅用于纯静态模式。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">urlRow</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">专题列表 URL 数组</td>
						<td>spec_url 为专题列表 URL 地址，page_attach 为分页附加参数，主要用于分页。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<hr>

	<a name=\"show\"></a>
	<h3>专题显示</h3>
	<p>文件名：<span class=\"text-primary\">spec_show.tpl</span></p>
	<p>
		用于显示所有隶属于此专题的文章。
	</p>
	<div class=\"panel panel-default\">
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"nowrap\">键名</th>
						<th class=\"nowrap\">类型</th>
						<th class=\"nowrap\">说明</th>
						<th>备注</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td class=\"nowrap\">tplData.specRow</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">当前专题详细信息</td>
						<td>查看 <a href=\"#specRow\">tplData.specRow</a>。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">tplData.articleRows</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">文章列表</td>
						<td>所有隶属于此专题的文章。详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=tpl&act_get=article#articleRow\" target=\"_blank\">文章</a>。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">tplData.search</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">搜索参数</td>
						<td>显示文章列表所需要的搜索参数，查看 <a href=\"#search_show\">tplData.search</a>。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">tplData.pageRow</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">分页参数</td>
						<td>详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=tpl&act_get=page\">分页参数</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<a name=\"specRow\"></a>
	<h4><code>{\$tplData.specRow}</code> 数组</h4>

	<p>当前专题详细信息</p>

	<div class=\"panel panel-default\">
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"nowrap\">键名</th>
						<th class=\"nowrap\">类型</th>
						<th class=\"nowrap\">说明</th>
						<th>备注</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"nowrap\">spec_id</td>
						<td class=\"nowrap\">int</td>
						<td class=\"nowrap\">专题 ID</td>
						<td> </td>
					</tr>
					<tr>
						<td class=\"nowrap\">spec_name</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">专题名称</td>
						<td> </td>
					</tr>
					<tr>
						<td class=\"nowrap\">spec_content</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">专题内容</td>
						<td> </td>
					</tr>
					<tr>
						<td class=\"nowrap\">urlRow</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">当前专题 URL 数组</td>
						<td>spec_url 为当前专题 URL 地址，page_attach 为分页附加参数，主要用于分页。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">spec_status</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">专题状态</td>
						<td>pub 为发布，hide 为隐藏。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">alert</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">返回代码</td>
						<td>显示当前专题的状态，详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\" target=\"_blank\">返回代码</a>。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<p>&nbsp;</p>

	<a name=\"search_show\"></a>
	<h4><code>{\$tplData.search}</code> 数组</h4>

	<p>显示文章列表所需要的搜索参数。</p>

	<div class=\"panel panel-default\">
		<div class=\"table-responsive\">
			<table class=\"table\">
				<thead>
					<tr>
						<th class=\"nowrap\">键名</th>
						<th class=\"nowrap\">类型</th>
						<th class=\"nowrap\">说明</th>
						<th>备注</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class=\"nowrap\">spec_id</td>
						<td class=\"nowrap\">int</td>
						<td class=\"nowrap\">专题 ID</td>
						<td> </td>
					</tr>
					<tr>
						<td class=\"nowrap\">page_ext</td>
						<td class=\"nowrap\">string</td>
						<td class=\"nowrap\">扩展名</td>
						<td>仅用于纯静态模式。</td>
					</tr>
					<tr>
						<td class=\"nowrap\">urlRow</td>
						<td class=\"nowrap\">array</td>
						<td class=\"nowrap\">专题列表 URL 数组</td>
						<td>spec_url 为专题列表 URL 地址，page_attach 为分页附加参数，主要用于分页。</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>";