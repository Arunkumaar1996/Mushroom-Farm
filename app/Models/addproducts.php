<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addproducts extends Model
{
    use HasFactory;
    protected $table="addproduct";
    protected $fillable=['Category','productName','weight','price','discount','description','image_url1','image_url2','image_url3'];
}
