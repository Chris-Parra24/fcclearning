@extends('layouts.template')
@section('title', 'FCCLearning')
@section('content')
    <!--HOME-->
    <section style="height: 575px">
      <div class="p-5">
        <div class="row">
          <div class="col-sm-12 d-flex justify-content-center">
            <h1 class="text-center">FCCLearning!!</h1>
          </div>
          <div class="col-sm-12 d-flex justify-content-center">
            <h2 class="text-center">Complementa tu aprendizaje</h2>
          </div>
          <div class="col-sm-12 d-flex justify-content-center p-5">
            <!-- <button type="button" class="btn btn-outline-primary">
              Iniciar Sesión
            </button> -->
            <form class="d-flex">
              <input
                class="form-control me-2"
                type="text"
                placeholder="Search"
              />
              <button class="btn btn-primary" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--FIN HOME-->
@endsection
