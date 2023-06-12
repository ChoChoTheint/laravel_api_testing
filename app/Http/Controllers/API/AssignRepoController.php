<?php

namespace App\Http\Controllers\API;

use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Interfaces\AssignInterface;
use App\Http\Controllers\Controller;
use App\DBTransactions\Assign\SaveAssign;
use App\DBTransactions\Assign\DeleteAssign;
use App\DBTransactions\Assign\UpdateAssign;

class AssignRepoController extends Controller
{
    use ResponseAPI;
    protected $assignInterface;

    public function __construct(AssignInterface $assignInterface)
    {
        $this->assignInterface = $assignInterface;
    }
    // public function index(Request $request)
    // {
    //     try{
    //         $assign = $this->assignInterface->getAllAssign();
    //         if(!$assign) return $this->error("No user Data",400);
    //         $save = new SaveAssign();
    //         $save = $save->save($request);
    //         if($save['success'] == true){
    //             return $this->success("success",$save);
    //         }else{
    //             return $this->error("error",404);
    //         }
    //     }catch(\Exception $e){
    //         return $this->error("error",404);
    //     }
    // }
    public function store(Request $request)
    {
        try{
            $save = new SaveAssign($request);
            $save = $save->executeProcess();
           
            if($save){
                return $this->success("success",$save);
            }else{
                return $this->error("error",404);
            }
        }catch(\Exception $e){
            return $this->error("error",404);
        }
    }
    public function update(Request $request,$id)
    {

        try{
            $assign = $this->assignInterface->getUserById($id);
            if(!$assign) return $this->error("No user Data",400);
            $save = new UpdateAssign();
            $save = $save->update($request,$id);
            if($save['success'] == true){
                return $this->success("success",$save);
            }else{
                return $this->error("error",404);
            }
        }catch(\Exception $e){
            return $this->error("error",404);
        }
    }
    public function delete(Request $request,$id)
    {

        try{
            $assign = $this->assignInterface->getUserById($id);
            if(!$assign) return $this->error("No user Data",400);
            $save = new DeleteAssign();
            $save = $save->delete($request,$id);
            if($save['success'] == true){
                return $this->success("success",$save);
            }else{
                return $this->error("error",404);
            }
        }catch(\Exception $e){
            return $this->error("error",404);
        }
    }
}
