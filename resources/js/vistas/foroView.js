import {elementos} from './base';

export const dibujaCajaRespuesta = () => {
    //funcion que dibuja la caja de respuesta
    //la variable tendra codigo html
    const hijo = `<div id="hijoRespuesta"><form action="" method="POST">
                    <label for="description">Respuesta</label>
                    <textarea class="form-control" rows="5" id="description" placeholder="Escriba su respuesta a este foro" name="description"></textarea>
                    <button type="submit" class="btn btn-primary">Publicar</button>
                    <button type="button" class="btn bg-light" id="cancelarRespuesta">Cancelar</button>
                </form></div>`;
    //insertAdjacentHTML()
    elementos.cajaRespuesta.insertAdjacentHTML('afterbegin',hijo);
};

export const dibujarCajaEditar = () => {
    //funcion que dibuja la caja para editar el foro
    const hijo = `<div id="hijoEdicion" class="mb-4">
    <form action="">
      <label>Titulo</label>
      <input type="text" class="form-control mb-3" id="threadTitle" placeholder="Actualiza título del foro" autofocus="" required name="title"/>
      <label>Descripcion</label>
      <textarea
      class="form-control"
      rows="5"
      id="description"
      placeholder="Actualiza la contenido del foro"
      name="description"></textarea>
      <button type="submit" class="btn btn-primary">Actualizar</button>
      <button type="button" class="btn bg-light" id="cancelarEdicion">Cancelar</button>
    </form>
  </div>`;
    elementos.cajaEdicion.insertAdjacentHTML('afterbegin',hijo);
};

export const quitarCaja = (nombrePadre) => {
    //funcion que elimina todos los elementos que tienen que ver con la caja de respuesta
    let padre;
    let numHijos;
    if(nombrePadre === 'cancelarRespuesta'){
        padre = elementos.cajaRespuesta;
        numHijos = padre.childElementCount;
        if(numHijos === 1){
            padre.removeChild(padre.childNodes[0]);
        }else{
            console.log('Tiene mas hijos');
        }
    }else if(nombrePadre === 'cancelarEdicion'){
        padre = elementos.cajaEdicion;
        numHijos = padre.childElementCount;
        if(numHijos === 1){
            padre.removeChild(padre.childNodes[0]);
        }else{
            console.log('Tiene mas hijos');
        }
    }
};