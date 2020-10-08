<?php
namespace App\Http\Controllers;
use DataTables;
use App\Teammate;
use Illuminate\Http\Request;
class TeammateController extends Controller
{
    public function table()
    {
        return DataTables::of(Teammate::all())
            ->addColumn("actions", function (Teammate $teammate) {
                $destroy_link = route('team_destroy', $teammate);
                $edit_item_link = route('team_edit', $teammate);
                $string = "<a class='btn btn-dark btn-sm mx-1' href='$destroy_link'>حذف</a>";
                $string .= "<a class='btn btn-dark btn-sm mx-1' href='$edit_item_link'>ویرایش</a>";
                return $string;
            })
            ->rawColumns(["actions"])
            ->make(true);
    }
    public function index()
    {
        return view('admin.team_index');
    }
    public function store(Request $request)
    {
        Teammate::create([
            'image' => $request->image,
            'name' => $request->name,
            'describe' => $request->describe
        ]);
        return  redirect()->back();
    }
    public function edit(Teammate $teammate)
    {
        return view('admin.team_edit',compact('teammate'));
    }
    public function update(Request $request, Teammate $teammate)
    {
        if($request->image){
            $image = $request->image;
        }else{
            $image= $teammate->image;
        }
        $teammate->update([
            'image' =>$image,
            'name' =>$request->name,
            'describe' => $request->describe
        ]);
        $request->session()->flash('msg', 'تصویر ویرایش شد');
        return  redirect()->route('team_index');
    }
    public function destroy(Request $request,Teammate $teammate)
    {
        $teammate->delete();
        $request->session()->flash('msg', 'تصویر ویرایش شد');
        return  redirect()->route('team_index');
    }
}
