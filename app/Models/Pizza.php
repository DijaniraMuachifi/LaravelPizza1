<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table="pizza";
    protected $primaryKey = 'pname';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['pname', 'categoryname','vegetarian'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryname', 'cname');
    }
}
