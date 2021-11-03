<?php

namespace App\Http\Controllers\Partners;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePartners;
use App\Partner;
use Doctrine\Inflector\Rules\Patterns;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $Partner=Partner::all();
    return view('pages.Partners.Partners',compact('Partner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Partners.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartners $request)
    {
        // dd($request);

    //    dd($request->all());
        $validated = $request->validated();

        $filePath ="";

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $image_new_name = time() .'.'. $image->getClientOriginalExtension();//Getting Image Extension
        $image->move("images/",$image_new_name);
        $filePath = "images/" . $image_new_name;

    }
        $Partner=new Partner();
        $Partner->url=$request->url;
         $Partner->name=['en' => $request->name_en, 'ar' => $request->name_ar,];
        $Partner->topic =['en' => $request->topic_en, 'ar' => $request->topic_ar,];
        $Partner->image_path=$filePath;


        $Partner->save();
        toastr()->success(trans('sections.add_partners_sucssfuly'));

        return redirect()->route('Partners.index');

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
        $Partner=Partner::find($id);
        return view('pages.Partners.edit',compact('Partner'));
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
        $Partner=Partner::find($id);
        $Partner->name=['en' => $request->name_en, 'ar' => $request->name_ar,];
        $Partner->topic =['en' => $request->topic_en, 'ar' => $request->topic_ar,];
        toastr()->success(trans('sections.edit_partners_sucssfuly'));

        return redirect()->route('Partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $part=Partner::find($id)->delete();
        toastr()->success(trans('sections.delete_partners_sucssfuly'));

        return redirect()->route('Partners.index');
 }
}
