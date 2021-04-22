<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $products=Product::with('category');
        //add new param to search
        //search post name
        if(!empty($request->product_name)){
        $products=$products->where('name','like','%'.$request->product_name.'%');
        }
        //search category_id
        if(!empty($request->category_id)){
            $products=$products->where('category_id','like','%'.$request->category_id.'%');
        }
        //pagination
        $products=$products->paginate(5);
        // $posts=Post::with('category')->paginate(2); // with lấy category model (function được định nghĩa ở Post Model)
        $category=Category::pluck('category_name','id')->toArray();
        // dd($posts);
        return view('auth.admin.product.index',['products' => $products,'category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::pluck('category_name','id')->toArray();
        return view('auth.admin.product.create',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
        if($request->hasFile('image')&& $request->file('image')->isValid()){
            $extension=$request->image->extension();
            $fileName='image_'.time().'.'.$extension;   
            //save folder /public/image/$fileName
            // $path=$request->thumbnail->storeAs('images',$fileName);
            $path=$request->image->move('images', $fileName);
        }
        DB::beginTransaction();
        try {
            $product=new Product;
            $product->name=$request->product_name;
            $product->description=$request->description;
            $product->image=$path;
            $product->category_id=$request->category_id;  
            $product->save();
            DB::commit();
            return redirect()->route('admin.product.index')->with('success','Store product success');
        } catch(\Exception $ex){
            DB::rollback();
            return redirect()->route('admin.product.create')->with('error',$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category=Category::get();
        // dd($category);
        $data=[];
        $product=Product::findOrFail($id);
        $data['product']=$product;
        $data['category']=$category;
        return view('auth.admin.product.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        //
        $product = Product::find($id);
        
        $imageOld = $product->image;
        $product->name=$request->product_name;
        $product->description=$request->description;
        $product->category_id=$request->category_id;
        $imagePath = null;

        if ($request->hasFile('image') 
        && $request->file('image')->isValid()) {
        // Nếu có thì thục hiện lưu trữ file vào public/thumbnail
            $image = $request->file('image');
            $extension = $request->image->extension();
            $fileName = 'image_' . time() . '.' . $extension;
            $imagePath = $image->move('images', $fileName);
            $product->image = $imagePath;
            Log::info('imagePath: ' . $imagePath);
        }
        DB::beginTransaction();
        try {
            $product->save();
            DB::commit();
             // SAVE OK then delete OLD file
             if ($request->hasFile('image') && File::exists(public_path($imageOld))) {
                File::delete(public_path($imageOld));
            }
            return redirect()->route('admin.product.index')->with('success','Update product success');
        } catch(\Exception $ex){
            DB::rollback();
            return redirect()->back()->with('error',$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::beginTransaction();
        try {
            
            $product = Product::findOrFail($id);
            $imageOld = $product->image;
            $product->delete();

            DB::commit();

            // DELETE OK then delete thumbnail file
            if (File::exists(public_path($imageOld))) {
                File::delete(public_path($imageOld));
            }
        DB::commit();
        return redirect()->route('admin.product.index')->with('success','Delete product success');
        } catch (\Exception $ex) {
            // insert into data to table category (fail)
            DB::rollBack();
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
