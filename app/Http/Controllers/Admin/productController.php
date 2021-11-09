<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class productController extends Controller
{
  
      public function index(Request $req)
      {
          $products = Product::all();
         return view('admin.product.index', compact('products'));
      }

      public function add()
      {
            $subcate = SubCategory::all();

            return view('admin.product.add', compact('subcate'));
      }

      public function insert(Request $request)
      {
          $product = new Product();

             if($request->hasFile('image')){
          $file = $request->file('image');
          $ext = $file->getClientOriginalExtension(); 
          $filename = time().'.'.$ext;
          $prodItem = $filename . ',' . $file;
          $file->move('Admin/uploads/products', $filename);
          
          $product->image = $filename;
        
     }
          if ($product->prod_image) {
          
            $imageName = '';
            foreach($product->prod_image as $key=>$image)
            {
                     $imgName = Product::now()->timestamp. $key. '.' . $image->extension();
                     $image->storeAs('Admin/uploads/products', $imgName);
                     $imageName = $imageName . ',' . $imgName; 
                      $product->prod_image =$imageName;

            }
             
          }

          
            $product->subcate_id =$request->input('subcate_id');
            $product->name =$request->input('name');
            $product->slug =$request->input('slug');
            $product->small_descript =$request->input('small_descript');
            $product->descript =$request->input('descript');
            $product->original_price =$request->input('original_price');
            $product->selling_price =$request->input('selling_price');
                
            $product->status =$request->input('status') == TRUE? '1': '0';
            $product->trendings =$request->input('trendings') == TRUE? '1': '0';
            $product->save();
            return redirect('products')->with('status', 'Product added successfully');

      }

   

        public function destroy($id)

  {

     $category = Product::find($id);
        if ($category->image) {

               $path = 'Admin/uploads/products/'.$category->image;
               if (File::exists($path)) {

                   FIle::delete($path);
               }
               $category->delete();
          return redirect('products')->with('status', 'Delete successfully');
               
        }
  }

     //Return to edit page
        public function edit($id)
  {

     $products = Product::find($id);
     $subcate = SubCategory::all();
       return view('admin.product.edit', compact('products', 'subcate'));
  }

   public function update(Request $req, $id)
  {
       $product = Product::find($id);
       if ($req->hasFile('image')) {

               $path = 'Admin/uploads/products/'.$product->image;
               if (File::exists($path)) {
                   FIle::delete($path);
               }

                 $file = $req->file('image');
          $ext = $file->getClientOriginalExtension(); 
          $filename = time().'.'.$ext;
          $file->move('Admin/uploads/products', $filename);
          $product->image = $filename;
       }


          
          $product->name =$req->input('name');
          $product->slug =$req->input('slug');
            $product->small_descript =$req->input('small_descript');
            $product->descript =$req->input('descript');
            $product->selling_price =$req->input('selling_price');
            $product->original_price =$req->input('original_price');
      
            $product->name =$req->input('name');
            $product->status =$req->input('status') == TRUE? '1': '0';
            $product->trendings =$req->input('trendings') == TRUE? '1': '0';
            $product->update();
          return redirect('products')->with('status', 'Update successfully');
  }

  
}
