<x-app-layout>
    <div class="container">
        <div class="m-3">
            <form class="form" action="{{route('forumlog.store',auth()->user()->id)}}" method="POST" >
                @csrf
                <div class="d-flex border-1">
                  <h6 class="display-5 text-primary">
                    Nuevo foro
                  </h6>
                </div>
                <div class="m-3">
                  <div class="form-group">
                    <label for="threadTitle">Título</label>
                    <input
                      type="text"
                      class="form-control "
                      id="threadTitle"
                      name="title"
                      placeholder="Escribe título del foro"
                      autofocus=""
                      required
                    />
                    <label for="" class="">Categoria</label>
                    <select name="category" class="custom-select my-3">
                      <option selected value="Programación">Programación</option>
                      <option value="Matemáticas">Matemáticas</option>
                      <option value="Consejos">Consejos</option>
                      <option value="Bases de datos">Bases de datos</option>
                    </select>
                    <label for="comment">Descripción:</label>
                    <textarea
                      class="form-control"
                      rows="5"
                      id="decrip"
                      placeholder="Escriba el contenido del foro"
                      name="description"
                    ></textarea>
                  </div>
            
                </div>
                <div class="d-flex">
                  <a href="" class="btn">Cancelar</a>
                  <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
              </form>
        </div>
    </div>
</x-app-layout>