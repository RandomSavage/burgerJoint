<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('includes.metatags')
      @yield('{{$settings["seo"]->description}}')  
    </head>
    <body>
      <section id="app-layout">
        @include('includes.side-menu')
        <div class="welcome-jumbo">
          <div class="status">
            New
          </div>
          <h1>Billy Burger</h1>
          <div class="burger-image">
            <img src="https://www.stickpng.com/assets/images/580b57fcd9996e24bc43c1a9.png" alt="value-meal">
          </div>
        </div>
      </section>
      @yield('content')

    </body>
</html>
