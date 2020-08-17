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
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Diseases</th>
      <th scope="col">Doctor</th>
      <th scope="col">Booking_Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($patient as $row)
      <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->age}}</td>
        <td>{{$row->phone}}</td>
        <td>{{$row->address}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->password}}</td>
        <td>{{$row->diseases}}</td>
        <td>{{$row->doctor}}</td>
        <td>{{$row->bdate}}</td>
        <td><a href="{{route('patientedit',$row->id)}}" class="btn-info">Edit</a></td>
      </tr>
      @endforeach
  </tbody>
</table>
</body>
</html>

