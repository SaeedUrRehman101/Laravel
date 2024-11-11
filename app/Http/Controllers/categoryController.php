<?php

namespace App\Http\Controllers; //This is use for registration of categoryController to Controller
use Illuminate\Http\Request; // Handle HTTP requests means handle form data which we submit through our Html forms.
use App\Models\Category; // We created a model "Category" in the Model folder so it's connected through the database folder where we created a table of categories.

class categoryController extends Controller
{
    function addCategory(Request $request){
        $category = new Category();
        $category->categoryName = $request->cateName;
        $categoryImage = time().'.'.$request->cateImg->extension();
        $request->cateImg->move(public_path("assets/img/category"),$categoryImage); //move($destinationPath, $fileName) * First Argument: Destination path specify karta hai. * Second Argument: Naya file name specify karta hai.
        $category->categoryImage = $categoryImage;
        $category->save();
        return back()->with("categories","categoreis Submitted.");
    }

    function viewCategory(){
        $allCate = Category::all();
        // dd($allCate);
        return view("dashmin.categories",compact("allCate"));
    }

}

