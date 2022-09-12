<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Teacherschedule;

class TeacherController extends Controller
{ 
    public function index()
    {
        return Teacher::all();
    }
 
    public function create()
    {
        
    }
 
    public function store(Request $request)
    {
        $teacher_id = Teacher::create($request->all())->id;
         $timingto = array("8:30","9:15","Break","10:30","11:15" );
         $timingfrom = array("9:15","10:00","Break","11:15","12:00");

         for($i=0; $i<=4; $i++){
           
         $sched = new Teacherschedule;
         $sched->teacher_id = $teacher_id;
         $sched->class = "not assigned";
         $sched->subject = "not assigned";
         $sched->timingto = $timingto[$i];
         $sched->timingfrom = $timingfrom[$i];
         $sched->duration = "45 Minutes";
         $sched->save();

          
        }

         
    }
 
    public function show($id)
    {
        return Teacher::find($id);
    }
 
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $product = Teacher::find($id);
        $product->update($request->all());
        
    }

     
    public function destroy($id)
    {
        Teacher::destroy($id);
        Teacherschedule::where('teacher_id', $id)->delete();
    }
}
