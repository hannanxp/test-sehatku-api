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

    <div id="my-app">
      <div id="my-app-sidebar">
        <div>
          <img src="{{asset('img/corner.jpg')}}">
        </div>
        <div>
          <img src="{{asset('img/sidemenu.jpg')}}">
        </div>
        <div style="height: 300px; background-color: #2b8e8e;"></div>
        <div>
          <img src="{{asset('img/setting.jpg')}}">
        </div>
      </div>
      <div id="my-app-content">
        <div id="top-header">
          Dashboard
        </div>
        konten
        @yield('main')
      </div>

    </div>

  </div>

</body>
</html>