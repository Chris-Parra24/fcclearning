import {elementos} from './base';

export const dibujaCajaRespuesta = () => {
    //funcion que dibuja la caja de respuesta
    //la variable tendra codigo html
    const hijo = `<div id="hijoRespuesta"></form></div>`;
    //insertAdjacentHTML()
    elementos.cajaRespuesta.insertAdjacentHTML('afterbegin',hijo);
};

export const dibujarCajaEditar = () => {
    //funcion que dibuja la caja para editar el foro
    const hijo = `<div id="hijoEdicion"></div>`;
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