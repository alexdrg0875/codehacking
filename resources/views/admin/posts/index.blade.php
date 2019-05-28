@extends('layouts.admin')


@section('content')

    <h2 class="bg-primary text-center">POSTS</h2>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>
                        <a href="{{'posts/'. $post->id . '/edit'}}">
                            <img height="50" src="{{$post->photo ? $post->photo->path : '/images/post_default.jpg'}}" alt="post photo">
                        </a>
                    </td>
                    <td><a href="{{'posts/'. $post->id . '/edit'}}">{{Str::limit($post->title,20)}}</a></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td>{{Str::limit($post->body,30)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection

@section('footer')
@endsection