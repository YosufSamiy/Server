@extends('layouts.master')
@section('css')
@toastr_css


@section('title')
    {{ trans('sections.add_section') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
     
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('sections.add_section') }}</h4>
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
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

                <form action="{{route('Sections.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name input -->
                    <div class="row">
                      <div class="col-sm">

                        <label class="form-label" for="form4Example1">{{ trans('sections.name_service_arabic') }}</label>

                   
                        <input type="text" name="name_ar" id="name_ar" class="form-control"  />
                      </div>

                        <div class="col-sm">


                        <label class="form-label" for="form4Example1">{{ trans('sections.name_service_English') }}</label>

                        <input type="text"  name="name_en" id="name_en" class="form-control"  />
                      </div>
                    </div>
                  
                  
                    <!-- Message input -->

                    <div class="row">
                      <div class="col-sm">

                      <label class="form-label" for="form4Example3">{{ trans('Grades_trans.classes_Arabic_nots') }}</label>

                      <textarea class="form-control" name="note_ar" id="note_en" rows="4" ></textarea>
                    </div> 
                    <div class="col-sm">
                      <label class="form-label"  for="note_en">{{ trans('Grades_trans.classes_English_note') }}</label>

                        <textarea class="form-control"  name="note_en"  id="note_en" rows="4" ></textarea>
                      </div> 
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">{{ trans('sections.description_ar') }}</label>
                      <textarea class="form-control" name="describe_ar" id="exampleFormControlTextarea1" rows="3" ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">{{ trans('sections.description_en') }}</label>
                      <textarea class="form-control" name="describe_en" id="exampleFormControlTextarea1" rows="3" ></textarea>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">{{ trans('sections.Uplaod') }}</span>
                      </div>
                      
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">{{ trans('sections.Choses_images') }}</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                  </form>            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
