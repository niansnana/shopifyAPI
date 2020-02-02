<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- app.css -->
    <link href="{{ mix('css/app.css')  }}" rel="stylesheet">
    <!-- Styles -->
    <style>
    </style>
</head>
<body>
<!-- app.js编译的Vue.component调用 -->
<div id="app">
    <router-view></router-view>
</div>
<!-- app.js -->
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

