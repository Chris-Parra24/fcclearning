<div
class="modal fade"
id="threadModal"
tabindex="-1"
role="dialog"
aria-labelledby="threadModalLabel"
aria-hidden="true"
>
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
    <form action="{{route('forumlog.store',auth()->user()->id)}}" method="POST">
      @csrf
      <div
        class="modal-header d-flex align-items-center bg-primary text-white"
      >
        <h6 class="modal-title mb-0" id="threadModalLabel">
          Nuevo foro
        </h6>
        <button
          type="button"
          class="btn-close"
          data-dismiss="modal"
          aria-label="Close"
        >
          {{-- <span aria-hidden="true">×</span> --}}
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="title">Título</label>
          <input
            type="text"
            class="form-control mb-3"
            id="threadTitle"
            placeholder="Escribe título del foro"
            autofocus=""
            required
            name="title"
          />
          <label for="category" class="">Categoría</label>
          <select name="category" class="form-select mb-3">
            <option selected value="Programación">Programación</option>
            <option value="Matemáticas">Matemáticas</option>
            <option value="Consejos">Consejos</option>
            <option value="Bases de datos">Bases de datos</option>
          </select>
          <label for="description">Descripción:</label>
          <textarea
            class="form-control"
            rows="5"
            id="description"
            placeholder="Escriba el contenido del foro"
            name="description"
          ></textarea>

        </div>

      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-light"
          data-dismiss="modal"
        >
          Cancelar
        </button>
        <button type="submit" class="btn btn-primary">Publicar</button>
      </div>
    </form>
  </div>
</div>
</div>