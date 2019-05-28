@extends('layouts.admin');

@section('content')

    <h2 class="bg-primary text-center">CATEGORIES</h2>
    <div class="col-sm-6">
         {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}

             <div class="form-group">

                 {!! Form::label('name', 'Name:') !!}
                 {!! Form::text('name', null, ['class' => 'form-control']) !!}

             </div>

             <div class="form-group">


                 {!! Form::submit('Create category', ['class'=>'btn btn-primary']) !!}

             </div>

             {!! Form::close() !!}


    </div>

    <div class="col-sm-6">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                </tr>
            </thead>
            <tbody>

            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{'categories/'. $category->id . '/edit'}}">{{Str::limit($category->name,20)}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'date not available'}}</td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>

    </div>

@endsection

{{--@extends('footer');--}}