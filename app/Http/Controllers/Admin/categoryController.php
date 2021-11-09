<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class categoryController extends Controller
{
   public function getData() {

     $category = Category::all();
       return view('admin.category.index', compact('category'));
  }
  
  public function add() {
       return view('admin.category.add');
  }

    public function insert(Request $request) {

     
     $category =new Category();

     if($request->hasFile('image')){
          $file = $request->file('image');
          $ext = $file->getClientOriginalExtension(); 
          $filename = time().'.'.$ext;
          $file->move('Admin/uploads/categories', $filename);
          $category->image = $filename;

     }

     $category->name =$request->input('name');
     $category->slug =$request->input('slug');
     $category->description =$request->input('description');
     $category->status =$request->input('status') == TRUE? '1': '0';
     $category->popular =$request->input('popular') == TRUE? '1': '0';
     $category->save();

     return redirect('/dashboard')->with("status", "Category created successfully");
  }


  public function edit($id)
  {

     $category = Category::find($id);
       return view('admin.category.edit', compact('category'));
  }

  public function update(Request $req, $id)
  {
       $category = Category::find($id);
       if ($req->hasFile('image')) {

               $path = 'Admin/uploads/categories/'.$category->image;
               if (File::exists($path)) {
                   FIle::delete($path);
               }

                 $file = $req->file('image');
          $ext = $file->getClientOriginalExtension(); 
          $filename = time().'.'.$ext;
          $file->move('Admin/uploads/categories', $filename);
          $category->image = $filename;
       }

     $category->name =$req->input('name');
     $category->slug =$req->input('slug');
     $category->description =$req->input('description');
     $category->status =$req->input('status') == TRUE? '1': '0';
     $category->popular =$req->input('popular') == TRUE? '1': '0';
     $category->update();
          return redirect('dashboard/categories')->with('status', 'Update successfully');
  }

  public function destroy($id)

  {

     $category = Category::find($id);
        if ($category->image) {

               $path = 'Admin/uploads/categories/'.$category->image;
               if (File::exists($path)) {

                   FIle::delete($path);
               }
               $category->delete();
          return redirect('categories')->with('status', 'Delete successfully');
               
        }
  }
  
}
