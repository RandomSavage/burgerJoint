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
          <!-- menu btn attempt -->
          <div class="menu-btn">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
          </div>
          <!-- End of menu btn attempt -->
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

        const myFunction = ()=> {
          let menuBtn = document.querySelector('.menu-btn');
          let sideMenu = document.querySelector('.side-menu');
          if(sideMenu.style.width = "0" && sideMenu.style.zIndex < "5") {
            sideMenu.style.width = "300px";
            sideMenu.style.zIndex = "5";
            // sideMenu.classList.toggle('active');
            // sideMenu.style.transform = "translate3d(300px, 0, 0)";

          } else {
            sideMenu.style.width = "0";
            sideMenu.style.zIndex = "0";
          }
        }

        </script>
    </body>
</html>
