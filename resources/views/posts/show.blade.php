@extends('admin.master')
@section('content')
    <a href="/posts" class="badge badge-primary">Go back</a>
    <h3>{!! $post->title !!}</h3>
    <div style="margin-top:0px;" class="bg-2">    
        <p>{!! $post->body !!}</p>             
    </div>
    <hr>
    <small>written on {{$post->created_at}}</small>
    <hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open('action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection