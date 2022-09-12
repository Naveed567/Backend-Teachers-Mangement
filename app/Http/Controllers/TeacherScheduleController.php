<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacherschedule;

class TeacherScheduleController extends Controller
{
     
    public function index()
    {
        
     }

    
    public function create()
    {
        
    }
 
    public function store(Request $request)
    { 
        
            $teacher->update($request->all());
       
    }
 
    public function show($id)
    {
        return Teacherschedule::all()->where('teacher_id' , $id);
    }

     
    public function edit($id)
    { 
        
    }
 
    public function update(Request $request, $id)
    {
        $teacher = Teacherschedule::find($id);
        $teacher->update($request->all());
    }
 
    public function destroy($id)
    {
        //
    }
}
