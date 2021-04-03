<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SearchPostRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts=Post::with('category');
        //add new param to search
        //search post name
        if(!empty($request->post_name)){
        $posts=$posts->where('post_name','like','%'.$request->post_name.'%');
        }
        //search category_id
        if(!empty($request->category_id)){
            $posts=$posts->where('category_id','like','%'.$request->category_id.'%');
        }
        //pagination
        $posts=$posts->paginate(5);
        // $posts=Post::with('category')->paginate(2); // with lấy category model (function được định nghĩa ở Post Model)
        $category=Category::pluck('category_name','id')->toArray();
        // dd($posts);
        return view('post.index',['posts' => $posts,'category'=>$category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $category=Category::get();
        $category=Category::pluck('category_name','id')->toArray();
        // dd($category);
        return view('post.create',['category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //Cách 1
        // $dataInsert=[
        //     'post_name'=>$request->post_name,
        //     'post_content'=>$request->post_content,
        //     'category_id'=>$request->category_id,
        
        // ];
        // Post::create($dataInsert);
        if($request->hasFile('thumbnail')&& $request->file('thumbnail')->isValid()){
            $extension=$request->thumbnail->extension();
            $fileName='thumbnail_'.time().'.'.$extension;   
            //save folder /public/image/$fileName
            // $path=$request->thumbnail->storeAs('images',$fileName);
            $path=$request->thumbnail->move('images', $fileName);
        }
        DB::beginTransaction();
        try {
            $post=new Post;
            $post->post_name=$request->post_name;
            $post->category_id=$request->category_id;
            $post->thumbnail=$path;
            $post->save();
            DB::commit();
            return redirect()->route('post.index')->with('success','Store post success');
        } catch(\Exception $ex){
            DB::rollback();
            return redirect()->route('post.create')->with('error',$ex->getMessage());
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
        $postDetails=Post::with('category')->where('id',$id)->first();
        // dd($postDetails);
        return view('post.details',['postDetails'=>$postDetails]);
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
        $post=Post::findOrFail($id);
        $data['post']=$post;
        return view('post.edit',$data,['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        //
        $post_name=$request->post_name;
        $post_content=$request->post_content;
        $category_id=$request->category_id;

        DB::beginTransaction();
        try {
            $post=Post::find($id);
            $post->post_name=$post_name;
            $post->post_content=$post_content;
            $post->category_id=$category_id;
            $post->save();
            DB::commit();
            return redirect()->route('post.index')->with('success','Update post success');
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
        $delete_row=Post::where('id', $id)->delete();
        DB::commit();
        return redirect()->route('post.index')->with('success','Delete post success');
        } catch (\Exception $ex) {
            // insert into data to table category (fail)
            DB::rollBack();
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
    public function search(SearchPostRequest $request){
        $data = [];
        
        // get list data of table posts
        $posts = Post::with('category')
            ->where('category_id', $request->category_id)
            ->where('post_name', 'LIKE', '%' . $request->input('post_name') . '%')
            ->get();
        // get list data of table categories
        $categories = Category::pluck('category_name', 'id')
            ->toArray();
        $data['category'] = $categories;
        // dd($posts);
        $data['posts'] = $posts;
        return view('post.index', $data);
    }
}
