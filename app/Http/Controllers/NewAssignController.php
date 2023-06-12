<?php

namespace App\Http\Controllers;

use App\Model\Assign;
use App\Model\Role;
use App\Model\Employee;
use App\Model\Department;
use App\Model\RoleDepEmp;
use Illuminate\Http\Request;

class NewAssignController extends Controller
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
        $result = Employee::create([
            'emp_name'=>'Ms.BurmaKyawGyi',
            'emp_ph'=>'123456',
            'emp_pwd'=>'hello123',
            'emp_email'=>'BurmaKyawGyi@gmail.com',
            'emp_address'=>'Yangon',
            'created_by'=>'4',
            'updated_by'=>'3'
        ]);
        // return $result;

        $val = RoleDepEmp::create([
            'role_id'=>'25',
            'department_id'=>'20',
            'employee_id' =>$result->id
        ]);

        $department = Department::create(
            [
                'dep_name'=>'IT',
                'created_by'=>'55',
                'updated_by'=>'49'
            ]
            );
        $value = RoleDepEmp::create([
                'role_id'=>'20',
                'department_id'=>$department->id,
                'employee_id' =>30
        ]);
        
        // $role = Role::create(
        //     [
        //         'role_name'=>'programmer',
        //         'created_by'=>'39',
        //         'updated_by'=>'20'
        //     ]
        //     );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $results = request()->all();
        foreach ($results as $result) {
            $assign = new Assign();
            
            $assign->employee_id = $result['employee_id'];
            $assign->title = $result['title'];
            $assign->start_date = $result['start_date'];
            $assign->end_date = $result['end_date'];
            $assign->progress = $result['progress'];
            $assign->created_by = $result['created_by'];
            $assign->updated_by = $result['updated_by'];
    
            $assign->save();
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
        $department = Department::find($id);
        $department->dep_name = "Update DepName";
        $department->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $delete = Assign::find($id);
        // return $delete;

        // $delete = Employee::join(Assign::where('employee.employee_id','=','assign.id'))
        //         ->where('employee.id',1)
        //         ->delete();
        // // dd($delete);


        $delete = Employee::find($id)->delete();
        $deleteAss = Assign::find($id)->delete(['employee_id'=> '$delete->id']);
        // return $deleteAss;

        // $employee = Employee::find($id)->assigns;
        // $employee->delete();

        

    }
}
