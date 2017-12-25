<!DOCTYPE html>
<html>
<head>
    <title>pjax</title>
    <meta charset="utf-8">
</head>
<body>
<h1>My Site</h1>
<div>
    <input type="button" id="th" value="GO">
</div>
<div>
    Go to <a href="/demo/pajax/test1">第一页</a>.<a href="/demo/pajax/test2">第二页</a>
</div>
<div id="container"></div>
</body>
<script src="/demo/js/jquery.min.js"></script>
<script src="/pajax/jquery.pjax.js"></script>
<script type="text/javascript">
    $(document).pjax('a', '#container');
    $(function () {
        $('#th').click(function () {
            $.pjax({
                url: '/demo/pajax/test3',
                container: '#container'
            });
        });
    });
</script>
</html>