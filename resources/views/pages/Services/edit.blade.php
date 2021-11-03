@extends('layouts.master')
@section('css')
@toastr_css

@section('title')
{{ trans('sections.edit_section') }}@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('sections.edit_servic') }}</h4>
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
                <form action="{{route('Servics.update',$Services->id)}}" method="Post">
                  @csrf
                  @method('put')
                  {{-- @method('PUT') --}}
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">{{ trans('Grades_trans.Grade_Arabic_name') }}</label>

                      <input type="text" value="{{$Services->getTranslation('Name', 'ar')}}" name="name_ar" id="name_ar" class="form-control" />
                    </div>
                  
                  <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example1">{{ trans('Grades_trans.Grade_English_name') }}</label>

                        <input type="text"  value="{{$Services->getTranslation('Name', 'en')}}"  name="name_en" id="name_en" class="form-control" />
                      </div>
                   
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form4Example3">{{ trans('Grades_trans.Grade_Arabic_nots') }}</label>

                      <input class="form-control"  value="{{$Services->Notes}}" name="note_ar" id="note_en" rows="4"></textarea>
                    </div> 
                    <div class="form-outline mb-4">
                        <label class="form-label"  for="note_en">{{ trans('Grades_trans.Grade_English_note') }}</label>

                        <input class="form-control"  value="{{$Services->getTranslation('Notes', 'en')}}" name="note_en"  id="note_en" rows="4" value=></textarea>
                      </div> 
                  
                   <div class="col">
                        <label class="form-label"  for="note_en">{{ trans('Grades_trans.name_grade') }}</label>
                                      </label>

                                            <div class="box">
                                                <select class="fancyselect" name="Section_id">
                                                    @foreach ($Section as $Sections)
                                                        <option value="{{ $Sections->id }}">{{ $Sections->Name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
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
