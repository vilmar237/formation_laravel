@extends('layouts.app')
@section('content')
 <h2>creer un formulaire</h2>

 <form method="POST" action="{{ route('post.store') }}">
     @csrf
     <input type="text" name="title" class="border-gray-600 border-2">
     <textarea name="content" id="" cols="30" rows="10"></textarea>
     <button type="submit" class="bg-green-500">creer</button>
 </form>

@endsection