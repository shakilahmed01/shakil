@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">

<form action="{{ route('information_update') }}" method="post">
  @csrf

       <div class="form-group">
         <input name="information_id"  type="text" value="{{$single_information->id}}">
         <div class="form-group">
             <label for="name">Full Name</label>
             <input name=name type="text" value="{{$single_information->name}}" class="form-control" id="name" aria-describedby="emailHelp">

       </div>

       <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" value="{{$single_information->email}}"class="form-control" id="email">
       </div>

       <div class="form-group">
           <label for="projectname">Project Name</label>
           <input name="projectname" type="text" value="{{$single_information->projectname}}" class="form-control" id="projectname" aria-describedby="emailHelp">

       </div>

      <div class="form-group">
           <label for="github">Github Link</label>
           <input name="github" type="text" value="{{$single_information->github}}" class="form-control" id="github" aria-describedby="emailHelp">

      </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
