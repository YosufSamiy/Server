<?php

namespace App\Http\Controllers;

use App\Message;
use App\Partner;
use App\Section;
use App\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          
        $Sections=Section::all();
        $Service=Service::all();
        $Messges=Message::all();
        $Partner=Partner::all();


        $contpartner=count($Partner);
        $contsections=count($Sections);
        $contservice=count($Service);
        $contmessges=count($Messges);

        return view('dashboard',compact('contsections','contservice','contmessges','contpartner'));
    }

    public function home()
    {
        $Partner=Partner::all();

        $sections=Section::all();
        $sectio=Section::all();

        $Service=Service::where('BestServis', 0)->get();;

        return view('front.home',compact('sections','Service','Partner','sectio'));
    }

    public function sections()
    {
        $sections=Section::all();
        return view('front.home',compact('sections'));
    } 
    public function about()
    {
        return view('front.about-us',);

    }   
     public function detalis($id)
    {
        $detalis=Partner::find($id);
        return view('front.partners.detalis',compact('detalis'));
    }

  public function SectionsInfo($id)
    {
        $SectionsInfo=Section::findOrFail($id);
        return view('front.sections.detalis',compact('SectionsInfo'));
    }

    public function storeMessage(Request $request)
    {
        



            $contact=new Message();
            $contact->name=$request->name;
            $contact->email=$request->email;
            $contact->phone=$request->phone;
            $contact->topic=$request->topic;
            $contact->save();
            return redirect()->back()->with('contact', trans('sections.contactmessage'));


    
    
}


public function getService($id)
{
    $getService=Section::findOrFail($id);
    $allServis=$getService->servies;
    // $Sectios=$allServis->Sectio;

    return view('front.showDitalis.detalis',compact('allServis','getService'));

}




}