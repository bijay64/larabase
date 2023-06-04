<?php

namespace App\Http\Controllers\Inventory;

use App\Helpers\Alert;
use App\Http\Controllers\Controller;
use App\Modules\Inventory\Entity\Category;

class CategoryController extends Controller
{
  public function Add()
  {
    return view("inventory.category.add");
  }
  public function AddPost()  // FormRequest $request
  {
    $name = request("name");
    $code = request("code");


    $category = new Category();
    $category->name = $name;
    $category->code = $code;
    $category->save();

    return redirect("/inventory/category");
  }

  public function Index()
  {
    $data = Category::all(); //get all data from database
    return view("inventory.category.Index", ['categoryList' => $data]);
  }

  public function Edit()
  {
    $id = request("categoryId");
    $category = Category::find($id);
    return view("inventory.category.edit", ['category' => $category]);
  }

  public function EditPost()
  {

    $id = request("id");
    $name = request("name");
    $code = request("code");

    $category = Category::find($id);
    $category->name = $name;
    $category->code = $code;
    $category->save();

    return redirect("/inventory/category");
  }
  public function Delete()
  {
    $id = request("categoryID");
    $category = Category::find($id);
    $category->delete();
    Alert::SetSuccessMessage("Category deleted");
  return redirect("/inventory/category");
    
  }
  
  }

