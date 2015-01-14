@extends('main.master')

@section('title')
    Create new user
@stop

@section('contents')
<div class="row">
    <h2 class="text-info">Register new user</h2>
</div>
<div class="row">
    {{Form::open( array('route'=>'users.store','class'=>'form-group'))}}
      <div class="form-group">
           {{Form::label('firstname','Firstname:')}}
           {{Form::text('firstname',null,array('class'=>'form-control'))}}
      </div>
    <div class="form-group">
        {{Form::label('lastname','Lastname:')}}
        {{Form::text('lastname',null,array('class'=>'form-control'))}}
    </div>
    <div class="form-group">

            {{Form::label('phone','Phone:')}}
            {{Form::text('phone',null,array('class'=>'form-control','placeholder'=>'(+255.0000000000)'))}}

    </div>

    <div class="form-group">
        {{Form::label('status','Status:')}}
        {{Form::select('status',array('Active','Blocked'),null,array('class'=>'form-control'))}}
    </div>
    <div class="form-group">
        {{Form::label('profile','Profile:')}}
        {{Form::select('profile',Profile::lists('name','id'),null,array('class'=>'form-control'))}}
    </div>
    <div class="row">

      <div class="col-sm-6">
          <div class="form-group">
             {{Form::submit('Create Now',array('class'=>'btn btn-primary'))}}
           </div>
      </div>

        <div class="col-sm-6">
            <div class="form-group">
                <a href="{{url('users')}}" class="btn btn-danger"> View users </a>
            </div>
        </div>

    </div>

    {{Form::close()}}
</div>
@stop
