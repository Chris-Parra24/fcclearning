<x-app-layout>
   
    <div class="container">
        <x-boton-crear-foro/>
        <div class="my-3 border rounded p-3">
            <h1 class="">Foros sobre: <span class="text-primary">{{$forums[0]->category}}</span></h1>
        </div>
        @php
            $i=0;
        @endphp
        @foreach ($forums as $item)
         <div class="card my-2">
                 {{-- <div class="card-header"><h1>{{$forum->title}}</h1></div> --}}
                 <div class="card-header">
                     <h2><a class="text-decoration-none" href="{{route('forumlog.item',[$item->category,$item->id])}}">{{$item->title}}</a></h2>
                 </div>
                 <div class="card-body d-flex">
                     <a href="javascript:void(0)" class="card-link px-3 text-decoration-none">
                         <img
                           src="https://bootdey.com/img/Content/avatar/avatar1.png"
                           class="rounded-circle"
                           width="70"
                           alt="User"
                         />
                         <small class="d-block text-center text-muted "
                           > Por:</small
                         >
                         <small class="d-block text-center text-muted"
                           > {{$users[$i]->name}}</small
                         >
                       </a>
                     <div class="d-flex flex-column">
                         {{-- <h1>{{$forum->title}}</h1> --}}
                         <p class="px-3">{{$item->description}}</p>
                         <div class="d-flex">
                             <small class="text-muted mx-3 ">Publicado: {{$item->created_at}}</small>
                             <small class="text-muted mx-3">Modificado: {{$item->updated_at}}</small>
                         </div>
                     </div>
                 </div>
            </div>
            @php
            $i+=1;
        @endphp
        @endforeach
     </div>
    <x-modal-foro/>
</x-app-layout>