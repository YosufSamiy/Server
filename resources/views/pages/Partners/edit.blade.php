@extends('layouts.master')
@section('css')
@toastr_css


@section('title')
    {{ trans('sections.edit_partners') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('sections.edit_partners') }}</h4>
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
                <form action="{{route('Partners.update',$Partner->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <!-- Name input -->
                    <div class="row">
                      <div class="col-sm">

                        <label class="form-label" for="form4Example1">{{ trans('sections.name_partnert_arabic') }}</label>

                   
                        <input type="text"  value="{{$Partner->getTranslation('name', 'ar')}}" name="name_ar" id="name_ar" class="form-control" />
                      </div>

                        <div class="col-sm">


                        <label class="form-label" for="form4Example1">{{ trans('sections.name_partnert_english') }}</label>

                        <input type="text"  name="name_en" value="{{$Partner->getTranslation('name', 'en')}}" id="name_en" class="form-control" />
                      </div>
                      <div class="col-sm">


                        <label class="form-label" for="form4Example1">{{ trans('sections.url') }}</label>

                        <input type="text"  name="url" id="url" value="{{$Partner->url}}" class="form-control" />
                      </div>
                    </div>
                    {{-- <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">{{ trans('Grades_trans.Grade_Arabic_name') }}</label>

                      <input type="text" name="name_ar" id="name_ar" class="form-control" />
                    </div>
                  
                  <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">{{ trans('Grades_trans.Grade_English_name') }}</label>

                        <input type="text"  name="name_en" id="name_en" class="form-control" />
                      </div> --}}
                   
                  
                    <!-- Message input -->

                    {{-- <div class="row">
                      <div class="col-sm">

                      <label class="form-label" for="form4Example3">{{ trans('Grades_trans.classes_Arabic_nots') }}</label>

                      <textarea class="form-control" name="topic_ar" id="topic_ar" rows="4"></textarea>
                    </div> 
                    <div class="col-sm">
                      <label class="form-label"  for="note_en">{{ trans('Grades_trans.classes_English_note') }}</label>

                        <textarea class="form-control"  name="topic_ar"  id="topic_en" rows="4"></textarea>
                      </div> 
                    </div> --}}
                    {{-- <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">{{ trans('Grades_trans.Grade_Arabic_nots') }}</label>

                      <textarea class="form-control" name="note_ar" id="note_en" rows="4"></textarea>
                    </div> 
                    <div class="form-outline mb-4">
                        <label class="form-label"  for="note_en">{{ trans('Grades_trans.Grade_English_note') }}</label>

                        <textarea class="form-control"  name="note_en"  id="note_en" rows="4"></textarea>
                      </div>  --}}
                  
                    <!-- Checkbox -->
                    {{-- <div class="form-check d-flex justify-content-center mb-4">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value=""
                        id="form4Example4"
                        checked
                      />
                      <label class="form-check-label" for="form4Example4">
                        Send me a copy of this message
                      </label>
                    </div> --}}
                  
                    <!-- Submit button -->
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">{{ trans('sections.description_ar') }}</label>
                      <input class="form-control" value="{{$Partner->getTranslation('topic', 'ar')}}"  name="topic_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">{{ trans('sections.description_en') }}</label>
                      <input class="form-control" value="{{$Partner->getTranslation('topic', 'en')}} "name="topic_en"  id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">{{ trans('sections.Uplaod') }}</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
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
