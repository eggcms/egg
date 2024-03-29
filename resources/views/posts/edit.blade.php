@extends('admin.master')

@section('content')
    <h3>Edit Post</h3>
    {{ Form::open(['action' => ['PostController@update',$post->id], 'method' => 'POST']) }}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class'=>'form-control','placeholder'=>'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('title', 'Body') }}
        {{ Form::textarea('body',$post->body,['id' => 'article-ckeditor', 'class'=>'form-control','placeholder'=>'Body text']) }}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {{ Form::close() }}
@endsection