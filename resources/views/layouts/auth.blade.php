<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title", "To Do App")</title>
    <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet" >
    @yield("style")
  </head>
  <body class="d-flex flex-column h-100 "style="background-color: #FFEEF3;">
    <div >
        @yield("content")
    </div>
    <script src="{{asset("assets/js/bootstrap.min.js")}}" ></script>
  </body>
</html>