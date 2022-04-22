<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basic;

class basiccontroller extends Controller
{
    public function index()
    {
        $data['basic'] = Basic::orderBy('id','desc')->paginate(5);

        return view('basic.basic', $data);
    }
    //FORM
    public function basic()
    {
        return view('basic.basic');


    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
           
            
        ]);

        $basic = new Basic;
        $basic->name = $request->name;
        $basic->email = $request->email;
       
        $basic->save();
        
        return redirect()->route('basic.index')
                        ->with('success','Added successfully.');
    }
}
