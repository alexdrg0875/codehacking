@extends('layouts.admin')


@section('content')

    <h2 class="bg-primary text-center">CREATE POST</h2>
    <div class="row">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id',['' => 'Choose category'] + $categories, null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows' => 7]) !!}
        </div>

        {{--{!! Form::hidden('user_id', '0', ['class'=>'form-control']) !!}--}}


        <div class="form-group">

            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

        </div>

        {!! Form::close() !!}

    </div>
    <div class="row">

        @include('includes.form_error')

    </div>
@endsection

@section('footer')
@endsection