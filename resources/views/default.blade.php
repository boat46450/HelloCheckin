<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" contents="ie=edge">
  <title>Hello Checkin</title>

  {{--  Font  --}}
  <link href="https://fonts.googleapis.com/css?family=Kanit:300,400&amp;subset=latin-ext,thai" rel="stylesheet">

  {{--  Stylesheet  --}}
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/sweetalert.css">
  <link rel="stylesheet" href="/css/swal-form.css">

  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:type" content="article">
  <meta property="og:title" content="Hello World Alpaca | @yield('title')">
  
  @yield('custom_head')
</head>
<body>
  @yield('content')

  {{--  Script  --}}
  @yield('custom_script')
</body>
</html>