<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Step;
class StepController extends Controller
{
    function test(Request $request) {
        $id = $request->query("id");
        $step = Step::find($id);
        
        if ($step) {
            // إذا تم العثور على Step، يمكننا إنشاء مرحلة جديدة
            return $step->stages;
        } else {
            // في حالة عدم العثور على Step بالمعرف 1
            return response()->json(['error' => 'Step not found'], 404);
        }
        
    }
    function show(){
        $step = Step::find(65);
        return $step->stages;

    }

}
