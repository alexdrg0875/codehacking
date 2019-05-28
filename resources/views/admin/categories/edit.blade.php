@extends('layouts/admin')

@section('content')
    <h2 class="bg-primary text-center">EDIT CATEGORY - {{$category->name}}</h2>

    <div class="row">

        <div class="col-sm-9">

            {{--Form::model($user, recive all user infrmation in form inputs--}}
            {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$category->id]]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">

                {!! Form::submit('Update category', ['class'=>'btn btn-primary col-sm-2']) !!}

            </div>

            {!! Form::close() !!}



            {!! Form::model($category, ['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

            <div class="form-group">

                {!! Form::submit('Delete category', ['class'=>'btn btn-danger col-sm-2']) !!}

            </div>

            {!! Form::close() !!}


        </div>
    </div>

    <div class="row">
        @include('includes.form_error')
    </div>

@endsection

@section('footer')
@endsection