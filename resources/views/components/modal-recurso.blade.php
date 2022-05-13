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
    <form action="{{route('resources.store',auth()->user()->id)}}" method="POST"  enctype="multipart/form-data">
      @csrf
      <div
        class="modal-header d-flex align-items-center bg-primary text-white"
      >
        <h6 class="modal-title mb-0" id="threadModalLabel">
          Nuevo recurso
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
          <label for="name">Nombre del archivo</label>
          <input
            type="text"
            class="form-control mb-3"
            id="threadTitle"
            placeholder="Escribir un nombre para el archivo"
            autofocus=""
            required
            name="name"
          />
          <label for="category" class="">Categoría</label>
          <select name="category" class="form-select mb-3">
            <option selected value="Libros">Libros</option>
            <option value="Prácticas">Prácticas</option>
            <option value="Videos">Videos</option>
            <option value="Articulos">Articulos</option>
          </select>
          <label for="resource">Seleccionar Archivo:</label>
          <input type="file" name="resource" id="resource">
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