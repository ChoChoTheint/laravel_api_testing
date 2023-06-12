<?php

namespace App\Http\Controllers;

use App\Model\Assign;
use App\Model\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$search)
    {   
        $data = DB::table('employes')
            ->join('assign', 'employes.id', '=', 'assign.employee_id')
            ->join('role_dep_emps', 'assign.id', '=', 'role_dep_emps.employee_id');
            return Employee::search($request->search)->get();


           
            // return Employee::where('emp_name', 'LIKE', "%$emp_name%");
        
        // if($request->emp_name){
        //     $emp_name = $request->emp_name;
        //     return Employee::where('emp_name', 'LIKE', "%$emp_name%");
        // }
        
        
            // if ($search) {
        //     $emp_name = $request->input('emp_name');
        //     $getName = Employee::where('emp_name', 'LIKE', "%$emp_name%");
        
           
        // }
        // return $getName;
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
    public function search($name)
    {
        $empName = Employee::where('emp_name', 'LIKE', "%$name%")->get();
        return $empName;
    }
}
