<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function first(Request $request)
    {
        $first = DB::table('employes')->where('emp_name','Austyn Kuhic')->first();
        echo $first->emp_name;
    }
    public function get(Request $request)
    {
        $get = DB::table('employes')->get();
        // return view('index',['get'=>$get]);
    }
    public function value(Request $request)
    {
        $value = DB::table('employes')->where('emp_name','Dr. Kennedi Torphy')->value('emp_address');
        return view('index')->with('value', $value);
    }
    public function find(Request $request)
    {
        $find = DB::table('employes')->find(3);
        return view('index',compact('find'));
    }
    public function pluck(Request $request)
    {
        $plucks = DB::table('assign')->pluck('title');
        foreach ($plucks as $pluck) {
            echo $pluck . '<br>';
        }
        return view('index',compact('pluck'));
    }
    public function select(Request $request)
    {
        $select = DB::table('assign')->select('title','emp_id as empId')->get();
        return view('index')->with('select',$select);

        $query = DB::table('assign')->select('title');
        $users = $query->addSelect('start_date')->get();
        return $users;
    }
    public function where(Request $request)
    {
        // $where = DB::table('assign')->where('emp_id',31)->get();
        // $where = DB::table('assign')->where('emp_id','>=',31)->get();
        // $where = DB::table('employes')->where('emp_name','like','A%')->get();
        // $where = DB::table('employes')->where([
        //     ['emp_name','like','A%'],
        //     ['id','>','10'],
        // ])->get();
        // $where = DB::table('employes')
        //         ->where('id', '>', 20)
        //         ->orWhere('emp_name', 'Prof. Aidan O\'Kon')
        //         ->get();
        // $where = DB::table('employes')
        // ->whereBetween('id', [1, 20])
        // ->get();
        // $where = DB::table('employes')
        // ->whereNotBetween('id', [1, 20])
        // ->get();
        // $where = DB::table('employes')
        // ->whereIn('id', [1, 2, 3])
        // ->get();
        // $where = DB::table('employes')
        // ->whereNotIn('id', [1, 2, 3])
        // ->get();
        // $where = DB::table('employes')
        // ->whereNull('updated_at')
        // ->get();
        // $where = DB::table('employes')
        // ->whereNotNull('updated_at')
        // ->get();
        // $where = DB::table('employes')
        //         ->whereDate('created_at','2023-06-08')
        //         ->get();
        // $where = DB::table('employes')
        //         ->whereMonth('created_at','06')
        //         ->get();
        // $where = DB::table('employes')
        //         ->whereDay('created_at','08')
        //         ->get();
        // $where = DB::table('employes')
        //         ->whereYear('created_at','2023')
        //         ->get();
        // $where = DB::table('employes')
        //         ->whereTime('created_at','=','04:43:55')
        //         ->get();
        $where = DB::table('employes')
                ->whereColumn('created_at','>','updated_at')
                ->get();
        return view('index',compact('where',$where));
    }
    public function order(Request $request)
    {
        // $order = DB::table('employes')
        //         ->orderBy('emp_name','desc')->get();

        // $order = DB::table('employes')->latest('created_at')->get();

        // $order = DB::table('employes')->inRandomOrder('id')->get();

        // $order = DB::table('employes')->orderBy('emp_name');
        // $orders = $order->reorder()->get();

        // $query = DB::table('employes')->orderBy('emp_name');
        // $querys = $query->reorder('id', 'desc')->get();

        // $users = DB::table('employes')
        //     ->groupBy('id')
        //     ->having('id', '>', 20)
        //     ->get();

        $users = DB::table('employes')
            ->groupBy('id', 'emp_name')
            ->having('id', '>', 40)
            ->get();


        return view('index',compact('users',$users));
    }

    public function join()
    {
        // $join = DB::table('employes')
        //         ->join('assign','employes.id','=','assign.id')
        //         ->select('employes.*')
        //         ->get();

        $join = DB::table('employes')
                ->leftJoin('assign','employes.id','=','assign.emp_id')
                ->get();

        // return view('index',compact('join',$join));

        // $join = DB::table('employes')
        //         ->rightJoin('assign','employes.id','=','assign.id')
        //         ->get();

        // Cross Join Clause
        // $join = DB::table('employes')
        //         ->crossJoin('assign')
        //         ->get();

        //Advanced Join Clauses
        // $result = DB::table('employes')
        //         ->join('assign', function ($join) {
        //             $join->on('employes.id', '=', 'assign.emp_id');
        //         })->get();
        

        // $result = DB::table('employes')
                // ->join('assign', function ($join) {
                //     $join->on('employes.id', '=', 'assign.emp_id')
                //         ->where('employes.id','=',40);
                // })->get();

            
        // Subquery Joins
        $user = DB::table('employes')
                ->select('id', DB::raw('MAX(created_at) as last_post_created_at'))
                ->where('emp_name', 'Prof. Aidan O\'Kon')
                ->groupBy('id');
        $users = DB::table('assign')
                ->leftJoinSub($user, 'latest_posts', function ($join) {
                $join->on('assign.id', '=', 'latest_posts.id');
                })->get();
        return view('index',compact('users',$users));
    }


}
