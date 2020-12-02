<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    protected $fillable = ['name'];

    public static function addItem($name)
    {
        return self::create(['name' => $name,]);
    }
}
