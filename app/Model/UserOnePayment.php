<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserOnePayment extends Model
{
    protected $table = 'user_one_payment';
    protected $fillable = ['payment_type','provider','account_no'];
}
