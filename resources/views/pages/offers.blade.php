@extends('layouts.app')

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h1>Sign Up To Notifications For Deals</h1>
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstnameinput">First Name</label>
                  <input type="text" class="form-control" name="firstname" id="firstnameinput" placeholder="Billy">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastnameinput">Last Name</label>
                  <input name="lastname" type="text" class="form-control" id="lastnameinput" placeholder="Bob">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="emailinput">Email address</label>
                  <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phoneinput">Phone#</label>
                  <input name="phone" type="text" class="form-control" id="phoneinput" placeholder="718-298-5768">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                </div>
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
