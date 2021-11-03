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

                    <form action="{{route('Users.store')}}" method="POST">
                        @csrf

                        <div class="form-row">
                            <div class="col">
                                <label for="inputEmail4">{{ trans('sections.messages-username') }}</label>

                                <input type="text" class="form-control" name="name" >
                            </div>
                            <div class="col">
                                <label for="inputEmail4">{{ trans('sections.messages-email') }}</label>

                                <input type="email" name="email" class="form-control" id="inputEmail4" >
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
                        {{-- <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div> --}}
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
