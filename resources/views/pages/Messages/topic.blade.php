@extends('layouts.master')
@section('css')

@section('title')
    {{ trans('sections.messages-topic') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">     {{ trans('sections.messages-topic') }}
            </h4>
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

            <div class="table-responsive">
                <table class="mb-0 table">
                <thead>
                  <tr>
                 

                   <th>{{ trans('sections.messages-username') }}</th>
                   <th>{{ trans('sections.messages-email') }}</th>
                   <th>{{ trans('sections.messages-phone') }}</th>
                   {{-- <th>{{ trans('sections.messages-topic') }}</th> --}}
                
                  </tr>
                </thead>
                <tbody>
                    
                        
                  <tr>
                   <td>{{$messsag->name}}</td>
                   <td>{{$messsag->email}}</td>
                   <td>{{$messsag->phone}}</td>
                    

                  </tr>
                </tbody>
            </table>
            <br>
                 <h4> &nbsp;	{{ trans('sections.messages-topic') }}</h4>

                 &nbsp;	<h5>&nbsp;<div>	{{$messsag->topic}}<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div></h5>


                 
             
             {{-- <thead>
                <tr>
               

                 <th>{{ trans('sections.messages-username') }}</th>
                 <th>{{ trans('sections.messages-email') }}</th>
                 <th>{{ trans('sections.messages-phone') }}</th>
                 {{-- <th>{{ trans('sections.messages-topic') }}</th> --}}
{{--               
                </tr>
              </thead>
              <tbody>
                 
                <tr>
                 <td>{{$messsag->name}}</td>
                 <td>{{$messsag->phone}}</td>
                 <td>{{$messsag->email}}</td>
                    
                </tbody>
            </table> --}} 
                {{-- <p>{{$messsag->Topic}}<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p> --}}
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
