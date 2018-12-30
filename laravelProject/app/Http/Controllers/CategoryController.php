<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function index()
    {
    	return view('admin.category.categoryEntry');
    }
    public function save(Request $request)
    {
    	$categoryEntry = new category();

    	$categoryEntry->calegoryName = $request->name;
    	$categoryEntry->shortDescription = $request->shortDescription;
    	
    	$categoryEntry->publicationStatus = $request->publicationStatus;
    	$categoryEntry->save();

    	return redirect('/category/save')->with('message','data insert successfully');
    }
}
