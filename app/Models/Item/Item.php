<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $guarded = ['id'];
    public $table = 'item';
}