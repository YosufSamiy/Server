<?php 
namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

    $grade=Grade::all();
    return view('pages.Grades.grades',compact('grade'));
    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {

    return view('pages.Grades.create');
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {

    $garde=new Grade();

    $garde->Name = ['en' => $request->name_en, 'ar' => $request->name_ar,];
    $garde->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar,];
    // / $garde->Name =$request->name_ar;
    //  $garde->Notes =$request->note;

    //   dd($request);


    //   $translations=[
    //    'en'=>$request->name_en,
    //  'ar'=>$request->name_ar
    //  ];

    
    // $translationss=[
    //   'en'=>$request->note_en,
    //   'ar'=>$request->note_ar
    // ];

    //  $garde->setTranslations('Name', $translations);
    // $garde->setTranslations('Notes', $translationss);
    
      $garde->save();

      return redirect()->back();
    


    
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $edit=Grade::find($id);

    return view('pages.Grades.edit',compact('edit'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request , $id)
  {

    $update=Grade::find($id);

    
    $update->Name = ['en' => $request->name_en, 'ar' => $request->name_ar,];
    $update->Notes = ['en' => $request->note_en, 'ar' => $request->note_ar,];
    // $update->Name=$request->name;
    // $update->Notes=$request->Notes;
    // $update = Grade::all();
    // $grade=Grade::all();
    // return view('pages.Grades.grades',compact('grade')); 
    $update->update();
 
    return redirect()->back();
  

    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    $Grades = Grade::findOrFail($request->id)->delete();
    return redirect()->back();

    
  }

  public function delete($id)
  {
    $Grades = Grade::find($id);

    $Grades->delete();
    $Grades = Grade::all();
    return redirect()->back();

    
  }



  
}

?>