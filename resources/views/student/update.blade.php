<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <form action="{{route('student.modify', $student->id)}}" method="POST">
    @method('put') 
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
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" value="{{$student->fname}}" name="fname"  placeholder="Enter first name">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" value="{{$student->lname}}" name="lname"  placeholder="Enter last name">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Mobile number</label>
    <input type="text" class="form-control" value="{{$student->tel}}" name="tel"  placeholder="Enter mobile number">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" value="{{$student->address}}" name="address"  placeholder="Enter address">
  </div>

  <div class="form-group mt-2">
    <label for="exampleInputEmail1">BirthDay</label>
    <input type="text" class="form-control" value="{{$student->birthday}}" name="birthday"  placeholder="Enter birthday">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>

    </div>
</body>
</html>