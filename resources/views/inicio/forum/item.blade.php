@extends('layouts.template')
{{-- @section('title', 'Foro'.'|'.$forums[0]->category) --}}
@section('title', 'Foro')
@section('content')
    <div class="" style="height: 100%">
       <h1>foro: {{$forum->title}}</h1>
       @foreach ($replies as $item)
           <h2>{{$item->description}}</h2>
       @endforeach
    </div>
@endsection