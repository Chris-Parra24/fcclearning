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
  <div class="px-5 pb-3">
    <div class="card d-flex">
      <h5 class="card-header">Programación</h5>
      <div class="card-body">
        <!-- <h5 class="card-title">Tema</h5>
        <p class="card-text">Descripción.</p>
        <a href="#" class="btn btn-primary">Acceder</a> -->
        <ul class="list-gruop p-0 m-0 list-group-flush">
          <a href="#" class="list-group-item list-group-item-action"
            >First item</a
          >
          <a href="#" class="list-group-item list-group-item-action"
            >Second item</a
          >
          <a href="#" class="list-group-item list-group-item-action"
            >Third item</a
          >
        </ul>
      </div>
    </div>
  </div>
  <div class="px-5 pb-3">
    <div class="card d-flex">
      <h5 class="card-header">Matemáticas</h5>
      <div class="card-body">
        <!-- <h5 class="card-title">Tema</h5>
        <p class="card-text">Descripción.</p>
        <a href="#" class="btn btn-primary">Acceder</a> -->
        <ul class="list-gruop p-0 m-0 list-group-flush">
          <a href="#" class="list-group-item list-group-item-action"
            >First item</a
          >
          <a href="#" class="list-group-item list-group-item-action"
            >Second item</a
          >
          <a href="#" class="list-group-item list-group-item-action"
            >Third item</a
          >
        </ul>
      </div>
    </div>
  </div>
</section>
<!--FIN FORO-->
@endsection