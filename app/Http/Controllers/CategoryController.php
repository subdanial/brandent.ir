<?php

namespace App\Http\Controllers;

use DataTables;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function table(){
        return DataTables::of(Category::all())
        ->addColumn("actions",function(Category $category){
            $destroy_link = route('category_destroy',$category);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'>حذف</a>";
            $string .= "<span class='btn btn-dark btn-sm mx-1 js_category_edit' data-value='$category->name' id='$category->id'>ویرایش</span>";

            if($category->id == 0){
                $string = '<i class="fa fa-ban" ></i>';

            
            }
            
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }
    public function index()
    {
        return view('admin.category_index');  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
        ]);
        return  redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category = $category->where('id',$request->id)->first();
        $category->update([
            'name' => $request->name
        ]);

        $request->session()->flash('msg', 'دسته ویرایش شد');
        return  redirect()->route('category_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Category $category)
    {
        $request->session()->flash('msg', 'دسته حذف شد');
        $category->delete();
        return  redirect()->route('admin_category.index');
    }
}
