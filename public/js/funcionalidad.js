/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/vistas/base.js":
/*!*************************************!*\
  !*** ./resources/js/vistas/base.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "elementos": () => (/* binding */ elementos)
/* harmony export */ });
var elementos = {
  buttonRespuesta: document.getElementById('responderForo'),
  buttonEdicion: document.getElementById('editarForo') !== null ? document.getElementById('editarForo') : 'cadena',
  cajaRespuesta: document.getElementById('cajaRespuesta'),
  hijoRespuesta: document.getElementById('hijoRespuesta'),
  cajaEdicion: document.getElementById('cajaEdicion')
};

/***/ }),

/***/ "./resources/js/vistas/foroView.js":
/*!*****************************************!*\
  !*** ./resources/js/vistas/foroView.js ***!
  \*****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "dibujaCajaRespuesta": () => (/* binding */ dibujaCajaRespuesta),
/* harmony export */   "dibujarCajaEditar": () => (/* binding */ dibujarCajaEditar),
/* harmony export */   "quitarCaja": () => (/* binding */ quitarCaja)
/* harmony export */ });
/* harmony import */ var _base__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./base */ "./resources/js/vistas/base.js");

var dibujaCajaRespuesta = function dibujaCajaRespuesta() {
  //funcion que dibuja la caja de respuesta
  //la variable tendra codigo html
  var hijo = "<div id=\"hijoRespuesta\"></form></div>"; //insertAdjacentHTML()

  _base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.insertAdjacentHTML('afterbegin', hijo);
};
var dibujarCajaEditar = function dibujarCajaEditar() {
  //funcion que dibuja la caja para editar el foro
  var hijo = "<div id=\"hijoEdicion\"></div>";
  _base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.insertAdjacentHTML('afterbegin', hijo);
};
var quitarCaja = function quitarCaja(nombrePadre) {
  //funcion que elimina todos los elementos que tienen que ver con la caja de respuesta
  var padre;
  var numHijos;

  if (nombrePadre === 'cancelarRespuesta') {
    padre = _base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta;
    numHijos = padre.childElementCount;

    if (numHijos === 1) {
      padre.removeChild(padre.childNodes[0]);
    } else {
      console.log('Tiene mas hijos');
    }
  } else if (nombrePadre === 'cancelarEdicion') {
    padre = _base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion;
    numHijos = padre.childElementCount;

    if (numHijos === 1) {
      padre.removeChild(padre.childNodes[0]);
    } else {
      console.log('Tiene mas hijos');
    }
  }
};

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!******************************!*\
  !*** ./resources/js/foro.js ***!
  \******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _vistas_base__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./vistas/base */ "./resources/js/vistas/base.js");
/* harmony import */ var _vistas_foroView__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./vistas/foroView */ "./resources/js/vistas/foroView.js");


_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.buttonRespuesta.addEventListener('click', function (e) {
  // if(elementos.cajaRespuesta.childElementCount === 0){
  //     foroView.dibujaCajaRespuesta();
  // }
  if (_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.style.display == "block") {
    _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.style.display = "none";
  } else {
    _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.style.display = "block";
  }
});

if (_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.buttonEdicion !== 'cadena') {
  _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.buttonEdicion.addEventListener('click', function (e) {
    // if(elementos.cajaEdicion.childElementCount === 0){
    //     // foroView.dibujarCajaEditar();
    // }
    if (_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.style.display == "block") {
      _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.style.display = "none";
    } else {
      _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.style.display = "block";
    }
  });
}

_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.addEventListener('click', function (e) {
  //si coincide en que sea el boton de cancelar respuesta
  //elimina el contenido
  // if(e.target.id === 'cancelarRespuesta'){
  //     foroView.quitarCaja(e.target.id);
  // }
  if (e.target.id === 'cancelarRespuesta') {
    _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.style.display = "none";
  }
});
_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.addEventListener('click', function (e) {
  // if(e.target.id === 'cancelarEdicion'){
  //     foroView.quitarCaja(e.target.id);
  // }
  if (e.target.id === 'cancelarEdicion') {
    _vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.style.display = "none";
  }
});
_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaEdicion.style.display = "none";
_vistas_base__WEBPACK_IMPORTED_MODULE_0__.elementos.cajaRespuesta.style.display = "none";
})();

/******/ })()
;