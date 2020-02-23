@extends('layouts.app')

@section('content')
  <div id="menu-page">
    <section id="food-preview">
      <h2>We have everything you need to kill your hunger</h2>
        <div class="container">
          <div class="left-btn">
            <i class="fa fa-chevron-left" aria-hidden="true" onclick="goLeft()"></i>
          </div>
          <div class="right-btn">
            <i class="fa fa-chevron-right" aria-hidden="true" onclick="goRight()"></i>
          </div>
          <div class="food-slider">
            <div id="sliding-system">
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Starters
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="https://www.stickpng.com/assets/images/580b57fcd9996e24bc43c1a9.png" alt="value-meal">
                  </div>
                </div>

              </div>
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Burgers
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="img/burgers.png" alt="burgers">
                  </div>
                </div>

              </div>
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Entrees
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="img/dippers.png" alt="chickendippers">
                  </div>
                </div>

              </div>
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Sides
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="img/sides.png" alt="sides">
                  </div>
                </div>

              </div>
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Deserts
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="img/deserts.png" alt="icecream">
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Drink
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="img/deserts.png" alt="icecream">
                  </div>
                </div>
              </div>
              <div class="slide">
                <div class="background"></div>
                <div class="content">
                  <div class="food-title">
                    Beers
                  </div>
                  <p class="food-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. commodo consequat.  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <div class="food-image">
                    <img src="img/deserts.png" alt="icecream">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </div>
@endsection
