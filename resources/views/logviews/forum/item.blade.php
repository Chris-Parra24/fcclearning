<x-app-layout>
    <div class="container">
        <!-- <section >
            <div class="p-5">
              <div class="row">
                <div class="col-sm-12 d-flex justify-content-between">
                  <h1 class="px-5">Foros</h2>
                  <div><a href="" class="btn bg-primary text-white">Crear foro</a></div>
                </div>
              </div>
            </div>
          </section> -->
        <x-boton-crear-foro/>
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
        
        <div id="cajaEdicion">
          
        </div>
        
        <div class="d-flex">
          <div class="text-end me-3"><button type="button" class="btn bg-primary text-white mb-4" id="responderForo">Responder a este foro</button></div>
          @if ($forum->user_id==auth()->user()->id)
            <div class="text-end"><button type="button" class="btn bg-primary text-white mb-4 " id="editarForo">Editar</button></div>
          @endif
        </div>
        
        <h4>Respuestas:</h4>
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

        <div id="cajaRespuesta">
          
        </div>
     </div>
     <x-modal-foro/>
</x-app-layout>