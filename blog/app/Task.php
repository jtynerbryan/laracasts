<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query) // allows us to call Task::incomplete()

    {
        return $query->where('completed', 0);
    }

    public function scopeComplete($query)
    {
        return $query->where('completed', 1);
    }
}
