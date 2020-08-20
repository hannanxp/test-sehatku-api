<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sehatqu Test</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>

    <div id="my-app-center">
      <div id="my-app-sidebar-left">
        Sidebar
      </div>
      <div id="my-app-content">
        @yield('main')
      </div>
      <div id="my-app-footer">
        Footer
      </div>
    </div>

  </body>
</html>