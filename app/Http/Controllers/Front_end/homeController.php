<?php

namespace App\Http\Controllers\Front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;

class homeController extends Controller
{
           
            public function index()

            {  
               $feature_product = Product::where('trendings', '1')->take(15)->get();
               $allpro = Category::all();
               
               $trendings = SubCategory::where('popular', '1')->take(15)->get();
               $subcategories = SubCategory::all();
               return view('frontend.index', compact('feature_product', 'trendings', 'subcategories', 'allpro' ));
          
                
               }
      
            public function cate()
            {
             $categories = Category::take(15)->get();
             return view('frontend.categories', compact('categories'));
            }

            public function viewcategory($slug)
            {
               if (Category::where('slug',$slug)->exists()) {
                  $categories = Category::where('slug', $slug)->first();
                  $subcate = SubCategory::where('category_id', $categories->id)->get();
                  return view('frontend.view-category', compact( 'categories', 'subcate'));
           
               }

               else {
                        return redirect('/')->with('status', 'No webpage Found');
               }
            }

            public function view_subcategory($cate_slug, $subcate_slug )
            {
               if (Category::where('slug', $cate_slug)->exists()) {

               if (Subcategory::where('slug', $subcate_slug)->exists()) {
               $subcategories = SubCategory::where('slug', $subcate_slug)->first();
               $prod =Product::where('subcate_id', $subcategories->id)->get();
                $category = Category::where('slug', $cate_slug)->first();
                return view('frontend.view_subcategory', compact('prod', 'subcategories', 'category'));
                   
                  }
             
                   else {
                        return redirect('/')->with('status', 'No webpage Found');
               }

               }
               
            }

            public function view_prod($subcate_slug, $prod_slug )
            {
               if (SubCategory::where('slug', $subcate_slug)->exists()) {


               if (Product::where('slug', $prod_slug)->exists()) {
               $prod =Product::where('slug',$prod_slug)->first();
                $subcategories = SubCategory::where('slug', $subcate_slug)->first();
                return view('frontend.product.view_prod', compact('prod', 'subcategories'));
                   
                  }
             
                   else {
                        return redirect('/')->with('status', 'No webpage Found');
               }

               }
               
            }

            public function details($id)
            {
               Product::find($id);
            
            }

            public function search(Request $req)
         {
            $data = Product::where('name',  'like', '%'.$req->input('quary').'%')->get();
             $categories = Category::all();
            return view('search', compact('data', 'categories'));
            }

        
}
