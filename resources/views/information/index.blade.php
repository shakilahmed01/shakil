@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">

<form action="{{ route('information_create') }}" method="post">
  @csrf

       <div class="form-group">
             <label for="name">Full Name</label>
             <input name=name type="text" class="form-control" id="name" aria-describedby="emailHelp">

       </div>

       <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email">
       </div>

       <div class="form-group">
           <label for="projectname">Project Name</label>
           <input name="projectname" type="text" class="form-control" id="projectname" aria-describedby="emailHelp">

       </div>

      <div class="form-group">
           <label for="github">Github Link</label>
           <input name="github" type="text" class="form-control" id="github" aria-describedby="emailHelp">

      </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
