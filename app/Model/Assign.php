<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assign extends Model
{   
    use SoftDeletes;

    protected $table = 'assign';

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
