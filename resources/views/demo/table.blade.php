<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Bootstrap Table</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="/demo/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/demo/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/demo/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="/demo/css/animate.css" rel="stylesheet">
    <link href="/demo/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="gray-bg">
<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="#"
                                      data-toggle="modal" data-target="#my_menu"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search"
                           id="top-search">
                </div>
            </form>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li class="m-t-xs">
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a7.jpg">
                            </a>
                            <div class="media-body">
                                <small class="pull-right">46小时前</small>
                                <strong>小四</strong> 是不是只有我死了,你们才不骂爵迹
                                <br>
                                <small class="text-muted">3天前 2014.11.8</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="dropdown-messages-box">
                            <a href="profile.html" class="pull-left">
                                <img alt="image" class="img-circle" src="img/a4.jpg">
                            </a>
                            <div class="media-body ">
                                <small class="pull-right text-navy">25小时前</small>
                                <strong>二愣子</strong> 呵呵
                                <br>
                                <small class="text-muted">昨天</small>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a class="J_menuItem" href="mailbox.html">
                                <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                <span class="pull-right text-muted small">4分钟前</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html">
                            <div>
                                <i class="fa fa-qq fa-fw"></i> 3条新回复
                                <span class="pull-right text-muted small">12分钟钱</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a class="J_menuItem" href="notifications.html">
                                <strong>查看所有 </strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#" aria-expanded="false">
                  tanmillet
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                           修改密码
                        </a>
                    </li>
                    <li>
                        <a href="mailbox.html">
                            个人信息
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html">
                           退出
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>基础数据</h5>
        </div>
        <div class="ibox-content">
            <div class="row row-lg">
                <div class="col-sm-12">
                    <!-- Example Events -->
                    <div class="example-wrap">
                        <h4 class="example-title">事件</h4>
                        <div class="example">
                            <div class="alert alert-success" id="examplebtTableEventsResult" role="alert">
                                事件结果
                            </div>
                            <div class="btn-group hidden-xs" id="exampleTableEventsToolbar" role="group">
                                <button type="button" class="btn btn-outline btn-default">
                                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-outline btn-default">
                                    <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-outline btn-default">
                                    <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                            <table id="exampleTableEvents" data-height="600" data-mobile-responsive="true">
                                <thead>
                                <tr>
                                    <th data-field="state" data-checkbox="true"></th>
                                    <th data-field="id">ID</th>
                                    <th data-field="name">名称</th>
                                    <th data-field="price">价格</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- End Example Events -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Panel Other -->
</div>

<div class="modal inmodal" id="my_menu" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="tabs-container">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">关闭</span>
                    </button>
                    <i class="fa fa-laptop modal-icon"></i>
                    {{--<h4 class="modal-title">菜单列表</h4>--}}
                    {{--<small class="font-bold">快捷方式</small>--}}
                </div>
                <div class="modal-body">
                    <p>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                    </p>
                    <p>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                        <a href="#user"><i class="fa fa-user"></i> 用户列表
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- 全局js -->
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>

<!-- 自定义js -->
<script src="js/content.js?v=1.0.0"></script>


<!-- Bootstrap table -->
<script src="/demo/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/demo/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/demo/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>

<!-- Peity -->
<script src="/demo/js/demo/bootstrap-table-demo.js"></script>

<!-- Peity -->
{{--<script src="/demo/js/plugins/peity/jquery.peity.min.js"></script>--}}

<!-- Peity -->
{{--<script src="/demo/js/demo/peity-demo.js"></script>--}}

</body>

</html>