@extends('layouts.master')
@section('css')

@section('title')
    {{ trans('sections.modratoes') }}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    
    <div class="row">
        <div class="card-body">
            <a href="{{route('Users.create')}}" type="button" class="btn btn-success"> <i class="fas fa-plus"></i>&nbsp;	{{ trans('sections.add-modratoes') }}</a>
            <br>
            <br>
        <div class="table-responsive">
            <table class="mb-0 table">
            <thead>
              <tr>
             

               <th>{{ trans('sections.messages-username') }}</th>
               <th>{{ trans('sections.messages-email') }}</th>
               <th>{{ trans('sections.options') }}</th>
               <th>{{ trans('sections.acctions') }}</th>
            
              </tr>
            </thead>
            <tbody>
                @foreach ($user as $users )
                    
              <tr>
               <td>{{$users->name}}</td>
               <td>{{$users->email}}</td>

               <td>@if ($users->full_options==0)
                {{ trans('sections.full-options') }}

                @else
                {{ trans('sections.not-options') }}


                
                   
               @endif</td>
                <td>
                    <form action="{{route('Users.destroy',$users->id)}}" method="GET">
                      @csrf
                      @method('delete')
                      <a class="pr-2" href="{{route('Users.edit',$users->id)}}"> <i class="fa fa-pencil"></i></a>
                       <button type="submit" > <i class="fa fa-trash-o text-danger"></i></button>              


                    {{-- <button type="submit" class="btn btn-info">{{ trans('sections.messages-click') }}</button></td> --}}
                   </form> 
                   <td>
                   	
              </tr>

              @endforeach
              

             
            </tbody>
          </table>
          </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
