@extends('layouts.app')

@section('title')
Offers - {{$settings["general"]->site_title}}
@endsection

@section('description')
Billy Burgers has regular special offers, you will want to know.
@endsection

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h1>Sign Up To Notifications For Deals</h1>
          <form method="POST" action="/offers">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputfname">First Name</label>
                  <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="John">
                  @error('fname')
                      <span class="invalid-feedback" role="alert">
                          <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputlname">Last Name</label>
                  <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Doe">
                  @error('lname')
                      <span class="invalid-feedback" role="alert">
                          <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputemail">Email address</label>
                  <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="johndoe@gmail.com">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputphone">Phone#</label>
                  <input id="inputphone" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus placeholder="1-856-694-3769">
                  @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                          <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p>In signing up, I acknowledge I am 18 years old or older, want to receive email offers from Billy Burger and if I select to join Dine Rewards, agree to the terms and conditions of the program.</p>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
