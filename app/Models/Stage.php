<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Step;
class Stage extends Model {
    protected $fillable = ['name'];
    public function step()
    {
        
        return $this->belongsTo(Step::class);
    }
}
