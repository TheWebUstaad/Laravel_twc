<?php

namespace App\Http\Controllers;

// use App\Models\Product;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index(){
        $products = Product::with('category')->get();
        // $categories = Category::all();
        // dd($products);
        return view('products.index', compact('products'));
    }


    function create(){
        $categories = Category::all();
        // dd($categories);
        return view('products.create', compact('categories'));
    }

    function store(Request $request){

            // dd($request->all());
            $validated = $request->validate(
                [
                    'name' => 'required|max:30|string',
                    'price' => 'required|numeric|min:0',
                    'description' => 'required|string',
                    'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
                    'category' => 'null|numeric',
                    'category_id' => 'required|exists:categories,id'
                ]
            );  

             if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('products', 'public');
                $validated['image'] = $imagePath;
             }
            
             Product::create($validated);

            //  return back()->with('success', 'Product created successfully.');
            return redirect()->route('products.index')->with('success', 'Product created successfully.');

    }

    function edit(Product $product){
        // dd($product);
        return view('products.edit', compact('product'));
    }
    
    function update(Request $request, Product $product){
        // dd($product);
        $validated = $request->validate(
                [
                    'name' => 'required|max:30|string',
                    'price' => 'required|numeric|min:0',
                    'description' => 'required|string',
                    'image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
                    'category' => 'required|numeric',
                ]
            );  

          if ($request->hasFile('image')) {
                if($product->image){
                    Storage::disk('public')->delete($product->image);
                }     
            

                $imagePath = $request->file('image')->store('products', 'public');
                $validated['image'] = $imagePath;
             }  

             $product->update($validated);
              //  return back()->with('success', 'Product created successfully.');
            return redirect()->route('products.index')->with('success', 'Product updated successfully.');

    }

    function destroy(Product $product){
        // dd($product);
        if($product->image){
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect()->route('products.index')->with('danger', 'Product deleted successfully.');
        
    }
}
