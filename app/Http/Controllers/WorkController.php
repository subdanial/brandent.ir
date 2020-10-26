<?php

namespace App\Http\Controllers;

use Image;
use DataTables;
use App\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function table()
    {
        return DataTables::of(Work::all())
        ->addColumn("actions",function(Work $work){
            $destroy_link = route('work_destroy',$work);
            $edit_item_link = route('work_edit',$work);

            $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'>حدف</a>";
            $string .= "<a class='btn btn-dark btn-sm mx-1' href='$edit_item_link'>ویرایش</a>";
            
            return $string;
        })
        ->rawColumns(["actions"])
        ->make(true);
    }

    public function index()
    {
        return view('admin.work_index');  

    }

    public function create()
    {
     
    }

    public function store(Request $request)
    {
        Work::create([
            'image' => $request->image,
            'describe' => $request->describe
        ]);
        return  redirect()->back();
    }

   
    public function show(Work $work)
    {
    }

 
    public function edit(Work $work)
    {
        return view('admin.work_edit',compact('work'));
    }

  
    public function update(Request $request, Work $work)
    {
        if($request->image){
            $image = $request->image;
        }else{
            $image= $work->image;
        }
        $work->update([
            'image' =>$image,
            'describe' => $request->describe
        ]);

        $request->session()->flash('msg', 'تصویر ویرایش شد');
        return  redirect()->route('work_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Work $work)
    {
        $request->session()->flash('msg', 'تصویر ویرایش شد');
        $work->delete();
        return  redirect()->route('work_index');

    }
}
