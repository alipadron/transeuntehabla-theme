/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./wp-content/themes/transeunte-theme/js/scripts.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./wp-content/themes/transeunte-theme/js/scripts.js":
/*!**********************************************************!*\
  !*** ./wp-content/themes/transeunte-theme/js/scripts.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("new WOW().init();\n$(document).ready(function () {\n  var showBoton = false;\n  $('.ancla').click(function () {\n    var link = $(this);\n    var anchor = link.attr('href');\n    $('html, body').stop().animate({\n      scrollTop: jQuery(anchor).offset().top\n    }, 2000);\n    return false;\n  });\n  $('.show-boton').click(function (event) {\n    if (!showBoton) {\n      event.target.innerHTML = 'Ver menos';\n      showBoton = !showBoton;\n    } else {\n      event.target.innerHTML = 'Ver más';\n      showBoton = !showBoton;\n    }\n\n    $('.colapsable').slideToggle('slow');\n  }); // AJUSTES DE ALTURA DE LA PAGINA\n\n  var alto = $(window).height();\n  ajusteAltura();\n\n  function ajusteAltura() {\n    $('.seccion').css({\n      height: alto + 'px'\n    });\n    $('.seccionMin').css({\n      'min-height': alto + 'px'\n    });\n  } //  FUNCIONES DEL MENU\n\n\n  $('.botonMenu').click(function () {\n    $('.navegacion').fadeToggle('slow');\n    $('.navegacion').css({\n      display: 'flex'\n    });\n\n    if ($('body').hasClass('body-no-scroll')) {\n      $('body').removeClass('body-no-scroll');\n    } else {\n      $('body').addClass('body-no-scroll');\n    }\n  }); //  FUNCIONES DE LA SECCION PROYECTOS\n  // UNO\n  //show evento description\n\n  $('.evento').each(function (index, element) {\n    $(element).click(function () {\n      return $(element).find('.evento-content').slideToggle('slow');\n    });\n  });\n  $('.event-body-galery-fotos-img').click(function () {\n    $(this).addClass('openImg');\n    $('.closeBoton').fadeIn('slow');\n  });\n  $('.closeBoton').click(function () {\n    $(this).slideToggle('fast');\n    $('.event-body-galery-fotos-img').removeClass('openImg');\n  });\n});\ndocument.addEventListener('wpcf7mailsent', function (event) {\n  $('.wpcf7-response-output').addClass('botonAlert botonAlert-succ alert alert-success alert-dismissible fade show');\n}, false);\ndocument.addEventListener('wpcf7spam', function (event) {\n  $('.wpcf7-response-output').addClass('botonAlert botonAlert-succ alert alert-warning alert-dismissible fade show');\n}, false);\ndocument.addEventListener('wpcf7mailfailed', function (event) {\n  $('.wpcf7-response-output').addClass('botonAlert botonAlert-succ alert alert-warning alert-dismissible fade show');\n}, false);\ndocument.addEventListener('wpcf7invalid', function (event) {\n  $('.wpcf7-response-output').addClass('botonAlert botonAlert-succ alert alert-danger alert-dismissible fade show');\n}, false);\n\n//# sourceURL=webpack:///./wp-content/themes/transeunte-theme/js/scripts.js?");

/***/ })

/******/ });