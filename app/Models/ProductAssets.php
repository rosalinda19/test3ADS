<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAssets extends Model
{
    use HasFactory;
    protected $primaryKey = "assets_id";
    protected $fillable = ["product_id","image"];
}
