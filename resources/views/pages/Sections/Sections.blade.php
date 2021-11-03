@extends('layouts.master')
@section('css')
@toastr_css

<script src="https://kit.fontawesome.com/5d3616e1b4.js" crossorigin="anonymous"></script>
@section('title')
{{ trans('sections.sections') }}

@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{ trans('sections.list_section') }}</h4>
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
            <a href="{{route('Sections.create')}}" type="button" class="btn btn-success"> <i class="fas fa-plus"></i>&nbsp;	{{ trans('sections.add_section') }}</a>
            <br>
            <br>


          <div class="table-responsive">
          <table id="datatable" class="table table-striped table-bordered p-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('sections.name_section') }}</th>
                    <th>{{ trans('sections.notes_section') }}</th>
                    <th>{{ trans('sections.acctions_section') }}</th>
                 </tr>
            </thead>
            <tbody>
               
                @foreach ($Sections as $Sections )
                    
                <tr>
                    <td>{{$loop->index}}</td>
                    <td>{{$Sections->Name}}</td>
                    <td>{{$Sections->Notes}}</td>
                    <td>
                         <form action="{{route('Sections.delete',$Sections->id)}}" method="POST">
                            @csrf
                            @method('delete')

                        <a type="submit" href="{{route('Sections.editt',$Sections->id)}}" ) class="btn btn-info btn-sm" ><i class="fa fa-edit"></i></a>

                        <button type="submit"   class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>



                         </form> 


                        </td>
                </tr>
                @endforeach

             
               
          
            </tbody>
          
            
         </table>
        </div>
        </div>
      </div>   
    </div>
</div> 

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
