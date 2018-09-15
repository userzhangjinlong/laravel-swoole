<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Sample')</title>
</head>
<body>
@include('layouts._header')
@include('shared._messages')
  @yield('content')
</body>
</html>