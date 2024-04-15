<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empM;

class empController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emp=empM::get();
        return view('index')->with('emp',$emp);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $message = [
        //     'name'=>'required|string',
        //     'phone' => 'required  |regex:/[0-9]{10}/'
        // ];
        
        $request->validate([
            'name'=>'required' ,    
            'phone'=> 'required  |regex:/[0-9]{10}/',
            'salary'=>'required' ,
            'address'=>'required' 
        ]);

        // $validatedData = $request->validate($message);
     //   empM::insert($request->except('_token'));
        $emp=new empM;
        $emp->name=$request->name;
        $emp->phone=$request->phone;
        $emp->salary=$request->salary;
        $emp->address=$request->address;
        
        $emp->save();

        return redirect()->route('employees');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id,Request $request)
    {
        $emp=empM::find($id);
       return view('edit')->with('emp',$emp);
    }

    public function show(string $id,Request $request)
    {
        $emp=empM::find($id);
       return view('show')->with('emp',$emp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required  |regex:/[0-9]{10}/',
            'salary'=>'required' ,
            'address'=>'required'
        ]);

        
        $emp=empM::find($id);

        $emp->name=$request->name;
        $emp->phone=$request->phone;
        $emp->salary=$request->salary;
        $emp->address=$request->address;
        
        $emp->save();
        return redirect()->route('employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $emp = empM::find($id);
        $emp->delete();
        return redirect()->route('employees');
    }
}
