<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Carbon\Carbon;


class productController extends Controller
{
    function index()
  {
    //echo "string";
    return view('product.index');
  }
  function create(Request $request)
{
  //echo "string";
  product::insert([

    'productname'         =>$request->productname,
    'productprice'        =>$request->productprice,
    'productcategory'     =>$request->productcategory,
    'created_at'          =>Carbon::now(),

  ]);
  return back();
}
function product_list()
{
//echo "string";
$lists =product::latest()->paginate(2);


     return view('product.product_list',compact('lists'));
  }
  function single_list($product_id)
  {
    $single_product= product:: findOrFail($product_id);
     return view ('product.single_list',compact('single_product'));
    //echo $single_information;
  }
  function update(Request $request)
  {
    product::findOrFail($request->product_id)->update([

      'productname'         =>$request->productname,
      'productprice'        =>$request->productprice,
      'productcategory'     =>$request->productcategory,

    ]);
    return back();
  }
  function delete ($product_id)
  {
     //echo "$product_id";
    product:: findOrFail($product_id)->delete();
    return back();
  }
}
