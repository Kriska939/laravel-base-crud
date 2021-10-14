<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // campi "fillabili": 

    protected $fillable = ["title", "series", "price", "sale_date", "thumb", "description"];
}
