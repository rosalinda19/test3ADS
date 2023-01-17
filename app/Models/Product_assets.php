<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_assets extends Model
{
    use HasFactory;
    protected $primaryKey = "asset_id";
    protected $fillable = ["products_id","image"];
}
