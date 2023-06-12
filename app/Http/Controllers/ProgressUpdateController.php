<?php

namespace App\Http\Controllers;

use App\Model\Assign;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ProgressUpdateController extends Controller
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
    public function show(Request $request)
    {   
        $currentDateTime = Carbon::now();
        $assign = Assign::where('employee_id','=','40')
                        ->where('start_date','>','end_date')
                        ->where('start_date', '<', $currentDateTime)
                        ->where('end_date','<',$currentDateTime)
                        ->where('progress','<','100')
                        ->get();
        return $assign;
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
        $assign = new Assign();
        $assign->employee_id = $request->employee_id;
        $assign->title = $request->title;
        $assign->start_date = $request->start_date;
        $assign->end_date = $request->end_date;
        $assign->progress = $request->progress;
        $assign->created_by = $request->created_by;
        $assign->updated_by = $request->updated_by;
        $assign->save();
        
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
}
// $model = Assign::where('progress', '>', 55)->firstOr(function () {
//     return   Assign::whereYear('end_date','2023')->first();
// });