<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Employees;
use Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $employees=Employees::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       return view('employees.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $employees=new Employees();
        $employees->first_name=Request::get('first_name');
        $employees->last_name=Request::get('last_name');
        $employees->salary=Request::get('salary');
        $employees->department=Request::get('department');
        $employees->save();
        return redirect('/employees');
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
       
        $employees=Employees::findOrFail($id);
        return view('employees.show',compact('employees'));
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
        $employees=Employees::find($id);
        return view('employees.edit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        
        $employees=Employees::find($id);
        $employees->first_name=Request::get('first_name');
        $employees->last_name=Request::get('last_name');
        $employees->salary=Request::get('salary');
        $employees->department=Request::get('department');
        $employees->save();
        return redirect("employees/".$id."/edit");
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
        $employees=Employees::find($id);
        $employees->delete();
        return redirect('/employees');
    }
}
