<?php
return "<a name=\"list\"></a>
    <h3>常见问题</h3>
    <p>&nbsp;</p>
    <ul>
        <li>
            <h4>问：经常出现令牌错误是什么原因？如何解决？</h4>

            <p>答：令牌是本系统的一种安全机制，每 5 分钟滚动更新一次，出现令牌错误的原因一般是开启了两个以上的管理窗口，也有可能是暂时性网络故障造成的。如果遇到令牌错误的问题，可将警告窗口关闭，将已经输入的内容妥善保存后，刷新当前页面便可解决。如果输入的内容较多，也可等待 5 分钟，系统再次更新令牌后再提交。</p>
            <hr>
        </li>

        <li>
            <h4>问：我刚修改了栏目，但为何网站上显示的还是原来的内容？</h4>

            <p>答：由于本系统对栏目的信息保存采用了缓存机制，在修改栏目的时候，一般会更新缓存，但也有可能更新缓存失败，只需要在“栏目管理 &raquo; 所有栏目”界面，选中需要更新的栏目，然后在下方的批量操作下拉框中选择“更新缓存”，再点击提交便可。</p>
            <hr>
        </li>

        <li>
            <h4>问：创建或编辑文章时，上传图片无法插入到内容中是什么原因？如何指定图片插入的位置？</h4>

            <p>答：创建或编辑文章时，内容编辑器还处于未激活状态，需要将其激活才能进行操作。激活方式非常简单，就是在编辑器的内容输入窗口里点击一下，看到输入光标闪烁变说明已经激活成功。如果要指定图片插入的位置，可以将光标移到该处，图片就可以顺利插入。</p>
        </li>
    </ul>";