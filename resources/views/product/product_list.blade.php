@extends('layouts.app')
@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-6">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>

      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Category</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @forelse($lists as $list)
    <tr>
    <th scope="row">{{$list->id}}</th>

    <td>{{$list->productname}}</td>
    <td>{{$list->productprice}}</td>
    <td>{{$list->productcategory}}</td>
    <td>{{$list->created_at->diffForHumans()}}</td>
    <td>{{$list->updated_at}}</td>

    <td>
      <a href="{{url ('/product/list') }}/{{$list->id}}" class="btn-sm btn-primary"> Edit</a>
      <a href="{{url ('/product/delete') }}/{{$list->id}}"class="btn-sm btn-danger"> Delete</a>



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
