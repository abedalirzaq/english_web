<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Stage;
class Step extends Model
{
    public function stages()
    {
        return $this->hasMany(Stage::class);
    }   
}
