@extends('layouts.template')
{{-- @section('title', 'Foro'.'|'.$forums[0]->category) --}}
@section('title', 'Foro')
@section('content')
    <div class="container">
       <div class="card my-3">
                <div class="card-header"><h1>{{$forum->title}}</h1></div>
                <div class="card-body d-flex">
                    <a href="javascript:void(0)" class="card-link px-3 text-decoration-none">
                        <img
                          src="https://bootdey.com/img/Content/avatar/avatar1.png"
                          class="rounded-circle"
                          width="70"
                          alt="User"
                        />
                        <small class="d-block text-center text-muted"
                          >{{$user->name}}</small
                        >
                      </a>
                    <div class="d-flex flex-column">
                        {{-- <h1>{{$forum->title}}</h1> --}}
                        <p class="px-3">{{$forum->description}}</p>
                        <div class="d-flex">
                            <small class="text-muted mx-3 ">Publicado: {{$forum->created_at}}</small>
                            <small class="text-muted mx-3">Modificado: {{$forum->updated_at}}</small>
                        </div>
                    </div>
                </div>
       </div>
       <div><h4>Respuestas:</h4></div>
       <div class="d-flex flex-column mb-3">
           @php
            $i=0;
           @endphp
           @foreach ($replies as $item)
               {{-- <h2>{{$item->description}}</h2> --}}
               <div class="card mb-2">
                    {{-- <div class="card-header"><h2>{{$item->description}}</h2></div> --}}
                        <div class="card-body d-flex">
                            <a href="javascript:void(0)" class="card-link px-3 text-decoration-none">
                                <img
                                  src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                  class="rounded-circle"
                                  width="70"
                                  alt="User"
                                />
                                <small class="d-block text-center text-muted"
                                  >{{$users[$i]->name}}</small
                                >
                              </a>
                            <div class="d-flex flex-column align-items-center">
                                {{-- <h1>{{$forum->title}}</h1> --}}
                                <p class="px-3">{{$item->description}}</p>
                                <div class="d-flex align-items-end">
                                    <small class="text-muted mx-3 ">Publicado: {{$item->created_at}}</small>
                                    <small class="text-muted mx-3">Modificado: {{$item->updated_at}}</small>
                                </div>
                            </div>
                            {{-- <p class="px-3">{{$item->description}}</p> --}}
                        </div>
               </div>
               @php   
               $i+=1
               @endphp
           @endforeach
       </div>
    </div>
@endsection