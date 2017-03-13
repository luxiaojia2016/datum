<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>首页 - 北京国际数学研究中心数学数字化图书馆</title>

    <!-- Bootstrap core CSS -->
    <link href="/KCSJ/Public/front/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/KCSJ/Public/front/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/KCSJ/Public/front/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/KCSJ/Public/front/css/book-3d.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/KCSJ/Public/front/js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="http://cdn.bootcss.com/respond./KCSJ/Public/front/js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <a id="top"></a>
    <div id="move-to-top"><a href="#top" class="move-to-top" title="回到页面顶部"><i class="fa fa-arrow-circle-up fa-2x"></i></a></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">北京国际数学研究中心数学数字化图书馆</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/KCSJ/index.php/Home/Index/index"><i class="fa fa-home fa-lg"></i> 首页</a></li>
                    <li><a href="/KCSJ/index.php/Home/Index/aboutus"><i class="fa fa-flag fa-lg"></i> 关于</a></li>
                    <li><a href="/KCSJ/index.php/Home/Index/contact"><i class="fa fa-envelope fa-lg"></i> 联系方式</a></li>

                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

    ﻿    <div class="container">

        <!-- Example row of columns -->
        <div class="row">

            <div class="col-md-9">
            <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="row">
                    <div class="col-md-12 book-with-3d-cover" id="book-detail">                       
                        <div class="inset-top"></div>                 

                        <div class="book-cover books-3d">
                            <div class="book-3d">                            
                                <a href="#" data-toggle="modal" data-target="#book-cover-box">
                                    <img src="http://pku.summon.serialssolutions.com/2.0.0/image/custom?url=http%3A%2F%2F202.112.150.126%2Findex.php%3Fclient%3Dpku%26isbn%3D9781603842020%2Fcover&size=large" title="点击查看大图" alt="点击查看大图"/>
                                </a>
                            </div>                            
                        </div>

                        <div class="modal fade" id="book-cover-box" tabindex="-1" role="dialog" aria-labelledby="book-cover-box-label" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><i class="fa fa-remove fa-lg"></i></span><span class="sr-only">关闭</span></button>
                                <h4 class="modal-title" id="book-cover-box-label"><?php echo ($d["title"]); ?></h4>
                              </div>
                              <div class="modal-body text-center">
                                <img src="http://pku.summon.serialssolutions.com/2.0.0/image/custom?url=http%3A%2F%2F202.112.150.126%2Findex.php%3Fclient%3Dpku%26isbn%3D9781603842020%2Fcover&size=large" title="book title" alt="book title" class="img-thumbnail book-cover-img"/>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-remove fa-lg"></i> 关闭</button>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="book-desc">
                        <?php
 if($d["recommend"] == 1) { echo "<div class='ribbon'><a href='#'>推荐阅读</a></div>"; } ?> 
                            <h3><?php echo ($d["title"]); ?></h3>
                            <hr />
                            <dl class="dl-horizontal">
                                <dt>作者</dt>
                                <dd><?php echo ($d["author"]); ?></dd>
                                <dt>出版社</dt>
                                <dd><?php echo ($d["publisher"]); ?></dd>
                                <dt>出版日期</dt>
                                <dd><?php echo ($d["publishdate"]); ?></dd>
                                <dt>ISBN</dt>
                                <dd><?php echo ($d["isbn"]); ?></dd>
                                <dt>ISSN</dt>
                                <dd><?php echo ($d["issn"]); ?></dd>
                                <dt>摘要</dt>
                                <dd><?php echo (msubstr($d["summary"],0,150,'utf-8',true)); ?></dd>
                            </dl>
                            <hr />
                            <dl class="dl-horizontal">
                                <dt>标签</dt>
                                <dd class="book-detail-tags">
                                    <a href="#" class="label label-default" role="button">标签1</a>
                                    <a href="#" class="label label-default" role="button">标签22</a>
                                    <a href="#" class="label label-default" role="button">标签333</a>
                                    <a href="#" class="label label-default" role="button">标签1</a>
                                    <a href="#" class="label label-default" role="button">标签22</a>
                                    <a href="#" class="label label-default" role="button">标签333</a>
                                </dd>
                                <dt></dt>
                                <dd class="book-detail-action">
                                    <button type="button" class="btn btn-primary">在北大图书馆查看 <i class="fa fa-mail-forward"></i> </button>
                                    <button type="button" class="btn btn-success">添加为个人收藏 <i class="fa fa-plus"></i></button>
                                </dd>
                            </dl>

                        </div>

                        <div class="inset-bottom"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 text-center social-func-text">
                        <h4><i class="fa fa-send"></i> 将此书推荐给朋友</h4>
                    </div>
                    <div class="col-md-6 social-func">
                        <a href="#" class="social-func-btn bookmark" title="收藏本页"><i class="fa fa-bookmark fa-2x fa-fw"></i></a>
                        <a href="#" class="social-func-btn mail" title="发送电子邮件"><i class="fa fa-envelope fa-2x fa-fw"></i></a>
                        <a href="#" class="social-func-btn print" title="打印本页"><i class="fa fa-print fa-2x fa-fw"></i></a>
                        <a href="#" class="social-func-btn share" title="转发本页"><i class="fa fa-share-alt fa-2x fa-fw"></i></a>
                        <a href="#" class="social-func-btn share2weixin" title="转发至微信"><i class="fa fa-weixin fa-2x fa-fw"></i></a>
                    </div>
                    <div class="col-md-2 text-center" id="book-viewcount">
                        <h5>浏览次数</h5>
                        <span class="badge">4</span>
                    </div>
                </div>

                <div class="row">
                    <div aria-hidden="true" aria-labelledby="" role="dialog" tabindex="-1" class="modal fade tags-reader-action-help">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true"><i class="fa fa-remove fa-lg"></i></span><span class="sr-only">关闭</span></button>
                                <h4 class="modal-title">帮助</h4>
                                </div>

                                <div class="modal-body">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>  

                    <div class="col-md-12" id="tags-readers-action">

                        <h3>
                            <i class="fa fa-plus-circle fa-lg"></i> 为本书添加标签
                            <small class="pull-right">
                                <a href="#" data-toggle="modal" data-target=".tags-reader-action-help">为何要添加标签 <i class="fa fa-question-circle fa-lg"></i></a>
                            </small>
                        </h3>

                        <hr class="hr-small-margin"/>

                        <div class="col-md-7 tags-toselect" id="tags-toselect">

                            <h4><i class="fa fa-keyboard-o fa-lg"></i> 输入标签<small class="pull-right"><i class="fa fa-info-circle fa-lg"></i> 请使用逗号或分号分隔输入的标签</small></h4>
                            <input class="form-control tags-input-toadd typeahead" type="text" value="" id="tags-toadd-input">

                            <button type="button" class="btn btn-info btn-sm" id="tags-reader-submit"><i class="fa fa-check fa-lg"></i> 提交标签</button>
                            <button type="button" class="btn btn-danger btn-sm" id="tags-clearall"><i class="fa fa-remove fa-lg"></i> 取消重填</button>

                        </div>

                        <div class="col-md-5">
                            <h4><i class="fa fa-tags fa-lg"></i> 其他浏览者为本书添加的标签</h4>
                            <span class="tag-help-block">提示：您也可从下列标签中选择添加以示赞同 <i class="fa fa-thumbs-o-up"></i></span>
                            <div class="col-md-12 tags-addedbyothers" id="tags-addedbyothers">
                                <a href="#" class="label label-default" role="button" data-tagid="1" title="34人选择了此标签"><span class="tag-text">值得一读</span><span class="badge">34</span></a>
                                <a href="#" class="label label-default" role="button" data-tagid="2" title="28人选择了此标签"><span class="tag-text">非常推荐</span><span class="badge">28</span></a>
                                <a href="#" class="label label-default" role="button" data-tagid="3" title="10人选择了此标签"><span class="tag-text">还可以</span><span class="badge">10</span></a>
                                <a href="#" class="label label-default" role="button" data-tagid="4" title="6人选择了此标签"><span class="tag-text">一般般</span><span class="badge">6</span></a>
                                <a href="#" class="label label-default" role="button" data-tagid="5" title="4人选择了此标签"><span class="tag-text">马马虎虎</span><span class="badge">4</span></a>
                                <a href="#" class="label label-default" role="button" data-tagid="6" title="1人选择了此标签"><span class="tag-text">就那么回事</span><span class="badge">1</span></a>
                            </div>

                        </div>

                    </div>

                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

            <div class="col-md-3 sidebar">

                <h2 class="section-title-md"><i class="fa fa-search"></i> 查询检索</h2>

                <div class="input-group">
                  <input type="text" class="form-control" placeholder="书名/作者/标签">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                  </span>
                </div>

                <hr />

                <ul class="list-group" id="books-mostread">
                  <li class="list-group-item active"><i class="fa fa-asterisk"></i> 浏览次数最多的图书</li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Dapibus ac facilisis</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Morbi leo risus</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Porta ac consectetur ac</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Vestibulum at eros</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Dapibus ac facilisis </a></li>
                  <li class="list-group-item footer"><a href="/KCSJ/index.php/Home/Book/lists" target="_blank">查看全部 <i class="fa fa-arrow-circle-right"></i></a></li>
                </ul>

                <ul class="list-group" id="books-newarrival">
                  <li class="list-group-item active"><i class="fa fa-star"></i> 新进图书</li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Dapibus ac facilisis </a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Morbi leo risus</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Porta ac consectetur ac</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Vestibulum at eros</a></li>
                  <li class="list-group-item"><a href="#" target="_blank"><i class="fa fa-caret-right"></i> Dapibus ac facilisis </a></li>
                    <li class="list-group-item footer"><a href="/KCSJ/index.php/Home/Book/lists" target="_blank">查看全部 <i class="fa fa-arrow-circle-right"></i></a></li>
                </ul>

            </div>

        </div>

    </div><!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/KCSJ/Public/front/js/bootstrap-tagsinput.js"></script>
    <script type="text/javascript" src="/KCSJ/Public/front/js/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            //标签输入框设置
            $('#tags-toadd-input').tagsinput({
                trimValue: true,
                typeahead: {
                    source: [{ "id": 1, "text": "Amsterdam" }, { "id": 4, "text": "Washington" }] //测试用
                    //正式请用Ajax Get方式获取标签及ID信息，代码如下，需考虑已输入文字作为首字出现的过滤
                    /*
                    source: function(query) {
                      return $.get('http://someservice.com');
                    }
                    */
                },
                itemValue: 'id',
                itemText: 'text'
            });

            $('#tags-toadd-input').on('itemAdded', function (event) {
                // event.item: contains the item
                $('div.bootstrap-tagsinput input').val("");
            });

            $('div.bootstrap-tagsinput input').on('keyup', function (e) {
                // event.item: contains the item
                if (e.keyCode == 188 || e.keyCode == 59) {
                    var tag_text = $(this).val().replace(/,+$/, '');
                    tag_text = tag_text.replace(/;+$/, '');

                    if (tag_text.length > 1) {
                        $('#tags-toadd-input').tagsinput('add', { id: -(new Date / 1e3) | 0, text: tag_text });
                    } else {
                        $('div.bootstrap-tagsinput input').val("");
                    }
                }
            });

            //提交选择或输入的标签
            $("#tags-reader-submit").click(function () {
                if (confirm("确认标签选择或输入无误并提交吗？")) {
                    //some code
                    //alert($('#tags-toadd-input').val());
                    alert($('#tags-toadd-input').tagsinput('items'));
                }
            });

            //添加已存在的用户标签
            $("div#tags-addedbyothers .label").click(function () {
                var tag_text = $(this).find("span.tag-text").text();
                var tag_id = $(this).attr("data-tagid");
                $('#tags-toadd-input').tagsinput('add', { id: tag_id, text: tag_text });                
                return false;
            });


            //清除所有选择或输入的标签
            $("#tags-clearall").click(function () {
                if (confirm("确认要清除已选择或输入的标签吗？")) {
                    $('#tags-toadd-input').tagsinput('removeAll');
                }
            });

        });
    </script>
    <footer role="contentinfo">
      <div class="container">
        <div class="col-md-8">
            <h3 class="footer-logo">北京国际数学研究中心<br />数学数字化图书馆</h3>

            <ul class="logo-wall">
                <li><a href="http://www.pku.edu.cn" target="_blank"><img src="/KCSJ/Public/front/images/logo/pku-logo.png" alt="北京大学" title="北京大学"/></a></li>
                <li><a href="http://lib.pku.edu.cn" target="_blank"><img src="/KCSJ/Public/front/images/logo/pkulib-logo.png" alt="北京大学图书馆" title="北京大学图书馆"/></a></li>
                <li><a href="http://bicmr.pku.edu.cn" target="_blank"><img src="/KCSJ/Public/front/images/logo/bicmr-logo.png" alt="北京国际数学研究中心" title="北京国际数学研究中心"/></a></li>
            </ul>
        </div>

        <div class="col-md-4 contact">
            <h3 class="footer-contact">联系方式</h3>
            <dl>
                <dt><i class="fa fa-phone fa-lg fa-fw"></i> 电话</dt><dd>(86 10) 6274 4148</dd>                                
                <dt><i class="fa fa-fax fa-lg fa-fw"></i> 传真</dt><dd>(86 10) 6274 4134</dd>
                <dt><i class="fa fa-envelope fa-lg fa-fw"></i> 邮件</dt><dd><a href="mailto:admin-bicmrlib@math.pku.edu.cn">admin-bicmrlib@math.pku.edu.cn</a></dd>
                <dt><i class="fa fa-building fa-lg fa-fw"></i> 地址</dt><dd>北京市海淀区颐和园路5号<br />北京大学镜春园82号甲乙丙楼一层 100871</dd>
            </dl>
        </div>

        <div class="col-md-12 text-center copyright">
            <p>&copy; 2014 版权所有 <a href="http://bicmr.pku.edu.cn" target="_blank">北京国际数学研究中心</a> Beijing International Center for Mathematical Research</p>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="/KCSJ/Public/front/js/jquery.min.js"></script>
    <script type="text/javascript" src="/KCSJ/Public/front/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/KCSJ/Public/front/js/common.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#books-carousel .books-ctrl-left").click(function () {
                $("#books-carousel").carousel('prev');
            });

            $("#books-carousel .books-ctrl-right").click(function () {
                $("#books-carousel").carousel('next');
            });

        });
    </script>

</body>
</html>