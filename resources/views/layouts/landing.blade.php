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
      <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

      <script>
        let slides = $('.sliding-system a.slide').length;
        let maxSlides;
        let moveTotal;
        let currentSlide = 0;

        $(window).resize(function() {
          currentSlide = 0;
          $('.sliding-system').css('transform', 'translate3d(-0%, 0, 0)');
        })

        function desktopSlider() {
          if(a.matches) {
            maxSlides = Math.ceil((slides * 20) / 100);
            moveTotal = 100;
            // Right Button
            $('.right-btn').on('click', () => {
              console.log('clicked right button')
              if(currentSlide < maxSlides) {
                currentSlide += 100;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
              }
            });
            // Left Button
            $('.left-btn').on('click', () => {
              console.log('clicked left button')
              if(currentSlide != 0) {
                currentSlide -= 100;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
              }
            });
          }
        }
        var a = window.matchMedia("(min-width: 998px)")
        desktopSlider(a);
        a.addListener(desktopSlider);

        function tabletSlider() {
          if(b.matches) {
            maxSlides = Mth.ceil((slides * 50) / 100);
            moveTotal = 100;
            // Right Button
            $('.right-btn').on('click', () => {
              console.log('clicked right button')
              if(currentSlide < ((maxSlides * 100) - 100)) {
                currentSlide += 50;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
              }
            });
            // Left Button
            $('.left-btn').on('click', () => {
              console.log('clicked left button')
              if(currentSlide != 0) {
                currentSlide -= 50;
                $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
              }
            });
          }
        }
        var b = window.matchMedia("(min-width: 768px) and (max-width: 997px)");
        tabletSlider(b);
        b.addListener(tabletSlider);

        </script>
    </body>
</html>
