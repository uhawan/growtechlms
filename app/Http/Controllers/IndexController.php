<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
       public function index(){
        $members = DB::table('members')->get();
        // dd($members);
        return view('backend.members.index', compact('members'));
    }


    public function create()
    {
   
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }
    public function view(Request $request,$id)
    {
        $members = DB::table('members')->find($id);
//   dd( $members);
        return view('backend.members.view',compact( 'members'));
    }

    
    // public function destroy($id)
    // {
    //     $members =  DB::table('members')->find($id)->delete();
       
    //     return  redirect()->back()->with('success', 'Member Has Been  DELEATED successfully');
    // }
    public function destroy($id) {
        DB::delete('delete from members where id = ?',[$id]);
        return  redirect()->back()->with('success', 'Member Has Been  DELEATED successfully');
     }
}
