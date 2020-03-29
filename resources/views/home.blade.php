<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$settings["general"]->site_title}}</title>
        <!-- Search Engine Optimization by Rank Math - https://s.rankmath.com/home -->
        <meta name="description"
          content="{{$settings["seo"]->description}}">
        <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large">
        <!-- <link rel="canonical" href="https://codingphase.com/"> -->
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{$settings["general"]->site_title}}">
        <meta property="og:description"
          content="{{$settings["seo"]->description}}">
        <!-- <meta property="og:url" content="https://codingphase.com/"> -->
        <meta property="og:site_name" content="{{$settings["general"]->site_title}}">
        <meta property="og:updated_time" content="2020-02-05T17:41:55+00:00">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{$settings["general"]->site_title}}">
        <meta name="twitter:description"
          content="{{$settings["seo"]->description}}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
      @yield('content')

    </body>
</html>
