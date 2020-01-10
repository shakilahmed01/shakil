<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Carbon\Carbon;


class InformationController extends Controller
{
    function index()
  {
    //echo "string";
    return view('information.index');
  }
  function create(Request $request)
{
  //echo "string";
  Information::insert([

    'name'         =>$request->name,
    'email'        =>$request->email,
    'projectname'  =>$request->projectname,
    'github'       =>$request->github,
    'created_at'   =>Carbon::now(),

  ]);
  return back();
}
function information_list()
{
//echo "string";
$lists =information::latest()->paginate(2);


     return view('information.information_list',compact('lists'));
  }
  function single_list($information_id)
  {
    $single_information= information:: findOrFail($information_id);
     return view ('information.single_list',compact('single_information'));
    //echo $single_information;
  }
  function update(Request $request)
  {
    information::findOrFail($request->information_id)->update([

      'name'         =>$request->name,
      'email'        =>$request->email,
      'projectname'  =>$request->projectname,
      'github'       =>$request->github,
    ]);
    return back();
  }

  function delete ($information_id)
  {
     //echo "$information_id";
    information:: findOrFail($information_id)->delete();
    return back();
  }

}
