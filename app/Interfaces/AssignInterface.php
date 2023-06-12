<?php

namespace App\Interfaces;
use App\Http\Requests\UserRequest;

interface AssignInterface{
    public function getAllAssign();
    public function getUserById($id);
    // public function deleteAssign($id);
    // public function requestAssign();
    // public function updateAssign();

}