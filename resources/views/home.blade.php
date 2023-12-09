<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student management system</title>

        <!-- boot strap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       
    </head>
    <body class="antialiased">
        <div class="container mt-5 p-2">
          <div class="row">
            <div class="col-12 col-md-6">
@if(session()->has('status'))
<div class="alert alert-success p-4 m-4">
<span>{{ session('status') }}</span>
</div>
@endif

        <form method="post" action="">
          @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="city" class="col-sm-2 col-form-label">City:</label>
    <div class="col-sm-10">
      <input type="text" name="city" class="form-control" id="city" placeholder="City">
    </div>
  </div>
  <div class="form-group row">
    <label for="marks" class="col-sm-2 col-form-label">Marks:</label>
    <div class="col-sm-10">
      <input type="number" name="marks" class="form-control" id="marks" placeholder="Marks">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
      <div class="col-12 col-md-6">
<div class="container border border-1 p-3">
<div class=" flex-wrap">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>#id</th>
      <th>Name</th>
      <th>City</th>
      <th>Marks</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($student as $st)
      <th scope="row">{{$st->id}}</th>
      <td class="text-capitalize">{{$st->name}} </td>
      <td class="text-capitalize">{{$st->city}}</td>
      <td class="text-capitalize">{{$st->marks}}</td>
      <td>  <a href="{{ url('/edit', $st->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
      <td>  <a href="{{ url('/delete', $st->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

    </div>
</div>
</div>
        </div>
</div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
