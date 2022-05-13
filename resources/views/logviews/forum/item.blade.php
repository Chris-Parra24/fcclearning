<x-app-layout>
    <div class="container mt-3">
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
                         <p class="px-3">{{$forum->description}}</p>
                         <div class="d-flex">
                             <small class="text-muted mx-3 ">Publicado: {{$forum->created_at}}</small>
                             <small class="text-muted mx-3">Modificado: {{$forum->updated_at}}</small>
                         </div>
                     </div>
                 </div>
        </div>
        
        <div id="cajaEdicion" class="container  mb-3 p-0">
          <div id="hijoEdicion" class="border border-info shadow-lg rounded p-3 ms-2" >
            <form action="{{route('forumlog.update',$forum)}}" method="POST">
              @csrf
              @method('put')
              <label for="title">Título</label>
              <input type="text" value="{{$forum->title}}" class="form-control mb-3" id="threadTitle" placeholder="Actualiza título del foro" autofocus="" required name="title"/>
              <label>Descripción</label>
              <textarea
              class="form-control mb-3"
              rows="5"
              id="description"
              placeholder="Actualiza el contenido del foro"
              name="description">{{$forum->description}}</textarea>
              <button type="button" class="btn bg-light border" id="cancelarEdicion">Cancelar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
          </div>
        </div>
        
        
        <div class="d-flex">
          <div class="text-end me-3"><button type="button" class="btn bg-primary text-white mb-4" id="responderForo">Responder a este foro</button></div>
          @if ($forum->user_id==auth()->user()->id)
            <div class="text-end"><button type="button" class="btn bg-primary text-white mb-4 " id="editarForo">Editar</button></div>
          @endif
        </div>

        <div id="cajaRespuesta">
          <div id="hijoRespuesta" class="border border-info shadow-lg rounded p-3 ms-2" >
            <form action="{{route('forumlog.reply',[auth()->user()->id,$forum])}}" method="POST">
              @csrf
              <label>Respuesta:</label>
              <textarea
              class="form-control mb-3"
              rows="5"
              id="description"
              placeholder="Actualiza el contenido del foro"
              name="description"></textarea>
              <button type="button" class="btn bg-light border" id="cancelarRespuesta">Cancelar</button>
              <button type="submit" class="btn btn-primary">Responder</button>
            </form>
          </div>
        </div>
        @if (!empty($replies))
          <h4>Respuestas:</h4>                 
        @else
          <h4 class="text-muted">Foro sin respuestas</h4>
        @endif
        <div class="d-flex flex-column mb-3">
            @php
             $i=0;
            @endphp
            @foreach ($replies as $item)
                <div class="card mb-2">
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
                             <div class="d-flex flex-column align-items-start ps-3">
                                 <p class="px-3">{{$item->description}}</p>
                                 <div class="d-flex align-items-end">
                                     <small class="text-muted mx-3 ">Publicado: {{$item->created_at}}</small>
                                     <small class="text-muted mx-3">Modificado: {{$item->updated_at}}</small>
                                 </div>
                             </div>
                         </div>
                </div>
                @php   
                $i+=1
                @endphp
            @endforeach
        </div>

     </div>
     <x-modal-foro/>
</x-app-layout>