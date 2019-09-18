@extends('admin.master')

@section('content')
    <h3>Post</h3>
    @if(count($posts))
        @php $i=0 @endphp
        @foreach($posts as $post)
            @php $i++ @endphp
                <div style="margin-top:0px;" class="bg-{{$i}}"> 
                    <b><a href="/posts/{{$post->id}}" title="{{$post->id}}">{{$post->title}}</a></b>     
                    <p>{!!$post->body!!}</p>             
                </div>
            @php if($i==2) $i=0
            @endphp
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p> 
    @endif
@endsection