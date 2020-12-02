<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'name',
        'content',
    ];

    public function getDateFormat()
    {
        return 'Y-m-d H:i:s.u';
    }
}
