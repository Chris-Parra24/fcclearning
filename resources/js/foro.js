import {elementos} from './vistas/base';
import * as foroView from './vistas/foroView';

elementos.buttonRespuesta.addEventListener('click', (e) => {
    // if(elementos.cajaRespuesta.childElementCount === 0){
    //     foroView.dibujaCajaRespuesta();
    // }
    if(elementos.cajaRespuesta.style.display=="block"){
        elementos.cajaRespuesta.style.display="none";
    }else{
        elementos.cajaRespuesta.style.display="block";
    }
});

if(elementos.buttonEdicion !== 'cadena'){
    elementos.buttonEdicion.addEventListener('click', (e) => {
        // if(elementos.cajaEdicion.childElementCount === 0){
        //     // foroView.dibujarCajaEditar();
        // }
        if(elementos.cajaEdicion.style.display=="block"){
            elementos.cajaEdicion.style.display="none";
        }else{
            elementos.cajaEdicion.style.display="block";
        }
    });
}


elementos.cajaRespuesta.addEventListener('click', (e) => {
    //si coincide en que sea el boton de cancelar respuesta
    //elimina el contenido
    // if(e.target.id === 'cancelarRespuesta'){
    //     foroView.quitarCaja(e.target.id);
    // }
    if(e.target.id === 'cancelarRespuesta'){
        elementos.cajaRespuesta.style.display="none";
    }

});

elementos.cajaEdicion.addEventListener('click', (e)=>{
    // if(e.target.id === 'cancelarEdicion'){
    //     foroView.quitarCaja(e.target.id);
    // }
    if(e.target.id === 'cancelarEdicion'){
        elementos.cajaEdicion.style.display="none";
    }
});

elementos.cajaEdicion.style.display="none";
elementos.cajaRespuesta.style.display="none";