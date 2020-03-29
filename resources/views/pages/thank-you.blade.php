@extends('layouts.app')

@section('title')
Thank-you - {{$settings["general"]->site_title}}
@endsection

@section('description')
Billy Burgers wants to thank our special community.
@endsection

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2 thank-you">
          <h1>Thank You</h1>
          <p>WE will get back to you.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
