

<form class="" action="index.html" method="post">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="" class="form-control form-control-lg">
    <div class="">
      {{$errors->first('name')}}
    </div>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" name="email" value="" class="form-control form-control-lg">
    <div class="">
      {{$errors->first('email')}}
    </div>
  </div>

  <div class="form-group">
    <label for="message">Enter Message</label>
    <textarea name="message" cols="30" rows="10" class="form-control form-control-lg"></textarea>
    <div class="">
      {{$errors->first('message')}}
    </div>
  </div>
  <button type="submit" class="btn btn-primary mb-2" name="button">SUBMIT</button>
</form>
