<?php
return "<h3>TAG 显示</h3>
    <p>文件名：<span class=\"text-primary\">tag_show.tpl</span></p>
    <p>
        用于显示所有与此 TAG 关联的文章。
    </p>
    <div class=\"panel panel-default\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th class=\"text-nowrap\">键名</th>
                        <th class=\"text-nowrap\">类型</th>
                        <th class=\"text-nowrap\">说明</th>
                        <th>备注</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class=\"text-nowrap\">tplData.tagRow</td>
                        <td class=\"text-nowrap\">array</td>
                        <td class=\"text-nowrap\">当前 TAG 详细信息</td>
                        <td>查看 <a href=\"#tagRow\">tplData.tagRow</a>。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tplData.articleRows</td>
                        <td class=\"text-nowrap\">array</td>
                        <td class=\"text-nowrap\">文章列表</td>
                        <td>所有与此 TAG 关联的文章。详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=tpl&act_get=article#articleRow\" target=\"_blank\">文章</a>。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tplData.search</td>
                        <td class=\"text-nowrap\">array</td>
                        <td class=\"text-nowrap\">搜索参数</td>
                        <td>显示文章列表所需要的搜索参数。查看 <a href=\"#searchShow\">tplData.search</a></td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tplData.query</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">搜索参数序列化字符串</td>
                        <td>搜索参数序列化为字符串以后的结果。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tplData.pageRow</td>
                        <td class=\"text-nowrap\">array</td>
                        <td class=\"text-nowrap\">分页参数</td>
                        <td>详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=tpl&act_get=page\">分页参数</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p>&nbsp;</p>

    <a name=\"tagRow\"></a>
    <h4><code>{\$tplData.tagRow}</code> 数组</h4>

    <p>当前 TAG 详细信息</p>

    <div class=\"panel panel-default\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th class=\"text-nowrap\">键名</th>
                        <th class=\"text-nowrap\">类型</th>
                        <th class=\"text-nowrap\">说明</th>
                        <th>备注</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"text-nowrap\">tag_id</td>
                        <td class=\"text-nowrap\">int</td>
                        <td class=\"text-nowrap\">TAG ID</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tag_name</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">TAG 名称</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tag_article_count</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">文章计数</td>
                        <td>与当前 TAG 关联的文章计数。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">urlRow</td>
                        <td class=\"text-nowrap\">array</td>
                        <td class=\"text-nowrap\">当前 TAG URL 数组</td>
                        <td>tag_url 为当前 TAG URL 地址，page_attach 为分页附加参数，主要用于分页。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">tag_status</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">TAG 状态</td>
                        <td>pub 为发布，hide 为隐藏。</td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">alert</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">返回代码</td>
                        <td>显示当前 TAG 的状态，详情请查看 <a href=\"{BG_URL_HELP}ctl.php?mod=api&act_get=alert\" target=\"_blank\">返回代码</a>。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p>&nbsp;</p>

    <h4>TAG 数据示例</h4>
    <code>{\$tplData.tagRow|@print_r}</code>
    <p>
<pre><code class=\"language-php\">Array (
    [tag_id] =&gt; 94 //TAG ID
    [tag_name] =&gt; asp //TAG 名称
    [tag_status] =&gt; show //状态
    [tag_article_count] =&gt; 0 //关联文章数
    [urlRow] =&gt; Array (
        [tag_url] =&gt; /cms/tag/tag-asp/ //URL
        [page_attach] =&gt; page- //分页附加
    )
    [alert] =&gt; y130102
)</code></pre>
    </p>

    <p>&nbsp;</p>

    <a name=\"searchShow\"></a>
    <h4><code>{\$tplData.search}</code> 数组</h4>

    <p>显示文章列表所需要的搜索参数。</p>

    <div class=\"panel panel-default\">
        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th class=\"text-nowrap\">键名</th>
                        <th class=\"text-nowrap\">类型</th>
                        <th class=\"text-nowrap\">说明</th>
                        <th>备注</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=\"text-nowrap\">tag_name</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">TAG 名称</td>
                        <td> </td>
                    </tr>
                    <tr>
                        <td class=\"text-nowrap\">page_ext</td>
                        <td class=\"text-nowrap\">string</td>
                        <td class=\"text-nowrap\">扩展名</td>
                        <td>仅用于纯静态模式。</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>";