<!doctype html>
<html ng-app="app" ng-strict-di>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blubu - Admin Panel</title>

    <meta name="theme-color" content="#0690B7">
    <link rel="stylesheet" href="/admin/styles/bootstrap.css">
    <link rel="stylesheet" href="/admin/styles/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/admin/styles/scrollbar.css">
    <link rel="stylesheet" href="/admin/styles/chart.css">
    <link rel="stylesheet" href="/admin/styles/datepicker.css">
    <link rel="stylesheet" href="/admin/styles/style.css">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <!--[if lte IE 10]>
    <script type="text/javascript">document.location.href = '/unsupported-browser'</script>
    <![endif]-->

<!--    <style><?php require(public_path("css/critical.css")) ?></style> -->

</head>
<body>

    <app-shell>
 <!--        <div id="app-shell-header">
        </div>
        <div id="app-shell-content"></div> -->
    </app-shell>


    <app-root></app-root>


    <script>
    (function(){
        var link = document.createElement("link");
        link.href = "{!! elixir('css/final.css') !!}";
        link.type = "text/css";
        link.rel = "stylesheet";
        document.body.appendChild(link);
    })();
    </script>

    <script src="{!! elixir('js/final.js') !!}" ></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="/admin/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/datepicker.js"></script>
    <script src="/admin/js/scrollbar.js"></script>
    <script src="/admin/js/chart.js"></script>
    <script src="/admin/js/scroll.js"></script>
    <script src="/admin/js/tags.js"></script>
    <script src="/admin/js/app.js"></script>
</body>
</html>