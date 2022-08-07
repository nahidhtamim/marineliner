<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="apple-touch-icon" href="{{asset('frontend/assets/images/logo.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/logo.ico')}}">

    <title>Marine Liner</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css"
    />
    @vite('resources/css/app.css')
    <link href="{{asset('frontend/assets/styles/output.css')}}" rel="stylesheet" />
  </head>
<body>

    @include('layouts.front-includes.navbar')

    <main class="pt-16">
        @yield('content')

        @include('layouts.front-includes.footer')
    </main>

    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    <script>
       // Script For Close alert

      var alert_del = document.querySelectorAll('.alert-del');
      alert_del.forEach((x) =>
        x.addEventListener('click', function () {
          x.parentElement.classList.add('hidden');
        })
      );
    </script>
</body>
</html>
