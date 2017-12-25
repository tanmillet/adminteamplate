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
<div style="float: left;width: 10%;height: 100%">
    <nav class="navbar-default navbar-static-side" role="navigation" style="height: 100%">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">hAdmin</strong>
                                    </span>
                                </span>
                        </a>
                    </div>
                    <div class="logo-element">hAdmin
                    </div>
                </li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">分类</span>
                </li>
                <li>
                    <a class="J_menuItem" href="/demo/table">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">主页</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa fa-bar-chart-o"></i>
                        <span class="nav-label">统计图表</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="graph_echarts.html">百度ECharts</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_flot.html">Flot</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_morris.html">Morris.js</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_rickshaw.html">Rickshaw</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_peity.html">Peity</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_sparkline.html">Sparkline</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="graph_metrics.html">图表组合</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="float: left;width: 85%;">

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
<!-- 全局js -->
<script src="/demo/js/jquery.min.js?v=2.1.4"></script>
<script src="/demo/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/demo/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/demo/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<!-- 自定义js -->
<script src="/demo/js/content.js?v=1.0.0"></script>
<script src="/demo/js/hAdmin.js?v=4.1.0"></script>
<script src="/demo/js/plugins/pace/pace.min.js"></script>
<!-- Bootstrap table -->
<script src="/demo/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/demo/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="/demo/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<!-- Peity -->
<script src="/demo/js/demo/bootstrap-table-demo.js"></script>
</body>

</html>