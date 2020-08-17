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
	<h1 style="text-align: center;">PATIENT REGISTER PAGE</h1>
	<div class="container">
		<div class="col-sm-6">
			<form action="{{route('patient.store')}}" method="post">
        @csrf
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your name">
          </div>
        </div>

        <div class="form-group row">
          <label for="age" class="col-sm-2 col-form-label">Age</label>
          <div class="col-sm-10">
          <input type="number" class="form-control" id="age" name="age" placeholder="Enter Your age">
          </div>
        </div>

        <div class="form-group row">
          <label for="phno" class="col-sm-2 col-form-label">Phone Number</label>
          <div class="col-sm-10">
          <input type="number" class="form-control" id="phno" name="phone" placeholder="Enter Your Phone Number">
          </div>
        </div>

        <div class="form-group row">
          <label for="address" class="col-sm-2 col-form-label">Address</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address">
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" placeholder="example@mail.com">
          </div>
        </div>

        <div class="form-group row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="*******">
          </div>
        </div>

        <div class="form-group row">
          <label for="diseases" class="col-sm-2 col-form-label">Diseases</label>
          <div class="col-sm-10">
            <select id="diseases" class="form-control" name="diseases">
              <option selected>Genetic disease</option>
              <option>Congenital disorder or congenital disease</option>
              <option>Chronic condition or chronic disease</option>
              <option>Acquired disease</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="doctor" class="col-sm-2 col-form-label">Doctor</label>
          <div class="col-sm-10">
            <select id="doctor" class="form-control" name="doctor">
              <option selected>Dr.Thu Ta</option>
              <option>Dr.Nyi Zoe Lay</option>
              <option>Dr.Nay Htet</option>
              <option>Dr.Ye Aung</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label for="date" class="col-sm-2 col-form-label">Booking Date</label>
          <div class="col-sm-10">
          <input type="date" class="form-control" id="password" name="bdate">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
  
      </form>

		</div>
	</div>
</body>
</html>