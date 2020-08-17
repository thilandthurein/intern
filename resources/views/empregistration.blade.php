<!DOCTYPE html>
<html>
<head>
	<title>Register Example</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
	<h1 style="text-align: center;">EMPLOYEE REGISTER PAGE</h1>
	<div class="container">
		<div class="col-sm-6">
			<form method="post" action="{{route('empindex')}}">
				@csrf
  				<div class="form-group">
    				<label for="id">Id</label>
    				<input type="number" class="form-control" name="id" id="id">
  				</div>
  				<div class="form-group">
    				<label for="name">Name</label>
    				<input type="text" class="form-control" id="name" name="name">
  				</div>
  				<div class="form-group">
    				<label for="dob">Date of Birth</label>
    				<input type="date" class="form-control" name="dob" id="dob">
  				</div>
  				<div class="form-group">
    				<label for="email">Email address</label>
    				<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  				</div>
  				<div class="form-group">
    				<label for="pwd">Password</label>
    				<input type="password" class="form-control" id="pwd" name="pwd">
  				</div>
  				<div class="form-group">
    				<label for="nrc">NRC</label>
    				<input type="text" class="form-control" id="nrc" name="nrc">
  				</div>
  				<div class="form-group">
    				<label for="nation">Nationality</label>
    				<input type="text" class="form-control" id="nation" name="nation">
  				</div>

  				
  				<button type="submit" class="btn btn-primary">Submit</button>
  				<button type="reset" class="btn btn-secondary">Reset</button>
			</form>
		</div>
	</div>
</body>
</html>