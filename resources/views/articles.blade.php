@extends('layouts.app')
@section('content')


<h1>
    les articles our la formations </h1>

@foreach($posts as $post)
@if($posts->count()>0)
<h3>
    <a href="{{route('post.show',['id'=>$post->id]) }}">{{ $post->title }}</a>
</h3>
@else
<h3>pas de posts a vous afficher</h3>
@endif
@endforeach
@endsection