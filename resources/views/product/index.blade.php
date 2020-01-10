@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">

<form action="{{ route('product_create') }}" method="post">
  @csrf


  <div class="form-group">
       <label for="productname">Product Name</label>
       <input name="productname" type="text" class="form-control" id="productname">
  </div>

  <div class="form-group">
      <label for="productprice">Product Price</label>
      <input name="productprice" type="number" class="form-control" id="productprice" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
      <label for="productcategory">Product Category</label>
      <input name="productcategory" type="text" class="form-control" id="productcategory" aria-describedby="emailHelp">

  </div>




  <button type="submit"class="btn btn-primary">Submit</button>
</form>

@endsection
