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
        <div>
          <img src="{{asset('img/corner.jpg')}}">
        </div>
        <div>
          <img src="{{asset('img/sidemenu.jpg')}}">
        </div>
        <div style="height: 300px"></div>
        <div>
          <img src="{{asset('img/setting.jpg')}}">
        </div>
        <div id="my-app-spacer">
          &nbsp;
        </div>
      </div>
      <div id="my-app-content">
        <div id="top-header">
          <div id="top-header-left">
            <span class="top-header-title">Doctor</span>
          </div>
          <div id="top-header-right">
              <img src="{{asset('img/top-menu.jpg')}}">
          </div>
        </div>
        <div id="my-app-body">
          @yield('main')
        </div>

      </div>
      <div id="my-app-footer">
        <div id="footer-corner"><img src="{{asset('img/corner2.jpg')}}"></div>
      </div>
    </div>

  </body>
</html>