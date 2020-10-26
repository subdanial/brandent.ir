<?php

namespace App\Http\Controllers;

use DataTables;
use Verta;
use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function table(){
        return DataTables::of(Post::all())
        ->addColumn("actions",function(Post $post){
            $destroy_link = route('post_destroy',$post);
            $edit_item_link = route('post_edit',$post);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'>حذف</a>";
            $string .= "<a class='btn btn-dark btn-sm mx-1' href='$edit_item_link'>ویرایش</a>";
            
            return $string;
        })
        ->editColumn("created_at",function(Post $post){
            $string = verta($post->created_at)->formatDifference();
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }
    public function index()
    {
        return view('admin.post_index');  
    }

    public function create()
    {
        $categories = Category::All();
        return view('admin.post_create',compact('categories'));

    }

    public function store(Request $request)
    {
        if(!$request->content){
            $request->session()->flash('msg', 'پست ثبت شد');
            return  redirect()->back();
        }
        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $request->image,
            'content' => $request->content,
            'content_short' => $request->content_short,
        ]);
        $request->session()->flash('msg', 'پست ثبت شد');
        return  redirect()->back();
    }

    public function show(Post $post)
    {
        return view('post',compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::All();

        return view('admin.post_edit',compact('post','categories'));

    }


    public function update(Request $request, Post $post)
    {
        if($request->image){
            $image = $request->image;
        }else{
            $image= $post->image;
        }

        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
            'content_short' => $request->content_short,
        ]);
        $request->session()->flash('msg', 'پست آپدیت شد');
        return  redirect()->back();
    }


    public function destroy(Request $request,Post $post)
    {
        $post->delete();
        $request->session()->flash('msg', 'پست حذف شد');
        return  redirect()->back();
    }
}
