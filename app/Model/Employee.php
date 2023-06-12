<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    protected $table = 'employes';
    protected $guarded = [];

    use SoftDeletes;

    public function assigns()
    {
        return $this->hasMany(Assign::class);
    }



}
