<?php
return "<a name=\"list\"></a>
	<h3>所有文章</h3>
	<p>点左侧菜单文章管理，可以对文章进行编辑、删除、改变状态等操作。文章是指网站发布的每一条具体内容，比如新闻、公告等，您也可以将文章视为信息、产品等。草稿箱与回收站均为本人所有，任何人均无法查看（包括最高权限的管理员），回收站可直接清空（仅清空本人存储与回收站的文章）。</p>

	<p><img src=\"{images}article_list.jpg\" class=\"img-responsive thumbnail\"></p>

	<hr>

	<a name=\"form\"></a>
	<h3>创建（编辑）文章</h3>
	<p>点左侧子菜单的创建文章或者点击文章列表的编辑菜单，进入如下界面，在此，您可以对文章进行各项操作。</p>

	<p><img src=\"{images}article_form.jpg\" class=\"img-responsive thumbnail\"></p>

	<div class=\"panel panel-default\">
		<div class=\"panel-heading\">填写说明</div>
		<div class=\"panel-body\">
			<h4 class=\"text-info\">文章标题</h4>
			<p>文章、信息或产品的标题。</p>

			<h4 class=\"text-info\">文章内容</h4>
			<p>文章、信息或产品的具体内容，点击插入或上传，可以上传图片、附件，或者把已上传的图片、附件插入到文章内容中。</p>

			<h4 class=\"text-info\">TAG（标签）</h4>
			<p>网站为了区分文章的类别所采用的 TAG，主要用于关联文章和搜索。在表单中输入的时候，系统将会搜索相关 TAG，您可以在弹出的菜单中直接选择，如果没有搜索到 TAG，可以在输入完毕后，点创建。</p>
			<p><img src=\"{images}article_tag.jpg\" class=\"img-responsive thumbnail\"></p>

			<h4 class=\"text-info\">显示更多选项</h4>
			<p>选中可以填写跳转地址和文章摘要。</p>

			<h4 class=\"text-info\">跳转至</h4>
			<p>如填写了跳转地址，该文章将直接跳转至相应的地址，不会显示文章内容。</p>

			<h4 class=\"text-info\">摘要</h4>
			<p>文章的摘要信息，点击插入或上传，可以上传图片、附件，或者把已上传的图片、附件插入到文章摘要中。如空白，则自动选取文章的部分内容。</p>

			<h4 class=\"text-info\">隶属于栏目</h4>
			<p>文章所属的栏目，此选项还跟管理员的权限有关，只有管理员用于所选的栏目的管理权限，才能在今后编辑、删除此文章。</p>

			<h4 class=\"text-info\">附加至栏目</h4>
			<p>文章需要显示的栏目，可多选。附加至这些栏目的文章，会同时显示在这些栏目。</p>

			<h4 class=\"text-info\">状态</h4>
			<p>可选发布、隐藏或待审。<mark>根据用户的权限不同，表单会有所变化</mark>。</p>

			<h4 class=\"text-info\">定时</h4>
			<p>可根据用户设定的时间，定时发布文章。</p>

			<h4 class=\"text-info\">保存至</h4>
			<p>可选正常、草稿箱或回收站。草稿箱与回收站均为本人所有，任何人均无法查看（包括最高权限的管理员），回收站可直接清空（仅清空本人存储与回收站的文章）。</p>

			<h4 class=\"text-info\">标记</h4>
			<p>网站为了区分文章的类别所采用的标记，主要用于调用，详见 <a href=\"{BG_URL_HELP}ctl.php?mod=admin&act_get=call\">调用管理</a>。</p>

			<h4 class=\"text-info\">专题</h4>
			<p>可选择加入一个专题。可以按照关键词搜索专题，点翻页按钮，可以实现选框内的专题翻页。</p>
		</div>
	</div>

	<hr>

	<h3>上传或插入</h3>
	<p>点上传或插入弹出如下对话框，在此您可以上传文件或选择已上传的文件，插入到文章中。</p>
	<p>点上传附件，可以选择文件，自动上传，上出完毕以后会自动插入到文章。上传受上传设置和附件类型的限制，详见 <a href=\"{BG_URL_HELP}ctl.php?mod=admin&act_get=opt#upfile\">上传设置</a>、<a href=\"{BG_URL_HELP}ctl.php?mod=admin&act_get=attach#mime\">附件类型</a>。
	</p>
	<p>点插入附件，可以浏览已上传的文件，鼠标移到缩略图上，会弹出菜单，选择插入原图或缩略图。<a href=\"{BG_URL_HELP}ctl.php?mod=admin&act_get=attach#thumb\">缩略图</a> 详情。</p>

	<p>
		<div id=\"carousel_attach\" class=\"carousel slide\" data-ride=\"carousel\">
			<ol class=\"carousel-indicators\">
				<li data-target=\"#carousel_attach\" data-slide-to=\"0\" class=\"active\"></li>
				<li data-target=\"#carousel_attach\" data-slide-to=\"1\"></li>
				<li data-target=\"#carousel_attach\" data-slide-to=\"2\"></li>
			</ol>

			<div class=\"carousel-inner\" role=\"listbox\">
				<div class=\"item active\">
					<img src=\"{images}attach_form.jpg\">
					<div class=\"carousel-caption\">上传附件</div>
				</div>
				<div class=\"item\">
					<img src=\"{images}attach_form_success.jpg\">
					<div class=\"carousel-caption\">上传附件成功</div>
				</div>
				<div class=\"item\">
					<img src=\"{images}attach_insert.jpg\">
					<div class=\"carousel-caption\">插入附件</div>
				</div>
			</div>

			<a class=\"left carousel-control\" href=\"#carousel_attach\" role=\"button\" data-slide=\"prev\">
				<span class=\"glyphicon glyphicon-chevron-left\"></span>
				<span class=\"sr-only\">Previous</span>
			</a>
			<a class=\"right carousel-control\" href=\"#carousel_attach\" role=\"button\" data-slide=\"next\">
				<span class=\"glyphicon glyphicon-chevron-right\"></span>
				<span class=\"sr-only\">Next</span>
			</a>
		</div>
	</p>";
