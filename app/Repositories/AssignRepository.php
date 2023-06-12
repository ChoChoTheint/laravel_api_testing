<?php

namespace App\Repositories;

use App\Models\Task;
use App\Model\Assign;
use App\Interfaces\AssignInterface;
use Illuminate\Testing\Assert;

class AssignRepository implements AssignInterface
{
    public function getAllAssign()
    {
        $assign = Assign::all();
        return $assign;
    }
    public function getUserById($id)
    {
        return Assign::find($id);
    }
    // public function deleteAssign($id)
    // {
    //     return Assign::find($id);
    // }
    
    
}