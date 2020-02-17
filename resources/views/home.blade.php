@extends('layouts.landing')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<section id="information">
  <div class="restaurant-image">
    <img src="img/restInfo.jpg" alt="diner">
  </div>
  <div class="info">
    <h2>Started from the bottom in 1977</h2>
    <div class="paragraphs">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <a href="#" class="about-link">
      <span>Learn more about restaurants</span>
      <div class="circle-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </a>
  </div>
</section>
<section id="food-preview">
  <h2>We have everything you need to kill your hunger</h2>
    <div class="button-rounded">View Our menu</div>
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
@endsection
