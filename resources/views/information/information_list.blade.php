@extends('layouts.app')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-6">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Projectname</th>
      <th scope="col">Github</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($lists as $list)
    <tr>
    <th scope="row">{{$list->id}}</th>
    <td>{{$list->name}}</td>
    <td>{{$list->email}}</td>
    <td>{{$list->projectname}}</td>
    <td>{{$list->github}}</td>
    <td>{{$list->created_at->diffForHumans()}}</td>
    <td>{{$list->updated_at}}</td>
    <td>
      <a href="{{url ('/user/information/list') }}/{{$list->id}}" class="btn-sm btn-primary"> Edit</a>
      <a href="{{url ('/user/information/delete') }}/{{$list->id}}"class="btn-sm btn-danger"> Delete</a>



    </td>
    @empty

    <h1>No data</h1>


  </tr>
    @endforelse


  </tbody>
</table>


    {{ $lists->links() }}



     </div>
  </div>
</div>


@endsection
