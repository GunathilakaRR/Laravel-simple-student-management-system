<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body >
<!-- navbar section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="{{route('student.index')}}">Show All students </a>
      </li>
    </ul>
  </div>
</nav>

<!-- 
form section -->
  <div class="mt-5">
    <div class="container ">
    <form action="{{route('student.store')}}" method="POST">
     @csrf
      @if($errors->any())
        <div class='alert alert-danger'>
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
          </ul>
        </div>
      @endif

  <div class="form-group mt-2">
    <label for="exampleInputEmail1" >First Name</label>
    <input type="text" class="form-control " name="fname"  placeholder="Enter first name">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="lname"  placeholder="Enter last name">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Mobile number</label>
    <input type="text" class="form-control" name="tel"  placeholder="Enter mobile number">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address"  placeholder="Enter address">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">BirthDay</label>
    <input type="text" class="form-control" name="birthday"  placeholder="Enter birthday">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>

    </div>
    </div>
</body>
</html>