@extends('layouts.master')
@section('css')
<script src="https://kit.fontawesome.com/5d3616e1b4.js" crossorigin="anonymous"></script>
@section('title')
    Classes
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('Grades_trans.classes') }}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Title</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">   

    <div class="col-xl-12 mb-30">     
      <div class="card card-statistics h-100"> 
        <div class="card-body">
            <a href="{{route('Classes.create')}}" type="button" class="btn btn-success"> <i class="fas fa-plus"></i>&nbsp;	{{ trans('Grades_trans.ADD_Classes') }}</a>
            <br>
            <br>

          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered p-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('Grades_trans.classes_name') }}</th>
                    <th>{{ trans('Grades_trans.classes_note') }}</th>
                    <th>{{ trans('Grades_trans.Name_Grade') }}</th>
                    <th>{{ trans('Grades_trans.Acctions_Grade') }}</th>
                 </tr>
            </thead>
            <tbody>
               
                 @foreach ($class as $grade )
                    
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$grade->Name}}</td>
                    <td>{{$grade->Notes}}</td>
                    <td>{{$grade->Grades->Name}}</td>
                    <td>
                          <form action="{{route('Classes.destroy',$grade->id)}}" method="POST">
                            @csrf
                            @method('delete')

                        <a type="submit" href="{{route('Classes.edit',$grade->id)}}" ) class="btn btn-info btn-sm" ><i class="fa fa-edit"></i></a>

                        <button type="submit"   class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>



                         </form>  



                        {{-- <form action="{{route('gard.delete',$grade->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" >

                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        <br>


                        <form action="{{route('Grade.edit',$grade->id)}}" method="GET">

                            <button type="submit"  class="btn btn-info btn-sm" data-toggle="modal"
                                data-target="#edit{{ $grade->id }}"
                                title="{{ trans('Grades_trans.Edit_Garde') }}"><i
                                class="fa fa-edit"></i></button>

                        </form> --}}
                        </td>
                </tr>
                @endforeach

             
               
          
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Notes</th>
                    <th>Acctions</th>
                 
                </tr>
            </tfoot> --}}
            
         </table>
        </div>
        </div>
      </div>   
    </div>
</div> 

<!-- row closed -->
@endsection
@section('js')

@endsection
