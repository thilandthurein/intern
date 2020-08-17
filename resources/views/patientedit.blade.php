<!DOCTYPE html>
<html>
<head>
	<title>Patient Register Example</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
	 <form method="post" action="{{route('patient.update',$patient->id)}}">
    @csrf
    @method('PUT')
    <h1 style="text-align: center;">PATIENT Edit PAGE</h1>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" value="{{$patient->name}}">
    </div>
     <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" name="age" value="{{$patient->age}}">
    </div>
     <div class="form-group">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{$patient->phone}}">
    </div>
     <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" name="address" value="{{$patient->address}}">
    </div>
     <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$patient->email}}">
    </div>
     <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="{{$patient->password}}">
    </div>
     <div class="form-group">
      <label for="diseases">Diseases</label>

      <input type="text" class="form-control" id="diseases" name="diseases" value="{{$patient->diseases}}">
    </div>
     <div class="form-group">
      <label for="doctor">Doctor</label>
      <input type="text" class="form-control" id="doctor" name="doctor" value="{{$patient->doctor}}">
    </div>
     <div class="form-group">
      <label for="bdate">Booking Date</label>
      <input type="date" class="form-control" id="bdate" name="bdate" value="{{$patient->bdate}}">
    </div>
     <button type="submit" class="btn btn-primary">Update</button>

   </form>

</body>
</html>