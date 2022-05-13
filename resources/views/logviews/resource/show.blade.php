    <!--FORO-->
    <section >
        <div class="p-5">
          <div class="row">
            <div class="col-sm-12 d-flex justify-content-center">
              <h1 >Documentos</h1>
            </div>
          </div>
  
           <!-- Inner sidebar header -->
          <div class="inner-sidebar-header justify-content-center p-3">
              <button class="btn btn-primary has-icon btn-block" type="button" data-toggle="modal" data-target="#threadModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-2">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                  NUEVO RECURSO
              </button>
          </div>
          <!-- /Inner sidebar header -->
  
          <div class="card d-flex mx-auto" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">Titulo 1</h2>
                <img src="img/libro.png" class="card-img-top" alt="Libro" />
                <br><br>
                <h5 class="card-title">Autor:</h5>
                <h5 class="card-title">Fecha de Publicación:</h5>
                <h5 class="card-title">Link del Documento:</h5>
            </div>
          </div> 
          <br><br> 
          
          <div class="card d-flex mx-auto" style="width: 18rem;">
            <div class="card-body align-items-center">
                <h2 class="card-title">Titulo 2</h2>
                <img src="img/libro.png" class="card-img-top" alt="Libro" />
                <br><br>
                <h5 class="card-title">Autor:</h5>
                <h5 class="card-title">Fecha de Publicación:</h5>
                <h5 class="card-title">Link del Documento:</h5>
            </div>
          </div>  
          <br><br>                
    
        <div class="card d-flex mx-auto" style="width: 18rem;">
          <div class="card-body align-items-center">
              <h2 class="card-title">Titulo 3</h2>
              <img src="img/libro.png" class="card-img-top" alt="Libro" />
              <br><br>
              <h5 class="card-title">Autor:</h5>
              <h5 class="card-title">Fecha de Publicación:</h5>
              <h5 class="card-title">Link del Documento:</h5>
          </div>
        </div>  
        
      </div>
      </section>
      <!-- New Thread Modal -->
      <div class="modal fade" id="threadModal" tabindex="-1" role="dialog" aria-labelledby="threadModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                        <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="threadTitle">Titulo</label>
                            <input type="text" class="form-control" id="threadTitle" autofocus="" required/>
                        </div>
                        <div class="form-group">
                            <label for="threadTitle">Imagen</label>
                            <input type="file" class="form-control" id="threadTitle" autofocus="" required/>
                        </div>                        
                        <div class="form-group">
                            <label for="threadTitle">Autor:</label>
                            <input type="text" class="form-control" id="threadTitle" autofocus="" required/>
                        </div>
                        <div class="form-group">
                            <label for="threadTitle">Fecha de Publicación</label>
                            <input type="text" class="form-control" id="threadTitle" autofocus="" required/>
                        </div>                                           
                        <div class="form-group">
                            <label for="threadTitle">Link del Documento</label>
                            <input type="text" class="form-control" id="threadTitle" autofocus="" required/>
                        </div>                             
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" >Publicar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>   