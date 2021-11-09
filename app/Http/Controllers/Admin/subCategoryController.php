<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class subCategoryController extends Controller
{
    public function index()
    {
        //VIEW SUB_CATEGORY
        $sub_category= SubCategory::all();
        return view('admin.category.sub_cate.sub-category', compact('sub_category'));
    }

  public function add() {
      $category =Category::all();
       return view('admin.category.sub_cate.add', compact('category'));
  }

    public function insert(Request $request) {

     
     $sub_category =new SubCategory();

     if($request->hasFile('image')){
          $file = $request->file('image');
          $ext = $file->getClientOriginalExtension(); 
          $filename = time().'.'.$ext;
          $file->move('Admin/uploads/categories', $filename);
          $sub_category->image = $filename;

     }

     $sub_category->category_id =$request->input('category_id');
     $sub_category->name =$request->input('name');
     $sub_category->slug =$request->input('slug');
     $sub_category->description =$request->input('description');
     $sub_category->status =$request->input('status') == TRUE? '1': '0';
     $sub_category->popular =$request->input('popular') == TRUE? '1': '0';
     $sub_category->save();

     return redirect('/dashboard/sub-category')->with("status", "Sub-Category created successfully");
  }


  public function edit($id)
  {

            $sub_category = SubCategory::find($id);
              return view('admin.category.sub_cate.edit', compact('sub_category'));
      
  }

  public function update(Request $req, $id)
  {
       $sub_category = SubCategory::find($id);
                if ($req->hasFile('image')) {
                $path = 'Admin/uploads/categories/'.$sub_category->image;
                if (File::exists($path)) {
                FIle::delete($path);
               }

                 $file = $req->file('image');
          $ext = $file->getClientOriginalExtension(); 
          $filename = time().'.'.$ext;
          $file->move('Admin/uploads/categories', $filename);
          $sub_category->image = $filename;

       }
 
     $sub_category->name =$req->input('name');
     $sub_category->slug =$req->input('slug');
     $sub_category->description =$req->input('description');
     $sub_category->status =$req->input('status') == TRUE? '1': '0';
     $sub_category->popular =$req->input('popular') == TRUE? '1': '0';
     $sub_category->update();
          return redirect('dashboard/sub-category')->with('status', 'Update successfully');
  }

  public function destroy($id)

  {

     $sub_category = SubCategory::find($id);
        if ($sub_category->image) {

               $path = 'Admin/uploads/categories/'.$sub_category->image;
               if (File::exists($path)) {

                   FIle::delete($path);
               }
               $sub_category->delete();
          return redirect('dashboard/sub-category')->with('status', 'Delete successfully');
               
        }
  }
  

}
