
@extends('layouts.master')
@section('css')
@toastr_css

@section('title')
    {{ trans('sections.add_partners') }}
@stop
@endsection
@section('page-header')


<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{ trans('sections.add_partners') }}</h4>
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
                <form action="{{route('Partners.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Name input -->
                    <div class="row">
                      <div class="col-sm">

                        <label class="form-label" for="form4Example1">{{ trans('sections.name_partnert_arabic') }}</label>

                   
                        <input type="text" name="name_ar" id="name_ar" class="form-control" />
                      </div>

                        <div class="col-sm">


                        <label class="form-label" for="form4Example1">{{ trans('sections.name_partnert_english') }}</label>

                        <input type="text"  name="name_en" id="name_en" class="form-control" />
                      </div>
                      <div class="col-sm">


                        <label class="form-label" for="form4Example1">{{ trans('sections.url') }}</label>

                        <input type="text"  name="url" id="url" class="form-control" />
                      </div>



                    </div>
            
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">{{ trans('sections.description_ar') }}</label>
                      <textarea class="form-control" name="topic_ar" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">{{ trans('sections.description_en') }}</label>
                      <textarea class="form-control" name="topic_en" id="exampleFormControlTextarea1" rows="3"></textarea>
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
