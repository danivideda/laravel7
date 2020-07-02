<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function toggleComplete()
    {
        $this->completed = (! $this->completed);
        $this->save();
    }
}
