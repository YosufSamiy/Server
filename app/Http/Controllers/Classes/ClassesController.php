<?php

namespace App\Http\Controllers\Classes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Grade;
use App\Classroom;


class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class=Classroom::all();
        $Grades = Grade::all();
        
        return view('classes.classes',compact('class','Grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $grade=Grade::all();
        return view('classes.create',compact('grade'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classes=new Classroom();
        $classes->Name = ['en' => $request->name_en, 'ar' => $request->name_ar,];
    $classes->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar,];
    $classes->Grade_id =$request->Grade_id;

    $classes->save();

    return redirect()->back();
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Classroom::find($id);
        $Grades = Grade::all();


        return view('classes.edit',compact('edit','Grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cals=Classroom::find($id);
        $cals->Name = ['en' => $request->name_en, 'ar' => $request->name_ar,];
        $cals->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar,];
        $cals->Grade_id =$request->Grade_id;
        $cals->update();
 
        return redirect()->back();    
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delet=Classroom::find($id)->delete();
        return redirect()->back();    

        //
    }
}
