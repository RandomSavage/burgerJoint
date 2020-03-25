@extends('layouts.admin')

@section('content')

<div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">Edit Food Item</h2>
                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">All Food Items</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Food Item</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader -->
            <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic form -->
                    <!-- ============================================================== -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit this Item</h5>
                            <div class="card-body">
                              <form method="POST" action="/admin/reservations/{{$reservation->id}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                      <label for="inputfname">First Name</label>
                                        <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname', $reservation->fname) }}" required autocomplete="fname" autofocus placeholder="First Name">
                                        @error('fname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="inputlname">Last Name</label>
                                        <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname', $reservation->lname) }}" required autocomplete="lname" autofocus placeholder="Last Name">
                                        @error('lname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                      <label for="inputemail">Email</label>
                                        <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email', $reservation->email) }}" required autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                          <input id="phone_number" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $reservation->phone_number) }}" required autocomplete="phone_number" autofocus placeholder="Phone Number">
                                          @error('phone_number')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="guestsinput">How Many Guests?</label>
                                        <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestsinput">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                        @error('guests_total')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                      <div class="form-group">
                                        <label for="timeinput">What Time</label>
                                        <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeinput">
                                          <option value="6">6:00 PM</option>
                                          <option value="7">7:00 PM</option>
                                          <option value="8">8:00 PM</option>
                                          <option value="9">9:00 PM</option>
                                          <option value="10">10:00 PM</option>
                                        </select>
                                        @error('time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="background: red; padding: 10px; color: white;">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                      </div>
                                      <div class="row">
                                        <div class="col-sm-6 pl-0">
                                            <p class="text-right">
                                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic form -->
                    <!-- ============================================================== -->
                </div>
              </div>

@endsection
