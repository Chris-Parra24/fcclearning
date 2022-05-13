<x-app-layout>
    <!--AYUDA-->
    <section >
        <div class="p-5">
          <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
              <h1 class="text-center">Centro de Ayuda</h1>
            </div>
            <div class="col-sm-12 d-flex justify-content-center p-3">
              <h2 class="text-center">Preguntas Frecuentes</h2>
            </div>
            <div class="col-sm-12 d-flex justify-content-center p-1">
              <a href="{{route('helplog.rules')}}">Reglas del foro</a>
            </div>
            <div class="col-sm-12 d-flex justify-content-center p-1">
              <a href="{{route('helplog.steps')}}">¿Cómo hacer una publicación en el foro?</a>
            </div>
            <div class="col-sm-12 d-flex justify-content-center p-1">
              <a href="#">¿Cómo subir un recurso?</a>
            </div>
          </div>
        </div>
      </section>
      <!--FIN AYUDA-->
</x-app-layout>