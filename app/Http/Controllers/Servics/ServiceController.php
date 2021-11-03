<?php

namespace App\Http\Controllers\Servics;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServices;
use App\Section;
use Illuminate\Http\Request;
use App\Service;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services=Service::all();
        return view('pages.Services.Services',compact('Services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Sections=Section::all();
        return view('pages.Services.create',compact('Sections'));

    }

  


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServices $request)
    {

        
        $validated = $request->validated();

        $filePath ="";

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_new_name = time() .'.'. $image->getClientOriginalExtension();//Getting Image Extension
        $image->move("images/",$image_new_name);
        $filePath = "images/" . $image_new_name;

    }

        $adsection=new Service();
  
        
        $adsection->Name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $adsection->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar];
         $adsection->Describe = ['en' => $request->describe_en, 'ar' => $request->describe_ar];
         $adsection->Section_id=$request->Section_id;
         $adsection->BestServis=0;
         $adsection->image_path=$filePath;
        $adsection->save();
        toastr()->success(trans('sections.add_service_sucssfuly'));


        return redirect()->route('Servics.index');;
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
        $Services=Service::find($id);
        $Section=Section::all();
        return view('pages.Services.edit',compact('Services','Section'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {        $Service=Service::find($id);

        $Service->Name = ['en' => $request->name_en, 'ar' => $request->name_ar];
        $Service->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar];
         $Service->Describe = ['en' => $request->describe_en, 'ar' => $request->describe_ar];
         $Service->Section_id=$request->Section_id;
         $Service->update();
        //  $Services=Service::all();
        toastr()->success(trans('sections.edit_section_sucssfuly'));


         return redirect()->route('Servics.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Service::find($id)->delete();
        toastr()->error(trans('sections.delete_service_sucssfuly'));
        return redirect()->route('Servics.index');


    }
}
