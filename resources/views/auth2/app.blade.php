<!doctype html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/login.css') }}" rel="stylesheet">

  @vite(['resources/css/app.css','resources/js/app.js', 'resources/css/login.css'])
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="h-full">
     @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
  @include('sweetalert::alert')
    @yield('content')
</body>
</html>