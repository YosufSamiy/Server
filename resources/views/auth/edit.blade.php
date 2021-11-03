@extends('layouts.master')
@section('css')

@section('title')
{{ trans('sections.add-modratoes') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            {{ trans('sections.add-modratoes') }}
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
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <form action="{{route('Users.update',$user->name)}}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-row">
                            <div class="col">
                                <label for="inputEmail4">{{ trans('sections.messages-username') }}</label>

                                <input type="text"  class="form-control" name="name" value="{{$user->name}}  "id="inputEmail4" >
                            </div>
                            <div class="col">
                                <label for="inputEmail4">{{ trans('sections.messages-email') }}</label>

                                <input type="email" value="{{$user->email}}" name="email" class="form-control" id="inputEmail4" >
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">{{ trans('sections.options') }}</label>
                                <select id="inputState" class="form-control" name="roles">
                                    <option selected="">{{ trans('sections.Choses') }}</option>
                                    <option value="0">{{ trans('sections.full-options') }}</option>
                                    <option value="1">{{ trans('sections.not-options') }}</option>
                                </select>
                            </div>







                            <div class="form-group col-md-6">
                                <label for="inputPassword4">{{ trans('sections.Password') }}</label>
                                <input type="password"  name="password" class="form-control" id="inputPassword4" >
                            </div>
                        </div>
                   
                        <button type="submit" class="btn btn-primary">            {{ trans('sections.add-modratoes') }}
                        </button>
                    </form>
                </div>            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
