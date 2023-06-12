<?php

namespace App\DBTransactions\Assign;

use App\Classes\DBTransaction;
use App\Model\Assign;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Config;

/**
 * 
 * 
 * @author  
 * @create  
 */
class SaveAssign extends DBTransaction
{       
        private $request;
        public function __construct($request)
        {
           $this->request = $request; 
        }
        public function process()
        {
            // dd('hi');
            $request = $this->request;
           
            $assign = new Assign();
            $assign->employee_id = $request->employee_id;
            $assign->title = $request->title;
            $assign->start_date = $request->start_date;
            $assign->end_date = $request->end_date;
            $assign->progress = $request->progress;
            $assign->save();
            // dd($assign);
            // if(!$assign) {
            //     return ['status' =>false,'error'=>'Failed!'];
            // }
            return ['status' =>true,'error'=>''];
        }
}