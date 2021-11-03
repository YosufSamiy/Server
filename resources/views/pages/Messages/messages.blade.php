@extends('layouts.master')
@section('css')

@section('title')
{{trans('sections.messages')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> {{trans('sections.messages')}}</h4>
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
                    {{-- <h5 class="card-title border-0 pb-0">Table simple</h5> --}}
                    <div class="table-responsive">
                     <table class="mb-0 table">
                     <thead>
                       <tr>
                      

                        <th>{{ trans('sections.messages-username') }}</th>
                        <th>{{ trans('sections.messages-email') }}</th>
                        <th>{{ trans('sections.messages-phone') }}</th>
                        <th>{{ trans('sections.messages-topic') }}</th>
                     
                       </tr>
                     </thead>
                     <tbody>
                         @foreach ($messsages as $messsage )
                             
                       <tr>
                        <td>{{$messsage->name}}</td>
                        <td>{{$messsage->phone}}</td>
                        <td>{{$messsage->email}}</td>
                         <td>
                             <form action="{{route('Messages.show',$messsage->id)}}" method="GET">

                             <button type="submit" class="btn btn-info">{{ trans('sections.messages-click') }}</button></td>
                            </form>

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

@endsection














