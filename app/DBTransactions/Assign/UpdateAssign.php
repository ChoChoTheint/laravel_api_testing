<?php

namespace App\DBTransactions\Assign;

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
class UpdateAssign
{
          public function update($request,$id){
                    
                    DB::beginTransaction();
                    try {
                        Assign::where('id',$id)->update(['title'=>$request->title]);
                        DB::commit();
                        return['success'=>true];
                    } catch(\Exception $e) {
                        DB::rollBack();
                        return['success'=>false];
                       
                    }   
          }

}