@extends('layouts.template')
@section('title', 'Foro')
@section('content')
 <!--FORO-->
 <section style="height: 100%">
  <div class="p-5">
    <div class="row">
      <div class="col-sm-12 d-flex justify-content-center">
        <h1 >Foros</h2>
      </div>
    </div>
  </div>
</section>
<section class="d-flex flex-column" style="height: 100%">
    @php
        $categorias=[];
    @endphp

    @foreach ($forums as $item)
    @php
      if(!in_array($item->category, $categorias))
        array_push($categorias,$item->category);        
    @endphp          
    @endforeach


    @foreach ($categorias as $category)
    <div class="px-5 pb-3">
      <div class="card d-flex">
        <h5 class="card-header"><a href="{{route('forum.show',$category)}}">{{$category}}</a></h5>
        <div class="card-body">
          <ul class="list-gruop p-0 m-0 list-group-flush">
              @foreach ($forums as $item)
                @if ($item->category==$category) 
                  <li class=""> {{$item->title}}</li>          
                @endif
              @endforeach
          </ul>
        </div>
      </div>
    </div>
    @endforeach    
</section>
<!--FIN FORO-->
@endsection