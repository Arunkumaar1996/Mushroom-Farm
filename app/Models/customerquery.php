<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerquery extends Model
{
    use HasFactory;
    protected $table="customerqueries";
    protected $fillable=['customerName','email','contactNo','websiteRating','customerComment'];
}
