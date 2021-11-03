<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSections;
use Illuminate\Http\Request;
use App\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Sections=Section::all();

        return view('pages.Sections.Sections',compact('Sections'));
    }

   












    public function dashboard()
    {
        
        $Sections=Section::all();
        $contsections=count($Sections);

        return view('dashboard',compact('contsections'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Sections.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     // $newImageName= time().'.'.$request->image->extension();

    //      $newImageName=time() .'-'. $request->name .'.'.$request->image->extension();
     
    //    $request->image->move(public_path('images'),$newImageName);
    public function store(StoreSections $request)


    {
        $validated = $request->validated();

        $filePath ="";

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_new_name = time() .'.'. $image->getClientOriginalExtension();//Getting Image Extension
        $image->move("images/",$image_new_name);
        $filePath = "images/" . $image_new_name;


    }

        $adsection=new Section();

        $adsection->Name = ['en' => $request->name_en, 'ar' => $request->name_ar,];
        $adsection->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar,];
        $adsection->Describe = ['en' => $request->describe_en, 'ar' => $request->describe_ar,];
      $adsection->image_path=$filePath;
        $adsection->save();
        toastr()->success(trans('sections.add_section_sucssfuly'));


        return redirect()->back();






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $SectionsInfo=Section::find($id);
    //     return view('front.sections.detalis',compact('SectionsInfo'));
    // }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Section::find($id);
        return view('pages.Sections.edit',compact('edit'));
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
        $update=Section::find($id);

    
        $update->Name = ['en' => $request->name_en, 'ar' => $request->name_ar,];
        $update->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar,];
        // $update->Name=$request->name;
        // $update->Notes=$request->Notes;
        // $update = Grade::all();
        // $grade=Grade::all();
        // return view('pages.Grades.grades',compact('grade')); 
        $update->update();
        toastr()->success(trans('sections.edit_section_sucssfuly'));


        
     
        return redirect()->route('Sections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delet=Section::find($id)->delete();
        toastr()->success(trans('sections.delete_section_sucssfuly'));
        return redirect()->route('Sections.index');

    }
}
