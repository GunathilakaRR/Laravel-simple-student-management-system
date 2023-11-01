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

<!-- navbar section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{route('student.home')}}">Home</a>
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


<!-- form section -->

<div class="container">

<a href="{{route('student.create')}}" class="btn btn-danger mt-3">Add student</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
      <th scope="col">Birthday</th>
    </tr>
  </thead>
  <tbody>

    @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->id}}</th>
      <td>{{$student->fname}}</td>
      <td>{{$student->lname}}</td>
      <td>{{$student->tel}}</td>
      <td>{{$student->address}}</td>
      <td>{{$student->birthday}}</td>
      <td><a class="btn btn-danger" href="{{route('student.update', $student->id)}}">Update</a></td>
    </tr>
    @endforeach


  </tbody>
</table>
</div>
    
</body>
</html>