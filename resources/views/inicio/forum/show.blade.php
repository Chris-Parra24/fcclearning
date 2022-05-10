@extends('layouts.template')
{{-- @section('title', 'Foro'.'|'.$forums[0]->category) --}}
@section('title', 'Foro')
@section('content')
    <div class="">
        @foreach ($forums as $item)
            <h1><a href="{{route('forum.show.item',[$item->category,$item->id])}}">{{$item->title}}</a></h1>
            <h2>{{$item->id}}</h2>
            <h3>{{$item->description}}</h3>
        @endforeach
    </div>
@endsection