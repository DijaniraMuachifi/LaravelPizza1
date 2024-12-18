<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyOrders extends Model
{
    use HasFactory;
    protected $table = 'my_orders';
    protected $fillable = ['user_id','order_id'];
}
