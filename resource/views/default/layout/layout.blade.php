<html>
<head>
    <title>@yield('title')</title>
</head>
@require('/resource/static/css/normalize.css')
@require('/resource/static/css/style.css')
@placeholder('styles')
@framework("/resource/static/js/mod.js")
<body>
<div class="container">
    @yield('content')
</div>
@placeholder('framework')
@placeholder('scripts')
</body>
</html>