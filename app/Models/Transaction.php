<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = ['user_id', 'order_sn', 'transfer_amount', 'ip', 'status', 'remark'];
}
